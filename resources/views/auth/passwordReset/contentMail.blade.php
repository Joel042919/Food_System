<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RESET PASSWORD</h1>
    <p>You are ready for reset your password</p>
    <a href="{{ url('/reset-password/' . $token) }}" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none;">
        Click Here!
    </a>

    <p>If you didn't request a password reset, please ignore this email.</p>
</body>
</html>