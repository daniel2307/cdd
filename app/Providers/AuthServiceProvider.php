<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate ;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        //con spatie => http://www.qcode.in/easy-roles-and-permissions-in-laravel-5-4/
        //https://styde.net/autorizacion-y-politicas-de-acceso-en-laravel-5-1/
        $gate->define('admin', function ($user) {
            return $user->type == 'admin';
        });
        $gate->define('user', function ($user) {
            return $user->type == 'user';
        });
    }
}
