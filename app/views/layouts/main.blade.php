<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Authentication</title>
</head>

<body>

<div
       <ul class="nav">
            <li>{{ HTML::link('users/register', 'Register') }}</li>
            <li>{{ HTML::link('users/login', 'Login') }}</li>
       </ul>
</div>

{{  $content }}

</body>
</html>