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
                  <h4 class="card-title">Danh Sách Khách Sạn</h4>
                  <p class="card-description">
                     <a href="{{ route('admin.pages.hotel.them') }}" class="btn btn-inverse-info btn-fw">
                     Thêm Khách Sạn</a>
                  </p>
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th>Tên Khách Sạn</th>
                           <th>Hình</th>
                           <th>Giá</th>
                           <th>Sửa</th>
                           <th>Xóa</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($hotel as $ht)
                        <tr class="tr-shadow">
                           <td>{{ $ht->tenHotel }}</td>
                           <td>
                              <img style="height:150px;width:150px" src="/upload/{{ $ht->img }}" alt="travel lý sơn"/>
                           </td>
                           <td style="text-align:left;font-weight: 600;color:red">
                              {{number_format($ht->gia) }}.đ
                           </td>
                           <td>
                              <a href="{{ route('admin.pages.hotel.sua',$ht->id) }}" class="btn btn-outline-success btn-fw"> Sửa</a>
                           </td>
                           <td>
                              <a href="{{ route('admin.pages.hotel.xoa',$ht->id) }}" class="btn btn-outline-danger btn-fw"> Xóa</a>
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
