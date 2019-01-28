<?php include_once "header.php"; 



if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(isset($_POST["tbEmail"])){
        echo "Welcome: ". $_POST["tbEmail"] . "<br/>";
    }
    if(isset($_POST["tbPassword"])){
        echo "Pass: " . $_POST["tbPassword"]. "<br/>";
    }
}

?>

<div class = "container">
<form action="login.php" method="POST">
  <div class="form-group">
    <label for="tbEmail">Email address</label>
    <input type="email" class="form-control" id="tbEmail" name="tbEmail" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="tbPassword">Password</label>
    <input type="password" class="form-control" id="tbPassword" name="tbPassword" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>












<?php include_once "footer.php" ?>