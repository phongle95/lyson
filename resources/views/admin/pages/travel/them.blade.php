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
            <strong>Thêm Tour Du Lịch</strong>
         </div>
         <div class="card-body card-block">
            <form action=""  enctype="multipart/form-data" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tên Tour Du Lịch</label><br><br>
                     <input type="text" id="text-input" name="tenTour" value="{{ old('tenTour') }}" placeholder="Nhập Tên Tour" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Title SEO</label><br><br>
                     <input type="text" id="text-input" name="title" value="{{ old('title') }}" placeholder="Nhập Title" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tóm Tắt</label><br>
                     <input type="text" id="text-input" name="tomTat" value="{{ old('tomTat') }}" placeholder="Nhập Tóm Tắt" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Keyword Meta (SEO)</label><br>
                     <input type="text" id="text-input" name="keyword" value="{{ old('keyword') }}" placeholder="Nhập Keyword" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Giá Tour</label><br>
                     <input type="number" id="text-input" name="gia" value="{{ old('gia') }}" placeholder="Nhập Giá Tour" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Chọn Hình</label><br><br>
                     <input type="file" style="width:200px" name="img" value="{{ old('img') }}">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-3">
                     <label class="badge badge-info">Chọn Ngày</label><br>
                     <input type="date" id="text-input" name="date" value="{{ old('date') }}" placeholder="Chọn Ngày" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Nội Dung Tour</label><br>
                     <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="noiDung">{{ old('noiDung') }}</textarea>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Chọn Khuyến Mãi</label><br>
                     <select name="khuyenMai" class="form-control">
                        <option value="0" selected >Không Khuyến Mãi</option>
                        <option value="1">Khuyến Mãi</option>
                     </select>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Thêm
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
