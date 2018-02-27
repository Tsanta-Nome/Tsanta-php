<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body>
<div class="col-sm-4">
<form id="form" action="save.php" method="POST" class="well form-group" >
<br/>
        <label>Pseudo:</label>
        <input type="text" class="form-control"  name="pseudo" id="pseudo">
         <p id="cont" class="label label-info"></p><br>
        <labe>Email :</label><input type="text" class="form-control"  name="email">
             <p id="content" class="label label-info"></p><br>
        <label>Password:</label><input type="text" class="form-control"  name="pass">
         <p id="content" class="label label-success"></p><br>
        <button type="submit" class="btn btn-block btn-primary">Terminer</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="app.js"> </script>
  <script type="text/javascript" language="javascript">
       $("document").ready(function()
    {
       $("#nom").keyup(function(event)
       {
        $('#content').html(this.value);
       }) ;
    })  ;
  
  $("document").ready(function()
    {
       $("#pseudo").keyup(function(event)
       {
        $('#cont').html(this.value);
       }) ;
    })  ;
       
    </script>
</body>
</html>


