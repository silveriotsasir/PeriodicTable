<?php
    require_once ('util/db_manager.php');
    if (isset($_GET['element_id']) && isset($_GET['color'])){
        $element = get_element_by_id($_GET['element_id']);
        $color = $_GET['color'];
    }
    else{
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $element->getName().' Page';?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>

<div class="jumbotron text-center <?php echo $color; ?>">
    <h1><?php echo '('.$element->getId().') '.$element->getName(); ?></h1>
    <p><?php echo $element->getSymbol(); ?></p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6 text-center">
            <h4>Name: </h4>
            <h2><?php echo $element->getName()?></h2>
            <h4>Symbol: </h4>
            <h2><?php echo $element->getSymbol()?></h2>
            <h4>Number: </h4>
            <h2><?php echo $element->getId()?></h2>
        </div>
        <div class="col-sm-6 text-center">
            <h4>Mass: </h4>
            <h2><?php echo $element->getMass()?></h2>
            <h4>Element group: </h4>
            <h2><?php echo $element->getElementGroup()?></h2>
            <h4>Period: </h4>
            <h2><?php echo $element->getPeriod()?></h2>
        </div>
    </div>
</div>

</body>
</html>

