<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style type="text/css">
      body {
        font-family: Raleway;
      }
        .page-header{ font: 14px sans-serif; text-align: center; }
        #todoInput { margin-left: 55px; height: 35px; }
        ol#todoList { margin-left: 35px; margin-top: 25px; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Blog.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    </div>

<form class="form-horizontal" method="post" action="blog/addarticle.php">
<fieldset>

<!-- Form Name -->
<legend>Article Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="article_title">Title</label>  
  <div class="col-md-4">
  <input id="article_title" name="nadpis" type="text" placeholder="article title" class="form-control input-md">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="source_description">Text</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="source_description" placeholder="article text" name="textik"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="article_date">Date</label>  
  <div class="col-md-4">
  <input id="article_date" name="datum" type="text" placeholder="article date of publication " class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="article_authors">Author</label>  
  <div class="col-md-4">
  <input id="article_authors" name="autor" type="text" placeholder="Article Authors" class="form-control input-md">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="article_categories">Categories</label>
  <div class="col-md-4">
    <select id="article_categories" name="kategorie" class="form-control">
      <option value="Print Graphic">Print Design</option>
      <option value="Web Design">Web Design</option>
      <option value="Web Development">Web Development</option>
      <option value="3D Graphic">3D Graphic</option>
    </select>
  </div>
</div>

            <div class="form-group">
              <div class="col-md-4">
                <input type="submit" name="btn" class="btn btn-primary" value="Add article">
              </div>
            </div>

</fieldset>
</form>


    <!--<form id="todoForm">
        <input id="todoInput" name="input">
        <button type="button" class="btn btn-success" onclick="todoList()">Add idea/reminder</button>
    </form>

    <ol id="todoList">

    </ol>

<script src="app.js"></script>-->
</body>
</html>