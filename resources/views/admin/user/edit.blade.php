@extends('admin.layout.index')
@section('title')
	{{$user->name}}
@endsection

@section('content')
	<section id="main-content" class=" ">
            <section class="wrapper main-wrapper row" style=''>
                <div class='col-xs-12'>
                    <div class="page-title">
                        <div class="pull-left">
                            <h1 class="title">Edit {{$user->name}}</h1>
                        </div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Basic Info : {{$user->name}}</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
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
                            <div class="row">
                                <form action ="../admin/user/edit-user/{{$user->id}}" method="post">
                                    <div class="form-group">
                                        <label class="form-label">Hình Ảnh</label>
                                        <span class="desc"></span>
                                        <img class="img-responsive" src="TT_Admin/data/profile/{{$user->img}}" alt="" style="max-width:120px;">
                                        <label class="radio-inline">
                                                <input type="radio" name="admin" value="1" 
                                                @if($user->admin == 1)
                                                    checked="checked"
                                                @endif
                                                 /> Người Quản Trị <br/>
                                                 
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio"   name="admin"  value="0" 
                                                @if($user->admin == 0)
                                                    checked="checked"
                                                @endif
                                                 /> Thành Viên
                                        </label>
                                    </div>

                                    <div class="form-group" id="admin">
                                        
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                            <div class="text-left">
                                                 <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn">Cancel</button>
                                            </div>
                                    </div>
                                        
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
         
            
            var id = $('input[name=admin]:checked').val();
            
            if(id == 0){
                 $('#admin').html('');
            }else if(id == 1){
                $('#admin').append('<label class="form-label" >Blog Title</label>');
                $('#admin').append('<select class="form-control" name="group"></select>');

                $.get(
                    '../admin/get-quyen-admin/',
                    {
                        id : <?php echo $user->id; ?>
                    },function(data){
                        $('#admin select').append(data);
                    }
                );
            }

            $('input[name=admin]').click(function(){

                if($(this).is(":checked")){
                    id =  $(this).val();
                    if(id == 0){
                         $('#admin').html('');
                    }else if(id == 1){
                        $('#admin').append('<label class="form-label" >Blog Title</label>');
                        $('#admin').append('<select class="form-control" name="group"></select>');

                        $.get(
                            '../admin/get-quyen-admin/',
                            {
                                id : <?php echo $user->id; ?>
                            },function(data){
                                $('#admin select').append(data);
                            }
                        );
                    }
                }
            });
        });
   </script>
@endsection

