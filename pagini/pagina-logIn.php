<?php

if(!login())
{

    if ( isset($_GET['eroare']))
    {
        ?>
        <div class="alert alert-danger">
            
            Date eronate.
        </div>
        <?php
    }

    ?>

    <style>

        #form {
            border: solid gray 1px;
            width: 20%;
            border-radius: 5px;
            margin: 100px auto;
            background: white;
        }

    </style>

    <!DOCTYPE html>
    <html>

        <head>
            <title>Login</title>
        </head>

        <body>
            <div class="container" id="form">
                <form class="form-group" action="login.php" method="POST">
                    <p>
                        <label> Utilizator </label>
                        <input type="text" id="username" name="username">  
                    </p>

                    <p>
                        <label> Email </label>
                        <input type="text" id="email" name="email">  
                    </p>

                    <p>
                        <label> Parola </label>
                        <input type="password" id="password" name="password">  
                    </p>

                    <p>
                        <button class="btn btn-primary" type="submit" id="btn" value="Login">
                            Log In
                        </button>  
                    </p>

                </form>
            </div>
        </body>

    </html>

<?php
}
else {
    ?>
    <br><br>
    <h3><a href="#">Sunteti deja autentificat</a></h3>
    <br><br>
    <?php
}
?>