<?php

    if(isset($_GET['or']) AND !empty($_GET['or'])) {
        $q= htmlspecialchars($_GET['or']);
        $sq= strtolower($q);
        //on recherche dans la base de données
        $sql = "SELECT * FROM informationplante LEFT JOIN infofleurimage ON informationplante.idplante = infofleurimage.idinformationplante WHERE nomplante LIKE '$q%' or typeplante LIKE '$q%'  " ;

        $result = mysqli_query($conn, $sql);
        $c = 1;
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            $idp = $row['idplante'];
            $nom = $row['nomplante'];
            $image = $row['lienplante'];
            $type = $row['typeplante'];
            $desc = $row['descriptionplante'];
            $count = mysqli_num_rows($result);
?>
    
    <div class="col" style="min-width: 12rem;">
      <div class="card h-100" style="max-width: 14rem; min-width: 13rem;">
        <img src="<?php echo $image; ?>" class="card-img-top" alt="<?php echo $nom; ?>" style="width: 100%; height: 200px" onclick="openNav();currentSlide(<?php echo $c; ?>)">
        <div class="card-body">
          <h5 class="card-title"><?php echo ucfirst($nom); ?></h5>
          <p class="card-text"><?php echo substr($desc,0,100)."..."; ?></p>
        </div>
      </div>
    </div>
        <?php
          $c++;
          }
        ?>
  </div>
</div>
    <?php
    include 'side.php';
        } else {
          echo "Aucun résultat trouvé";
        }
    }
    
    mysqli_close($conn);
    ?>