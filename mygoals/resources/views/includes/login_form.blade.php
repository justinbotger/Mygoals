<form class="" role="form" method="POST" action="/auth/login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="">
        <label class="">E-Mail Address</label>
        <div class="">
            <input type="email" class="" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="">
        <label class="">Password</label>
        <div class="">
            <input type="password" class="" name="password">
        </div>
    </div>

    <div class="">
        <div class="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
    </div>

    <div class="">
        <div class="">
            <button type="submit" class="" style="margin-right: 15px;">
                Login
            </button>

            <a href="/password/email">Forgot Your Password?</a>
        </div>
    </div>
</form>