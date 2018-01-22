<?php
session_start();

define("WITHDRAWALS_ENABLED", true); //Disable withdrawals during maintenance

include('jsonRPCClient.php');
include('classes/Client.php');
include('classes/User.php');

// function by wallet to modify the number to bitcoin format ex. 0.00120000
function satoshitize($satoshitize) {
   return sprintf("%.8f", $satoshitize);
}

// function by wallet to trim trailing zeroes and decimal if need
function satoshitrim($satoshitrim) {
   return rtrim(rtrim($satoshitrim, "0"), ".");
}

$server_url = "http://localhost/wallet/";  // website url

$db_host = "localhost";
$db_user = "root";
$db_pass = "X7Q8ftCZnM";
$db_name = "wallet";

$rpc_host = "127.0.0.1";
$rpc_port = "8332";
$rpc_user = "rpc_user";
$rpc_pass = "rpc_pass";


$fullname = ""; //Website Title (Do Not include 'wallet')
$short = ""; //Coin Short (BTC)
$blockchain_url = "https://moneroblocks.info/tx/"; //Blockchain Url
$support = "email"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = ""; //Donation Address
?>
