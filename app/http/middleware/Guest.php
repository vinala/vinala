<?php

namespace App\Http\Middleware;

use Vinala\Kernel\Authentication\Auth;
use Vinala\Kernel\Http\Request;

/**
 * Guest Middleware.
 *
 * @version 1.0
 *
 * @author Youssef Had
 *
 * @since v3.3.0
 */
class Guest
{
    /**
     * The path to return if user not logged in.
     *
     * @return string
     */
    private function login()
    {
        // Redirect to the index route
        return '@/';
    }

    /**
     * Handle the middleware.
     *
     * @param Vinala\Kernel\Http\Request $req
     *
     * @return bool|string
     **/
    public function handle(Request $req)
    {
        if (Auth::guest()) {
            redirect($this->login());
        } else {
            return pass();
        }
    }
}
