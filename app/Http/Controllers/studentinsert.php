<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use DB;
use App\models\Student;

class studentinsert extends Controller
{
    public function insert_form(){
        return view ('insert_form');
    }
    public function insert(request $request){
        // $request->all();
        // $data =$request->only(['name','age','email','mobile','address']);
        // Student::create($data);

        $name=$request->input('student_name');
        $age=$request->input('student_age');
        $email=$request->input('student_email');
        $mobile=$request->input('student_mobile');
        $address=$request->input('student_address');


        // DB::insert("insert into students(name,age,email,mobile,address) values(?,?,?,?,?)",[$name,$age,$email,$mobile,$address]);
        // return "success";
        $user =new Student;
        $user->name =$name;
        $user->age=$age;
        $user->email=$email;
        $user->mobile=$mobile;
        $user->address=$address;

        $user->save();

        return "success fully created";





    }
    public function list(){
        $users = Student::all();
        return view('list_user',['users'=>$users]);

    }

}
