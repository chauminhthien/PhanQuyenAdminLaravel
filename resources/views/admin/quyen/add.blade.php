@extends('admin.layout.index')
@section('title')
	Thêm Quyền Mới
@endsection

@section('content')
	<section id="main-content" class=" ">
            <section class="wrapper main-wrapper row" style=''>
                <div class='col-xs-12'>
                    <div class="page-title">
                        <div class="pull-left">
                            <h1 class="title">Thêm Quyền Mới</h1>
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Điền Thông Tin Quyền</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $loi)
                                    
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    
                                    {{$loi}} <br/>
                                @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <div class="content-body">
                            <div class="row">
                                <form action ="../admin/quyen/them-quyen-moi" method="post">
                                    <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Tên Quyền Mới</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="" name="quyen" class="form-control" id="field-120334">
                                            </div>

                                            <label class="radio-inline">
                                                <input type="checkbox" id="checkmenu" checked="checked" /> Menu Chính
                                              </label>

                                        </div>

                                        <div class="form-group" id="menu">
                                        </div>
                                        <div class="form-group" id="action">
                                        </div>
                                    </div>


                                     <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                            <div class="text-left">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn">Cancel</button>
                                            </div>
                                    </div>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                </form>
                                </div>
                            </div>
                    </section>
                    </div>
            </section>
        </section>
@endsection

@section('script')
   <script type="text/javascript">
       
        $(document).ready(function(){
            if($('#checkmenu').is(":checked")){
                $('#menu').append('<label class="form-label" for="field-120334">Icon</label>');
                $('#menu').append(`<div class="controls">
                    <input type="text" value="" name="icon" class="form-control" id="field-120334">
                </div>`);
            }
            else if($('#checkmenu').is(":not(:checked)")){
                $('#menu').html('');
                 $('#action').html('');
                $('#menu').append('<label class="form-label" for="field-120334">Menu Con Của</label>');
                $('#menu').append('<select class="form-control" id="menuid" name="menuid"></select>');
                $('#action').append(` <div class="form-group">
                                            <label class="form-label" for="field-1">Action</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="" name="action" class="form-control" id="field-1">
                                            </div>`);

                $.get(
                    '../admin/get-menu-con',
                    {
                        
                    },function(data){
                       $('#menuid').html(data);
                    }
                );
                $('#menu').append(`<label class="radio-inline">
                    <input type="checkbox" name="hien"  /> Menu Phụ
                      </label>`);
            }

            $('#checkmenu').click(function(){
                if($(this).is(":checked")){
                    $('#menu').html('');
                     $('#action').html('');
                    $('#menu').append('<label class="form-label" for="field-120334">Icon</label>');
                    $('#menu').append(`<div class="controls">
                        <input type="text" value="" name="icon" class="form-control" id="field-120334">
                    </div>`);
                }else if($(this).is(":not(:checked)")){
                    $('#menu').html('');
                    $('#action').html('');
                    $('#menu').append('<label class="form-label" for="field-120334">Menu Con Của</label>');
                    $('#menu').append('<select class="form-control" id="menuid" name="menuid"></select>');
                     $('#action').append(` <div class="form-group">
                                            <label class="form-label" for="field-1">Action</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="" name="action" class="form-control" id="field-1">
                                            </div>`);

                    $.get(
                        '../admin/get-menu-con',
                        {
                            
                        },function(data){
                            console.log(data);
                           $('#menuid').html(data);
                        }
                    );
                    $('#menu').append(`<label class="radio-inline">
                        <input type="checkbox"  name="hien"  /> Menu Phụ
                      </label>`);
                }
            });
        });
   </script>
@endsection
