<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use Spatie\Permission\Models\Permission;

class TestController extends Controller
{

    public function index(Employee $emp) {
        
        $permissions = Permission::pluck('id','id')->all();

        $data = $emp->with('companies')->get();

        return view('test.test', compact('data'));

    }
    public function create(Employee $emp) {

        $data = [
            'company_id' => 2,
            'name' => 'sample',
            'age' => 11,

        ];

        return "Success";
    }
}
