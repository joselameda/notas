<?php
    session_start();
    include("header.php");
        if (isset($_SESSION['iduser'])) {
          header("location:index.php");
        }
        
?>
<span styl zxcvbnm,./e="color:background-color:#2E2E2E">
    
    <div class="container">
        <div class="col-md-12">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.anawalls.com/repic/image.php?src=http://www.anawalls.com/images/other/pen-coffee-notebook-writing.jpg&h=800&w=1280" class="img-responsive" alt="...">
      <div class="carousel-caption">
            <h2>CREA TUS NOTAS PERSONALES</h2>
      </div>
    </div>
    <div class="item">
      <img src="https://cdn.allwallpaper.in/wallpapers/1280x800/15653/alone-travel-1280x800-wallpaper.jpg" class="image-resposive" alt="...">
      <div class="carousel-caption">
        <h2>EN CUALQUIER SITIO QUE ESTES</h2>
      </div>
    </div>
    <div class="item">
      <img src="https://wallpaperstock.net/message-wallpapers_27125_1280x800.jpg" class="image-resposive" alt="...">
      <div class="carousel-caption">
        <h2 style="color:black">QUE FLUYAN TUS IDEAS</h2>
      </div>
     </div> 
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</span>
<?php
    include("footer.php");
?>