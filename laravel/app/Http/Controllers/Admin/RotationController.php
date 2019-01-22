<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Rotation;

class RotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Rotation::get();
        return view('/admin/rotation/index',['rs'=>$rs,'title'=>'轮播图列表']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rotation.add',['title'=>'轮播图添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->only('rname');

        if(!$request->hasFile('rpic')){
            echo '没有文件上传';die;
        } else {
            $file = $request->file('rpic');

            //设置名字
            $name = rand(1111,9999).time();
            //获取后缀
            $suffix = $file->getClientOriginalExtension();
            //移动文件
            $file->move('./uploads/rotation/',$name.'.'.$suffix);
            //存储数据库
            $res['rpic'] = '/uploads/rotation/'.$name.'.'.$suffix;
        }

        try{
            $data = Rotation::create($res);

            if($data){
                return redirect('/admin/rotation');
            }
        } catch (\Exception $e) {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rs = Rotation::find($id);
        return view('/admin/rotation/edit',['title'=>'轮播图修改页面','rs'=>$rs]);
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
        $data = rotation::find($id);
        $rs = $request->only('rname');
        if($request->hasFile('rpic')){
            if($data->rpic){
                $re = @unlink('.'.$data->rpic);
                if(!$re){
                    echo '删除成功';
                } else{
                    echo '删除失败';
                }
            }

            $file = $request->file('rpic');

            $name = rand(1111,9999).time();

            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads/rotation/',$name.'.'.$suffix);

            $rs['rpic'] = '/uploads/rotation/'.$name.'.'.$suffix;
        }

        try{
            $s = Rotation::where('id',$id)->update($rs);
            if($s){
                return redirect('/admin/rotation');
            }
        } catch (\Exception $e) {
            return back();
        }
    }  


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Rotation::destroy($id);
        }catch(\Exception $e){
            echo 0;
        }
        echo 1;
    }
}
