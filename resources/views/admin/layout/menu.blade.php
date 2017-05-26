<ul class='wraplist'>
    @if(isset($TT_Menu))
         
        @foreach($TT_Menu as $menu)  
            @if($menu->menu_id == 0)                
                <li class="">
                    <a href="javascript:;">
                    <i class="{{$menu->icon}}"></i>
                    <span class="title">{{$menu->name}}</span>

                    <span class="arrow ">
                    </a>
                    
                        
                        <ul class="sub-menu" >
                            @foreach($TT_Menu as $menuC)
                                @if($menu->id == $menuC->menu_id && $menuC->hien == 1)
                                <li>
                                    <a class="" href="../{{$menuC->action}}"  >{{$menuC->name}}</a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    
                </li>
            @endif
        @endforeach
    @endif

</ul>