@extends("admin.layout.main")

@section("content-header")
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            后台管理
            <small>用户列表</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="/admin">
                    <i class="fa fa-dashboard"></i> Admin</a>
            </li>
            <li class="active">User</li>
        </ol>
    </section>
@endsection

@section("content")
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a class="btn btn-sm btn-twitter"><i class="fa fa-download"></i> Export</a>
                            <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/admin/users/export" target="_blank">All Users</a></li>
                                <li><a href="/admin/signin/export" target="_blank">Signin Records</a></li>
                            </ul>
                        </div>
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a href="/admin/users/upload" class="btn btn-sm btn-twitter">
                                <i class="fa fa-upload"></i>&nbsp;&nbsp;Import
                            </a>
                        </div>
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a href="/admin/users/create" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;New
                            </a>
                        </div>
                        {{--<h3 class="box-title">Sign in record</h3>--}}
                    </div>
                    <div class="box-body">
                        <table id="usertable" class="table table-hover">
                            <thead>
                            <tr>
                                <th> </th>
                                <th>#</th>
                                <th>姓名</th>
                                <th>部门</th>
                                <th>年级</th>
                                <th>联系方式</th>
                                <th>拥有角色</th>
                                <th>更新时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="grid-row-checkbox" data-id="{{$user->id}}" />
                                    </td>
                                    <td>
                                        {{++$loop->index}}
                                    </td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        <span class='label label-info'>{{$user->department}}</span>
                                    </td>
                                    <td>
                                        {{$user->grade}}
                                    </td>
                                    <td>
                                        {{$user->phone}}
                                    </td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            {{--<span class='label label-success'>Administrator</span>--}}
                                            <span class='label label-success'>{{$role->display_name}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        {{$user->updated_at}}
                                    </td>
                                    <td>
                                        <a href="users/{{$user->id}}/role"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{--<div class="box-footer clearfix">--}}
                    {{--</div>--}}
                </div>



                {{--<div class="box">--}}
                    {{--<div class="box-header">--}}
                        {{--<h3 class="box-title"></h3>--}}
                        {{--<div class="pull-right">--}}
                            {{--<div class="btn-group pull-right" style="margin-right: 10px">--}}
                                {{--<a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#filter-modal"><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</a>--}}
                                {{--<a href="http://laravel-admin.org/demo/auth/users" class="btn btn-sm btn-facebook"><i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</a>--}}
                            {{--</div>--}}
                            {{--<div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog" role="document">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-header">--}}
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                {{--<span aria-hidden="true">&times;</span>--}}
                                                {{--<span class="sr-only">Close</span>--}}
                                            {{--</button>--}}
                                            {{--<h4 class="modal-title" id="myModalLabel">Filter</h4>--}}
                                        {{--</div>--}}
                                        {{--<form action="http://laravel-admin.org/demo/auth/users" method="get" pjax-container>--}}
                                            {{--<div class="modal-body">--}}
                                                {{--<div class="form">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<label>ID</label>--}}
                                                            {{--<div class="input-group">--}}
                                                                {{--<div class="input-group-addon">--}}
                                                                    {{--<i class="fa fa-pencil"></i>--}}
                                                                {{--</div>--}}
                                                                {{--<input type="text" class="form-control id" placeholder="ID" name="id" value="">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="modal-footer">--}}
                                                {{--<button type="submit" class="btn btn-primary submit">Submit</button>--}}
                                                {{--<button type="reset" class="btn btn-warning pull-left">Reset</button>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="btn-group pull-right" style="margin-right: 10px">--}}
                                {{--<a class="btn btn-sm btn-twitter"><i class="fa fa-download"></i> Export</a>--}}
                                {{--<button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--<span class="caret"></span>--}}
                                    {{--<span class="sr-only">Toggle Dropdown</span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="/demo/auth/users?_export_=all" target="_blank">All</a></li>--}}
                                    {{--<li><a href="/demo/auth/users?_export_=page%3A1" target="_blank">Current page</a></li>--}}
                                    {{--<li><a href="/demo/auth/users?_export_=selected%3A__rows__" target="_blank" class='export-selected'>Selected rows</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--&nbsp;&nbsp;--}}
                            {{--<div class="btn-group pull-right" style="margin-right: 10px">--}}
                                {{--<a href="/admin/users/create" class="btn btn-sm btn-success">--}}
                                    {{--<i class="fa fa-save"></i>&nbsp;&nbsp;New--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span>--}}
             {{--<a class="btn btn-sm btn-primary grid-refresh"><i class="fa fa-refresh"></i> Refresh</a>--}}
        {{--</span>--}}
                    {{--</div>--}}
                    {{--<!-- /.box-header -->--}}
                    {{--<div class="box-body table-responsive no-padding">--}}
                        {{--<table class="table table-hover table-striped">--}}
                            {{--<tr>--}}
                                {{--<th> </th>--}}
                                {{--<th>#<a class="fa fa-fw fa-sort" href="http://laravel-admin.org/demo/auth/users?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc"></a></th>--}}
                                {{--<th>姓名</th>--}}
                                {{--<th>部门</th>--}}
                                {{--<th>年级</th>--}}
                                {{--<th>联系方式</th>--}}
                                {{--<th>拥有角色</th>--}}
                                {{--<th>更新时间</th>--}}
                                {{--<th>操作</th>--}}
                            {{--</tr>--}}
                            {{--@foreach($users as $user)--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<input type="checkbox" class="grid-row-checkbox" data-id="{{$user->id}}" />--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--{{$user->id}}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--{{$user->name}}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<span class='label label-info'>{{$user->department}}</span>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--{{$user->grade}}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--{{$user->phone}}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--@foreach($user->roles as $role)--}}
                                        {{--<span class='label label-success'>Administrator</span>--}}
                                        {{--<span class='label label-success'>{{$role->display_name}}</span>--}}
                                    {{--@endforeach--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--{{$user->updated_at}}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<a href="users/{{$user->id}}/role"><i class="fa fa-edit"></i></a>--}}
                                    {{--<a href="javascript:void(0);"><i class="fa fa-trash"></i></a>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}
                        {{--</table>--}}
                    {{--</div>--}}
                    {{--<div class="box-footer clearfix">--}}
                        {{--{{$users->links()}}--}}
                    {{--</div>--}}
                    {{--<!-- /.box-body -->--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
@endsection

@section('page-js')
    <script src="{{ asset("bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{ asset("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
    <script src="{{ asset("js/admin/app.js")}}"></script>
@endsection