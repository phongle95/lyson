@extends('admin.menu.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      <!-- DATA TABLE -->
      <div class="table-data__tool">
         <div class="table-data__tool-left">
            @if (session('thongbao'))
            <div style="color:green;font-weight: 400; text-align:center">
               {{ session('thongbao') }}
            </div>
            @endif @if (session('xoa'))
            <div style="color:red;font-weight: 400; text-align:center">
               {{ session('xoa') }}
            </div>
            @endif
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Danh Sách Loại Tin</h4>
                  <p class="card-description">
                     <a href="{{ route('admin.pages.loaitin.them') }}" class="btn btn-inverse-info btn-fw">
                     Thêm Loại Tin</a>
                  </p>
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th>Mã Loại Tin</th>
                           <th>Tên Loại Tin</th>
                           <th>Sửa</th>
                           <th>Xóa</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($loaitin as $lt)
                        <tr class="tr-shadow">
                           <td>{{ $lt->maLoaiTin }}</td>
                           <td>{{ $lt->tenLoaiTin }}</td>
                           <td>
                              <a href="{{ route('admin.pages.loaitin.sua',$lt->maLoaiTin) }}" class="btn btn-outline-success btn-fw"> Sửa</a>
                           </td>
                           <td>
                              <a href="{{ route('admin.pages.loaitin.xoa',$lt->maLoaiTin) }}" class="btn btn-outline-danger btn-fw"> Xóa</a>
                           </td>
                        </tr>
                        <tr class="spacer"></tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- END DATA TABLE -->
   </div>
</div>
@endsection
