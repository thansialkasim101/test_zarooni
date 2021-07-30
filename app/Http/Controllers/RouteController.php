<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RouteController extends Controller
{
    public function addRoute(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Employee_ID' => 'required|string',
            'route_name'=>'required|string',
            'rout_no'=>'required|integer',
          
        ]);
        
        
        if($validator->fails()){
       
            echo json_encode(['errors'=>$validator->errors(),'status'=>404]);
       
        }else{
    
                $routeData = Route::create([
                    'Employee_ID' => $request->Employee_ID,
                    'route_name' => $request->route_name,  
                    'rout_no' => $request->rout_no,  
                ]);

    
            if($routeData){
       
                echo json_encode(['message'=>'Route Details Add Sucessfully','status'=>200]);
       
            }else{
       
                echo json_encode(['message'=>'Route Details Not Added' ,'status'=>404]);
       
            }
        }
    }


}
