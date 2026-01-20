<?php

namespace App\Helpers;

class RoleBasedRedirectHelper
{
    protected $user;
    public function __construct($user)
    {
        $this->user = $user;
    }


    public static  function getDashboardRoute($user): string
    {


        // Check for admin role
        if ($user->hasAnyRole('admin')) {
            return '/admin/dashboard';
        }

        if ($user->hasAnyRole('receptionist')) {
            return '/receptionist/dashboard';
        }
        if ($user->hasAnyRole('nurse')) {
            return '/staff/dashboard';
        }
        if ($user->hasAnyRole('pathologist')) {
            return '/pathologist/dashboard';
        }

        if ($user->hasAnyRole('doctor')) {

            return '/doctor/dashboard';
        }

        if ($user->hasAnyRole('storesclerk')) {

            return '/storesclerk/dashboard';
        }

        if ($user->hasAnyRole('cashier')) {
            return '/external/cashier';
        }

        // Default fallback
        return '/';
    }
}
