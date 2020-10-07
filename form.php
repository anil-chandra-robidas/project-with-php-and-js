<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['buyername'];
$email = $_POST['buyeremail'];
$city = $_POST['buyercity'];
$phone = $_POST['buyerphone'];
$amount = $_POST['buyeramount'];

if ( ( is_numeric( $amount ) ) && ( strlen((string)$amounts) >= 10 ) ) {
    
}
$recieveid = $_POST['buyerreceiptid'];
$note = $_POST['buyenote'];


echo "jhjhjg";



}