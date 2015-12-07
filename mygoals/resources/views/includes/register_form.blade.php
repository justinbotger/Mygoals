<form class="" role="form" method="POST" action="/auth/register">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="">
        <label class="">Name</label>
        <div class="">
            <input type="text" class="" name="name" value="{{ old('name') }}">
        </div>
    </div>

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
        <label class="">Confirm Password</label>
        <div class="">
            <input type="password" class="" name="password_confirmation">
        </div>
    </div>

    <div class="">
        <div class="">
            <button type="submit" class="">
                Register
            </button>
        </div>
    </div>
</form>