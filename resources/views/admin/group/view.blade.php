@extends('admin.layout.index')
@section('title')
	Danh Sách Group
@endsection
@section('css')
    <link href="TT_Admin/assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="TT_Admin/assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="TT_Admin/assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="TT_Admin/assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
@endsection
@section('content')
	<section id="main-content" class=" ">
                <section class="wrapper main-wrapper row" style=''>
                    <div class='col-xs-12'>
                        <div class="page-title">
                            <div class="pull-left">
                                <h1 class="title">Danh Sách Group</h1>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">All Danh Sách Group</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!-- ********************************************** -->
                                        @if(session('thongbao'))
                                            <div class="alert alert-success">
                                                {{session('thongbao')}}
                                            </div>
                                        @endif
                                        @if(session('loi'))
                                            <div class="alert alert-danger">
                                                {{session('loi')}}
                                            </div>
                                        @endif
                                        <table id="example" class="display table table-hover table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Function</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($group as $g)
                                                    <tr>
                                                        <td>{{$g->id}}</td>
                                                        <td>{{$g->name}}</td>
                                                        <td>
                                                            @if(isset($arrMenu))
                                                               @foreach($arrMenu as $m)
                                                                    <a href="../{{$m->action}}/{{$g->id}}">{{$m->name}}</a> | 
                                                               @endforeach
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                    
                                            </tbody>
                                        </table>
                                        <!-- ********************************************** -->
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </section>
@endsection

@section('script')
        <script src="TT_Admin/assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="TT_Admin/assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
        <script src="TT_Admin/assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
        <script src="TT_Admin/assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>

@endsection