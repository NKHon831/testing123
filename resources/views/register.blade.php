<html>
    <head>
        <title>Welcome Testing App</title>
    </head>

    <body>
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <div>
                <label for="name" >Name</label>
                <input type="text" name="name" id="name">
            </div>
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
    </body>
</html>