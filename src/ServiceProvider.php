<?php

namespace zacksleo\laravel\yii;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/yii'),
        ], 'public');
        //$this->loadTranslationsFrom(__DIR__ . '/messages', 'app');
        $this->publishes([
            __DIR__ . '/messages' => resource_path('lang'),
        ]);
    }
}
