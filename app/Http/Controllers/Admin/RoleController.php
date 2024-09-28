<?php

namespace App\Http\Controllers\Admin;

use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Session;
use DB;

class RolesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return view('admin.roles.index');
    }

    /**
     * Get all roles for listing
     *
     * @param Request $request
     */
    public function getData(Request $request)
    {
        $search = $request->input('search');
        $query = Role::query();
        if (!empty($search)) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        $datatable = $query->get();

        return Datatables::of($datatable)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                $actions = '';
                $actions .= '<a href="' . route('roles.edit', $data->id) . '" class="btn btn-link btn-primary btn-lg"><i class="fa fa-edit"></i></a>';
                $actions .= '<a href="javascript:;" data-url="' . route('roles.destroy', $data->id) . '" class="btn btn-link btn-danger modal-popup-delete" data-modal-delete-text="Are you sure you want to delete this role?"><i class="fa fa-times"></i></a>';
                return $actions;
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $permission = [];
        $rolePermissions = [];
        return view('admin.roles.create_update', compact('permission', 'rolePermissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->get('name'), 'guard_name' => 'web']);
        $role->syncPermissions([$request->get('permission')]);

        Session::flash('success', 'Role created successfully');
        return redirect()->route('roles.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return Response
     */
    public function edit(Role $role)
    {
        $permission = Permission::get();

        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $role->id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('admin.roles.create_update', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Role $role
     * @return Response
     */
    public function update(Role $role, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role->update([$request->only('name'), 'guard_name' => 'web']);

        $role->syncPermissions($request->get('permission'));

        Session::flash('success', 'Role updated successfully');
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
    }
}
