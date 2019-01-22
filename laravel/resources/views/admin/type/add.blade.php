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
            <form class="form-horizontal" action="/admin/type" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                类别名称
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="tname" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                选择分区
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <select name="pid" class="form-control mb-3">
							@foreach($rs as $k=>$v)
                            <option value="{{$v->id}}">
                                <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    {{$v->pname}}
                                </font>
                                </font>
                            </option>
							@endforeach
                        </select>
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <label for="fileInput" class="col-sm-3 form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                类别图片
                            </font>
                        </font>
                    </label>
                    <div class="col-sm-9">
                        <input id="fileInput" type="file" name="timage" class="form-control-file">
                    </div>
                </div>
                <div class="line">
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 offset-sm-3">
                        <button type="submit" class="btn btn-primary">
                        	{{csrf_field()}}
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    添加
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