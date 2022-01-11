@extends('master')

@section('content')
    <h1>PRODUCTS</h1>
    <div class="bg-white border rounded-5 mb-5">
<section class="w-100 p-4 text-center">
    <table class="table align-middle table-hover" >
        <thead>
        <tr>
            <th scope="col"># id</th>
            <th scope="col" style="width: 15%" >ảnh sản phẩm</th>
            <th scope="col" colspan="2">tên sản phẩm</th>
            <th scope="col" colspan="4" >$ giá</th>
            <th scope="col" colspan="2">mô tả</th>
            <th scope="col" colspan="2">loại</th>
            <th scope="col" colspan="2">trạng thái</th>
            <th scope="col"colspan="5">thao tác</th>

        </tr>
        </thead>
        <tbody>
        @foreach($product as $pro)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td colspan="1"><img src="storage/uploads/{{$pro->image}}" alt="storage/uploads/{{$pro->image}}"
                                            style="border-radius: 5px;height: 150px;width: 150px;object-fit: cover;"></td>
                        <td colspan="2">{{$pro->product_name}}</td>
                        <td colspan="4" > $ {{$pro->price}}</td>

                        <td colspan="2"><em>{{$pro->description}}</em></td>
                        @foreach($manager as $mana)
                        @if($pro->manager_id==$mana->id)
                            <td colspan="2">{{$mana->type}}</td>

                            @break
                        @endif
                        @endforeach
                        <td colspan="2">{{($pro->status==1)?'đang bán':'chưa bán'}}</td>

                        <td colspan="5">
                            <button type="button" class="btn btn-secondary btn-sm px-3" data-mdb-toggle="modal"
                                    data-mdb-target="#review{{$pro->id}}">
                                <i class="far fa-eye"></i>
                            </button>
                            @include('admin.users.modal.review')
                            <a href="{{route('edit',['id'=>$pro ->id])}}">
                                <button type="button" class="btn btn-warning btn-sm px-3">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm px-3"  data-mdb-toggle="modal"
                                    data-mdb-target="#delete{{$pro->id}}">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            @include('admin.users.modal.delete')
                        </td>

                    </tr>
        @endforeach
        </tbody>

    </table>
</section>
        <div class="  p-4 text-center border-top">
            <a href="{{route('add')}}" class="d-grid gap-2 col-2 mx-auto">
                <button type="button" class="btn btn-primary btn-lg ">
                    <i class="fas fa-plus"></i>
                </button>
            </a>
        </div>
    </div>

@endsection





