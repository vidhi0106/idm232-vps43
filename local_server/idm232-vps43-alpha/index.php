<!DOCTYPE html>

<html>

<head>
  <title>PHP Main Menu Dynamic</title>
  <link rel="stylesheet" href="./styles/general.css">
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

  <h1>PHP Main Menu Dynamic</h1>

  <div id="content">

  <div class="main_grid">
<?php
// Get all the recipes from "recipes" table in the "idm232" database
$query = "SELECT * FROM recipes";
$results = mysqli_query($db_connection, $query);
if ($results->num_rows > 0) {
  consoleMsg("Query successful! number of rows: $results->num_rows");
  while ($oneRecipe = mysqli_fetch_array($results)) {
    $id = $oneRecipe['id'];
?>
    <div class="recipe_card">
        <div class="recipe_image">
            <img class="image" src="./images/<?php echo $oneRecipe['Main IMG']; ?>" alt="Dish Image">
        </div>
        <div class="type">
            <h4><?php echo $oneRecipe['Proteine']; ?></h4>
        </div>
        <div class="recipe_name">
            <div>
                <h2><?php echo $oneRecipe['Title']; ?></h2>
            </div>
            <div>
                <h4><?php echo $oneRecipe['Subtitle']; ?></h4>
            </div>
        </div>
        <div class="more_info">
            <div class="cook_time">
                <div class="icon">
                    <img class="clock" src="images/cook_time_icon.png" alt="cook time icon">
                    <div class="cook_time_text">
                        <p><?php echo $oneRecipe['Cook Time']; ?></p>
                    </div>
                </div>
            </div>
            <div class="calories">
                <p><?php echo $oneRecipe['Cal/Serving'] . ' Cal'; ?></p>
            </div>
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

</body>

</html>