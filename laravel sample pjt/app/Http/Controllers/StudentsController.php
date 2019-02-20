<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentsdetails=Students::all();
        return view('student.index',compact('studentsdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.students');
    }
     public function sample()
            
    {
        return view('welcome');
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=new Students([
            'rollno'=>$request->get('rollno'),
            'name'=>$request->get('name'),
            'address'=>$request->get('address'),
            'emailid'=>$request->get('emailid'),
            'contactno'=>$request->get('contactno')
            ]);
            $student->save();
            return redirect ('/student/create');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        return view('student.students');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $students=Students::find($id);
        return view('student.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student=Students::find($id);
        $student->rollno=$request->get('rollno');
        $student->name=$request->get('name');
        $student->address=$request->get('address');
        $student->emailid=$request->get('emailid');
        $student->contactno=$request->get('contactno');
        $student->save();
        return redirect('/student');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $student=Students::find($id);
       $student->delete();
       return redirect('/student');
    }
}
