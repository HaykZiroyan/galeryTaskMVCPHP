<?php $this->view("components/header",$data); ?>
<form action="" method="POST" style="border:1px solid #ccc">
  <div class="containerup">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input id="name" type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfixup">
      <button type="button" class="cancelbtnup">Cancel</button>
      <button type="submit" class="signupbtnup buttonup">Sign Up</button>
    </div>
  </div>
</form>
<?php $this->view("components/footer"); ?>