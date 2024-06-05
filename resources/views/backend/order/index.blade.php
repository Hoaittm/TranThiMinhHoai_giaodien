
@extends('layout.admin')
@section('title','Order')
@section('content')
<div class="wrapper">


    <!-- CONTENT -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12 text-right">
            
                    <a href="#" class="btn btn-sm btn-danger ">
                        <i class="fa fa-trash px-2" aria-hidden="true"></i>Trash bin
                    </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped"> 
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Id</th>
                <th class="text-center">Tên</th>
                <th class="text-center">Số điện thoại</th>
                <th class="text-center">Email</th>
                <th class="text-center">Địa chỉ</th>
                <th class="text-center">Ghi chú</th>
                <th class="text-center">Chức năng</th>
                
            </tr>
            </thead>
            <tbody>
              @foreach ($list as $row)
                <tr>
                    <td><input type="checkbox" name="order_checkbox" value="1"></td>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->note}}</td>
                 
                     <td><a href="#" class="btn btn-sm btn-success ">
                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-info ">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary ">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-danger ">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
   
              
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.CONTENT -->
  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>@endsection