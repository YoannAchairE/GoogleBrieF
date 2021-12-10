<?php
  session_start();
  include "connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Brief Google</title>
    <script src="https://kit.fontawesome.com/7ecfaff57a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/stylee.css">
</head>

<body style="margin-top:10px;">
  <header>
    
    <div class="top">
      <img class="logo" src="img/logog.png">
      <div class="searchbox">
      <form method="get" action="">
        <img src="img/loupe.jpg" class="loupe">
        <img src="img/camera.png" class="cam-icon">
        <img src="img/microphone.jpg" class="mic-icon">
        <input type="search" name="or" value="<?php echo $_GET['or']; ?>">
        <input type="image" src="img/loupeblue.png" class="blusearch" name="recherche" >
      </form>
      </div>
    </div>
    <nav>
      <ul>
        <div class="button-left">
          <li><i class="fa fa-search"></i>&nbsp All</li>
          <li><i class="far fa-image"></i>&nbsp Image</li>
          <li><i class="fas fa-play" style="font-size: 10px; border: 1px solid; border-radius: 2px; padding: 2px;"></i>&nbsp Videos</li>
          <li><i class="far fa-newspaper"></i> &nbsp News</li>
          <li><i class="fas fa-ellipsis-v"></i> &nbsp More</li>
        </div>
        <div class="button-right">
          <li>Tools</li>
        </div>
      </ul>
    </nav>
    <hr>
  </header>
    <div class="card-group">
      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 65px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Rose</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 68px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Jardin</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 68px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Amour</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 68px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Blanc</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 68px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Nature</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 68px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Belle</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 68px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Fleur</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 68px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Mauve</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 ml-3" style="max-width: 150px; border-radius: 15px; margin-right: 10px;">
        <div class="row">
          <div class="col-md-4" style="padding: 0; margin-left: 12px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rose_Papa_Meilland.jpg/330px-Rose_Papa_Meilland.jpg" class="img-fluid rounded-start" alt="..." style="height: 68px;">
          </div>
          <div class="col-md-6" style="padding: 0;">
            <div class="card-body" style="padding-left: 18px; padding-top: 21px; padding-bottom: 0;">
              <h5 class="card-title">Rose</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="main">
    <div class="row row-cols-1 row-cols-md-6 g-4">
    <?php
  include "search.php";
?>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "40%";
  document.getElementById("main").style.marginRight = "40%";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginRight= "0";
}
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
</script>
<script>
  // Open the Modal
  function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  </script>
</body>
</html>

