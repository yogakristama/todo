<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller {
    function index(){
        $task = DB::select("Select * from TODO");
        $data = [
            'task' => $task
        ];
        return view ('task/index', $data);
    }
    
    function add(Request $request){
        
                $data = [
                    'success'=> false
                ];
                
                if ($request->isMethod('post')){
                    $taskName = $request->input('task_name');
                    
                    $returnValue = DB::insert('insert into todo (name) values (?)', 
                    [$taskName]);
                
                    if($returnValue){
                        $data =[
                            'success' => 1
                        ];  
                    }
                    
                }
                return view ('task/add', $data);
            }
        }