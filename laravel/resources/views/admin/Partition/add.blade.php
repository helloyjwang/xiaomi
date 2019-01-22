@extends('layout.admin')

@section('title',$title);

@section('content')

<div class="col-lg-10" style="margin-left:30px">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        分区管理
                    </font>
                </font>
            </h3>
        </div>
        <div class="card-body">
            <form action="/admin/partition" method="post">
                <div class="form-group">
                    <label class="form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                分区名称
                            </font>
                        </font>
                    </label>
                    <input type="text" name="pname" placeholder=" 请填写你的分区名称 " class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-control-label">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                分区路径
                            </font>
                        </font>
                    </label>
                    <input type="text" name="purl" placeholder=" 请填写分区的路径 " class="form-control">
                </div>
                <div class="form-group">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                        	{{csrf_field()}}
                            <center><input type="submit" value="添加" class="btn btn-primary"></center>
                        	
                        </font>
                    </font>
                </div>
            </form>
        </div>
    </div>
</div>

@stop