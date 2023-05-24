<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
   
    //List Function
    public function list(){
        $students = StudentModel::all();
        return view('/list',['students' => $students]);
        }


    public function welcome()
    {
        return view('welcome');
    }
 
    public function about()
    {
        return view('about');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    
    public function save(Request $request){
        $first_name = $request->input()['first_name'];
        $middle_name = $request->input()['middle_name'];
        $last_name = $request->input()['last_name'];
        $date_of_birth = $request->input()['date_of_birth'];
        $address = $request->input()['address'];

        $student = new StudentModel;
        $student['first_name'] = $first_name;
        $student['middle_name'] = $middle_name;
        $student['last_name'] = $last_name;
        $student['date_of_birth'] = $date_of_birth;
        $student['address'] = $address;
        $student->save();

        
        return redirect(route('list'))->with('status', 'Successfully Register');
    } 
    
    //Edit Function

    public function edit(Request $request, $id){
        $students = StudentModel::find($id);
       $response =['students' => $students];

       return view('edit-students', $response);
    }


    public function saveUpdate(Request $request, $id){
        $data = [
            'first_name' => $request->input()['first_name'],
            'middle_name' => $request->input()['middle_name'],
            'last_name' => $request->input()['last_name'],
            'date_of_birth' => $request->input()['date_of_birth'],
            'address' => $request->input()['address']

        ];
        $updated_user = StudentModel::where('id', $id)->update($data);
        return redirect(route('list'))->with('status', 'Successfully Updated');

    }

    //Delete Function
    public function delete($id) {
        $students = StudentModel::find($id);
        $students->delete();
        return redirect(route('list'))->with('status','Successfully Deleted');
    }
}


