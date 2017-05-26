@extends('admin.layout.index')
@section('title')
	Thêm Group Mới
@endsection

@section('content')
	<section id="main-content" class=" ">
            <section class="wrapper main-wrapper row" style=''>
                <div class='col-xs-12'>
                    <div class="page-title">
                        <div class="pull-left">
                            <h1 class="title">Thêm Group Mới</h1>
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Điền Thông Tin Group</h2>
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
                                <form action ="../admin/group/them-group-moi" method="post">
                                    <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Tên Group Mới</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="" name="group" class="form-control" id="field-120334">
                                            </div>

                                        </div>
                                        @foreach($quyen as $q)
                                            <div class="form-group" id="form-group-{{$q->id}}">
                                                
                                                  <label class="radio-inline">
                                                      <input name="quyen[]" class="menu9" value="{{$q->id}}" type="checkbox"> {{$q->name}} 
                                                  </label>
                                                  <ul style="list-style: none">
                                                      
                                                  </ul>
                                                
                                            </div>
                                        @endforeach
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
            $('input.menu9').click(function(){
                var id = $(this).val();
                if($(this).is(":checked")){
                   $.get(
                        '../admin/get-danh-sach-quyen-con',
                        {
                            id : id
                        },function(data){
                            $('#form-group-'+ id + ' ul').append(data);
                        }
                    );
                    
                }else if($(this).is(":not(:checked)")){
                    $('#form-group-'+ id + ' ul').html('');

                    
                }
            });
        });
   </script>
@endsection
