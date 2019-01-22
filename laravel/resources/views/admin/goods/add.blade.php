@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">
                {{$title}}
            </h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/admin/goods" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        商品名称
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="gname" class="form-control">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        商品简介
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="descr" class="form-control">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        商品库存量
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="stock" class="form-control">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        商品单价
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="price"  class="form-control">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        商品状态
                    </label>
                    <div class="col-sm-9">
                        <input type="radio" name="status" value="1" checked="checked">上架
                        <input type="radio" name="status" value="0">下架
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        类别
                    </label>
                    <div class="col-sm-9">
                        <select name="tid" class="form-control mb-3">
                            @foreach($rs as $k=>$v)
                            <option value="{{$v->id}}">
                                {{$v->tname}}
                            </option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label for="fileInput" class="col-sm-3 form-control-label">
                        商品图片
                    </label>
                    <div class="col-sm-9">
                        <input id="fileInput" name="gpic" type="file" class="form-control-file">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 offset-sm-3">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary">
                            添加
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop