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
                  <h4 class="card-title">Danh Sách Tin Tức</h4>
                  <p class="card-description">
                     <a href="{{ route('admin.pages.tin.them') }}" class="btn btn-inverse-info btn-fw">
                     Thêm Tin Tức</a>
                  </p>
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th>Tiêu Đề</th>
                           <th>Hình</th>
                           <th>Mã Loại Tin</th>
                           <th>Sửa</th>
                           <th>Xóa</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($tin as $new)
                        <tr class="tr-shadow">
                           <td>{{ $new->tieuDe }}</td>
                           <td>
                              <img style="height:150px;width:150px" src="/upload/{{ $new->img }}" alt="lý sơn"/>
                           </td>
                           <td>{{ $new->maLoaiTin }}</td>
                           <td>
                              <a href="{{ route('admin.pages.tin.sua',$new->id) }}" class="btn btn-outline-success btn-fw"> Sửa</a>
                           </td>
                           <td>
                              <a href="{{ route('admin.pages.tin.xoa',$new->id) }}" class="btn btn-outline-danger btn-fw"> Xóa</a>
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
