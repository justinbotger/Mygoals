<div class="login_header">
    <h1>Login</h1>
</div>
<form class="" role="form" method="POST" action="/auth/login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form_field">
        <label class="label">E-Mail Address</label>
        <div class="input">
            <input type="email" class="" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form_field">
        <label class="label">Password</label>
        <div class="input">
            <input type="password" class="" name="password">
        </div>
    </div>

    <div class="form_field">
        <div class="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
    </div>

    <div class="form_field">
        <div class="button">
            <button type="submit" class="" style="margin-right: 15px;">
                Login
            </button>
        </div>
        <a id="forgot_password" href="/password/email">Forgot Your Password?</a>
    </div>
</form>