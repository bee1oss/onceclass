
@extends("layouts.login")
@section("content")
    <form class="login100-form validate-form" action="{{route("frontend.register")}}" method="post">
        {{ csrf_field() }}



        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email" required autofocus>
            <span class="focus-input100"></span>

        </div>

        <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="name" placeholder="User" required >
            <span class="focus-input100"></span>

        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password" required>
            <span class="focus-input100"></span>

        </div>

        <div class="form-group wrap-input100 validate-input " data-validate = "password is not the same">
            <input id="password-confirm" type="password" class="input100" name="password_confirmation" placeholder="Confirm Password" required>
            <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
               Kaydol
            </button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </form>

@endsection

@push("customJs")

@endpush

@push("customCss")

@endpush
