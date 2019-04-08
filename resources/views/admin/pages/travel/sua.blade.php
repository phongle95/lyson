@extends('admin.menu.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      {{--  @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif  --}}
      <!-- DATA TABLE -->
      <div class="card">
         <div class="card-header">
            <strong>Sửa Tour Du Lịch</strong>
         </div>
         <div class="card-body card-block">
            <form action="{{ route('admin.pages.travel.sua',$travel->id) }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tên Tour Du Lịch</label><br><br>
                     <input type="text" id="text-input" name="tenTour" value="{{ $travel->tenTour }}" placeholder="Nhập Tên Tour" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Title SEO</label><br><br>
                     <input type="text" id="text-input" name="title" value="{{ $travel->title }}" placeholder="Nhập Title" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tóm Tắt</label><br>
                     <input type="text" id="text-input" name="tomTat" value="{{ $travel->tomTat }}" placeholder="Nhập Tóm Tắt" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Keyword Meta (SEO)</label><br>
                     <input type="text" id="text-input" name="keyword" value="{{ $travel->keyword }}" placeholder="Nhập Keyword" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Giá Tour</label><br>
                     <input type="number" id="text-input" name="gia" value="{{ $travel->gia }}" placeholder="Nhập Giá Tour" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-6">
                     <label class="badge badge-info">Chọn Hình</label><br>
                     <input type="file" style="width:200px" name="img">
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="badge badge-info">Hình Củ</label><br>
                     <img src="/upload/{{ $travel->img }}" width="200px" height="150px" alt="salme">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-3">
                     <label class="badge badge-info">Chọn Ngày</label><br>
                     <input type="date" id="text-input" name="date" value="{{ $travel->date }}" placeholder="Chọn Ngày" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Nội Dung Tour</label><br>
                     <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="noiDung">{{ $travel->noiDung }}</textarea>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Chọn Khuyến Mãi</label><br>
                     <select name="khuyenMai" class="form-control">
                        @if ($travel->khuyenMai === 0)
                        <option value="0" selected >Không Khuyến Mãi</option>
                        <option value="1">Khuyến Mãi</option>
                        @else
                        <option value="0">Không Khuyến Mãi</option>
                        <option value="1" selected>Khuyến Mãi</option>
                        @endif
                     </select>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Sửa
                  </button>
                  <a href="{{ route('admin.pages.travel.danhsach') }}" class="btn btn-info btn-fw">
                  Quay về
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
