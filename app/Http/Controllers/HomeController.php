<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function applied_job($id){
       $apply=new Applicant();
       $apply->user_id=Auth::user()->id;
       $apply->job_id=$id;
       $apply->save();

     return redirect()->back();
    }
    public function form_for_post(){
        return view('layouts.form_for_post');
    }
    public function post_job(Request $re){
        $this->validate($re,[
            'title' => 'required|max:255',
            'body' => 'required|max:255',
            'location' => 'required|max:255',
            'country' => 'required|max:255',
            'deadline' => 'required|max:255',
            'educational_qualification' => 'required|max:255',
            'experience' => 'required|max:50',
            'salary' => 'integer',
            'vacancy' => 'integer',
        ]);

        $data=new Job();
        $data->title=$re->title;
        $data->body=$re->body;
        $data->salary=$re->salary;
        $data->vacancy=$re->vacancy;
        $data->location=$re->location;
        $data->country=$re->country;
        $data->experience=$re->experience;
        $data->deadline=$re->deadline;
        $data->educational_qualification=$re->educational_qualification;
        $data->user_id=Auth::user()->id;
        $data->save();

        return redirect('home');
    }
    public function profile_update(){
        return view('layouts.profile_update');
    }
    public function update_profile($id,Request $re){
        $data=User::where('id',$id)->first();
        $data->first_name=$re->first_name;
        $data->last_name=$re->last_name;
        $data->skills=$re->skills;

        $image=$re->file('image');
        if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path=public_path('images/');
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data->image='images/'.$image_full_name;


            $img_data=User::where('id',$id)->first();
            if(!empty($img_data->image)){
                unlink($img_data->image);
            }
        }
        $pdf=$re->file('pdf');
        if($pdf){
            $pdf_name=hexdec(uniqid());
            $ext=strtolower($pdf->getClientOriginalExtension());
            $pdf_full_name=$pdf_name.'.'.$ext;
            $upload_path=public_path('pdf/');
            $image_url=$upload_path.$pdf_full_name;
            $success=$pdf->move($upload_path,$pdf_full_name);

            $data->pdf='pdf/'.$pdf_full_name;

            $pdf_data=User::where('id',$id)->first();
            if(!empty($pdf_data->pdf)){
                unlink($pdf_data->pdf);
            }
        }
        $data->save();
        return redirect('profile/show');
    }
    public  function profile_show(){
        $id=Auth::user()->id;
        $data=User::where('id',$id)->first();

        return view('layouts.profile_show',compact('data'));
    }

}
