@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="col-lg-10" style="margin-left:30px">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        {{$title}}
                    </font>
                </font>
            </h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/admin/rotation/{{$rs->id}}" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                轮播图名称
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="rname" value="{{$rs->rname}}" class="form-control">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label for="fileInput" class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                轮播图
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                    	<img src="{{$rs->rpic}}" alt="" width="100px">
                        <input id="fileInput" type="file" name="rpic" class="form-control-file">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 offset-sm-3">
                        <button type="submit" class="btn btn-primary">
                        	{{csrf_field()}}
                        	{{method_field('PUT')}}
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    添  加
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