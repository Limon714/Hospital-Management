<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_doctor_view()
    {
        return view('admin.add_doctor');
    }


    public function upload_doctor(Request $request)
    {
       $doctor = new Doctor();
       $img = $request->file;
       $imgName = time().'.'.$img->getClientOriginalExtension();
       $request->file->move('doctorImage',$imgName);
       $doctor->image =$imgName;

       $doctor->name = $request->name;
       $doctor->phone = $request->phone;
       $doctor->speciality = $request->speciality;
       $doctor->room = $request->room;

       $doctor->save();
       return redirect()->back()->with('message',$request->name .' Doctor added successfully' );
    }

    public function showappointment()
    {
        $appointment = Appointment::all();
        return view('admin.showappoint',compact('appointment'));
    }

    public function approve($id){
        $data = Appointment::find($id);
        $data->status = "Approved";
        $data->save();

        return redirect()->back();
    }




    public function cancel_appointment($id){
        $data = Appointment::find($id);
        $data->status = "Cancel";
        $data->save();

        return redirect()->back();
    }

    public function show_doctor_view(){
        $data = Doctor::all();
        return view('admin.showdoctor',compact('data'));
    }

    public function delete_doctor($id){
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

}
