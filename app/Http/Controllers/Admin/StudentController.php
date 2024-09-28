<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
Use App\Models\Student;

class StudentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.student.index');
    }

    /**
     * Get all user for listing
     *
     * @param Request $request
     */
    public function getData(Request $request)
    {
        $query = Student::query();

        $students = $query->select('id', 'first_name', 'last_name', 'email', 'status', 'profile');

        $students = $students->get();

        return Datatables::of($students)
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
               
                    $actions .= '<a href="javascript:;" data-url="' . route('students.show', $data->id) . '" class="btn btn-link btn-success modal-popup-view"><i class="fa fa-eye"></i></a>';
                    $actions .= '<a href="' . route('students.edit', $data->id) . '" class="btn btn-link btn-primary btn-lg"><i class="fa fa-edit"></i></a>';
                    $actions .= '<a href="javascript:;" data-url="' . route('students.destroy', $data->id) . '" class="btn btn-link btn-danger modal-popup-delete"><i class="fa fa-times"></i></a>';
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
        return view('admin.student.create_update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StudentRequest $request
     *
     * @return Response
     */
    public function store(StudentRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('profile')) {
            $imageName = uploadFileToFolder($request->file('profile'), 'students');
            $data['profile'] = $imageName;
        }

        $data['status'] = $request->status ? 1 : 0;
        $student =  Student::create($data);
        if ($student) {
            Session::flash('success', 'students created successfully');
            return redirect()->route('students.index');
        } else {
            Session::flash('error', 'Unable to add user');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     *
     * @return Response
     */
    public function show(Student $student)
    {
        $data  = [
            'Name'           =>  $student->first_name . ' ' . $student->last_name,
            'Email'          =>  $student->email,
            'Status'         =>  $student->is_active == 1 ? 'Active' : 'Inactive',
        ];
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     *
     * @return Response
     */
    public function edit(Student $student)
    {
        return view('admin.student.create_update', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateStudentRequest $request
     * @param Student $student
     *
     * @return Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $data = $request->all();
        $removeUserImage = false;
        if ($request->file('profile')) {
            $imageName = uploadFileToFolder($request->file('profile'), 'students');
            $data['profile'] = $imageName;
            $removeUserImage = true;
        }
        if ($removeUserImage && !empty($user->profile)) {
            removeFile($user->profile);
        }

        $data['status'] = $request->status ? 1 : 0;

        if ($student->update($data)) {
            Session::flash('success', 'Student updated successfully');
            return redirect()->route('students.index');
        } else {
            Session::flash('error', 'Unable to update student');
            return redirect()->back();
        }
    }

    /**
     * Delete Student
     *
     * @param Student $student
     *
     * @return Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
    }
}
