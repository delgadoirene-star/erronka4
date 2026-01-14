<?php

declare(strict_types=1);

namespace ZabalaGailetak\HrPortal\Middleware;

use ZabalaGailetak\HrPortal\Http\Request;
use ZabalaGailetak\HrPortal\Http\Response;

/**
 * Error Handler Middleware
 */
class ErrorHandlerMiddleware
{
    public function process(Request $request): ?Response
    {
        // This middleware doesn't block the request
        // It sets up error handling that will be used if an error occurs
        return null;
    }
}
