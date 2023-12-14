<div>
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ $page_link }}">{{ $page_index }}</a></li>
          {{-- <li class="breadcrumb-item active" aria-current="page">{{ $page_index }}</li> --}}
        </ol>
    </nav>
</div>
<div class="section-header-breadcrumb">
   <a class="btn btn-primary"  href="{{ $btn_link }}"><i class="fas fa-eye" s></i>  {{ $btn_name }}</a>
  </div>