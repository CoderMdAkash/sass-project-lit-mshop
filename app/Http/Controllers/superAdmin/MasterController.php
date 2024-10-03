<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class MasterController extends Controller
{
    public function index(){
        
        $data['module_url'] = 'super-admin';
        $data['opening_url'] = 'dashboard';

        return view('superAdmin.master', $data);
    }
}
