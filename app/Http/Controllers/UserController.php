<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

use App\User;
use App\Group;

class UserController extends Controller
{
    //
    public function getUser(){

    	$user = User::all();
    	return view('admin.user.view',['user' => $user]);
    }

    public function getEdit($id){
    	$user = User::find($id);
    	return view('admin.user.edit',['user' => $user]);
    }

    public function getQuyenAdmin(Request $request){
    	$id =  $request->id;

    	$user = User::find($id);
    	$group = Group::all();

    	foreach ($group as  $value) {
    		$check = ($value->id == $user->group_id) ? 'selected="selected"' : '';
    		echo '<option value="'.$value->id.'" '.$check.' >'. $value->name.'</option>';
    	}

    }

    public function postEdit(Request $request, $id){
    	$user = User::find($id);
    	if($request->admin == 1){
    		$user->group_id = $request->group;
    		$user->admin = 1;
    	}else if($request->admin == 0){
    		$user->group_id = 0;
    		$user->admin = 0;
    	}

    	$user->save();

    	return back()->with('thongbao', 'Chỉnh sửa thành công');
    }


    public function getDangNhap(){
        return view('admin.login.login');
    }

    public function postDangNhap(Request $request){
        $this->validate($request,[
                'email'                 => 'required|email',
                'password'              => 'required|min:3|max:32',
            ],[
                'email.required'        => 'Name Không được để trống',
                'email.email'           => 'Email Không đúng định dạng',
                'password.required'     => 'PassWord Không được để trống',
                'password.min'          => 'PassWord quá ngắn',
                'password.max'          => 'PassWord quá dài',

            ]);

        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password])){
            return redirect('admin/user/thong-tin-ca-nhan');
        }else{
            return back()->with('loi','Thông Tin Đăng Nhập Không Đúng');
        }
    }

    public function getDangXuat(){
        Auth::logout();

        return back();
    }

    public function getError(){
        return view('admin.error.index');
    }

    public function getThongTinCaNhan(){
        return view('admin.user.info');
    }
}
