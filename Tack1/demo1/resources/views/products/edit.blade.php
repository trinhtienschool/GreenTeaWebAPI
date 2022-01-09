@extends('products.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('product/' .$products->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="prodname" id="prodname" value="{{$products->prodname}}" class="form-control"></br>
                <label>Category id</label></br>
                <input type="text" name="category_id" id="category_id" value="{{$products->category_id}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
