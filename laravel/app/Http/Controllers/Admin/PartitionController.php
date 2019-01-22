<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Partition;

class PartitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = partition::get();
        return view('/admin/partition/index',['title'=>'分区列表','rs'=>$rs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/partition/add',['title'=>'分区添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs =  $request->except('_token');
        try {
            $data = Partition::create($rs);
            if($data){
                return redirect('/admin/partition');
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
        $rs = partition::find($id);

        return view('/admin/partition/edit',['title'=>'分区修改页面','rs'=>$rs]);
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
        $rs = $request->except('_token','_method');

        try{
            Partition::where('id',$id)->update($rs);
        } catch(\Exception $e) {
            return back();
        }
        return redirect('/admin/partition');
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
            Partition::destroy($id);
        } catch(\Exception $e) {
            echo 0;
        }
        echo 1;
    }
}
