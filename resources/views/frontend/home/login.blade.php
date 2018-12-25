@extends("layouts.frontend")
@section("content")
    <section class="s-content"><br><br><br>
        <center>
            <div >
                <form>

                    {{--<div class="imgcontainer">
                        <img src="{{asset("assets/frontend/images/favicon.png")}}img_avatar2.png" alt="Avatar" class="avatar">
                    </div>--}}

                    <div class="login_2">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" class="text" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" class="password" required>

                        <a type="submit" class="submit">Login</a>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="login_2" >
                        <a type="button" class="cancelbtn">Cancel</a><br>
                        <span >Forgot <a href="#">password?</a></span>
                    </div>

                </form>
            </div>
        </center>
    </section>

@endsection


@push("customJs")

@endpush

@push("customCss")

@endpush