@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        友情链接修改页面
                    </font>
                </font>
            </h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/admin/friend/{{$rs->id}}" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                链接名字
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="name" value="{{$rs->name}}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                链接url
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="url" value="{{$rs->url}}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                链接简介
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="brief" value="{{$rs->brief}}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fileInput" class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                头像:
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                    	<img src="{{$rs->image}}" alt="" width="100px">
                        <input id="fileInput" type="file" name="image" class="form-control-file">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 offset-sm-3">
                    	{{ csrf_field() }}
                    	{{ method_field('PUT') }}
                        <button type="submit" class="btn btn-primary">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    保存更改
                                </font>
                            </font>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop