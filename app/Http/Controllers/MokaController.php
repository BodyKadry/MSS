<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MokaController extends Controller
{
    public function home(){
        //
        return view('Home');
    }
    public function login_page(){
        //
        return view('login');
    }
    public function store(Request $request)
    {
        // التحقق من البيانات المدخلة
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed', // كلمة المرور تتطلب التأكيد
        ]);

        // إنشاء المستخدم وحفظ البيانات في قاعدة البيانات
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // تأكد من تشفير كلمة المرور
        ]);

        // إعادة التوجيه بعد الحفظ
        return redirect()->route('home')->with('success', 'تم التسجيل بنجاح!');
    }
    public function login(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // محاولة تسجيل الدخول
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // إعادة التوجيه إلى الصفحة الرئيسية عند نجاح تسجيل الدخول
            return redirect()->route('home')->with('success', 'تم تسجيل الدخول بنجاح!');
        }

        // إذا فشل تسجيل الدخول
        return back()->withErrors(['email' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة']);
    }
}
