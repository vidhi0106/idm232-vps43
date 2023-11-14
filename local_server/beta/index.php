<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    <link rel="stylesheet" href="general.css">
</head>
<body>

<?php
    require_once './includes/fun.php';
    consoleMsg("PHP to JS .. is Wicked FUN");
    require_once './env.php';
    require_once './includes/database.php';

    // Get all the recipes from "recipes" table in the "idm232" database
    $query = "SELECT * FROM recipes WHERE id = 2";
    $results = mysqli_query($db_connection, $query);
?>

<div class="header">  
    <div class="logo">
        <img class="logo_pic" src="images/logo.png" alt="logo">
        <div class="subtitle">
            <h1>Tasty Tales</h1>
            <h5>Cooking made easy!</h5>
        </div>
    </div>
</div> 

<img class="back_button" src="images/back.png" alt="back button" />

<div class="main_grid">
    <?php
    if ($results->num_rows > 0) {
        consoleMsg("Query successful! number of rows: $results->num_rows");
        while ($oneRecipe = mysqli_fetch_array($results)) {
            $id = $oneRecipe['id'];
    ?>
    
            <div class="recipe_card">
                <div class="recipe_image">
                    <img class="image" src="./images/<?php echo $oneRecipe['Main IMG']; ?>" alt="Dish Image">
                </div>
                <div class="vertical">
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
                    <div class="serving">
                         <p><?php echo $oneRecipe['Servings'] . ' Servings'; ?></p>
                    </div>
                    <div class="calories">
                        <p><?php echo $oneRecipe['Cal/Serving'] . ' Cal'; ?></p>
                    </div>
                    </div>
                    <div class="description">
                    <p style="margin-left:10px;"><?php echo $oneRecipe['Description'] ?></p>

                    </div>
                </div>
            </div>
    <h2 class="subtitle_page">Ingredients</h2>
    <div class="ingredients">
        <div class="ingredient_img">
            <img class="ing" src="images/ingredients.png" alt="ingredients">
        </div>
        <div class="ingredient_list">
            <p >
            <?php echo $oneRecipe['Ingredient #1'] ?> <br> <br>
            <?php echo $oneRecipe['Ingredient #2'] ?> <br><br>
            <?php echo $oneRecipe['Ingredient #3'] ?><br><br>
            <?php echo $oneRecipe['Ingredient #4'] ?><br><br>
            <?php echo $oneRecipe['Ingredient #5'] ?> <br><br>
            <?php echo $oneRecipe['Ingredient #6'] ?><br><br>
            <?php echo $oneRecipe['Ingredient #7'] ?><br><br>
            <?php echo $oneRecipe['Ingredient #8'] ?><br><br>
            <?php echo $oneRecipe['Ingredient #9'] ?><br><br>
            <?php echo $oneRecipe['Ingredient #10'] ?> <br><br>
            <?php echo $oneRecipe['Ingredient #11'] ?> <br><br>
            <?php echo $oneRecipe['Ingredient #12'] ?> <br><br>
            <?php echo $oneRecipe['Ingredient #13'] ?> <br><br>
        
            </p>

        </div>
    </div>




    <h2 class="subtitle_page">Recipe</h2>
    <div class="step_grid">

    <div class="recipe_steps">
    
    <div class="step_img">
        <img class="recipe_img" src="images/step1.jpeg" alt="step 1">
    </div>
    <div class="step">
        <h4><?php echo $oneRecipe['Step Title #1']; ?></h4>
    </div>
    <div class="step_desc">
        <p><?php echo $oneRecipe['Step Desc #1']; ?></p>
    </div>

    </div>


    <div class="recipe_steps">
    
    <div class="step_img">
        <img class="recipe_img" src="images/step2.jpeg" alt="step 2">
    </div>
    <div class="step">
    <h4><?php echo $oneRecipe['Step Title #2']; ?></h4>
    </div>
    <div class="step_desc">
    <p><?php echo $oneRecipe['Step Desc #2']; ?></p>
    </div>

    </div>

    <div class="recipe_steps">
    <div class="step_img">
        <img  class="recipe_img" src="images/step3.jpeg" alt="step 3">
    </div>
    <div class="step">
    <h4><?php echo $oneRecipe['Step Title #3']; ?></h4>
    </div>
    <div class="step_desc">
    <p><?php echo $oneRecipe['Step Desc #3']; ?></p>
    </div>
    </div>

    <div class="recipe_steps">
    
    <div class="step_img">
        <img class="recipe_img" src="images/step4.jpeg" alt="step 4">
    </div>
    <div class="step">
    <h4><?php echo $oneRecipe['Step Title #4']; ?></h4>
    </div>
    <div class="step_desc">
    <p><?php echo $oneRecipe['Step Desc #4']; ?></p>
    </div>
    </div>

    <div class="recipe_steps">
    
    <div class="step_img">
        <img class="recipe_img" src="images/step5.jpeg" alt="step 5">
    </div>
    <div class="step">
    <h4><?php echo $oneRecipe['Step Title #5']; ?></h4>
    </div>
    <div class="step_desc">
    <p><?php echo $oneRecipe['Step Desc #5']; ?></p>
    </div>
    </div>

    <div class="recipe_steps">

    <div class="step_img">
        <img class="recipe_img" src="images/step6.jpeg" alt="step 6">
    </div>
    <div class="step">
    <h4><?php echo $oneRecipe['Step Title #6']; ?></h4>
    </div>
    <div class="step_desc">
    <p><?php echo $oneRecipe['Step Desc #6']; ?></p>
    </div>
    </div>

</div>

<footer>
    <div class="footer" > <h4>© Created by Vidhi Shah</h4></div>
 </footer>

    
    <?php
        }
    } else {
        consoleMsg("QUERY ERROR");
    }
    ?>
</body>
</html>