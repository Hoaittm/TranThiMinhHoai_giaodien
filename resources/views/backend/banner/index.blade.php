
@extends('layout.admin')
@section('title','Banner')
@section('content')

<section class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
              <h1>Quản lý banner</h1>
          </div>
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Blank Page</li>
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
                  <a class="btn btn-sm btn-danger" href="category_trash.html">
                      <i class="fas fa-trash"></i> Thùng rác
                  </a>
              </div>
          </div>
      </div>
      <div class="card-body">
          <div class="row">
              <div class="col-md-3">
                  <form action="#" method="post" enctype="multipart/form-data">
                      <div class="mb-3">
                          <label for="name">Tên banner</label>
                          <input type="text" value="" name="name" id="name" class="form-control">
                      </div>
                      <div class="mb-3">
                          <label for="link">Liên kết</label>
                          <input type="text" value="" name="link" id="link" class="form-control">
                      </div>
                      <div class="mb-3">
                          <label for="description">Mô tả</label>
                          <textarea name="description" id="description" class="form-control"></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="postion">Vị trí</label>
                          <select name="postion" id="postion" class="form-control">
                              <option value="0">None</option>

                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="image">Hình</label>
                          <input type="file" name="image" id="image" class="form-control">
                      </div>
                      <div class="mb-3">
                          <label for="status">Trạng thái</label>
                          <select name="status" id="status" class="form-control">
                              <option value="2">Chưa xuất bản</option>
                              <option value="1">Xuất bản</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <button type="submit" name="create" class="btn btn-success">Thêm banner</button>
                      </div>
                  </form>
              </div>
              <div class="col-md-9">
                  <table class="table table-bordered table-striped table-hover">
                      <thead>
                          <tr>
                              <th class="text-center" style="width:30px;">#</th>
                              <th class="text-center" style="width:90px;">Hình</th>
                              <th>Tên banner</th>
                              <th>Liên kết</th>
                              <th>Vị trí</th>
                              <th class="text-center" style="width:200px;">Chức năng</th>
                              <th class="text-center" style="width:30px;">ID</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($list as $row)
                          <tr>
                            <td> <input type="checkbox" name="banner_checkbox" value="1">     </td>
                            <td>
                              <img src="{{ asset($row->image)}}" alt="{{ $row->name }}" style="width:200px; height:100px" />
                          </td>  
                              <td>{{$row->name}}</td>
                              <td>{{$row->link}}</td>
                              <td>{{$row->position}}</td>
                             
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
                          <td>{{ $row->id }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                      </div>
                    </div>
                  </div>
                </div>
              </section> 
                  </table>
              </div>
          </div>
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