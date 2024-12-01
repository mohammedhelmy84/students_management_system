<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|same:confirm_password|min:8',
            'confirm_password' => 'required',
        ], [
            'name.required' => 'حقل الاسم مطلوب',
            'email.required' => 'حقل الايميل مطلوب',
            'password.required' => 'حقل كلمة السر مطلوب',
            'confirm_password.required' => 'حقل تأكيد كلمة السر مطلوب',
            'name.max' => 'طول حقل الاسم 255',
            'email.unique' => 'غير مسموح بتكرار الايميل',
            'password.min' => 'طول حقل الباسورد 8 فأكثر',
            'password.same' => 'كلمة السر غير متطابقة',
            'confirm_password.min' => 'طول حقل تأكيد الباسورد 8 فأكثر',
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();
            session()->flash('success', 'تم اضافة الحساب بنجاح');
            return back();
        } catch (Exception $ex) {
            return redirect()->route('auth.register')
                ->with('warning', 'حدث خطأ اثناء الحفظ');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_request(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'تم تسجيل الدخول بنجاح');
        }

        return redirect()->route('auth.login')->with('error', 'تأكد من بيانات الدخول');

    }
}
