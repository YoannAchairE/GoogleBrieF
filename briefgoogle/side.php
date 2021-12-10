<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="modal-content">
    <?php
    $a = 1;
    $sql1 = "SELECT * FROM informationplante LEFT JOIN infofleurimage ON informationplante.idplante = infofleurimage.idinformationplante WHERE nomplante LIKE '$q%' or typeplante LIKE '$q%'  ";
    
    $result1 = mysqli_query($conn, $sql1);
    $i = 1;
    $nbre = mysqli_num_rows($result1);
    if (mysqli_num_rows($result1) > 0) {
            while($row1 = mysqli_fetch_assoc($result1)) {
              $img = $row1['lienplante'];
              $np = $row1['nomplante'];
              $des = $row1['descriptionplante'];
                ?>
            
            <div class="mySlides">
            <div class="numbertext"><?php echo $i."/".$count; ?></div>
            <img src="<?php echo $img ; ?>" style="width:100%; padding: 10px; height: 400px;background: black;">
            <div class="card-body text-light" style="background: black;">
          <h5 class="card-title"><?php echo ucfirst($np); ?></h5>
          <p class="card-text"><?php echo ucfirst($des); ?></p>
        </div>
            </div>
            
            <?php
            $a++;
            }
          }
            ?>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
    <?php
    $b = 1 ;
    $sql = "SELECT * FROM informationplante LEFT JOIN infofleurimage ON informationplante.idplante = infofleurimage.idinformationplante WHERE nomplante LIKE '$q%' or typeplante LIKE '$q%'  ";
    
    $result = mysqli_query($conn, $sql);
    $c = 1;
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
           $row['idplante'];
          $nom = $row['nomplante'];
          $image = $row['lienplante'];
          $type = $row['typeplante'];
          $desc = $row['descriptionplante'];
          $count = mysqli_num_rows($result);
        ?>
      <!-- <p id="caption"></p> -->
    </div>

                <!-- Thumbnail image controls -->
                <div class="column">
                <img class="demo" src="<?php echo $image; ?>" onclick="currentSlide(<?php echo $b; ?>)" alt="<?php echo $nom; ?>"
                style="width:100%; padding: 10px; height: 100px;">
                
                <?php
                $b++;
                }
    } else {
      echo "Aucun resultat trouvé.";
    }
    ?>
                </div>
                
    
  </div>
</div>