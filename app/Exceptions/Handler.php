<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use Illuminate\Database\Eloquent\ModelNotFoundException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        /**
        if ($request->expectsJson()) {
            if($exception instanceof ModelNotFoundException)
            {
                return response->Json(
                    [
                        'error'=>'product not found'
                    ],Response::HTTP_NOT_FOUND);
            }

            if($exception instanceof NotFoundHttpException)
            {
                return response->Json(
                    [
                        'error'=>'incorrect route'
                    ],Response::HTTP_NOT_FOUND);
            }
        }
        */
        return parent::render($request, $exception);
    }
}
