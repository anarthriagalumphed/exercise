<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        ini buat nampilin form
    </title>
</head>

<body>

    <form method="post" action="/test">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone"><br><br>

        <input type="submit" value="Submit">
    </form>



</body>

</html>