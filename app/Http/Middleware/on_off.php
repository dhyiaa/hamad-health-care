<?php
namespace App\Http\Middleware;
use Closure;
class on_off
{
    public function handle($request, Closure $next)
    {
        if ( \App\on_off::where('on_of' , '=' , 1)->count() < 1){
            return redirect()->route('error_off');
        }
        else{
            return $next($request);
        }
    }
}