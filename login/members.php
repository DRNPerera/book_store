<!DOCTYPE html>
<html>
<head>
<!-- <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="elegent.css" type="text/css">
<meta charset="UTF-8">

<title>Members Login</title>
<style>
body {
    background: url('../b.png') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    /*background: url('http://i.imgur.com/fd8Lcso.png') no-repeat;*/
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #5B0312;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff  20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff  20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #5B0312;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #2a78f6;
}
.footer{
    background-color: #fff;
    height: 20px;
    border-radius: 5px;
    }
    .footer p{
    text-align: center;
}

</style>
    <div >
        <img src="../bookstore.jpg" alt="bookstore" width="100%" height="200px">
    </div>
</head>

<body>
<form action="login_process.php" method="post">
<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <input type="text" value="" placeholder="Email" name="login_email" />
    <input type="password" value="" placeholder="Password" name="login_password" />
    <a href="login_process.php"><button >Submit</button></a>
</div>
</form>
<div class="footer"><p>Book_Store | 2017 </p></div>
</body>

</html>