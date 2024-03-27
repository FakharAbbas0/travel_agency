<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\InviteColleageMail;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdminHomeController extends Controller
{
    public function index(Request $request){
        return view('admin.dashboard');
    }

    function  blank_page()
    {
        return view('admin.blank');
    }

    public function profile(Request $request){
        $profile = Profile::where('user_id',Auth::guard('admin')->user()->id)->first();
        if($request->isMethod('POST')){
            if(is_null($profile)){
                $profile = new Profile();
                $profile->user_id = Auth::guard('admin')->user()->id;
            }
            
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->title = $request->title;
            $profile->contact_email = $request->contact_email;
            $profile->contact_number = $request->contact_number;
            $profile->company_name = $request->company_name;
            $profile->website_url = $request->website_url;
            $profile->save();

            if($request->has('image')){
                $profile_image = $request->image;
                $ext = $profile_image->getClientOriginalExtension();
                $fileName = $profile->id.".".$ext;
                $filePath = $profile_image->move(public_path('uploads/images/profile'), $fileName);
                $profile->image = $fileName;
            }

            if($request->has('company_logo')){
                $company_logo = $request->company_logo;
                $ext = $company_logo->getClientOriginalExtension();
                $fileName = $profile->id.".".$ext;
                $filePath = $company_logo->move(public_path('uploads/images/company_logo'), $fileName);
                $profile->company_logo = $fileName;
            }

            $profile->save();

            return redirect()->route('admin.profile')->with('success','Profile Details Saved Successfully');
        }

        return view('admin.profile',compact('profile'));
    }

    public function invite_colleage(Request $request){
        if($request->isMethod('POST')){
           $validator = Validator::make($request->all(),[
            "emails.*"  => "required|email",
           ]);

           if($validator->passes()){
                $emails = $request->emails;
                foreach ($emails as $recipient) {
                    Mail::to($recipient)->queue(new InviteColleageMail());
                }
                return redirect(route('admin.invite_colleage'))->with('info','Colleages have been Invited');
           }else{
            return redirect(route('admin.invite_colleage'))->withInput($request->only('emails'))->withErrors($validator->errors());
           }
        }else{
            return view('admin.invite_colleage');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
