<?php 
if(!isset($_COOKIE['race']) || !isset($_COOKIE['class'])){
    echo '<p>Persistent favShow cookie not found </p>';
}
else {
    echo '<p>Your character is a(n) ' . $_COOKIE['race'] . ' ' . $_COOKIE['class'] . '.</p>';
}

?>