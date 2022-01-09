@extends('products.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('product') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="prodname" id="prodname" class="form-control"></br>
                <label>Category id</label></br>
                <input type="text" name="category_id" id="category_id" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
