<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Privilege;


class PrivilegeController extends Controller
{
    //
    public function getDSQuyen(){
    	$quyen = Privilege::all();
    	return view('admin.quyen.view',['quyen' => $quyen]);
    }

    public function getThemQuyen(){
    	return view('admin.quyen.add');
    }

    public function getMenuCon(Request $request){
    	
    	$quyen = Privilege::where('menu_id', '0')->get();
    	

    	if(isset($request->id)){
    		$check = Privilege::find($request->id);
    		foreach ($quyen  as $value) {
	    		if($request->id == $value->id){
	    			continue;
	    		}

	    		$sel = ($check->menu_id == $value->id) ? 'selected="selected"' : '';
	    		//echo $sel; 
	    		echo '<option '.$sel.' value="'.$value->id.'" >'. $value->name.'</option>';
    		}
    	}else{
    		foreach ($quyen  as $value) {
	    		if($request->id == $value->id){
	    			continue;
	    		}
	    		echo '<option value="'.$value->id.'" >'. $value->name.'</option>';
    		}

    	}
    	
    	
    }

    public function postThemQuyen(Request $request){

    	$this->validate($request, [
    			'quyen' 			=> 'required|min:3|max:32',
    			'icon' 				=> 'min:3|max:32',
    			'action' 			=> 'min:3|max:32',

    		],[
    			'quyen.required' 	=> 'Name không được trống',
    			'quyen.min' 		=> 'Name quá ngắn',
    			'quyen.max' 		=> 'Name quá dài',
    			'icon.min' 			=> 'Icon quá ngắn',
    			'icon.max' 			=> 'Icon quá dài',
    			'action.min' 		=> 'Action quá ngắn',
    			'action.max' 		=> 'Action quá dài',

    		]);


    	$quyen 					= new Privilege();
    	$quyen->name 			= $request->quyen;
    	$quyen->nameKhongDau 	= changeTitle($request->quyen);
        if(isset($request->action)){
            $quyen->action      = $request->action;
        }
    	
        if(isset($request->icon)){
            $quyen->icon        =  $request->icon;
        }


    	if(isset($request->menuid)){
    		$quyen->menu_id 	= $request->menuid;
    	}else{
    		$quyen->menu_id = 0;
    	}

    	if(isset($request->hien)){
    		$quyen->hien = 0;
    	}else{
    		$quyen->hien = 1;
    	}
    	$quyen->save();
    	return back()->with('thongbao', 'Thêm Mới Thành Công');
    }

    public function getSuaQuyen($id){
    	$quyen = Privilege::find($id);
        //echo count($quyen);die();
    	return view('admin.quyen.edit', ['quyen' => $quyen]);
    }

    public function postSuaQuyen(Request $request, $id){
    	$this->validate($request, [
    			'quyen' 			=> 'required|min:3|max:32',
    			'icon' 				=> 'min:3|max:32',
    			'action' 			=> 'min:3|max:32',

    		],[
    			'quyen.required' 	=> 'Name không được trống',
    			'quyen.min' 		=> 'Name quá ngắn',
    			'quyen.max' 		=> 'Name quá dài',
    			'icon.min' 			=> 'Icon quá ngắn',
    			'icon.max' 			=> 'Icon quá dài',
    			'action.min' 		=> 'Action quá ngắn',
    			'action.max' 		=> 'Action quá dài',

    		]);


    	$quyen                       = Privilege::find($id);
    	$quyen->name                 = $request->quyen;
    	$quyen->nameKhongDau         = changeTitle($request->quyen);
    	$quyen->action 			     = $request->action;
         $quyen->icon                = $request->icon;
    	

    	if(isset($request->hien)){
    		$quyen->hien = 0;
    	}else{
    		$quyen->hien = 1;
    	}
        if(isset($request->menuid)){
            $quyen->menu_id = $request->menuid;
           
        }else{
            $quyen->menu_id = 0;
            $quyen->hien = 0;
        }

    	$quyen->save();

    	return back()->with('thongbao', 'Update Thành Công');
    }

    public function getXoaQuyen($id){
    	$quyen = Privilege::where('menu_id', $id)->get();
    	if(count($quyen) > 0){
    		return back()->with('loi', 'Bạn Không Được Xoá Menu Chính');
    	}else{
    		$q = Privilege::find($id);
    		$q->delete();
    		return back()->with('thongbao', 'Bạn Đã Xoá Thành Công');

    	}
    }
}
