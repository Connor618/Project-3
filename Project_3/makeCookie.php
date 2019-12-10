<<<<<<< HEAD
<?php
if(isset($_POST['race']) && !empty($_POST['race']) && isset($_POST['class']) && !empty($_POST['class'])) {
    echo "adding cookies";
    $cookieName = "race";
    $cookieValue = $_POST['race'];
    setcookie($cookieName, $cookieValue);
    $cookieName = "class";
    $cookieValue = $_POST['class'];
    setcookie($cookieName, $cookieValue);
} else {
    echo "Please make sure you have selected all of the required information";
}
=======

<?php
if(isset($_POST['race']) && !empty($_POST['race']) && isset($_POST['class']) && !empty($_POST['class'])) {
    echo "adding cookies";
    $cookieName = "race";
    $cookieValue = $_POST['race'];
    setcookie($cookieName, $cookieValue);
    $cookieName = "class";
    $cookieValue = $_POST['class'];
    setcookie($cookieName, $cookieValue);
} else {
    echo "Please make sure you have selected all of the required information";
}

>>>>>>> e34703486fc9e0a23557d62ce1a183339842da5e
header("Location: result.php");