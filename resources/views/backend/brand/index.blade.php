@extends('layout.admin')
@section('title', 'Quản lý thương hiệu')
@section('content')

    <!-- CONTENT -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý thương hiệu</h1>
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
                        <a class="btn btn-sm btn-danger" href="brand_trash.html">
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
                                <label for="name">Tên thương hiệu</label>
                                <input type="text" value="" name="name" id="name" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label for="description">Mô tả</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="sort_order">Sắp xếp</label>
                                <select name="sort_order" id="sort_order" class="form-control">
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
                                <button type="submit" name="create" class="btn btn-success">Thêm thương hiệu</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:30px;">#</th>
                                    <th class="text-center" style="width:90px;">Hình</th>
                                    <th>Tên thương hiêu</th>
                                    <th>Slug</th>
                                    <th class="text-center" style="width:200px;">Chức năng</th>
                                    <th class="text-center" style="width:30px;">ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    @foreach ($list as $item)
                                    <tr><td class="text-center">
                                        <input type="checkbox" id="checkId" value="1" name="checkId[]">
                                    </td>
                                        <td>
                                            <img src='{{ asset($item->image)}}' alt={{ $item->name }}
                                                style="width:100px; height:100px" /></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>
                                            <a href=""><button type="button" class="btn btn-success ml-2"><i
                                                        class="fa fa-fw fa-edit"></i></i></button></a>
                                            <a href=""><button type="button" class="btn btn-danger ml-2"><i
                                                        class="fa fa-fw fa-trash"></i></button></a>
                                            <a href=""><button type="button" class="btn btn-warning ml-2"><i
                                                        class="fa fa-fw fa-eye"></i></button></a>
                                        </td>
                                        <td>{{ $item->id }}</td>
                                    </tr>

                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.CONTENT -->
</div>
                 

@endsection
