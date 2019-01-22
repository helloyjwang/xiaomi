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
            <form action="/admin/partition/{{$rs->id}}" method="post">
                <div class="form-group">
                    <label class="form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                分区名称
                            </font>
                        </font>
                    </label>
                    <input type="text" name="pname" placeholder=" 请输入你的分区名称 " value="{{$rs->pname}}" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                分区路径
                            </font>
                        </font>
                    </label>
                    <input type="text" name="purl" value="{{$rs->purl}}" placeholder="请输入你的分区路径" class="form-control">
                </div>
                <div class="form-group">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                        	{{ csrf_field() }}
                        	{{ method_field('PUT') }}
                            <input type="submit" value="修改" class="btn btn-primary">
                        </font>
                    </font>
                </div>
            </form>
        </div>
    </div>
</div>

@stop