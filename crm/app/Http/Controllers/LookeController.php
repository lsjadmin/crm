<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
class LookeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $a=session('emial');
        // dd($a);
        // echo "11";
        return view('looke/index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //发送邮件
    public function code(){
        $code=rand(111111,999999);
        $fail=Mail::send('looke.email',['data'=>$code],function($message){
              $message->to(request()->input('email'))->subject('验证码啊');
        });
        if($fail!==false){
            $arr=[
                'font'=>'发送成功',
                'code'=>1
            ];
            $email=[
                'code'=>$code,
                'email'=>request()->input('email')
            ];
            session(['emial'=>$email]);
            echo json_encode($arr);
      }
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //注册
    public function email(){
        $data=request()->input();
        $data['user_pwd']=encrypt($data['user_pwd']);
        $res=DB::table('user')->insert($data);
        if($res){
            $info=[
                'code'=>1,
                'font'=>'添加成功'
            ];
            echo json_encode($info);
        }else{
            $info=[
                'code'=>2,
                'font'=>'添加失败'
            ];
            echo json_encode($info);
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //首页
    public function show(){

        return view("looke/a");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
    
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
