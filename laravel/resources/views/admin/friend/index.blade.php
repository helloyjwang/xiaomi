@extends('layout.admin')

@section('title',$title)

@section('content')
<link rel="stylesheet" href="/hou/css/bootstrap.css">
<script src="/hou/js/jquery.min.js"></script>
<script src="/hou/js/bootstrap.min.js"></script>
<div class="col-lg-10" style = "margin-left:30px">
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
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        ID
                                    </font>
                                </font>
                            </th>
                            <th>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        链接名字
                                    </font>
                                </font>
                            </th>
                            <th>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        链接url
                                    </font>
                                </font>
                            </th>
                            <th>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        链接logo
                                    </font>
                                </font>
                            </th>
                            <th>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        链接简介
                                    </font>
                                </font>
                            </th>
                            <th>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        操作
                                    </font>
                                </font>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($rs as $k => $v)
                        <tr>
                            <th scope="row">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        {{$v->id}}
                                    </font>
                                </font>
                            </th>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        {{$v->name}}
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        {{$v->url}}
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <a href="{{$v->image}}" target="black"><img src="{{$v->image}}" alt="" width="120px"></a>
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        {{$v->brief}}
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <a href="/admin/friend/{{$v->id}}/edit" class="btn btn-info">修改</a>
                                        <button class="btn btn-danger" ids = "{{$v->id}}">
                                            <a href="javascript:''" >删除</a>
                                        </button>
                                    </font>
                                </font>
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
<script>
        $('.btn-danger').click(function(){
            var th = $(this);
            var ids = $(this).attr('ids');
            // console.log(ids);
            $.post(
                "{{url('/admin/friend')}}/" + ids, 
                {
                    '_method': 'delete',
                    '_token': "{{csrf_token()}}"
                },
                function(data) {
                    console.log(data);
                    if (data == 1) {
                        th.parents('tr').remove();
                    }
                }
            );
            return false;
        })
    </script>
@stop

