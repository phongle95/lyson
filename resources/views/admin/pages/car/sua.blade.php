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
            <strong>Sửa Tin Xe</strong>
         </div>
         <div class="card-body card-block">
            <form action="{{ route('admin.pages.car.sua',$car->id) }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Điểm Đi Điểm Đến</label><br><br>
                     <input type="text" id="text-input" name="todo" value="{{ $car->todo }}" placeholder="Nhập điểm đi điểm đến" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Title SEO</label><br><br>
                     <input type="text" id="text-input" name="title" value="{{ $car->title }}" placeholder="Nhập Title" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tóm Tắt</label><br>
                     <input type="text" id="text-input" name="description" value="{{ $car->description }}" placeholder="Nhập Tóm Tắt" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Keyword Meta (SEO)</label><br>
                     <input type="text" id="text-input" name="keyword" value="{{ $car->keyword }}" placeholder="Nhập Keyword" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-6">
                     <label class="badge badge-info">Chọn Hình</label><br>
                     <input type="file" style="width:200px" name="img">
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="badge badge-info">Hình Củ</label><br>
                     <img src="/upload/{{ $car->img }}" width="200px" height="150px" alt="salme">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Nội Dung Tin</label><br>
                     <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="noiDung">{{ $car->noiDung }}</textarea>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Sửa
                  </button>
                  <a href="{{ route('admin.pages.car.danhsach') }}" class="btn btn-info btn-fw">
                  Quay về
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
