<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.user.index');
    }

    /**
     * Get all user for listing
     *
     * @param Request $request
     */
    public function getData(Request $request)
    {
        $query = User::query();

        $users = $query->select('id', 'first_name', 'last_name', 'email', 'is_active', 'profile','role');

        $users = $users->get();

        return Datatables::of($users)
            ->addIndexColumn()
            ->addColumn('role', function ($data) {
                return $data->getRoleNames()->first();
            })
            ->editColumn('is_active', function ($data) {
                if ($data->is_active == 1) {
                    return '<div class="badge rounded-pill bg-soft-success text-primary">Active</div>';
                } else {
                    return '<div class="badge rounded-pill bg-soft-warning text-warning">Inactive</div>';
                }
            })
            ->addColumn('profile', function ($data) {
                if (isset($data->profile) ) {
                    $url = getUrl($data->profile);
                } else {
                    $url = '';
                }
                return '<img src="' . $url . '"  class="rounded-circle w-10 h-10 object-cover" style="height: 2.5rem !important;" />';
            })
            ->editColumn('name', function ($data) {
                return $data->first_name . ' ' . $data->last_name;
            })
            ->addColumn('action', function ($data) {
                $actions = '';
               
                    $actions .= '<a href="javascript:;" data-url="' . route('users.show', $data->id) . '" class="btn btn-link btn-success modal-popup-view"><i class="fa fa-eye"></i></a>';
                    $actions .= '<a href="' . route('users.edit', $data->id) . '" class="btn btn-link btn-primary btn-lg"><i class="fa fa-edit"></i></a>';
                    $actions .= '<a href="javascript:;" data-url="' . route('users.destroy', $data->id) . '" class="btn btn-link btn-danger modal-popup-delete"><i class="fa fa-times"></i></a>';
                return $actions;
            })
            ->rawColumns(['action', 'role', 'is_active', 'profile'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.user.create_update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     *
     * @return Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        if (request()->has('password')) {
            $data['password'] = Hash::make($data['password']);
        }
        if ($request->hasFile('profile')) {
            $imageName = uploadFileToFolder($request->file('profile'), 'users');
            $data['profile'] = $imageName;
        }

        $data['is_active'] = $request->is_active ? 1 : 0;
        $user =  User::create($data);
        if ($user) {
            Session::flash('success', 'Users created successfully');
            return redirect()->route('users.index');
        } else {
            Session::flash('error', 'Unable to add user');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     *
     * @return Response
     */
    public function show(User $user)
    {
        $data  = [
            'Name'           =>  $user->first_name . ' ' . $user->last_name,
            'Email'          =>  $user->email,
            'Status'         =>  $user->is_active == 1 ? 'Active' : 'Inactive',
        ];
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     *
     * @return Response
     */
    public function edit(User $user)
    {
        return view('admin.user.create_update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     *
     * @return Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->all();
        $removeUserImage = false;
        if ($request->file('profile')) {
            $imageName = uploadFileToFolder($request->file('profile'), 'users');
            $data['profile'] = $imageName;
            $removeUserImage = true;
        }
        if ($removeUserImage && !empty($user->profile)) {
            removeFile($user->profile);
        }

        $data['is_active'] = $request->is_active ? 1 : 0;

        if ($user->update($data)) {
            Session::flash('success', 'User updated successfully');
            return redirect()->route('users.index');
        } else {
            Session::flash('error', 'Unable to update user');
            return redirect()->back();
        }
    }

    /**
     * Delete User
     *
     * @param User $user
     *
     * @return Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}
