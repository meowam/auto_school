<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://cldup.com/S6Ptkwu_qA.js">
  <link rel="stylesheet" href="/assets/css/login.css">
  <link rel="icon" href="/assets/img/icon.svg">
  <title>Автошкола</title>
</head>


<body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form name="form1" class="box" onsubmit="return checkStuff()" method="post" action="/scripts/login.php">
      <h4>Admin<span>Dashboard</span></h4>
      <h5>Увійдіть в свій акаунт.</h5>
      <input type="text" name="email" placeholder="Email" autocomplete="off">
      <i class="typcn typcn-eye" id="eye"></i>
      <input type="password" name="password" placeholder="Password" id="pwd" autocomplete="off">
      <label>
        <input type="checkbox">
        <span></span>
        <small class="rmb" name="remember-me">Запам'ятати мене</small>
      </label>
      <input type="submit" value="Увійти" class="btn1">
    </form>
  </div>

</div>
<script src="/assets/js/login.js"></script>
</html>