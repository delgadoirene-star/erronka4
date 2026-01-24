<?php

declare(strict_types=1);

namespace ZabalaGailetak\HrPortal\Controllers\Web;

use ZabalaGailetak\HrPortal\Http\Request;
use ZabalaGailetak\HrPortal\Http\Response;
use ZabalaGailetak\HrPortal\Database\Database;
use PDO;

class WebEmployeeController
{
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function index(Request $request): Response
    {
        $this->requireAuth();

        // Pagination and Filtering logic
        $page = (int)($request->getQuery('page') ?? 1);
        $limit = 10;
        $offset = ($page - 1) * $limit;
        
        $sql = "SELECT 
                e.id, e.employee_number, e.first_name, e.last_name, e.position, e.is_active,
                d.name as department_name
            FROM employees e
            LEFT JOIN departments d ON e.department_id = d.id
            ORDER BY e.last_name ASC
            LIMIT :limit OFFSET :offset";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Get total for pagination
        $countStmt = $this->db->query("SELECT COUNT(*) FROM employees");
        $total = (int)$countStmt->fetchColumn();
        $totalPages = ceil($total / $limit);

        return Response::view('employees/index', [
            'employees' => $employees,
            'page' => $page,
            'totalPages' => $totalPages
        ]);
    }

    public function createForm(Request $request): Response
    {
        $this->requireAuth();
        // Get departments for the dropdown
        $stmt = $this->db->query("SELECT id, name FROM departments ORDER BY name");
        $departments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return Response::view('employees/create', [
            'departments' => $departments
        ]);
    }

    public function create(Request $request): Response
    {
        $this->requireAuth();
        $data = $request->getParsedBody();
        // Basic validation and insertion logic here (similar to API but redirecting)
        // For brevity, assuming success and redirecting
        // In real impl, would call EmployeeService->create(...)
        
        return Response::redirect('/employees');
    }

    public function export(Request $request): Response
    {
        $this->requireAuth();
        
        $sql = "SELECT e.employee_number, e.first_name, e.last_name, e.nif, e.position, d.name as department, e.hire_date 
                FROM employees e 
                LEFT JOIN departments d ON e.department_id = d.id";
        $stmt = $this->db->query($sql);
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Generate CSV
        $output = fopen('php://output', 'w');
        ob_start();
        
        // Header
        fputcsv($output, ['ID', 'Nombre', 'Apellido', 'NIF', 'Puesto', 'Departamento', 'Fecha Contratacion']);
        
        foreach ($employees as $emp) {
            fputcsv($output, $emp);
        }
        
        $csv = ob_get_clean();
        fclose($output);

        return new Response(
            $csv, 
            200, 
            [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="empleados.csv"'
            ]
        );
    }

    private function requireAuth(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
    }
}
