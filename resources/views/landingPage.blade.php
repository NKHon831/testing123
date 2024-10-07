<html>
    <head>
        <title>Welcome Testing App</title>
    </head>

    <body>
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <div>
                <label for="email" >Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <button type="submit">Submit</button>
        </form>
        <a href="{{route('register-page')}}">Register</a>
    </body>
</html>