<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Type;
use App\Model\Admin\Partition;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Type::with('parti')->get();
        return view('/admin/type/index',['title'=>'类别列表','rs'=>$rs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rs = Partition::get();
        return view('admin.type.add',['rs'=>$rs,'title'=>'类别添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $request->except('_token','timage');
        if(!$request->hasFile('timage')){
            echo '没有图片上传';die;
        } else {
            $file = $request->file('timage');

            // 设置名字
            $name = rand(1111,9999).time();
            // 获取后缀
            $suffix = $file->getClientOriginalExtension();
            // 移动文件
            $file->move('./uploads/type/',$name.'.'.$suffix);
            // 存储数据库
            $rs['timage'] = '/uploads/type/'.$name.'.'.$suffix;
        }

        try{

            $data = Type::create($rs);
            if($data){
                return redirect('/admin/type');
            }
        } catch(\Exception $e) {
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
        $rs = Type::find($id);
        return view('/admin/type/edit',['title'=>'类别修改页面','rs'=>$rs]);
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
        $data = Type::find($id);
        $rs = $request->only('tname');

        if($request->hasFile('timage')){
            if($data->timage){
            $re = @unlink('.'.$data->timage);
                if(!$re){
                    echo '删除失败';
                } else {
                    echo '删除成功';
                }
            }

            $file = $request->file('timage');
            // 设置名字
            $name = rand(1111,9999).time();
            // 获取后缀
            $suffix = $file->getClientOriginalExtension();
            // 移动文件
            $file->move('./uploads/type/',$name.'.'.$suffix);
            // 存入数据库
            $rs['timage'] = '/uploads/type/'.$name.'.'.$suffix;
        }

        try{
            $res = Type::where('id',$id)->update($rs);
            if($res){
                return redirect('/admin/type');
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
            Type::destroy($id);
        }catch(\Exception $e){
            echo 0;
        }
        echo 1;
    }
}
