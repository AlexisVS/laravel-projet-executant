<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Policies\BlogPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class => BlogPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('view-post', function () {
        //     return Auth::check()
        //     ? Response::allow()
        //     : Response::deny('Tu n\'as pas les droit suffisant pour réaliser cette action.');
        // });
        // Gate::define('create-post', function (User $user) {
        //     return $user->role_id === 3 || $user->role_id === 1
        //     ? Response::allow()
        //     : Response::deny('Tu n\'as pas les droit suffisant pour réaliser cette action.');
        // });
        // Gate::define('update-post', function (User $user, Post $post) {
        //     return $user->role_id === 3 && $post->user_id === $user->id || $user->role_id === 1
        //     ? Response::allow('wesh')
        //     : Response::deny('Tu n\'as pas les droit suffisant pour réaliser cette action.');
        // });
        // Gate::define('delete-post', function (User $user, Post $post) {
        //     return $user->role_id === 3 && $post->user_id === $user->id || $user->role_id === 1
        //     ? Response::allow()
        //     : Response::deny('Tu n\'as pas les droit suffisant pour réaliser cette action.');
        // });

    }
}
