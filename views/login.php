<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hanja Learner</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ryu Patterson">
    <meta name="description" content="Learn Hanja easily">
    <meta name="keywords" content="Learning">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/0604459c37.js"></script>
  </head>
  <body>
  <!--Top Navigation / Header bar-->
    <header>
    </header>
    <!--Main Content-->
    <section>
      <form id="login_form" name='login' action="<?=$this->base_url?>/account/login/" onsubmit="return validate();" method="post">
        <div>
          <label for="username">Username</label>
          <input type="text" id="username" name="username"/>
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" id="password" name="password"/>
        </div>
        <div>
          <button type="submit">Log in / Create Account</button>
        </div>
      </form>
      <p style="color: red;"><?= $error_msg ?></p>
    </section>
    <!--Footer-->
    <footer>
      <div>
        <small>
          © 2021 Ryu Patterson
        </small>
      </div>
    </footer>
    <script>
      function validate(){ //validates login form username
        let user = document.forms['login']['username'].value;
        var reg = new RegExp("[ -~]"); // checks all ASCii characters
        if(!reg.test(user)){
          alert("Please don't use unicode characters!!"); //non ascii characters are not allowed
          return false;
        } else{
          return true;
        }
      }
    </script>
  </body>
</html>
