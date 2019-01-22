<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use App\Model\Admin\Type;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Goods::with('types')->paginate(2);
        // dump($rs);die;
        return view('/admin/goods/index',['title'=>'商品列表页面','rs'=>$rs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rs = Type::get();
        return view('/admin/goods/add',['rs'=>$rs,'title'=>'商品添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token','gpic');
        dump($res);
        if(!$request->hasFile('gpic')){
            echo '没有图片上传';die;
        } else {
            $file = $request->file('gpic');

            // 设置名字
            $name = rand(1111,9999).time();
            // 获取后缀
            $suffix = $file->getClientOriginalExtension();
            // 移动文件
            $file->move('./uploads/goods/',$name.'.'.$suffix);
            // 存入数据库
            $res['gpic'] = '/uploads/goods/'.$name.'.'.$suffix;
        }

        try{
            $data = Goods::create($res);
            if($data){
                return redirect('/admin/goods');
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
        $rs = Goods::find($id);
        return view('/admin/goods/edit',['rs'=>$rs,'title'=>'商品修改页面']);
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
        $rs = Goods::find($id);
        $res = $request->except('_token','_method','gpic');

        if($request->hasFile('gpic')){
            if($rs->gpic){
                $re = @unlink('.'.$rs->gpic);
                if(!$re){
                    echo '删除失败';
                } else {
                    echo '删除成功';
                }
            }
            $file = $request->file('gpic');

            // 设置名字
            $name = rand(1111,9999).time();
            // 获取后缀
            $suffix = $file->getClientOriginalExtension();
            // 移动文件
            $file->move('./uploads/goods/',$name.'.'.$suffix);
            // 存储数据库
            $res['gpic'] = '/uploads/goods/'.$name.'.'.$suffix;
        }

        try{
            $data = Goods::where('id',$id)->update($res);
            if($data){
                return redirect('/admin/goods/');
            }
        } catch(\Exception $e) {
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
            $re = Goods::destroy($id);
            if($re){
                return redirect('/admin/goods');
            }
        } catch (\Exception $e) {
            return back();
        }
    }
}

