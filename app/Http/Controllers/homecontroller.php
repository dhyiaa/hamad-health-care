<?php
namespace App\Http\Controllers;
use App\ask;
use App\partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\email_list;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
class homecontroller extends Controller
{
    public function get_index ( Request $request , $lang = null)
    {
        $lang='ar';
        if ($request->session()->has('lang'))
        {
        $lang = $request->session()->get('lang');
        }
        return view( $lang.'.home') ;
    }
    public function lang ($lang = null )
    {
        if (isset($lang) && !empty($lang) )
        {
        Session(['lang' => $lang]);
        return  redirect()->back();
        }
        else { return redirect()->back(); }
    }
    public function get_partner ( Request $request )
    {
        $lang='ar'; if ($request->session()->has('lang')){$lang = $request->session()->get('lang');}
        $partners = partner::all() ;
        return view( $lang.'.partner')->with('partners' , $partners) ;
    }
    public function email ( Request $request )
    {
        $this->validate( $request ,[ 'email' => 'required|unique:email_lists|email' ]);
        $mail= new email_list ;
        $mail->email=$request->email;
        if ($mail->save()){ return redirect(route('home'))->withdone_email('تم اشتراكك بالقائمة البريدية'  ); }
    }
    public function  get_med_check ( Request $request  )
    {
        $lang='ar'; if ( $request->session()->has('lang') ){ $lang = $request->session()->get('lang'); }
        return view( $lang.'.med_check');
    }
    public function  get_ask_doc ( Request $request  )
    {
        $lang='ar'; if ($request->session()->has('lang')){$lang = $request->session()->get('lang');}
        return view( $lang.'.ask_doc');
    }
    public function  post_ask_doc ( Request $request  )
    {
        $this->validate($request,[
        'first_name' =>'required|min:2' ,
        'last_name' =>'required|min:2' ,
        'email' => 'email|required',
        'ask' => 'required'
        ]);
        if ($request->has('sex') &&  $request->sex = 'on') {$request->sex = 'male';}
        else{ $request->sex = 'female';}
        $ask = new ask;
        $ask->f_name = $request->first_name ;
        $ask->l_name = $request->last_name ;
        $ask->email = $request->email ;
        $ask->ask = $request->ask ;
        $ask->sex = $request->sex;
        $ask->date = Carbon::now()->format('Y-m-d H:i:s');
        if ($ask->save()){
        return redirect()->route('ask_doc')->with('msg' , 'تم اضافة استفسارك سوف نجيب علكم باقرب وقت');
        }
        else{ return redirect()->route('ask_doc')->with('msg' , ' فشل حدث خطا ما ');}
    }
    public function  callus ( Request $request  )
    {
        $lang='ar'; if ($request->session()->has('lang')){$lang = $request->session()->get('lang');}
        return view( $lang.'.callus');
    }
    public function  about ( Request $request  )
    {
        $lang='ar'; if ($request->session()->has('lang')){$lang = $request->session()->get('lang');}
        return view( $lang.'.about');
    }
}
