<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Friend;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Friend::paginate(2);

        return view('/admin/friend/index',['rs'=>$rs,'title'=>'友情链接']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.friend.add',['title'=>'友情链接添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token','image');
        if(!$request->hasFile('image')){
            echo '没有图片上传';die;
        } else {
            $file = $request->file('image');
            // 设置名字
            $name = rand(1111,9999).time();

            // 获取后缀
            $suffix = $file->getClientOriginalExtension();

            // 移动文件 
            $file->move('./uploads/friend',$name.'.'.$suffix);

            // 存到数据库
            $res['image'] = '/uploads/friend/'.$name.'.'.$suffix;
        }
            try{
                $data = Friend::create($res);
                
                if($data){
                    return redirect('/admin/friend');
                }
            } catch (\Exception $e){
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rs = Friend::find($id);
        return view('/admin/friend/edit',['rs'=>$rs,'title'=>'修改链接']);
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
        $data = Friend::find($id);
        $rs = $request->except('_token','_method','image');
        if($request -> hasFile('image')){
            if($data->image){
                $re = @unlink('.'.$data->image);
                if(!$re){
                    echo '删除失败';
                } else {
                    echo '删除成功';
                }
            }

            $file = $request -> file('image');
            $name = rand(1111,9999).time();
            $suffix = $file->getClientOriginalExtension();
            $file->move('./uploads/friend',$name.'.'.$suffix);

            $rs['image'] = '/uploads/friend/'.$name.'.'.$suffix;
        }

        try{
            Friend::where('id',$id)->update($rs);
        } catch (\Exception $e){
            return back();
        }
        return redirect('/admin/friend');

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
            Friend::destroy($id);
        }catch(\Exception $e){
            echo 0;
        }
        echo 1;
    }
}
