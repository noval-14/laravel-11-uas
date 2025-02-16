<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Anhskohbo\NoCaptcha\Facades\NoCaptcha;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Menambahkan validasi captcha
        Validator::extendImplicit('captcha', function ($attribute, $value, $parameters, $validator) {
            return NoCaptcha::verifyResponse($value);
        });

        // Menentukan pesan error ketika captcha tidak valid
        Validator::replacer('captcha', function ($message, $attribute, $rule, $parameters) {
            return 'Captcha tidak valid, silakan coba lagi.';
        });
    }
}
