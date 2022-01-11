
@extends('master')

@section('content')
        <h1>EDIT</h1>
    <form style="width: 50rem;"  method="POST" class="mx-5 mt-5" enctype="multipart/form-data">
        <!-- Email input -->
    @include('components.alert')
    <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" name="product_name" id="form7Example1" class="form-control" value="{{$product->product_name}}"/>
            <label class="form-label" for="form7Example1">product name</label>
        </div>
{{--        {{($data->id ==$product->user_id)? 'selected' :''}}--}}
        <label for="formFileMultiple" class="form-label">chọn user</label>
        <select class="select mb-4" name="user_id">

            @foreach($user as $data)
                <option value="{{$data->id}}"{{($data->id ==$product->user_id)? 'selected' :''}}>{{$data->email}}</option>
            @endforeach
        </select>

        <!-- Email input -->
        <div class="form-outline mb-4 mt-4">
            <input type="text" name="price" id="form7Example2" class="form-control" value="{{$product->price}}"/>
            <label class="form-label" for="form7Example2">price</label>
        </div>
        <label for="formFileMultiple" class="form-label">chọn ảnh</label>
        <div class="form-outline mb-4">

            <input class="form-control" name="file" type="file" id="formFileMultiple" multiple />

            <img src="{{url('storage/uploads')}}/{{$product->image}}"  style="border-radius: 5px;height: 150px;width: 150px;object-fit: cover;" alt="">
        </div>

        <div class="form-outline mb-4">
            <input type="text" name="description" id="form7Example2" class="form-control" value="{{$product->description}}" />
            <label class="form-label" for="form7Example2">description</label>
        </div>




        <label for="formFileMultiple" class="form-label">chọn loại</label>
        <select class="select mb-4 mt-4" name="manager_id">

            @foreach($manager as $data)
                <option value="{{$data->id}}" {{($data->id ==$product->manager_id)? 'selected' :''}}>{{$data->type}}</option>
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
                    {{($product->status==1)?'checked="checked"':''}}
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
                    {{($product->status==0)?'checked="checked"':''}}
                />
                <label class="form-check-label" for="inlineRadio2">chưa bán</label>
            </div>
        </div>
        <a href="{{route('product')}}">
            <button type="button" class="btn btn-secondary mb-5" data-mdb-dismiss="modal">
                hủy
            </button>
        </a>
        <button type="submit" class="btn btn-primary  mt-4 mb-5">submit</button>
        @csrf
    </form>
@endsection

