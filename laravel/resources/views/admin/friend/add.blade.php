@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="col-lg-12">
    <div class="card">
        
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        友情链接
                    </font>
                </font>
            </h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/admin/friend" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                链接名称
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="line">
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
                        <input type="text" name="brief" class="form-control">
                    </div>
                </div>
                <div class="line">
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
                        <input type="text" name="url" class="form-control">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label for="fileInput" class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                链接logo
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <input id="fileInput" type="file" name="image" class="form-control-file">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                	<div class="col-sm-4 offset-sm-3">
                    {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="添加">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop