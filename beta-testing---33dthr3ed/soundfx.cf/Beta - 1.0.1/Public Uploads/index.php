<html>
<?php include('./user_log/session.php'); ?>
    <head>
        <title>test</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>

        <?php
        if(isset($_SESSION['loggedin']))
        {
        if($_SESSION['loggedin'] == true)
        {
        echo "hello, ".$name."<br><a href='logout.php'>log out</a>";
        }
        }
        else
        {
            echo '<a href="login.php">log in</a>';
        }
        ?>

                <div class="soundfx-files">
            <div class="1">
                <h4>test mp3/ogg sound file</h4>
                <audio controls>
                    <source src="sfx/test.ogg" type="audio/ogg">
                    <source src="sfx/test.mp3" type="audio/mpeg">
                </audio>
            </div>
<br>
            <div class="2">
                <h4>test mp3/ogg sound file</h4>
                <audio controls>
                    <source src="sfx/test.ogg" type="audio/ogg">
                    <source src="sfx/test.mp3" type="audio/mpeg">
                </audio>
            </div>
<br>
            <div class="3">
                <h4>test mp3/ogg sound file</h4>
                <audio controls>
                    <source src="sfx/test.ogg" type="audio/ogg">
                    <source src="sfx/test.mp3" type="audio/mpeg">
                </audio>
            </div>
<br>
            <div class="4">
                <h4>test mp3/ogg sound file</h4>
                <audio controls>
                    <source src="sfx/test.ogg" type="audio/ogg">
                    <source src="sfx/test.mp3" type="audio/mpeg">
                </audio>
            </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

        </div class="info">
        <center>
            <h4>
                <a href="https://www.youtube.com/channel/UCIaUjRKg92Df9VeBxrXjv5A">Youtube</a> /
                <a href="https://discord.gg/97C2v9rNVt">Discord Support</a> /
                <a href="https://github.com/TechG4mer">Github</a> /
                <a href="https://twitter.com/tech_g4mer">Twitter</a>
                <img src="/img/favicon-32x32.png" alt="Test"></img>
                <a href="https://www.facebook.com/Tech-Gang-102858845215452">Facebook</a> /
                <a href="https://www.reddit.com/user/TechGamer_YT">Reddit</a> /
                <a href="https://discord.gg/Xsw8qQUHYG">Discord Main</a> /
                <a href="https://twitch.tv/tech_g4mer">Twitch</a>
            </h4>
        </center>

    </body>
</html>