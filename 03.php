<?php include_once("header.php"); ?>

<h1>Les boucles</h1>

<div id="container">
<?php
//
$url = "https://img.att.ovh/dragons/";
//tableau, liste

$dragons = array("black.jpg", "blue.jpg", "green.jpg", "orange.jpg", "red.jpg","white.jpg",
"pink.jpg","purple.jpg","yellow.jpg");

for($i = 0; $i < count($dragons); $i++){
    print('<img src="'. $url .$dragons[$i].'" alt="" />');
}

?>
</div>
<?php include_once("footer.php"); ?>
