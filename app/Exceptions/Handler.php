<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @throws \Exception
     *
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @throws \Throwable
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            $msg = $exception->getMessage() ?: 'Resource not found.';

            return response()->json(['errors' => ['resource_not_found' => [$msg]]], 404);
        } elseif ($exception instanceof AuthorizationException) {
            $msg = $exception->getMessage() ?: 'Forbidden.';

            return response()->json(['errors' => ['forbidden' => [$msg]]], 403);
        } elseif ($exception instanceof MethodNotAllowedHttpException) {
            return response()->json(['errors' => ['method_not_allowed' => ['Method not allowed.']]], 405);
        } elseif ($exception instanceof HttpException) {
            if ($exception->getStatusCode() == 403) {
                $msg = $exception->getMessage() ?: 'Forbidden.';

                return response()->json(['errors' => ['forbidden' => [$msg]]], 403);
            }
        }

        return parent::render($request, $exception);
    }
}
