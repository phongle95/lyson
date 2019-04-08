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
            <strong>Sửa Hotel</strong>
         </div>
         <div class="card-body card-block">
            <form action="{{ route('admin.pages.hotel.sua',$hotel->id) }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tên Hotel</label><br><br>
                     <input type="text" id="text-input" name="tenHotel" value="{{ $hotel->tenHotel }}" placeholder="Nhập Tên Hotel" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Title SEO</label><br><br>
                     <input type="text" id="text-input" name="title" value="{{ $hotel->title }}" placeholder="Nhập Title" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tóm Tắt</label><br>
                     <input type="text" id="text-input" name="description" value="{{ $hotel->description }}" placeholder="Nhập Tóm Tắt" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Keyword Meta (SEO)</label><br>
                     <input type="text" id="text-input" name="keyword" value="{{ $hotel->keyword }}" placeholder="Nhập Keyword" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Giá Hotel</label><br>
                     <input type="number" id="text-input" name="gia" value="{{ $hotel->gia }}" placeholder="Nhập Giá Hotel" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-6">
                     <label class="badge badge-info">Chọn Hình</label><br>
                     <input type="file" style="width:200px" name="img">
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="badge badge-info">Hình Củ</label><br>
                     <img src="/upload/{{ $hotel->img }}" width="200px" height="150px" alt="salme">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Địa Chỉ</label><br>
                     <input type="text" id="text-input" name="diaChi" value="{{ $hotel->diaChi }}" placeholder="Nhập Địa Chỉ" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Nội Dung Hotel</label><br>
                     <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="noiDung">{{ $hotel->noiDung }}</textarea>
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
