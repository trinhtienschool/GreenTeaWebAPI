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
<div class="w-100 p-4 d-flex justify-content-center pb-4 mt-5">
       <form action="/admin/users/register/store" method="post">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="firstname" class="form-control" name="firstname"/>
                <label class="form-label" for="firstname">First name</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="lastname" class="form-control" name="lastname"/>
                <label class="form-label" for="lastname">Last name</label>
            </div>
        </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" id="email" class="form-control" name="email"/>
        <label class="form-label" for="email">Email address</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="password" class="form-control" name="password" />
        <label class="form-label" for="password">Password</label>
    </div>

    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
        <input
            class="form-check-input me-2"
            type="checkbox"
            value=""
            id="form2Example33"
            checked
        />
        <label class="form-check-label" for="form2Example33">
            Subscribe to our newsletter
        </label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>or sign up with:</p>
        <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button>
    </div>
           @csrf
</form>
</div>

<script src="{{asset('Mdb5/js/mdb.min.js')}}"></script>
<script src="{{asset('Mdb5/js/admin.js')}}"></script>

<script src="https://code.jquery.com/jquery-1.x-git.js"></script>
</body>
</html>
