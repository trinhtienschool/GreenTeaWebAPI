
@extends('master')

@section('content')



    <form action="" method="post" role="form"  enctype="multipart/form-data">
        @include('components.alert')
        <!-- Name input -->
            <label class="form-label mt-4" for="form7Example2">tên sản phẩm</label>
            <div class="form-outline mb-4">
                <input type="text" name="product_name" id="form7Example1" class="form-control"/>

            </div>
            <label for="formFileMultiple" class="form-label">chọn ảnh</label>
            <div class="form-outline mb-4">

                <input class="form-control" name="file" type="file" id="formFileMultiple" multiple />

            </div>
            <label for="formFileMultiple" class="form-label">chọn user</label>
            <select class="select mb-4 mt-4" name="user_id">
                @foreach($user as $data)
                    <option value="{{$data->id}}">{{$data->email}}</option>
                @endforeach
            </select>

            <!-- Email input -->
            <label class="form-label mt-4" for="form7Example2">price</label>
            <div class="form-outline mb-4 ">
                <input type="text" name="price" id="form7Example2" class="form-control"/>
                <label class="form-label" for="form7Example2">price</label>
            </div>


            <label class="form-label" for="form7Example2">description</label>
            <div class="form-outline mb-4 ">
                <input type="text" name="description" id="form7Example2" class="form-control"/>

            </div>

            <label for="formFileMultiple" class="form-label">chọn loại</label>
            <select class="select mb-4 mt-4" name="manager_id">
                @foreach($manager as $data)
                    <option value="{{$data->id}}">{{$data->type}}</option>
                @endforeach
            </select>
            <div class="form-outline mb-4 mt-4">
                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="status"
                        id="inlineRadio1"
                        value="1"
                        checked="checked"
                    />
                    <label class="form-check-label" for="inlineRadio1">đang bán</label>
                </div>
                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="status"
                        id="inlineRadio2"
                        value="0"
                    />
                    <label class="form-check-label" for="inlineRadio2">chưa bán </label>
                </div>
            </div>
            <a href="{{route('product')}}">
            <button type="button" class="btn btn-secondary mb-5" data-mdb-dismiss="modal">
                quay lại
            </button>
            </a>
            <button type="submit" class="btn btn-primary mb-5">tạo mới</button>
        @csrf
    </form>



@endsection

