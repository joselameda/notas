<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
   <?php 
      if (isset($_SESSION['iduser'])):  
      ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <span class="navbar-brand">Notas</span>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="agregar.php">Agregar</a></li>
              </ul>
              <div id="navbar" class="navbar-form navbar-right">
              <span style=color:white><?php echo $_SESSION['username'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <a href="logout.php" class="btn btn-primary">Logout</a>
             </div>
            </div> 
          </div>
        </nav>
        <?php else: ?>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Bienvenido a Notas</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                <form method="post" action="user.php" class="navbar-form navbar-right">
                    <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control " name="email">
                    </div>
                    <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" name="password">
                    <input type="hidden" name="login" value="true">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                    <a href="register.php">Registrate</a>                        
                </form>
                </div>
            </div>
            </nav>
            <?php 
        endif;
    ?>
<div class="container-fluid" style="margin-top:50px">
  