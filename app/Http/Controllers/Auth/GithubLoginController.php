<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;

class GithubLoginController extends LoginController
{
    /**
     * 사용자를 깃허브 인증 페이지로 전환
     *
     * @return Response
     */
    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * 깃허브에서 인증이 완료된 사용자 정보를 받아서 처리
     *
     * @return Response
     */
    public function handleGitHubCallback(Request $request)
    {
        try {
            $user = Socialite::driver('github')->user();
        } catch (Exception $e) {
            return redirect('auth/github');
        }
        $user = $this->findOrCreateUser($user);
        \Auth::login($user );
        $request->session()->put('github_id', $user->id); // 세션에 github_id 추가
        return redirect()->intended($this->redirectPath());
    }
    /**
     * 깃허브 인증에 성공한 후 받은 사용자 정보가 데이터베이스에 없을 경우 생성하고 있을 경우 가져옴
     *
     * @param $githubUser 깃허브에서 전달받은 사용자 정보
     * @return User
     */
    private function findOrCreateUser($githubUser)
    {
        if ($user = User::where('github_id', $githubUser->id)->first()) {
            return $user;
        }

        return User::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_id' => $githubUser->id,
        ]);
    }
}
