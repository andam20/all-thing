<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function create(){
        return view ('users.register');
    }



    //store
    public function store(Request $request){
        $requestData=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:3',
            'phone'=>'max:11',
            'bio'=>'min:1',
            'dept'=>['required','min:3'],
            'gender'=>['required','min:3'],
            'room'=>['required','min:1'],
            'block'=>['required','min:1'],
            'logo'=>['required','min:1'],
            'liveplace'=>['required','min:3'],
            'birthday'=>'required',
        ]);

        
        $requestData = $request->all();
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('images', $fileName, 'public'); 
        $requestData["logo"] = '/storage/'.$path;
 
        
            //hash password
    $requestData['password']=bcrypt($requestData['password']);
    $user=User::create($requestData);
    //login
    auth()->login($user);
    return redirect('/')->with('message','user create and loged in');
    }





    public function updateUser(Request $request,User $user ){
        $user=User::find(Auth::user()->id);
        if($user){
            $formFields=null;
            $formFields=$request->validate([
                'name'=>['required','min:3'],
                'email'=>['required'],
                'password'=>'required|confirmed|min:3',
                'phone'=>'max:11',
                'bio'=>'min:1',
                'dept'=>['required','min:3'],
                 'liveplace'=>['required','min:3'],
                'birthday'=>'required',
             ]);
             if($formFields){
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->password=$request['password'];
            $user->phone=$request['phone'];
            $user->bio=$request['bio'];
            $user->dept=$request['dept'];
             $user->liveplace=$request['liveplace'];
            $user->birthday=$request['birthday'];
            $user->save();   
            return redirect('/')->with('message','you updated your profile successfully!');
        }
        else{
            abort(403,'unauthorized');
                             }
                     }
             }





             public function editUser(User $user){
                return view('users.editUser',[
                    'listing'=>$user ]);
            }



                


    //logout
    public function logout(Request $request){  
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('messge','you have been lgout'); 
    }







     //show log in form
     public function login(Request $request){  
            // if(Auth::user()->usertype==1){
        return view('users.login');
    // }
    //      else{
        //     return view('admin.dashboard');
        // }
    }






    public function authenticate(Request $request){ 
     $formField=$request->validate([ 
        'email'=>['required','email'],
        'password'=>'required',  
    ]);
    if(auth()->attempt($formField)){
        $request->session()->regenerate();
        return redirect('/')->with('message','you are logged in successfully');
    }
    return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput();
    }






//profile
public function profile(Listing $listing){
    return view('users.profile',['listings'=>auth()->user()->listings()->get()]); 
}
 



//for API
      public function getAlluser() {
        return User::all();
      }

}
