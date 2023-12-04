<!DOCTYPE html>

<html>

<head>
  <title>Recipes</title>
  <link rel="stylesheet" href="./styles.css">
</head>

<body>

<?php
  // $msg = "HOWDY";
  // echo '<script type="text/javascript">console.log("'. $msg .'");</script>';

  require_once './includes/fun.php';
  consoleMsg("PHP to JS .. is Wicked FUN");

  // Include env.php that holds global vars with secret info
  require_once './env.php';

  // Include the database connection code
  require_once './includes/database.php';

?>

<div class="header">  
<div class="logo">
    <img class="logo_pic" src="images/logo.png" alt="logo">
    <div class="subtitle">
    <h1>Tasty Tales</h1>
    <h5>Cooking made easy!</h5>
</div>
</div>



<div class="search_container">
        <form action="index.php" method="POST">
          <input type="search" id="search" placeholder="Type here.." name="search" value="<?php echoSearchValue(); ?>">
          <button class="btn" type="submit" name="submit" id="submit">Search</button>
        </form>
    
</div>
</div> 

<?php
// // Get all the recipes from "recipes" table in the "idm232" database
// $query = "SELECT * FROM recipes";

// STEP 05 Build Search Query
$search = $_POST['search'];
consoleMsg("Search is $search");

$filter = $_GET['filter'];
consoleMsg("Filter is: $filter");

if (!empty($search)) {
  consoleMsg("Doing a SEARCH");
  // $query = "select * FROM recipes WHERE title LIKE '%{$search}%'";
  $query = "select * FROM recipes WHERE Title LIKE '%{$search}%' OR Subtitle LIKE '%{$search}%'";
  $result = mysqli_query($connection, $query);
}
elseif (!empty($filter)) {
  consoleMsg("Doing a FILTER");
  $query = "SELECT * FROM recipes WHERE Proteine LIKE '%{$filter}%'";
}
else {
  consoleMsg("Loading ALL RECIPES");
  $query = "SELECT * FROM recipes";
}


?>

 <!-- <a href="index.php?filter=beef">BEEF</a>
    <li><a href="index.php?filter=chicken">CHICKEN</a></li>
    <li><a href="index.php?filter=pork">PORK</a></li>
    <li><a href="index.php?filter=vegitarian">VEGETARIAN</a></li> -->

<div class="filter"  id="myBtnContainer">

<a class="btn" href="index.php">
     All
    </a>
    

 <a class="btn" href="index.php?filter=vegitarian"> Vegitarian </a>

    <a class="btn" href="index.php?filter=pork" >
     Pork
    </a> 

    <a class="btn" href="index.php?filter=chicken">
    Chicken
    </a>

    <a class="btn" href="index.php?filter=fish">
     Fish
    </a>

    
    <a class="btn" href="index.php?filter=beef">
    Beef
    </a>

    <a class="btn" href="index.php?filter=turkey">
     Turkey
    </a>

    <a class="btn" href="index.php?filter=steak">
     Steak
</a> 

  </div> 




  <h1>Recipes</h1>

  <div id="content">

  <div class="main_grid">
<?php

$results = mysqli_query($db_connection, $query);
if ($results->num_rows > 0) {
  consoleMsg("Query successful! number of rows: $results->num_rows");
  while ($oneRecipe = mysqli_fetch_array($results)) {
    $id = $oneRecipe['id'];
?>


    <div class="recipe_card">
      <?php echo '<a href="detail.php?recID=' . $id . '">'; ?>
        <div class="recipe_image">
            <img class="image" src="./images/<?php echo $oneRecipe['Main IMG']; ?>" alt="Dish Image">
        </div>
        <?php echo '</a>'; ?>

        <?php echo '<a href="detail.php?recID=' . $id . '">'; ?>
        <div class="type">
            <h4><?php echo $oneRecipe['Proteine']; ?></h4>
        </div>
        <?php echo '</a>'; ?>

        <?php echo '<a href="detail.php?recID=' . $id . '">'; ?>
        <div class="recipe_name">
            <div>
                <h2><?php echo $oneRecipe['Title']; ?></h2>
            </div>
            <div>
                <h4><?php echo $oneRecipe['Subtitle']; ?></h4>
            </div>
        </div>
        <?php echo '</a>'; ?>

        <?php echo '<a href="detail.php?recID=' . $id . '">'; ?>
        <div class="more_info">
            <div class="cook_time">
                <div class="icon">
                    <img class="clock" src="images/cook_time_icon.png" alt="cook time icon">
                    <div class="cook_time_text">
                        <p><?php echo $oneRecipe['Cook Time']; ?></p>
                    </div>
                </div>
            </div>
            <?php echo '</a>'; ?>

            <?php echo '<a href="detail.php?recID=' . $id . '">'; ?>
            <div class="calories">
                <p><?php echo $oneRecipe['Cal/Serving'] . ' Cal'; ?></p>
            </div>
            <?php echo '</a>'; ?>


        </div>
    </div>
<?php
  }
} else {
  consoleMsg("QUERY ERROR");
}
?>
</div>


  </div>


  <script src="script.js"></script>
</body>

</html>