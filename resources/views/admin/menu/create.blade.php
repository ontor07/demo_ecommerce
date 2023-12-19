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
          View
          @endslot
          @slot('btn_link')
          {{ route('admin.menu.index') }}
          @endslot
          @slot('btn_icon')
          fas fa-eye
          @endslot
        @endcomponent
        
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Create Menu</h4>
              </div>

            <form action="{{ route('admin.menu.store') }}" method="post">
              @csrf
             <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-4">
                      <div class="form-group">
                        <label>Select Parent</label>
                        <select class="form-control Selectric" name="parent_id">
                          <option value="">Select One</option>
                          @if ($parent)
                            @foreach ($parent as $p  )
                            <option value="{{ $p->id }}">{{ $p->menu_name_en }}</option>
                            @endforeach
                          @endif
                       
                          
                         
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>English Name</label>
                          <input type="text" class="form-control" name="menu_name_en">
                        </div>   
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>Bangla Name</label>
                          <input type="text" class="form-control" name="menu_name_bn">
                        </div>   
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>Route Name</label>
                          <input type="text" class="form-control" name="route_name">
                        </div>   
                    </div>
                    
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>Order By</label>
                          <input type="text" class="form-control" name="order_by">
                        </div>   
                    </div>
                    <div class="col-12 col-md-4">
                      <div class="form-group">
                        <label>Menu Icon</label>
                        <br>
                        <button class="btn btn-primary px-5" role="iconpicker" data-selected-class="btn-danger"
                        data-unselected-class="btn-info" name="icon"></button>
                        {{-- <input type="text" class="form-control" name="icon"> --}}
                      </div>   
                  </div>
                    <div class="col-12 col-md-4">
                      <label>Type</label>
                        <div class="form-check col-12">
                          <input class="form-check-input" type="radio" name="type" id="type1" checked  value="1">
                          <label class="form-check-label" for="type1">
                            Parent
                          </label>
                        </div>
                        <div class="form-check col-12">
                          <input class="form-check-input" type="radio" name="type" id="type2" value="2" >
                          <label class="form-check-label" for="type2">
                          Module
                          </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                      <label>Status</label>
                        <div class="form-check col-12">
                          <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked >
                          <label class="form-check-label" for="status1">
                            Active
                          </label>
                        </div>
                        <div class="form-check col-12">
                          <input class="form-check-input" type="radio" name="status" id="status2" value="0" >
                          <label class="form-check-label" for="status2">
                          Inactive
                          </label>
                        </div>
                    </div>
                      <div class="modal-footer col-12 ">
                        <button type="submit" class="btn btn-success ">Save</button>
                      </div>
                  </div>

                    
                   
              </div>
                
            </form>
            
            
          </div>
         
        </div>
      </div>
    </section>
 
 @endsection


