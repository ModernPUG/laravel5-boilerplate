# Laravel 5 Boiler Plate

라라벨 5 보일러 플레이트 프로젝트입니다.



## Slack 채널

예제는 [https://laravel5-boilerplate.modernpug.org](https://laravel5-boilerplate.modernpug.org) 에서 확인하실 수 있고 관련 슬랙 채널은 [ModernPUG 슬랙](https://modernpug.slack.com/archives/laravel-boiler-plate) 입니다.



## 구성

프로젝트 구성입니다.

### debugging 패키지

디버깅용 패키지는 production 일때는 동작하지 않게 설정되었습니다.

#### ide-helper

[https://github.com/barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) 가 포함되어 있으며 IDE 용 헬퍼 파일은 아래 명령어로 수동으로 생성할 수 있습니다.

```sh
php artisan ide-helper:generate
php artisan ide-helper:meta
```

위 명령어는 *composer update* 실행시에도 자동으로 실행됩니다.

#### debugbar

[laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) 가 설치되어 있습니다.



## 참고 자료

- [https://github.com/rappasoft/laravel-5-boilerplate]([https://github.com/rappasoft/laravel-5-boilerplate)- 라라벨 5 보일러 플레이트 프로젝트
- [awmsome-laravel](https://github.com/chiraggude/awesome-laravel) 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).