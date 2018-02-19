<?php
  require_once('./html/header.html');

  if (!isset($_GET["page"])) {
    header("location: ?page=home");
  }
  switch ($_GET["page"]) {
    case 'home':
      require_once 'php/home.php';
      break;

    case 'rutetider':
      require_once 'php/rutetider.php';
      break;

    case 'info':
      require_once 'php/info.php';
      break;

    default:
      echo "404 Page not found!";
      break;
  }

  require_once 'html/footer.html';
?>
