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
                                        轮播图名称
                                    </font>
                                </font>
                            </th>
                            <th>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        轮播图
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
                                        {{$v->rname}}
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <img src="{{$v->rpic}}" alt="" width="100px">
                                    </font>
                                </font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <a href="/admin/rotation/{{$v->id}}/edit" class="btn btn-info">修改</a>
                                        <form action="/admin/rotation/{{$v->id}}" method="post" style="display:inline">
                                        	{{csrf_field()}}
                                        	{{method_field('DELETE')}}
                                        	<button class="btn btn-danger">
                                        		删除
                                        	</button>
                                        </form>
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

@stop