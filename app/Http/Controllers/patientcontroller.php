<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Carbon;
class patientcontroller extends Controller
{
    public function insert ( request $request){
        $patient =new patient;
        $patient->name= $request->name;
        $patient->age= $request->age;
        $patient->created_at= Carbon::now();
        $patient->updated_at=Carbon::now();
        $patient->save();

        return response()->json([
            'message'=>'student created successfully',
            'patient'=> $patient,
            'status'=>200,
        ]);




    }
    public function update(request $request)
    {
        $patient=Patient::find($request->id);
        $patient->name=$request->name;
        $patient->age= $request->age;
        $patient->save();
        return['updated succes'];


    }
    public function search($name){
        return Patient::where ('name',$name)->get();
    }
    public function delete($id){
        $patient= Patient::find($id);
        $patient->delete();
        return ['deleted success'];
    }

}
