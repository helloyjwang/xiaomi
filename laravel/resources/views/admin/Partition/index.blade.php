@extends('layout.admin')

@section('title',$title)

@section('content')
<script src="/hou/js/jquery.min.js"></script>
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
            <div class="table-responsive">
                <table class="table">
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
                                        分区名称
                                    </font>
                                </font>
                            </th>
                            <th>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        分区路径
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
                        	<td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        {{$v->id}}
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        {{$v->pname}}
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        {{$v->purl}}
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <a href="/admin/partition/{{$v->id}}/edit" class="btn btn-info">修改</a>
                                        <button class="btn btn-danger" ids='{{$v->id}}'>
                                        	<a href="javascript:''">删除</a>
                                        </button>
                                    </font>
                                </font>
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

		$.post(
			"{{url('/admin/partition')}}/" + ids,
			{
				'_method': 'delete',
				'_token': "{{csrf_token()}}"
			},

			function(data) {
				if(data == 1) {
					th.parents('tr').remove();
				}
			}
		);
		return false;
	})
	
</script>
@stop