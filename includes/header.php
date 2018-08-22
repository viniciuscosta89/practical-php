<?php
  $companyName = "Franklin's Fine Dining";
  include("includes/arrays.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="/assets/styles.css">
  </head>
  <body id="final-example">

    <main class="wrapper">

      <div id="banner">
        <a href="/" title="Return to Home">
          <img src="img/banner.png" alt="Franklin's Fine Dining">
        </a>
      </div><!-- banner -->

      <nav id="nav">
          <?php include("includes/nav.php"); ?>
      </nav><!-- nav -->

      <div class="content">
