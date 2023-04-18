<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller{
    public function create(){
        return view('addstudent');
    }
    public function store(Request $request){
        //add($request); 
        $student= new Student();
        $student->nom = $request['nom'];
        $student->prénom = $request['prénom'];
        $student->code = $request['code'];
        //dd($student);
        $student->save();
        $sesion()->fash("message","frlicitation");
    }
}