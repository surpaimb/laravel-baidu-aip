<?php

namespace Surpaimb\BaiduAip;

use Illuminate\Support\ServiceProvider;

class BaiduAipServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     */
    public function boot()
    {

    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/config.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('baiduaip.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('baiduaip');
        }
        $this->mergeConfigFrom($source, 'baiduaip');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->setupConfig();
        $this->app->singleton('AipNlp', function () {
            return new \Surpaimb\Baidu\Aip\AipNlp(config('baiduaip.appid'), config('baiduaip.appkey'), config('baiduaip.secretKey'));
        });
        $this->app->singleton('AipOcr', function () {
            return new \Surpaimb\Baidu\Aip\AipOcr(config('baiduaip.appid'), config('baiduaip.appkey'), config('baiduaip.secretKey'));
        });
    }
}