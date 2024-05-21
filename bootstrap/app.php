<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Router;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function(Router $router){
            $router->middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));
    
            $router->middleware('web')
            ->group(base_path('routes/web.php'));

            /* RUTAS DE ADMIN-HOME*/
            $router->middleware('web','auth')
            ->name('admin.')
            ->prefix('admin')
            ->group(base_path('routes/admin.php'));
            /* RUTAS DE DOCENTE-FILES*/
            $router->middleware('web','auth')
            ->name('file.')
            ->prefix('file')
            ->group(base_path('routes/file.php'));
            /* RUTAS DE ESTUDIANTE*/
            $router->middleware('web','auth')
            ->name('post.')
            ->prefix('post')
            ->group(base_path('routes/post.php'));
            /* RUTAS DE ESTUDIANTE*/
            $router->middleware('web','auth')
            ->name('estudiante.')
            ->prefix('estudiante')
            ->group(base_path('routes/estudiante.php'));
           }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
