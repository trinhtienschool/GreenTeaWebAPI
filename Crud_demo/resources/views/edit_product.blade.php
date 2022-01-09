@extends('layouts.master_template');
@section('title','Chỉnh sửa sản phẩm');
@section('content')
    <main>
        <div class="container-fluid">
            <div style="text-align: center">
                <button onclick="edit()" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 btn-primary" data-toggle="modal" data-target="#editExpand"><i style="font-size: 20px" class="m-3 fas fa-pencil-alt mt-0"></i><h3 style="display: inline-block" class="m-3">Chỉnh sửa</h3></button>
            </div>
                <div class="modal fade show" id="editExpand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title" style="display: inline-block !important; width: 100px;color: black" id="exampleModalLabel">Nhập dữ liệu</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form_send_input" method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                                {!! method_field('patch') !!}
                                @csrf
                                <div class="md-form">
                                    <input type="text" id="edit_name" name="name" value="{{old('name',$product->name)}}" class="form-control">
                                    <label for="name_input">Name</label>
                                </div>
                                <div class="md-form">
                                    <img style="height: 75px;width: 75px" src="{{old('avatar',asset('images')."/".$product->avatar)}}" alt="">
{{--                                    <label for="avatar_input">Avatar cũ</label>--}}
                                </div>
                                <div class="md-form">
                                    <input type="file" id="edit_avatar" name="avatar" class="form-control">
{{--                                    <label for="avatar_input">Avatar mới</label>--}}
                                </div>
                                <div class="md-form">
                                    <input type="text" id="edit_price" name="price" value="{{old('price',$product->price)}}" class="form-control">
                                    <label for="price_input">Price</label>
                                </div>
                                <select  class="form-control" id="edit_cate" name="cate_id">
                                    <option value="" disabled>Chọn danh mục</option>

                                    @foreach(Session::get('sscategory') as $cate)
                                        @if($product->cate->id == $cate->id)
                                        <option selected value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endif
                                            @if($product->cate->id != $cate->id)
                                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                            @endif
                                    @endforeach

                                </select>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button form="form_send_input" type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </main>
    <!-- Main layout -->

        <script type="text/javascript">
            $(window).on('load', function() {
            $('#editExpand').modal('show');
        });
    </script>


@endsection
