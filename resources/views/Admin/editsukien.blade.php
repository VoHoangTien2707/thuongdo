
<?php
$data = DB::table("tbl_danhmuc")
->get();


?>


@extends('layout.LayoutAdmin')
@section('noidung')

<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="#">Quản lí sự kiện</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới sự kiện</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><i
                    class="fas fa-folder-plus"></i> Thêm nhà cung cấp</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i
                    class="fas fa-folder-plus"></i> Thêm danh mục</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtinhtrang"><i
                    class="fas fa-folder-plus"></i> Thêm tình trạng</a>
              </div>
            </div>
            <form class="row" action="{{route('admin.tablesukien.edit',['id'=>$tin->id])}}" method="post" class="col-7 cla m-auto" enctype="multipart/form-data">

              <div class="form-group col-md-4">
                <label class="control-label">Tên sự kiện</label>
                <input value="{{$tin->title}}" name="title" class="form-control" type="text">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tóm tắt</label>
                <input value="{{$tin->description}}" name="description" class="form-control" type="text">
              </div>




              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="img" onchange="readURL(this);" />
                </div>
                @if (isset($tin) && $tin->img)
                <img src="{{ asset('images/' . $tin->img) }}" alt="Hình ảnh" width="100">
            @endif


              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="content" id="mota"></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>

          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          @csrf
</form>
        </div>

  </main>


@endsection



  <!--
  MODAL DANH MỤC
-->
