<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use domain\Facades\StudentFacade;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class StudentController extends ParentController
{


    public function index()
    {
        return Inertia::render('StudentList/index', [
            'students' => StudentFacade::all()->map(function ($student) {
                return [
                    'id' => $student->id,
                    'name' => $student->name,
                    'age' => $student->age,
                    'image' => asset('storage/'.$student->image),
                    'status' => $student->status,
                ];
            }),
          ]);
    }


    public function store(Request $request)
    {
        Student::create([
          'name' => $request->name,
          'age' => $request->age,
          'image'=> $request->image->store('public'),
        ]);

        return redirect()->route('studentList');
    }


    public function delete($student_id)
    {
        return StudentFacade::delete($student_id);
    }



    public function statusUpdate($student_id)
    {

        StudentFacade::statusUpdate($student_id);
        return back()->withInput();

    }

    public function get($student_id)
    {
        $student = StudentFacade::get($student_id);
        return response()->json($student);

    }

    public function getall($student_id)
    {
        $student = StudentFacade::all();
        return response()->json($student);

    }


    public function edit(Request $request)
    {
        $response ['students'] = StudentFacade::get($request['student_id']);

        return view ('pages.studentList.edit')->with($response);
    }

    public function update(Request $request,$student_id)
    {
        StudentFacade::update($request->all (),$student_id);
        return reload();

    }

}
