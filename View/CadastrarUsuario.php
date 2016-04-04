<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Usuario</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>













<form class="form-horizontal">
<h1>Cadastrar</h1>
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Nome</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="Fulano de tal" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Email</label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="exemple@example.com" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="number">Senha</label>  
  <div class="col-md-4">
  <input id="number" name="number" type="password" placeholder="●●●●●" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="number">Confirmar Senha</label>  
  <div class="col-md-4">
  <input id="number" name="number" type="password" placeholder="●●●●●" class="form-control input-md">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="location">Regional</label>
  <div class="col-md-4">
    <select id="location" name="location" class="form-control">
      <option value="CCL">California</option>
      <option value="MBL">Campo Novo</option>
      <option value="OBK">Jose juca</option>
      <option value="ADL">Campo velho</option>
      <option value="READS">Riacho verde</option>
    </select>
  </div>
</div>


<!-- Multiple Checkboxes 
<div class="form-group">
  <label class="col-md-4 control-label" for="offense">Offense</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="offense-0">
      <input type="checkbox" name="offense" id="offense-0" value="1">
      Option one
    </label>
    </div>
  <div class="checkbox">
    <label for="offense-1">
      <input type="checkbox" name="offense" id="offense-1" value="2">
      Option two
    </label>
	</div>
  </div>
</div>-->

<!-- Textarea 
<div class="form-group">
  <label class="col-md-4 control-label" for="details">Narrative Details</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="details" name="details">default text</textarea>
  </div>
</div>-->


<!-- Multiple Radios (inline)
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="Female">
      Female
    </label>
  </div>
</div> -->


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
































    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>