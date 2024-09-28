<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Home page
     *
     * @return Response|Application|Factory|View
     */
    public function index()
    {
        return view('admin.index');
    }
}
