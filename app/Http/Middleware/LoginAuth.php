<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\User;
use Session;

class LoginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::find(Session::get('user_id'));
        if($user) {
            if($user->multiple_login == 1) {
                return $next($request);
            }
            else {
                if($user->session_id == Session::get('session_id')) {
                    return $next($request);
                }
                else {
                    Session::forget('user_id');
                    Session::forget('name');
                    Session::forget('email');
                    Session::forget('mobile');
                    Session::forget('session_id');
                    return redirect('login');
                }
            }
        }
        else {
            return redirect('login');
        }
    }
}
