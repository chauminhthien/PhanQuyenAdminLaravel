<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;
use App\Group;
use App\Privilege;


class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       // return $next($request);

        $root = '/Admin/';
        $link = $_SERVER["REQUEST_URI"];
        $TT_Menu = [];
        if(Auth::check() && Auth::user()->admin == 1){
            $this->menuShare();
            $quyen = Auth::user()->userGroup->privilege_id;
            $quyen = explode(',', $quyen);
            $fl = 0;
           
            if(count($quyen)>1){
                foreach ($quyen as  $value) {
                    //echo $value;
                    $q = Privilege::find($value);
                    //echo count($q);die();
                    if(count($q) == 0){
                        continue;
                    }elseif(strlen($q->action) == 0  ){
                         
                         continue;
                    }
                   
                    $subject = $root .  $q->action;
                    $linkq = substr($link, 0, strlen($subject));
                    //echo $subject . '<br/>' . $linkq . '<br/>'; 
                    if($linkq == $subject){

                       // echo $subject . '<br/>' . $linkq . '<br/>';
                        $menu = Privilege::where(['menu_id' => $q->menu_id, 'hien' => 0])->get();
                        
                        $arrMenu = [];

                        


                        if(count($menu) > 0){
                            foreach ($menu as  $v) {
                                foreach ($this->TT_Menu as  $v1) {
                                    if($v1->id == $v->id) $arrMenu[] = $v;
                                }
                                
                            }
                        }
                        

                        view()->share(['arrMenu' => $arrMenu]);
                        
                        return $next($request);
                       
                       $fl = 1;
                    }
                   
                    
                }
                 //die();
            }else{
                return redirect('admin/error')->with('thongbao','Bạn Không có Quyền Đăng Nhập');
            }
            //die();
            if($fl == 0){
                return redirect('admin/error')->with('thongbao','Bạn Không có Quyền Đăng Nhập');
            }
            //return $next($request);
        }else{
            return redirect('admin/dang-nhap')->with('loi','Bạn Không có Quyền Đăng Nhập');
        }
    }

    function menuShare(){
        $menu = [];

        $group = Group::find(Auth::user()->group_id);
        
        $group_id = explode(',', $group->privilege_id);

        foreach ($group_id as  $value) {
            $pri = Privilege::find($value);
            if(count($pri) == 0){
                continue;
            }
            $menu[]  = $pri;
        }

        $this->TT_Menu = $menu;

        view()->share(['TT_Menu' => $menu]);

    }
}
