<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)){
            if ($exception->getStatusCode() == 404){
                return response()->view('error.404', [], 404);
            }
            if ($exception->getStatusCode() == 503)  {
                return response()->view('error.maintenance',[], 503);
            }
        }
        return parent::render($request, $exception);
    }
}
