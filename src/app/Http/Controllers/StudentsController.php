<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('students.data')->with([
            'students' => Students::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request)
    {
        //
        $validate = $request->validated();

        $students = new Students;
        $students->idstudents = $request->txtid;
        $students->fullname = $request->txtfullname;
        $students->address = $request->txtaddress;
        $students->phone = $request->txtphone;
        $students->gender = $request->txtgender;
        $students->save();

        return redirect('students')->with('msg', 'New Student has been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students, $idstudents)
    {
        // Update Data
        $data = $students->find($idstudents);
        // echo $data->address;
        return view('students.formedit')->with([
            'txtid'         => $idstudents,
            'txtfullname'   => $data->fullname,
            'txtgender'     => $data->gender,
            'txtaddress'    => $data->address,
            'txtphone'      => $data->phone,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students, $idstudents)
    {
        //
        $data = $students->find($idstudents);
        $data->fullname = $request->txtfullname;
        $data->address = $request->txtaddress;
        $data->phone = $request->txtphone;
        $data->gender = $request->txtgender;
        $data->save();

        return redirect('students')->with('msg', 'Data Student '.$data->fullname.' has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students,$idstudents)
    {
        //
        $data = $students->find($idstudents);
        $data->delete();

        return redirect('students')->with('msg', 'Data Student '.$data->fullname.' has been Deleted!');
    }
}
