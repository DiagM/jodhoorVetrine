<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #333333;
            margin-bottom: 10px;
        }
        p {
            color: #555555;
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
    <title>Contact Form Email</title>
</head>
<body>
    <div class="container">
        <h1>Contact Form Submission</h1>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    </div>
</body>
</html>
