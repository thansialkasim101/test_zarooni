<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function employeeRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'FirstName' =>'required|string|max:255',
            'LaststName'=>'required|string|max:255',
           
        ]);
        
        
        if($validator->fails()){
       
            echo json_encode(['errors'=>$validator->errors(),'status'=>404]);
       
        }else{
    
                $employeeData = Employee::create([
                    'FirstName' => $request->FirstName,
                    'LaststName' => $request->LaststName,  
                ]);
               
    
            if($employeeData){
       
                echo json_encode(['message'=>'Employee Details Add Sucessfully','status'=>200]);
       
            }else{
       
                echo json_encode(['message'=>'Employee Details Not Added' ,'status'=>404]);
       
            }
        }
     
    }

    public function getEmpolyeeDetails()
    {
        
      $details = DB::table('Employee')->select('id','FirstName as Name',DB::raw('CONCAT(FirstName, " ", LaststName) AS FullName'),'FirstName','LaststName')->get();
        
         $details=['data'=>$details];
         return response()->json($details);
    }

}
