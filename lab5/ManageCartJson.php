<?php
session_start();

$newitem = $_GET["book"];
$action = $_GET["action"];

if (array_key_exists("Cart", $_SESSION)) {
    $cart = $_SESSION["Cart"];
    if ($action == "Add") {
        if ($cart[$newitem] != "") {
            $cart[$newitem] = $cart[$newitem] + 1;
        } else {
            $cart[$newitem] = "1";
        }
    } else {
        $cart[$newitem] = "";
    }
} else {
    $cart[$newitem] = "1";
}

$_SESSION["Cart"] = $cart;

$cleanCart = array_filter($cart, function($v) { return $v != ""; });
echo json_encode($cleanCart);
?>
