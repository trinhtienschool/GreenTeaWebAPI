<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('Mdb5/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('Mdb5/css/mdb.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

</head>
<body>

<!--Main Navigation-->

@extends('header')




<main style="margin-top: 58px">
    <div class="container pt-4">
        @yield('content')
    </div>
</main>


<script src="{{asset('Mdb5/js/mdb.min.js')}}"></script>
<script src="{{asset('Mdb5/js/admin.js')}}"></script>

<script src="https://code.jquery.com/jquery-1.x-git.js"></script>

<script >
    document.addEventListener("DOMContentLoaded", function () {
        $(".list-group-item").click(function () {
            $(this).addClass("active").siblings().removeClass('active');
        });
    });
</script>

</body>
</html>
