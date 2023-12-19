<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu"> 
        @if($menu)
        @foreach ($menu as $m )

          @if($m->type == 1)
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="{{ $m->icon }}"></i> <span>{{ $m->menu_name_en }}</span></a>
            <ul class="dropdown-menu">
              
              @php
                $module = DB::table('menus')->where('parent_id','!=',0)->where('type',2)->get();
              @endphp
             
              @foreach ($module as $sm )
              @if($m->id == $sm->parent_id)
              <li>
                <a class="nav-link" href="{{ url('admin')}}/{{ $sm->route_name }} ">
                  {{ $sm->menu_name_en  }}</a>
              </li>
              @endif
              @endforeach
            
           
             
            </ul>
          </li> 
          @else
            @if($m->parent_id == 0)
            <li>
              <a class="nav-link" href="{{ url('admin')}}/{{ $m->route_name }}"><i class="{{ $m->icon }}"></i> <span>{{ $m->menu_name_en }}</span></a>
            </li>
            @endif


          @endif

        @endforeach
        @endif
       
        
        
      
      
        
        
      </ul>

    </aside>
  </div>