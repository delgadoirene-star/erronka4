<?php

declare(strict_types=1);

namespace ZabalaGailetak\HrPortal\Middleware;

use ZabalaGailetak\HrPortal\Http\Request;
use ZabalaGailetak\HrPortal\Http\Response;

/**
 * Security Headers Middleware
 */
class SecurityHeadersMiddleware
{
    public function process(Request $request): ?Response
    {
        // Headers are applied in App.php when sending response
        // This middleware doesn't block the request
        return null;
    }
}
