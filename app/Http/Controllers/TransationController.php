<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Transation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransationController extends Controller
{
    public function addTransation(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'route_id' =>'required|integer',
            'rout_no'=>'required|integer',
            'total_amount'=>'required',
           
        ]);
        
        
        if($validator->fails()){
       
            echo json_encode(['errors'=>$validator->errors(),'status'=>404]);
       
        }else{
    
                $employeeData = Transation::create([
                    'route_id' => $request->route_id,
                    'rout_no' => $request->rout_no,
                    'total_amount' => $request->total_amount,  
                ]);
               
    
            if($employeeData){
       
                echo json_encode(['message'=>'Transation Details Add Sucessfully','status'=>200]);
       
            }else{
       
                echo json_encode(['message'=>'Transation Details Not Added' ,'status'=>404]);
       
            }
        }
    
       
     
    }

    public function getTransationDetails()
    {
    
          $details = Route::select("id","id as route_id","route_name","rout_no")
        
          ->with(['salesman_summary' => function ($query) {
            $query->select('id', 'route_id','total_amount', 'total_hour');
           }])
          ->get();

       $data=['data'=>['salesman'=>$details]];

       return response()->json($data);
            
        
    }
}
