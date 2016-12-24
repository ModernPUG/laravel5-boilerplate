<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => '관리자',
                'email' => 'admin@example.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => '사용자1',
                'email' => 'user1@myhost.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => '사용자2',
                'email' => 'user2@myhost.com',
                'password' => bcrypt('secret'),
            ],
        ];

        foreach($users as $u) {
            App\User::create($u);
        }
    }
}
