<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function create()
    {
        return view('captcha');
    }
    public function captchaValidate(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha'
        ]);
        session()->flash('success','Welcome To This Page');
        return redirect()->back();
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
