<!DOCTYPE html>
<html>

<head>
  <title>Static Main Menu</title>
  <link rel="stylesheet" href="general.css">
</head>

<body>
  <h1>PHP Main Menu</h1>

  <!-- <div id="content">
    <figure class="oneRec">
      <img src="images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png" alt="chicken rice">
      <figcaption>
        Ancho-Orange Chicken
      </figcaption>
    </figure>

    <figure class="oneRecOdd">
      <img src="images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png" alt="chicken rice">
      <figcaption>
        Ancho-Orange Chicken
      </figcaption>
    </figure>

    <figure class="oneRec">
      <img src="images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png" alt="chicken rice">
      <figcaption>
        Ancho-Orange Chicken
      </figcaption>
    </figure>

  
  </div> -->
  
  <div id="content">
    <?php 

    // echo "Hello World";
    $rNum = rand(1,15);
    for ($lp = 0; $lp <= $rNum ; $lp++) {
      $background_color = $lp % 2 == 0 ? 'lightblue' : 'lightgreen';

    echo "<figure class='oneRec' style='background-color: $background_color;'>"; 
    echo "<img src='images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png' alt='chicken rice'>";
    echo "<figcaption>" . $lp . " Ancho-Orange Chicken</figcaption>";
    echo "</figure>";

    }






    ?>
   </div> 

</body>

</html>