<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $slider=service::select('id','title','image','slug','price','category_id')->limit(4)->get();
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
