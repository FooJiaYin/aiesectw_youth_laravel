<?php

namespace App\YouthSpeak\Core\Providers;

use Illuminate\Support\ServiceProvider;
// 輔助
use Route;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeGlobalVariable();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     *  組合頁面統一變數
     *
     *  @param      void
     *
     *  @return     void
     *
     *  @access     public
     *  @author     Abel      Abel@thenewslens.com
     *  @date       2016-05-18
     */
    public function composeGlobalVariable()
    {
        view()->composer('*', function($view){

            // 獲得 action
            list(, $action) = explode('@', Route::getCurrentRoute()->getActionName());

            $view->with('action', $action);

        });
    }
}
