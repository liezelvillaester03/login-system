<!DOCTYPE html>
<html>
<head>
    <title>Role Selection</title>
    <style>
        body {
            background-color: rgba(68, 188, 218, 0.884);
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 160px auto;
            padding: 50px;
            border: 2px solid #fff1d7;
            border-radius: 20px;
            background-color: #f9f3e6;
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-top: 0;
            margin-bottom: 50px;
        }
        .button-container {
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            font-size: 24px;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: 0 9px #999;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .button:hover {
            background-color: #3e8e41;
        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Your Role</h1>
        <div class="button-container">
            <a href="{{ route('admin.login') }}" class="button">ADMIN</a>
            <a href="{{ route('facilitator.login') }}" class="button">FACILITATOR</a>
            <a href="{{ route('user.login') }}" class="button">USER</a>
        </div>
    </div>
</body>
</html>
