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
                    $taskImage =$request->file('task_image');
                    
                    if($taskImage){
                        $dir = storage_path ('app/public');
                        $taskImage->move($dir, $taskImage->getClientOriginalName());
                        }
                        
                    $returnValue = DB::insert('insert into todo (name, image) values (?, ?)', 
                    [$taskName,$taskImage->getClientOriginalName()]);
                
                    if($returnValue){
                        $data =[
                            'success' => 1
                        ];  
                    }
                    
                }
                return view ('task/add', $data);
            }

    function edit($task_id, Request $request){
        $tasks = DB::select('Select * from todo where id=?', [$task_id]);
                
        $task = reset($tasks);
                
        $success= false;
        
                if($request->isMethod('post')){
                    $taskName = $request->input('task_name');
                    
                    $returnValue = DB::update('update todo set name=? where id=?', 
                    [$taskName, $task_id]);
        
                    if($returnValue){
                        $success = true;
                    }
                }
        
                $data = [
                    'task'=>$task,
                    'success'=>$success
                ];
        
                return view ('task/edit', $data);
            }
            function delete(Request $request){
                $taskId = $request->input('task_id');
        
                $returnValue = DB::delete('DELETE from todo WHERE id=?', [$taskId]);
        
                if($returnValue){
                    return redirect('/task');
                }else {
                    return "Error";
                }
            }


    }