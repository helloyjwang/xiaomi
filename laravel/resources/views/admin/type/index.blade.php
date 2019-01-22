@extends('layout.admin')

@section('title',$title)

@section('content')
<script src="/hou/js/jquery.min.js"></script>
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
                                分区名
                            </th>
                            <th>
                                类别名
                            </th>
                            <th>
                                类别图片
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
                                {{$v['parti']->pname}}
                            </td>
                            <td>
                                {{$v->tname}}
                            </td>
                            <td>
                                <img src="{{$v->timage}}" alt="" width="100px">
                            </td>
                            <td>
                                <a href="/admin/type/{{$v->id}}/edit" class="btn btn-info">修改</a>
                                <button class="btn btn-danger" ids = "{{$v->id}}">
                                    <a href="javascript:''" >删除</a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
            "{{url('/admin/type')}}/" + ids, 
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