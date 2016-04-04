<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<div class="container" method="post">
    <div class="row">
    
        <h1>Login</h1>

        <form class="form-horizontal" method="post" action="/SistemaSME/Controller/ControleLogin.php">
          <fieldset>
          
          <!-- Form Name -->
          <legend>Form</legend>
          
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="email_login">Email:</label>  
            <div class="col-md-4">
                <input id="email_login" name="email_login" type="text" placeholder="joe.doe@hotmail.com" class="form-control input-md" required="">
                <span class="help-block">Enter your e-mail address</span>  
            </div>
            <div class="col-md-6"></div>          
          </div>
          
          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="password_login">Password:</label>
            <div class="col-md-4">
              <input id="password_login" name="password_login" type="password" placeholder="●●●●●" class="form-control input-md" required="">
              <span class="help-block">Enter your password</span>
            </div>
              <div class="col-md-6"></div>                    
          </div>
          
          <!-- Multiple Checkboxes (inline) -->
          <div class="form-group">
            <label class="col-md-2 control-label" for="login_options"></label>
            <div class="col-md-2">
              <label class="checkbox-inline" for="login_options-0">
              <input type="checkbox" name="login_options" id="login_options-0" value="1">remember me</label>
            </div>
            <div class="col-md-2">
              <label class="checkbox-inline" for="">
                  <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                  <a href="#">forgot password</a>
              </label>
            </div>
            <div class="col-md-6"></div>                              
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-2 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <input id="singlebutton" name="singlebutton" type="submit" class="btn btn-primary" value="Login">
            </div>
            <div class="col-md-6"></div>                              
          </div>
          
          </fieldset>
        </form>
        
    </div>
</div>
</body>
</html>