<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get Token from Viettel Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="notification-form">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="notification-form">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button class="btn btn-secondary" onclick="getViettelPostToken()">Generate Token</button>
                <div id="token" class="mt-4 font-weight-bold">Token: </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
