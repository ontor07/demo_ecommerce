@extends('admin.layouts.master')
 @section('content')
 
    <section class="section">
      <div class="section-header">
        @component('components.beardcrumb')
          @slot('page_index')
          Slider
          @endslot
          @slot('page_link')
          {{ route('admin.slider.index') }}
          @endslot

          @slot('btn_name')
          View
          @endslot
          @slot('btn_link')
          {{ route('admin.slider.index') }}
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
                <h4>Edit  Slider</h4>
              </div>

            <form action="{{ route('admin.slider.update',$slider->id) }} " method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
             <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                          <label>Preview</label>
                          <img src="{{ asset($slider->image) }}" alt="" width="120px">
                          
                        </div>   
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                          <label>Banner</label>
                          <input type="file" class="form-control" name="image">
                          
                        </div>   
                    </div>
                    
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>Type</label>
                          <input type="text" class="form-control" name="type" value="{{ $slider->type }}">
                        </div>   
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                        </div>   
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>Starting Prize</label>
                          <input type="text" class="form-control" name="starting_prize" value="{{ $slider->starting_prize }}" >
                        </div>   
                    </div>
                    
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>Button Url</label>
                          <input type="text" class="form-control" name="btn_url" value="{{ $slider->btn_url }}">
                        </div>   
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label>Order By</label>
                          <input type="text" class="form-control" name="order_by" value="{{$slider->order_by }}">
                        </div>   
                    </div>
               
             
                    <div class="col-12 col-md-4">
                      <label>Status</label>
                        <div class="form-check col-12">
                          <input class="form-check-input" type="radio" name="status" id="status1" value="1" {{ $slider->status== 1 ? 'checked': '' }} >
                          <label class="form-check-label" for="status1">
                            Active
                          </label>
                        </div>
                        <div class="form-check col-12">
                          <input class="form-check-input" type="radio" name="status" id="status2" value="0" {{ $slider->status== 0 ? 'checked': '' }}  >
                          <label class="form-check-label" for="status2">
                          Inactive
                          </label>
                        </div>
                    </div>
                    
                      <div class="modal-footer col-12 ">
                        <button type="submit" class="btn btn-info ">Update</button>
                      </div>
                  </div>

                    
                   
              </div>
                
            </form>
            
            
          </div>
         
        </div>
      </div>
    </section>
 
 @endsection


