<?php

declare(strict_types=1);

namespace ZabalaGailetak\HrPortal\Controllers\Web;

use ZabalaGailetak\HrPortal\Http\Request;
use ZabalaGailetak\HrPortal\Http\Response;

class WebDashboardController
{
    public function index(Request $request): Response
    {
        $this->requireAuth();
        return Response::view('dashboard/index', [
            'user' => $_SESSION['user_name'] ?? 'Usuario'
        ]);
    }

    public function employees(Request $request): Response
    {
        $this->requireAuth();
        // In a real app, fetch employees from DB here
        return Response::view('employees/index');
    }

    public function vacations(Request $request): Response
    {
        $this->requireAuth();
        return Response::view('vacations/index');
    }

    private function requireAuth(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
    }
}
