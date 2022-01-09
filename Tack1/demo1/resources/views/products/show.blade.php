@extends('products.layout')
@section('content')


    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $products->prodname }}</h5>
                <p class="card-text">Category Id : {{ $products->category_id }}</p>
            </div>

            </hr>

        </div>
    </div>
