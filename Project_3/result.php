
  <head>
           <meta charset="utf-8">
                <title>Dungeons and Dragons</title>
                <h1>Dungeons and Dragons</h1>
                <link type="text/css" rel="stylesheet" href="styles/mystyles.css" media="screen">
       </head>
       <div id=banner>

<?php 
if(!isset($_COOKIE['race']) || !isset($_COOKIE['class'])){
    echo '<p>Persistent favShow cookie not found </p>';
}
else {
    echo '<p>Your character is a(n) ' . $_COOKIE['race'] . ' ' . $_COOKIE['class'] . '.</p>';
}

?>
</div>