<?php

namespace think\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package think\captcha\facade
 * @mixin \think\captcha\CaptchaApi
 */
class CaptchaApi extends Facade
{
    protected static function getFacadeClass()
    {
        return \think\captcha\CaptchaApi::class;
    }
}
