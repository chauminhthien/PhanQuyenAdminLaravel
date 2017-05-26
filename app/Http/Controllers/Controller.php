<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Group;
use App\Privilege;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        if(Auth::check() && Auth::user()->admin == 1){
            $this->admin_app();
            
        }
		
   	
    	
    }

    function admin_app(){
    	$user = Auth::user();

    	view()->share(['TT_Admin' => $user]);
    }

    
}
