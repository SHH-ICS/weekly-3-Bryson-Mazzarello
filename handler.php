<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Pizza Butt Inc</title>
</head>

<body>
  <!-- Header start -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Pizza Butt Instance</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="index.html">Main Page</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Navigation</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.html">Main Page</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">
        <center>
        <h4>So here's what it came up as!</h4>
        <?php
        $myVariable = "";
        if (isset($_GET['XL'])) {
          if (isset($_GET['XL'])) {
            $PizzaSize = "XL";
          }
        } elseif (isset($_GET['Large'])) {
          if ($_GET['Large'] == "on") {
            $PizzaSize = "Large";
          }
        } else {
          echo "<h4>Don't let me find you. It ain't hide and seek anymore. I'm gonna find you. Watch your back.</h4>\n";
          $PizzaSize = "nil";
        }
        if (isset($_GET['TPs'])) {
          $Toppings = $_GET['TPs'];
          if ($Toppings > 4) {
            echo "<h4>Sorry we can't add " .  $Toppings . " toppings so we 'automatically' recognised you only want four toppings</h4>\n";
            $Toppings = 4;
          }
        }
        if ($PizzaSize == "XL") {
          if ($Toppings > 1) {
            echo "<h4>The total is = $" .  round(((($Toppings - 1) * 0.75) + 10)*1.13*100)/100 . "</h4>\n";
          }
          if ($Toppings < 1) {
            echo "<h4>The total is = $" . 10*1.13 . "</h4>\n";
          }
        } elseif ($PizzaSize == "Large") {
          if ($Toppings > 1) {
            echo "<h4>The total is = $" .  round(((($Toppings - 1) * 0.75) + 6)*1.13*100)/100 . "</h4>\n";
          }
          if ($Toppings < 1) {
            echo "<h4>The total is = $" . 6*1.13 . "</h4>\n";
          }
        } else {
          echo "<h4>You're cooked bud (Size Error) </h4>\n";
        }
        ?>
        </center>
      </div>
    </main>
  </div>
</body>

</html>