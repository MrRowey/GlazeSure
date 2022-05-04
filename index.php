<html>
<head>
<title>GlazeSure Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  body {background-image: url(/img/loginbg.jpg); }
</style>
</head>

<body>

<header class="w3-container w3-black">
  <h1 class="w3-center">GlazeSure Internal Sale System</h1>
</header>
<div class="w3-container w3-half w3-margin-top">

  <form class="w3-container w3-card-4 w3-white" action="/Login/authenticate.php" method="$_POST">
    <h2 w3-center>Login</h2>
    <?php if(isset($_GET['error'])) {?>
      <p class="w3-pannel w3-red"><?php echo $_GET['error']; ?> </p>
    <?php }?>
    <label>Username</label>
    <input class="w3-input" type="text" name="uname" placeholder="Username" id="username" style="width:90%" required><br>
    <label>Password</label>
    <input class="w3-input" type="password" name="password" placeholder="Password" id="password" style="width:90%" required><br>
    <button class="w3-button w3-section w3-teal w3-ripple" type="submit"> Log in </button>
    
  </form>
</div>
<div class="w3-container w3-grey w3-bottom" >
  <p class="w3-center">If you Do not have a login please see the Administrator.</p>
</div>
</body>

</html> 
