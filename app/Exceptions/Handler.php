}
    }
        return parent::render($request, $exception);
    {
    public function render($request, Throwable $exception)
     */
     * @throws \Throwable
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @param  \Throwable  $exception
     * @param  \Illuminate\Http\Request  $request
     *
     * Render an exception into an HTTP response.
    /**

    }
        parent::report($exception);
    {
    public function report(Throwable $exception)
     */
     * @throws \Exception
     *
     * @return void
     * @param  \Throwable  $exception
     *
     * Report or log an exception.
    /**

    ];
        'password_confirmation',
        'password',
    protected $dontFlash = [
     */
     * @var array
     *
     * A list of the inputs that are never flashed for validation exceptions.
    /**

    ];
        //
    protected $dontReport = [
     */
     * @var array
     *
     * A list of the exception types that are not reported.
    /**
{
class Handler extends ExceptionHandler

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

namespace App\Exceptions;

<?php
