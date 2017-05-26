<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Group;
use App\Privilege;
class GroupController extends Controller
{
    //

    public function getGroup(){
    	$group = Group::all();

    	return view('admin.group.view', ['group' => $group]);
    }

    public function getPhanQuyen($id){
    	$group = Group::find($id);
    	$quyen = Privilege::where('menu_id', 0)->get();
    	return view('admin.group.edit', ['group' => $group, 'quyen' => $quyen]);
    }

    public function getDanhSachQuyenCon(Request $request){

    	$quyen = Privilege::where('menu_id', $request->id)->get();

    	

    	if(isset($request->gr)){
    		$group = Group::find($request->gr);
    		$arr = [];
        	$arr = explode(',', $group->privilege_id);
        	
        	if(count($quyen)>0){
	    		foreach ($quyen as  $value) {
	    			
		    			$txt =  '<li>
		    					<label class="radio-inline">
	                          		<input name="quyen[]"  value="'.$value->id.'" type="checkbox" 
									';
						foreach ($arr as $cp) {
							if($cp == $value->id){
								$txt .= 'checked="checked" ';
							}
						}
	                    $txt .= ' > '.$value->name.'
	                      		</label>
	                      </li>';

	                  echo $txt;
	                
		    	}
	    	}
        	
    	}else{
    		if(count($quyen)>0){
	    		foreach ($quyen as  $value) {
		    		echo '<li>
		    					<label class="radio-inline">
	                          		<input name="quyen[]"  value="'.$value->id.'" type="checkbox"> '.$value->name.'
	                      		</label>
	                      </li>';
		    	}
	    	}
    	}
    	
    }

    public function getThemGroup(){
    	$quyen = Privilege::where('menu_id', 0)->get();
    	return view('admin.group.add',['quyen' => $quyen]);
    }

    public function postThemGroup(Request $request){
    	$this->validate($request, [
    			'group' 			=> 'required|min:3|max:32'
    		], [
    			'group.required' 	=> 'Tên group không được trống',
    			'group.min' 		=> 'Tên Group quá ngắn',
    			'group.max' 		=> 'Tên Group quá ngắn',
    		]);

    	$group 					=  new Group();
    	$group->name 			= $request->group;
    	$group->nameKhongDau 	= changeTitle($request->group);

    	$quyen = '';
       	if(count($request->quyen)){
            foreach ($request->quyen as  $value) {
                $quyen .=  $value . ',';
           }
           $quyen = substr($quyen, 0,-1);
       	}

       	$group->privilege_id = $quyen;

       	$group->save();
       	return back()->with('thongbao', 'Thêm Group Mới Thành Công');
    }


    public function postPhanQuyen(Request $request, $id){
    	$this->validate($request, [
    			'group' 			=> 'required|min:3|max:32'
    		], [
    			'group.required' 	=> 'Tên group không được trống',
    			'group.min' 		=> 'Tên Group quá ngắn',
    			'group.max' 		=> 'Tên Group quá ngắn',
    		]);

    	$group 					=  Group::find($id);
    	$group->name 			= $request->group;
    	$group->nameKhongDau 	= changeTitle($request->group);
       

    	$quyen = '';
       	if(count($request->quyen)){
            foreach ($request->quyen as  $value) {
                $quyen .=  $value . ',';
           }
           $quyen = substr($quyen, 0,-1);
       	}

       	$group->privilege_id = $quyen;

       	$group->save();
       	return back()->with('thongbao', 'Chỉnh sửa Thành Công');
    }



}
