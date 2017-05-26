@extends('admin.layout.index')
@section('title')
	Dashboard
@endsection

@section('content')
	<section id="main-content" class=" ">
            <section class="wrapper main-wrapper row" style=''>
                <div class='col-xs-12'>
                    <div class="page-title">
                        <div class="pull-left">
                            <h1 class="title">Add a Blog</h1>
                        </div>
                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="blo-blogs.html">Blogs</a>
                                </li>
                                <li class="active">
                                    <strong>Add Blog</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Basic Info</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <form action ="#" method="post">
                                    <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Blog Title</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="" class="form-control" id="field-120334">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        
                                        <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                            <div class="form-group">
                                                <label class="form-label" >Created On</label>
                                                <span class="desc">e.g. "04/03/2015"</span>
                                                <div class="controls">
                                                    <input type="text" value="" class="form-control datepicker" data-format="mm/dd/yyyy" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" >Last Edited</label>
                                                <span class="desc">e.g. "04/03/2015"</span>
                                                <div class="controls">
                                                    <input type="text" value="" class="form-control datepicker" data-format="mm/dd/yyyy" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" >Featured Image</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="file" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" >Blog Tags</label>
                                                <span class="desc"></span>
                                                <select multiple class="form-control">
                                                    <option value="v" >Graphic</option>
                                                    <option value="v" >Web Design</option>
                                                    <option value="v" >Branding</option>
                                                    <option value="v">Web</option>
                                                    <option value="v">SEO</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" >Blog Categories</label>
                                                <span class="desc"></span>
                                                <select multiple class="form-control">
                                                    <option value="v" >Photoshop</option>
                                                    <option value="v" >Logo Design</option>
                                                    <option value="v" >Branding</option>
                                                    <option value="v">Web design</option>
                                                    <option value="v">SEO</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" >Blog Status</label>
                                                <span class="desc"></span>
                                                <select class="form-control">
                                                    <option value="v"></option>
                                                    <option value="v" >New</option>
                                                    <option value="v">Draft</option>
                                                    <option value="v">Published</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-129818">Blog Author</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="text" value="" class="form-control" id="field-129818">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" >Blog Excerpt</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <textarea class="form-control autogrow" cols="5" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                            <div class="text-left">
                                                <button type="button" class="btn btn-primary">Save</button>
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
