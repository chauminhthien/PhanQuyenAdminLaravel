<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('admin.user.add');
// });

Route::get('admin/get-quyen-admin', 'UserController@getQuyenAdmin');

Route::get('admin/get-menu-con', 'PrivilegeController@getMenuCon');
Route::get('admin/get-danh-sach-quyen-con', 'GroupController@getDanhSachQuyenCon');
Route::get('admin/dang-nhap', 'UserController@getDangNhap');
Route::post('admin/dang-nhap', 'UserController@postDangNhap');
Route::get('admin/dang-xuat', 'UserController@getDangXuat');

Route::get('admin/error', 'UserController@getError');


Route::group(['prefix' => 'admin', 'middleware' => 'TT_AdminCheck'],function(){


	Route::group(['prefix' => 'quyen'],function(){


		Route::get('danh-sach-quyen', 'PrivilegeController@getDSQuyen');

		Route::get('them-quyen-moi', 'PrivilegeController@getThemQuyen');
		Route::post('them-quyen-moi', 'PrivilegeController@postThemQuyen');

		Route::get('sua-quyen/{id}', 'PrivilegeController@getSuaQuyen');
		Route::post('sua-quyen/{id}', 'PrivilegeController@postSuaQuyen');

		Route::get('xoa-quyen/{id}', 'PrivilegeController@getXoaQuyen');


	});

	Route::group(['prefix' => 'user'],function(){


		Route::get('danh-sach-user', 'UserController@getUser');

		Route::get('edit-user/{id}', 'UserController@getEdit');
		Route::post('edit-user/{id}', 'UserController@postEdit');
		
		Route::get('thong-tin-ca-nhan', 'UserController@getThongTinCaNhan');

	});

	Route::group(['prefix' => 'group'],function(){


		Route::get('danh-sach-group', 'GroupController@getGroup');

		Route::get('phan-quyen-group/{id}', 'GroupController@getPhanQuyen');
		Route::post('phan-quyen-group/{id}', 'GroupController@postPhanQuyen');

		Route::get('them-group-moi', 'GroupController@getThemGroup');
		Route::post('them-group-moi', 'GroupController@postThemGroup');
		


	});


});