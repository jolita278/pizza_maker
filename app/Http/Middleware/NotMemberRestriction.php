<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Cache;

class NotMemberRestriction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {



        if (in_array('member', auth()->user()->rolesConnectionData()->pluck('id')->toArray())){
            return $next($request);
        }
       /* $res = array_intersect(['member','super-admin'],  auth()->user()->rolesConnectionData()->pluck('id')->toArray());
        dd($res);
       pluck('name'));
       */
    }
}
