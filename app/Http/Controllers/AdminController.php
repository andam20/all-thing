<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Costs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Subjects;

class AdminController extends Controller
{


    public function create(Subjects $subjecting){
         return view('admin.subjects'
         ,['subjecting'=>$subjecting] 
    );
    }  
    
    public function showdetail(Subjects $subjects){
          return view('teacher.nameStudents',['subjects'=>$subjects ]);
       
       // return view('teacher.nameStudents',['subjects'=>auth()->user()->Subjects()->get()]); 
    }


    public function store(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'teacherName'=>'required',
            'nameStudents'=>'required',
            'stage'=>'required',
            'group'=>'required',
            'faculty'=>'required',
            'department'=>'required', 
         ]);
        $formFields['subject_id']=auth()->id(); 
         Subjects::create(
             $formFields 
         );
         return redirect()->back()->with('message','the subject and his teacher are added successfully!');
     }


     //manage
     public function manage(Subjects $subjecting){
        return view('admin.manage',['subjects'=>auth()->user()->subjects()->get()]); 
    }


      //manage
      public function manageSub(Subjects $subjecting){
        $subjects=DB::table('subjects')->get();
         return view('teacher.teacher',compact('subjects')); 
    }

    public function adminhome(){
         //if someone wants to login via a link to the admin we need those two conditions 
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $users=User::all();
                $data=DB::table('users')->get();
                     return view('admin.home',compact('users','data'));
                }
                else{
                    return redirect()->back();
                }
            }
            else{
                return redirect('login');
            }
    }

    public function cards(){
        //if someone wants to login via a link to the admin we need those two conditions 
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $users=User::all();
                return view('admin.cards',compact('users'));
                }
                else{
                    return redirect()->back();
                }
            }
            else{
                return redirect('login');
            }
    }


    public function charts(){
        //if someone wants to login via a link to the admin we need those two conditions 
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $users=User::all();
                 return view('admin.charts',compact('users'));
                }
                else{
                    return redirect()->back();
                }
            }
            else{
                return redirect('login');
            }
    }

    public function tables(){
        //if someone wants to login via a link to the admin we need those two conditions 
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $users=User::all();
                return view('admin.tables',compact('users'));
                }
                else{
                    return redirect()->back();
                }
            }
            else{
                return redirect('login');
            }
    }


}
