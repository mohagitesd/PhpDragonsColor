<?php include_once("header.php"); ?>

<h1>GET</h1>

<p>Choisissez votre dragons : </p>

<ul>
    <li><a href="04.php?color=black">black</a></li>
    <li><a href="04.php?color=pink">pink</a></li>
    <li><a href="04.php?color=yellow">yellow</a></li>
</ul>


<form method="post" action="04.php">
    <select name="color" >
        <option value="green">Vert</option>
        <option value="purple">Pourpre</option>
    </select>

    <button type="submit">Chercher</button>

</form>


<?php
$url = "https://img.att.ovh/dragons/";

//Super variables : $_GET ,$_POST , $_SERVER
// print_r = Readable
print_r($_GET);
print_r($_POST);
//print_r($_SERVER);


if(isset($_POST['color'])){
    print('<img src="'. $url .$_POST['color'].'.jpg" alt="" />');

}

if(isset($_GET['color'])){
    print($_GET['color']);
    print('<img src="'. $url .$_GET['color'].'.jpg" alt="" />');

}else{
    print("Vous n'avez pas choisie de dragon!");
}


?>


<?php include_once("footer.php"); ?>
