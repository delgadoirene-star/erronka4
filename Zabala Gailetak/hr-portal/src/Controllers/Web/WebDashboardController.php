<?php

declare(strict_types=1);

namespace ZabalaGailetak\HrPortal\Controllers\Web;

use ZabalaGailetak\HrPortal\Http\Request;
use ZabalaGailetak\HrPortal\Http\Response;

class WebDashboardController
{
    public function index(Request $request): Response
    {
        // Simple Auth Check (Middleware pattern recommended for future)
        if (!isset($_SESSION['user_id'])) {
            return Response::redirect('/login');
        }

        return Response::view('dashboard/index', [
            'user' => $_SESSION['user_name']
        ]);
    }
}
