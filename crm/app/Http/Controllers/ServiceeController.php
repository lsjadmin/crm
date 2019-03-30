<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServiceeController extends Controller{
    public function add(){
        $type=DB::table('service_type')->get();
        return view('servicee/add',['type'=>$type]);
    }
    public function adddo(){
        unset($_POST['_token']);
        $arr=DB::table('service')->insert($_POST);
        // dd($arr);
        if($arr){
            return redirect('servicee/list');
        }
    }
    public function list(){
        $service_name=request()->input('service_name');
        // dd($service_name);
        $where=[];
        if($service_name??""){
            $where[]=['service_name','like',"%$service_name%"];
        }
        $arr=DB::table('service')->where($where)->join('service_type','service.type_id','=','service_type.type_id')->paginate(3);
        return view('servicee/list',['arr'=>$arr,'service_name'=>$service_name]);
    }
    public function del($id){
        // dd($id);
        $res=DB::table('service')->where(['service_id'=>$id])->delete();
        // dd($res);
        if($res){
            return redirect('servicee/list');
        }
    }
    public function upd($id){
        // dd($id);
        $arr=DB::table('service')->where(['service_id'=>$id])->first();
        //var_dump($arr);
        $type=DB::table('service_type')->get();
        return view('servicee/upd',['arr'=>$arr,'type'=>$type]);
    }
    public function update(){

        $service_id=request()->input('service_id');
        unset($_POST['_token']);
        // dd($_POST);
        $res=DB::table('service')->where(['service_id'=>$service_id])->update($_POST);
        // dd($res);
        if($res){
            return redirect('servicee/list');
        }
    }
}
