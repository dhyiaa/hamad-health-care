<?php
namespace App\Http\Controllers;
use App\ask;
use App\Mail\answer;
use App\on_off;
use App\email_list;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class admincontroller extends Controller
{
    public function GET_Login()
    {
        if (Auth::viaRemember()) {
            return redirect()->route('admin.home');
        }
        else {return view('admin.login');}
    }

    public function POST_Login(Request $request)
    {
        $name = $request->input('name');
        $Password = $request->input('Password');
        $this->validate($request, ['name' => 'required', 'Password' => 'required',]);
        $remember = $request->has('remember');
        if (Auth::attempt(['name' => $name, 'password' => $Password], $remember)) {
            return redirect()->route('admin.home');
            }
        else {return redirect()->route('admin.login')->with('msg', 'فشل لم يتم تسجيل الدخول');}
    }

    public function GET_Logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('msg', 'تم تسجيل الخروج بنجاح');
    }

    public function GET_Profile()
    {
        $email_number = email_list::get()->count();
        $last_sign_in_user = Auth::user()->last_sign_in ;
        $new_ask = ask::where('date' , '>' , $last_sign_in_user )->count();
        $user = User::find(Auth::user()->id);
        $user->last_sign_in = Carbon::now()->format('Y-m-d H:i:s');
        $user->save();
        $web = on_off::where('on_of' , '=' , 1  )->count();
        if ($web > 0){ $web_con='on';}
        else{ $web_con='off'; }
        return view('admin.page.home')->with(['new_asks_num'=> $new_ask , 'email_number'=> $email_number , 'web_con' => $web_con  ]);
    }

    public function GET_User()
    {
        return view('admin.page.user_edit');
    }

    public function POST_User(Request $request)
    {
        $info = Auth::user();
        $new_name = $request->name;
        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $user = User::where('id', '=', Auth::user()->id);
        if ($user->count() > 0) {
            if (Hash::check($old_password, $info->password)) {
                $update = $user->update(['name' => $new_name, 'password' => bcrypt($new_password)]);
                if ($update) {
                Auth::logout();
                return redirect()->route('admin.login')->with('msg', 'تم تغير معلومتك بنجاح ');
                }
                else {return redirect()->route('admin.home')->with('msg', 'لم يتم تغير المعلومات للاسف');}
            }
            else {return 'error   ' . '<br>' . Auth::user()->id . '<br>' . $old_password . '<br>' . Auth::user()->password;}
        }
        else {return redirect()->route('admin.user')->with('msg', 'فشل لم ينم تغير الاسم بنجاح');}
    }


    public function GET_med_asks()
    {
        $asks = ask::orderBy('id', 'desc')->paginate(10);
        return view('admin.page.med_asks')->with('asks', $asks);
    }

    public function GET_ask($id)
    {
        $ask = ask::where('id', '=', $id)->limit(1)->get()->first();
        return view('admin.page.ask')->with('ask', $ask);
    }

    public function POST_answer(Request $request)
    {
        $answer = $request->answer;
        $email = $request->email;
        $send = Mail::to($email)->send(new answer($answer ));
        return redirect()->route('admin.med_asks')->with('msg', ' تم ارسال  الجواب بنجاح ');
    }

    public function DELETE_ask($id)
    {
        if (ask::where('id', '=', $id)->delete()) {
            return redirect()->route('admin.med_asks')->with('msg', 'تم الحذف بنجاح');
        }
        else {return redirect()->route('admin.med_asks')->with('msg', 'فشل لم يتم الحذف');}
    }

    public function GET_email_list(){
        return view('admin.page.email_list');
    }

    public function POST_email_list(Request $request)
    {
        $msg = $request->email;
        $emails = email_list::select('email')->get();
        foreach ($emails as $email) {
        Mail::to($email)->send(new  \App\Mail\email_list($msg));
        return redirect()->route('admin.email_list')->with('msg', ' تم ارسال الايميلات الى جميع المشتركين ');
        }
        return redirect()->route('admin.email_list')->with('msg', 'حدث خطا في  الارسال الرجاء الاتصال ب ضياء ..');
    }

    public function enable()
    {
        $number = on_off::where('on_of', '=', 0)->count();
        if ($number > 0) {
            $enable = on_off::where('on_of', '=', 0)->update(['on_of' => 1]);
            if ($enable) {
                return redirect()->route('admin.home')->with('msg', 'تم تفعيل الصفحة بنجاح');
            }
            else {return redirect()->route('admin.home')->with('msg', 'خطاً لم يتم التفعيل اتصل على ضياء');}
            }
            else {return redirect()->route('admin.home')->with('msg', 'الصفحة اصلا مفعلة ');}
    }

    public function disable()
    {
        $number = on_off::where('on_of', '=', 1)->count();
        if ($number > 0) {
            $disable = on_off::where('on_of', '=', 1)->update(['on_of' => 0]);
            if ($disable) {
                return redirect()->route('admin.home')->with('msg', 'تم التعطيل  الصفحة بنجاح');
            }
            else {return redirect()->route('admin.home')->with('msg', 'خطاً لم يتم تعطيل الصفحة بنجاح اتصل على ضياء');}
            }
            else {return redirect()->route('admin.home')->with('msg', 'الصفحة اصلا معطلة ');}
    }

}