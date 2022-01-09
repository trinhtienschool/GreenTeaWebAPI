@extends('categorys.layout')
@section('content')

    <div class="card">
        <div class="card-header">Category Page</div>
        <div class="card-body">

            <form action="{{ url('category/' .$categorys->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$categorys->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="catname" value="{{$categorys->catname}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>

            </form>

        </div>
    </div>

@stop
