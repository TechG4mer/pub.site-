<html>
    <head>
    
    <?php 
    include('./user_log/session.php');
    if(isset($_SESSION['loggedin']))
    {
    if($_POST['name'] == 'banana') {
        die('invalid username idot');
        echo "<script>window.location.replace('index.php');</script>";
    }
    else
    {
    if(isset($_POST['submit']))
    {
    } else {
       if(isset($_POST['name']))
       {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['loggedin'] = true;
        echo "<script>window.location.replace('index.php');</script>";
       }
       else
       {
           die('bruh');
       }
    }
    }
    
    }

    ?>
        <title>Login</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="login">
            <form action="login.php" method="post">
                Enter your name: <input name="name" type="text">
                <input type="submit" name="submit">
        </div>   

        </form>
    </body>
</html>