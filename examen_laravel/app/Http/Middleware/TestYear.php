<?php

namespace App\Http\Middleware;

use Closure;

class TestYear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // REALIZA FUNCIONALIDAD DE Middeleware
    // SIRVE PARA COMPROBAR QUE LAS VARIABLES QUE LLEGAN O TENGAN UN VALOR VALIDO
    public function handle($request, Closure $next)
    {
        $year = $request->route('year');

        if(is_null($year) || $year != 2019){
            return redirect('/peliculas');
        }

        return $next($request);
        // return $next($request);
    }
}
