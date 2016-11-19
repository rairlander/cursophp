<?php require('inc/_functions.php'); ?>
<?php require('inc/_variables.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Basic 89</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php include ('inc/header.php');?>

<!-- content -->
<?php

if (isset($_GET['pagina']) && $_GET['pagina'] !="") {
} else
  include('inc/paginas/inicial.php');
  {
switch ($_GET['pagina']) {
    case 1:
      include('inc/paginas/inicial.php');
    break;
      case 2:
        include('inc/paginas/sobre.php');
      break;
        case 3:
          include('inc/paginas/conteudo.php');
        break;
          case 4:
            include('inc/paginas/professores.php');
          break;
            case 5:
              include('inc/paginas/contato.php');
            break;
default:
      include('inc/paginas/erro.php');
      break;
}
} ?>

<!-- Footer -->
<?php include ('inc/footer.php'); ?>
