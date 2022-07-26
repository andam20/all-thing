<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{

    public function index(User $user){
                return view('listings.index',[
                    'listings'=>Listing::latest()->filter(request(['tag','search']))->paginate(100)
                ]);
            }
            


    //show post in detail
    public function show(Listing $listing){
         return view('listings.show',['listing'=>$listing ]);
    }
    

      //show your posts
      public function manage(Listing $listing){   
        return view('listings.manage',['listings'=>auth()->user()->listings()->get()]); 
    }


    







    //edit a post
    public function edit(Listing $listing){
        return view('listings.edit',[
            'listing'=>$listing ]);
    }





    
    //create a post
    public function create(Listing $listing){
        return view('listings.create',[
            'listing'=>$listing ]);
    }

//store a post
    public function store(Request $request){
                   
        $requestData = $request->all();
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('images', $fileName, 'public'); 
        $requestData["logo"] = '/storage/'.$path;
       $requestData['user_id']=auth()->id();
       
       Listing::create($requestData);     
        return redirect('/')->with('message','listing is created successfully!');
    }


    //submit update to a post
    public function update(Request $request,Listing $listing){
        if($listing->user_id !=auth()->id()){
            abort(403,'unauthorized');
        }
        $formFields=$request->validate([
            'title'=>'required',
            'tags'=>'required',
            'description'=>'required',
         ]);
         if($request->hasFile('logo')){
             $formFields['logo']=$request->file('logo')->store('logos','public');
         }
         $listing->update(
             $formFields 
         );  
         return redirect('/')->with('message','listing is updated successfully!');
             }

             //delete a post
            public function delete(Listing $listing){
                if($listing->user_id !=auth()->id()){
                    abort(403,'unauthorized');
                } 
                $listing->delete();
                return redirect('/')->with('message','listing is deleted successfully!');
            }





          




//for API 

//searching and return all
public function getposts(Request $request){
    if($request!=null){    
        $queryTag=Listing::with('user');
        if($request->Tag){
            $queryTag->where('tags','like','%'.$request->Tag.'%');
            $queries=$queryTag->get();
            return response()->json([
                'message'=>'success ',
                'data'=>$queries
            ],200);
        }
        $queryTitle=Listing::with('user');
        if($request->Title){
         $queryTitle->where('title','like','%'.$request->Title.'%');
        }
        $queries=$queryTitle->get();
        return response()->json([
            'message'=>'success ',
            'data'=>$queries
        ],200);
      }
    else {
    return  Listing::all();
          }     
}

//update
public function updatePost (Request $request,$id){
  
     $listing= Listing::find($id);
    if($listing&&$listing->user_id==Auth::user()->id){
        $listing->title=$request->title;   
     $listing->company=$request->company;
     $listing->location=$request->location;
     $listing->website=$request->website;
     $listing->tags=$request->tags;
     $listing->email=$request->email;
     $listing->description=$request->description;
     $listing->update();
    return response()->json(['message'=>'listing is updated successfully!'],200);
    }
    else{
        return response()->json(['message'=>'no product selected!'],404);
    }
}

//delete
public function deletePost ($id){
    $listing= Listing::find($id);
    if(Listing::where('id',$id)->exists()&&$listing->user_id==Auth::user()->id){
        $toDelete=Listing::find($id);
        $toDelete->delete();
        return response()->json([
            'message'=>"deleted",],202);
    }
    else{
        return response()->json([
            'message'=>"record not found ",],202);
        }
    }


    
//creating
public function createPost (Request $request){
    $listing=new Listing;
    if($listing){   
     $listing->title=$request->title;    
     $listing->company=$request->company;
     $listing->location=$request->location;
     $listing->website=$request->website;
     $listing->tags=$request->tags;
     $listing->email=$request->email;

         //for putting image we need those steps 
        //1-we are getting image file that user will upload
        $image=$request->logo;
        //define the name depend of the different time 
        $imagename=time().'.'.$image->getClientoriginalExtension();
        //we create a file with a name 'doctorimage' in the public folder
        $request->logo->move('doctorimage',$imagename);
        //we will save it inside a variable
        $listing->logo="andam";


     $listing->description=$request->description;
     $listing->user_id=Auth::user()->id;
     $listing->save();
    return response()->json(['message'=>'listing is created successfully!'],200);
    }
    else{
        return response()->json(['message'=>'no created selected!'],404);
                 }
 }


}
