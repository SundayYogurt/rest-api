<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h1>Welcome to the Home Page!</h1>
<p>Hello, <?= session()->get('username') ?>!</p>
<a href="/logout">Logout</a>

</body>
</html>
