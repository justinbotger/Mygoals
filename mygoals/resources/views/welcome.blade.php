<html>
<head>
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <div id="form_wrapper">
        @include('includes.errors')
        <div id="register">
            @include('includes.register_form')
        </div>
        <div id="login">
            @include('includes.login_form')
        </div>
    </div>
</body>
</html>