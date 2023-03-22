<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Selamat Datang di Form Login</h1>
    <h3>Silahkan Login!</h3>
    <table>
        <form action="proses_login.php" method="post">
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Login">
                </td>
            </tr>
            </form>
        </table>
        <br>
        <label>Belom punya akun? Daftar <a href="register.php">disini!</a></label>
</body>
</html>