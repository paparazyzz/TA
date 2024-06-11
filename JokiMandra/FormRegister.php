<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="LoginStyle.css" class="href">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
   <div class="formlogin">
        <a href="index.php" class="header"><i class='bx bx-arrow-back'></i></a>
        <h1>Sign Up</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="fuser" required>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="text" name="femail" required>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="text" name="fpass" required>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" name="fpass"required>
                <label>Re-entry password</label>
            </div>
            <div class="pass"><a href="FormLogin.php">Sudah punya akun ?</a></div>
            <input type="submit" value="Register" name="submit">
        </form>
   </div> 
</body>