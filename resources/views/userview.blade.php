<html>
    <head>
        <title>From</title>
    </head>
    <body>
        <form action="userController" method="POST">
        <input type="text" name="user">
        {{csrf_field}}
        <br><br>
        <input type="text" name="email">
        <br><br>
        <button type="submit">Submit</button>
        </form>
    </body>
</html>
