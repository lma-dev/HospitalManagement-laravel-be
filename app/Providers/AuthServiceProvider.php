<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Hospital;
use App\Models\Department;
use App\Policies\HospitalPolicy;
use App\Policies\DepartmentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Hospital::class => HospitalPolicy::class,
        Department::class => DepartmentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
