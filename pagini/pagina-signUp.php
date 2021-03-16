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

<body>
<div class = "container" id="form">
  <form method="post" action="signup.php">
  	<p>
  	  <label>Username</label>
  	  <input type="text" name="username">
</p>
  	<p>
  	  <label>Email</label>
  	  <input type="email" name="email">
</p>
  	<p>
  	  <label>Parola</label>
  	  <input type="password" name="password_1">
</p>
  	<p>
  	  <label>Confirmare parola</label>
  	  <input type="password" name="password_2">
</p>
      
      <p>
      <button class="btn btn-primary" type="submit" name="reg_user">
            Sign Up
        </button>
    </p>
  	
  </form>
</div>
</body>
</html>