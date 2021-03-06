<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder; 

use DB;
use Hash;

class LoginController extends Controller
{
	// 处理登录页面
    public function login()
    {
    	return view('/admin/login/login',['title'=>'登录页面']);
    }

    // 登录页面提交过来的数据
    public function dologin(Request $request)
    {
    	// 获取账号
    	$uname = $request->uname;

    	// // 通过账号查找是否存在数据库
    	$rs = DB::table('user')->where('uname',$uname)->first();

    	if(!$rs){
    		return back()->with('errors','用户名或密码不正确');
    	}

    	// //  获取密码
    	$pass = $request->password;

    	//  // 检测  Hash哈希
    	if(!Hash::check($pass,$rs->password)) {
    		return back()->with('errors','用户名或密码不正确');
    	}

    	 //2)解密
		/* $ps = decrypt($rs->password);

		if($pass != $ps){
    		return back()->with('errors','用户名或密码不正确');
			
		} */

		//  获取验证码
		$vcode = $request->vcode;																														
		 // 获取session里面存储的code
		$code = session('code');
		if($vcode != $code) {
			return back()->with('errors','验证码不正确');
		}

		 // 存储session 
		session(['uid'=>$rs->id]);
		 

		 // 跳转后台首页
		return redirect('/admin')->with('success','登陆成功');
    }

    // 退出登录
    public function logout()
    {
    	// 清空session
    	session(['uid'=>'']);

    	// 返回登录页面
    	return redirect('/admin/login');
    }


    // 验证码
     public function captch()
    {
		$phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(123, 203, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 110, $height = 35, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        session(['code'=>$phrase]);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }

}
