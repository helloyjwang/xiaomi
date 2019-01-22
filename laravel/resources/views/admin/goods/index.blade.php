@extends('layout.admin')

@section('title',$title)

@section('content')

<link rel="stylesheet" href="/hou/css/bootstrap.css">
<script src="/hou/js/jquery.min.js"></script>
<script src="/hou/js/bootstrap.min.js"></script>
<div class="col-lg-10" style="margin-left:30px">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">
                {{$title}}
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                商品名称
                            </th>
                            <th>
                                商品简介
                            </th>
                            <th>
                                商品类别
                            </th>
                            <th>
                                商品单价
                            </th>
                            <th>
                                商品库存
                            </th>
                            <th>
                                商品状态
                            </th>
                            <th>
                                商品图片
                            </th>
                            <th>
                                操作
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rs as $k=>$v)
                        <tr>
                            <th scope="row">
                                {{$v->id}}
                            </th>
                            <td>
                                {{$v->gname}}
                            </td>
                            <td>
                                {{$v->descr}}
                            </td>
                            <td>
                                {{$v['types']->tname}}
                            </td>
                            <td>
                                {{$v->price}}
                            </td>
                            <td>
                                {{$v->stock}}
                            </td>
                            <td>
                                @if ($v->status == 1) 
                                    上架
                                @else
                                    下架
                                @endif
                            </td>
                            <td>
                                <img src="{{$v->gpic}}" alt="" width="100px">
                            </td>
                            <td>
                                <a href="/admin/goods/{{$v->id}}/edit" class="btn btn-info">修改</a>
                                <form action="/admin/goods/{{$v->id}}" method="post" style="display:inline">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger">删除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <center style="margin-right:200px">
                    {{ $rs->links() }}
                </center>
            </div>
        </div>
    </div>
</div>

@stop