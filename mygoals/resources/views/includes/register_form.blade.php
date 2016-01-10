<div class="login_header">
    <h1>Register</h1>
    <h3>It's free!</h3>
</div>
<form class="" role="form" method="POST" action="/auth/register">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form_field">
        <label class="label">Name</label>
        <div class="input">
            <input type="text" class="" name="name" value="{{ old('name') }}">
        </div>
    </div>

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
        <label class="label">Confirm Password</label>
        <div class="input">
            <input type="password" class="" name="password_confirmation">
        </div>
    </div>

    <div class="form_field">
        <div class="button">
            <button type="submit" class="">
                Register
            </button>
        </div>
    </div>
</form>