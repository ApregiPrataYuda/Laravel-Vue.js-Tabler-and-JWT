<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\JWTException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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

    /**
     * Custom response untuk unauthenticated.
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return response()->json([
            'success' => false,
            'message' => 'Unauthorized, silakan login untuk mendapatkan token.'
        ], 401);
    }

    /**
     * Custom render untuk JWT.
     */
    public function render($request, Throwable $exception)
    {
        // Token expired
        if ($exception instanceof TokenExpiredException) {
            return response()->json([
                'success' => false,
                'message' => 'Token sudah kadaluarsa, silakan login ulang.'
            ], 401);
        }

        // Token tidak valid
        if ($exception instanceof TokenInvalidException) {
            return response()->json([
                'success' => false,
                'message' => 'Token tidak valid.'
            ], 401);
        }

        // Token tidak ada
        if ($exception instanceof JWTException) {
            return response()->json([
                'success' => false,
                'message' => 'Token tidak ditemukan, silakan sertakan token.'
            ], 401);
        }

        return parent::render($request, $exception);
            \Log::error($exception);
    }


}
