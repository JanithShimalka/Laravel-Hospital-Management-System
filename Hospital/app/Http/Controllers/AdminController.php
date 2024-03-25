<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addDoctorView(){

        return view('admin.addDoctor');
    }
    public function uploadDoctor(Request $request){
        $doctor = new doctor;
        $image = $request -> file;
        $imageName = time().'.'. $image->getClientoriginalExtension();
        $request -> file -> move('doctorimage',$imageName);

        $doctor->image =$imageName;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $doctor-> save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }
}
