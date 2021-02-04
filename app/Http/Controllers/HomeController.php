<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }


    public function index(){
        $setting=Setting::first();
        $slider=service::select('id','title','image','slug','price','category_id')->limit(3)->get();
        $daily=service::select('id','title','image','slug')->limit(6)->inRandomOrder()->get();
        $last=service::select('id','title','image','slug','price')->limit(6)->orderByDesc('id')->get();
        $picked=service::select('id','title','image','slug','price')->limit(6)->inRandomOrder()->get();
        $data=[
            'setting'=>$setting,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'slider'=>$slider,
            'page'=>'home'

        ];
        return view('home.index',$data);
    }
    public function aboutus(){
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting,'page'=>'home']);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');


        $data->save();

        return redirect()->route('contact')->with('success','Your Message sent successfully!');
    }

    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting,'page'=>'home']);
    }
    public function service($id,$slug){
        $setting=Setting::first();
        $data=service::find($id);
        $picked=service::select('id','title','image','slug')->limit(6)->inRandomOrder()->get();
        $reviews=Review::where('service_id',$id)->get();
        $datalist=Image::where('service_id',$id)->get();
        return view('home.service_detail',['setting'=>$setting,'picked'=>$picked,'data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);

    }
    public function categoryservices($id,$slug){
        $setting=Setting::first();
        $datalist=service::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_services',['data'=>$data,'datalist'=>$datalist,'setting'=>$setting]);

    }
    public function sendreview(Request $request,$id)
    {
        $data = new Review;

        $data->user_id = Auth::id();
        $service = service::find($id);
        $data->service_id=$id;
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->IP = $_SERVER['REMOTE_ADDR'];



        $data->save();

        return redirect()->route('service',['id'=>$service->id,'slug'=>$service->slug])->with('success','Mesajınız kaydedilmiştir');
    }
    public function makereservation(Request $request,$id)
    {
        $data = new Reservation;

        $data->user_id = Auth::id();
        $data->service_id=$id;
        $data->year = $request->input('year');
        $data->month = $request->input('month');
        $data->day = $request->input('day');
        $data->hour = $request->input('hour');
        $data->minute = $request->input('minute');
        $data->IP = $_SERVER['REMOTE_ADDR'];



        $data->save();

        return redirect()->route('user_reservations')->with('success','Your Reservation Has been accepted');
    }

    public function allservicelist(){
        $datalist=service::all();
        $setting=Setting::first();


        return view('home.allservices',['datalist'=>$datalist,'setting'=>$setting]);

    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting,'page'=>'home']);
    }
    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist,'setting'=>$setting]);
    }
    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors(['email'=>'The provided credentials do not match our records.']);
        }
        else
        {
            return view('admin.login');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
