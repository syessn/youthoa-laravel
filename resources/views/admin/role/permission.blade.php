@extends("admin.layout.main")

@section("content-header")
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            后台管理
            <small>角色权限</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="/admin"><i class="fa fa-dashboard"></i> Admin</a>
            </li>
            <li>
                <a href="/admin/roles"><i class="fa fa-dashboard"></i> Role</a>
            </li>
            <li class="active"> Permission</li>
        </ol>
    </section>
@endsection

@section("content")
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                        <div class="pull-right">
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#filter-modal"><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</a>
                                <a href="http://laravel-admin.org/demo/auth/users" class="btn btn-sm btn-facebook"><i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</a>
                            </div>
                            <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Filter</h4>
                                        </div>
                                        <form action="http://laravel-admin.org/demo/auth/users" method="get" pjax-container>
                                            <div class="modal-body">
                                                <div class="form">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label>ID</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-pencil"></i>
                                                                </div>
                                                                <input type="text" class="form-control id" placeholder="ID" name="id" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary submit">Submit</button>
                                                <button type="reset" class="btn btn-warning pull-left">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a class="btn btn-sm btn-twitter"><i class="fa fa-download"></i> Export</a>
                                <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/demo/auth/users?_export_=all" target="_blank">All</a></li>
                                    <li><a href="/demo/auth/users?_export_=page%3A1" target="_blank">Current page</a></li>
                                    <li><a href="/demo/auth/users?_export_=selected%3A__rows__" target="_blank" class='export-selected'>Selected rows</a></li>
                                </ul>
                            </div>
                            &nbsp;&nbsp;
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a href="/admin/users/create" class="btn btn-sm btn-success">
                                    <i class="fa fa-save"></i>&nbsp;&nbsp;New
                                </a>
                            </div>
                        </div>
                        <span>
             <a class="btn btn-sm btn-primary grid-refresh"><i class="fa fa-refresh"></i> Refresh</a>
        </span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>权限名</th>
                                <th>权限描述</th>
                            </tr>
                            @foreach($myPermissions as $myPermission)
                            <tr>
                                <td>
                                    {{$myPermission->id}}
                                </td>
                                <td>
                                    <span class='label label-success'>{{$myPermission->name}}</span>
                                </td>
                                <td>
                                    {{$myPermission->description}}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        Showing <b>1</b> to <b>5</b> of <b>5</b> entries
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <!-- Previous Page Link -->
                            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            <!-- Pagination Elements -->
                            <!-- "Three Dots" Separator -->
                            <!-- Array Of Links -->
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <!-- Next Page Link -->
                            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                        </ul>
                        <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">
                            <small>Show</small>&nbsp;
                            <select class="input-sm grid-per-pager" name="per-page">
                                <option value="http://laravel-admin.org/demo/auth/users?per_page=10">10</option>
                                <option value="http://laravel-admin.org/demo/auth/users?per_page=20" selected>20</option>
                                <option value="http://laravel-admin.org/demo/auth/users?per_page=30">30</option>
                                <option value="http://laravel-admin.org/demo/auth/users?per_page=50">50</option>
                                <option value="http://laravel-admin.org/demo/auth/users?per_page=100">100</option>
                            </select>
                            &nbsp;<small>entries</small>
                        </label>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection