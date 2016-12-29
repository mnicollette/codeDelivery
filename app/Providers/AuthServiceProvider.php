<?php

namespace CodeDelivery\Providers;

use Illuminate\Support\Facades\Route;
use CodeDelivery\Models\Role;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'CodeDelivery\Model' => 'CodeDelivery\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);


        $gate->define('auth', function ($user, $role=NULL){
//dd('ops');
            if($role===NULL){

                //dd(Route::current()->getAction());

                $actions = Route::current()->getAction();

                //dd($actions);

                if(! isset($actions['role']))
                    return false;

                $role = $actions['role'];
            }
            
            $objRole = new Role();

            $roles = $objRole->roles($user->id);

            //dd($roles);

            //dd(in_array($role, $roles));

            if(in_array($role, $roles)){
                //dd('1');
                return true;
            }else{
                //dd('2');
                return false;
            }


        });

        //
    }
}
