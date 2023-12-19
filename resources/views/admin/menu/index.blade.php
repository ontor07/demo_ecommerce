@extends('admin.layouts.master')
 @section('content')
 
    <section class="section">
      <div class="section-header">
        @component('components.beardcrumb')
          @slot('page_index')
          Menu
          @endslot
          @slot('page_link')
          {{ route('admin.menu.create') }}
          @endslot

          @slot('btn_name')
          Create New
          @endslot
          @slot('btn_link')
          {{ route('admin.menu.create') }}
          @endslot
          @slot('btn_icon')
          fas fa-plus
          @endslot
        @endcomponent
        
      </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                        <h4>All Menu</h4>
                      </div>
                    <div class="card-body">
                      <ul class="nav nav-pills" id="myTab3" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Deleted At</a>
                        </li>
                      
                      </ul>
                      <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                            <div class="card-body">

                              {{ $dataTable->table() }}
                           
                            </div>
                                                                                                
                        </div>
                        <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                            <div class="card-body">
                              @php
                              use App\DataTables\MenuDataTable;
                              use App\Models\menu;
                            $deleted = menu::onlyTrashed()->get();
                            
                            @endphp
                              @if($deleted)
                                {{ $dataTable->table() }}
                              @else
                              ''
                              @endif
                                     {{-- <div class="table-responsive">
                                <table class="table table-bordered table-md" id="myTable">
                                   <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Parent</th>
                                        <th>Menu Name</th>
                                        <th>Icon</th>
                                        <th>Route</th>
                                        <th>Order By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                   </thead>
                                    <tbody>
                                        @if($menu)
                                    @foreach ($menu as $m )
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                @php
                                                    if($m->parent_id > 0)
                                                    {
                                                        $parent_name =DB::table('menus')->where('id',$m->parent_id)->first();
                                                    }
                                                    else{
                                                        $parent_name = '-';
                                                    }
                                                @endphp
                                                @if($m->parent_id >0)
                                                {{ $parent_name->menu_name_en }} 
                                                @else
                                                {{ $parent_name }}
                                                @endif 
                                            </td>
                                            <td>{{ $m->menu_name_en }}</td>
                                            <td><i class="{{ $m->icon }}"></i></td>
                                            <td>{{ $m->route_name }}</td>
                                            <td>{{ $m->order_by }}</td>
                                           
                                            <td>
                                               @if ($m->status == 1)
                                               <div class="badge badge-success">Active</div>
                                               @else
                                                <div class="badge badge-danger">Inactive</div>
                                               
                                               @endif
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                <a href="#" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></a>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                   
                                </table>
                                </div> --}}
                            </div>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              
            </div>
     
          
        
        </div>
      
    </section>
 
 @endsection

 @push('scripts')
 {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
