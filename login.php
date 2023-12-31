<?php 
if(isset($_POST['username'])||isset($_POST['password'])){
    if($_POST['username']!=''&&$_POST['password']!=''){
        if($_POST['username']!='Whale'&&$_POST['password']!='R4hl1nIsTheCutiest'){
            echo('<h1>Login Failed</h1>');
        }
    }
    else{
        setcookie("cookie", "HEYCUPERSECRETCOOKIE");
        header('Location: console.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Login Form Example</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,700"><link rel="stylesheet" href="./style.css">
</head>
<body>
<!---
if(isset($_POST['username'])||isset($_POST['password'])){
    if($_POST['username']!=''&&$_POST['password']!=''){
        if($_POST['username']!='HIDDEN'&&$_POST['password']!='HIDDEN'){
            echo('<h1>Login Failed</h1>');
        }
    }
    else{
        header('Location: console.php');
        echo('Welcome, administrator')
        exit();
    }
}s
--->
<div class="login-form">
<form action="login.php" method="post">
<h1>Login</h1>
<div class="content">
<div class="input-field">
<input style="text" name="username" id="username" placeholder="Email" autocomplete="nope">
</div>
<div class="input-field">
<input type="text" name="password" id="password" placeholder="Password">
</div>
<h3><sapn id="Outcome"></sapn></h3>
</div>
<div class="action">
<button>Register</button>
<button id="Button"  type="submit">Sign in</button>
</div>
</form>
</div>
<script>
  const passwd=document.querySelector('#Passwd');
  const account=document.querySelector('#Account');
  const Button=document.querySelector('#Button');
  const Outcome=document.querySelector('#Outcome');
  let headers = {
    "Content-Type": "multipart/form-data"
    }
  Button.addEventListener('click',()=>{
    fetch('./login.php', {
    method: "POST",
    headers: headers,
    body: "username="+Account.value+"&password="+Passwd.value
    })
  })
</script>
</body>
</html>
