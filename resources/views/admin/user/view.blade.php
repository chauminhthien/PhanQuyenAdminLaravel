@extends('admin.layout.index')
@section('title')
	Danh Sách User
@endsection

@section('content')
	<section id="main-content" class=" ">
                <section class="wrapper main-wrapper row" style=''>
                    <div class='col-xs-12'>
                        <div class="page-title">
                            <div class="pull-left">
                                <h1 class="title">All Users</h1>
                            </div>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">All Users</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                       
                                        <div class="row">
                                             @foreach($user as $u)
                                                <div class="col-sm-6 col-md-4 col-lg-3">
                                                    <div class="team-member ">
                                                        <div class="team-img">
                                                            <img class="img-responsive" src="TT_Admin/data/profile/{{$u->img}}" alt="">
                                                        </div>
                                                        <div class="team-info">
                                                            <h4><a href="../admin/user/edit-user/{{$u->id}}">{{$u->name}}</a></h4>
                                                            <span class='team-member-edit'><a href="../admin/user/edit-user/{{$u->id}}"><i class='fa fa-pencil icon-xs'></i></a></span>
                                                            @if($u->group_id > 0)
                                                                <span>{{$u->userGroup->name}}</span>
                                                            @else
                                                                <span>Thành Viên</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                       

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </section>
@endsection

