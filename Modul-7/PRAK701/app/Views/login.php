<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Praktikum 7</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding-top: 50px; }
        .container { max-width: 400px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #007bff; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background-color: #0056b3; }
        .alert { padding: 10px; background-color: #f44336; color: white; margin-bottom: 15px; border-radius: 4px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Form Login</h2>

        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <form action="/auth/loginAuth" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>