<?php

namespace App\Http\Controllers;

use App\Models\Costs;
use Illuminate\Http\Request;

class CostsController extends Controller
{



    public function show(Costs $costing){
        return view('costs.show',[
            'costing'=>$costing ]);
    }





    
    public function create(Costs $costing){
        return view('costs.create',[
            'costing'=>$costing]);
    }   






    public function store(Request $request){
  
        $formFields=$request->validate([
            'price'=>'required',
            'desc'=>'required',
            'item_name'=>'required',
         ]);
        $formFields['cost_id']=auth()->id(); 
         Costs::create(
             $formFields 
         );
         return redirect('/')->with('message','Expense is addes successfully!');
     }





     //manage
public function manage(Costs $costing){
    return view('costs.manage',['costs'=>auth()->user()->costs()->get()]); 
}






// public function edit(Costs $costing){
//     return view('costs.edit',[   
//         'costing'=>$costing ]);
// }


// public function update(Request $request,Costs $costing){
//     if($costing->cost_id !=auth()->id()){
//         abort(403,'unauthorized');
//     }
//     $formFields=$request->validate([
//         'price'=>'required',

//         'item_name'=>'required',
//         'desc'=>'required',
//      ]);

   

//      $costing->update(
//          $formFields 
//      );  

//      return redirect('/')->with('message','expense is updated successfully!');
//          }

// public function delete(Costs $costing){
// if($costing->cost_id !=auth()->id()){
//     abort(403,'unauthorized');
// } 
// $costing->delete();
// return redirect('/')->with('message','expense is deleted successfully!');
// }




    }
