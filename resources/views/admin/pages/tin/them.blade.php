@extends('admin.menu.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
      <!-- DATA TABLE -->
      <div class="card">
         <div class="card-header">
            <strong>Thêm Tin Tức</strong>
         </div>
         <div class="card-body card-block">
            <form action="{{ route('admin.pages.tin.them') }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tiêu Đề</label><br><br>
                     <input type="text" id="text-input" name="tieuDe" value="{{ old('tieuDe') }}" placeholder="Nhập tiêu đề" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Title SEO</label><br><br>
                     <input type="text" id="text-input" name="title" value="{{ old('title') }}" placeholder="Nhập title" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Description</label><br>
                     <input type="text" id="text-input" name="description" value="{{ old('description') }}" placeholder="Nhập description" class="form-control">
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
                     <label class="badge badge-info">Chọn Hình</label><br><br>
                     <input type="file" style="width:200px" name="img" value="{{ old('img') }}">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Chọn Ngày</label><br><br><br>
                     <input type="date" name="date" value="{{ old('date') }}">
                     <br><br>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Nội Dung Tin Tức</label><br>
                     <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="noiDung">{{ old('noiDung') }}</textarea>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Mã Tin Tức</label><br>
                     <select name="maLoaiTin" class="form-control">
                        @foreach ($loaitin as $lt)
                        <option value="{{ $lt->maLoaiTin }}">{{ $lt->tenLoaiTin }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Thêm
                  </button>
                  <a href="{{ route('admin.pages.tin.danhsach') }}" class="btn btn-info btn-fw">
                  Quay về
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
