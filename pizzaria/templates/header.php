<?php 

  include("process/conn.php");

  $msg = "";

  if(isset($_SESSION["msg"])) {

    $msg = $_SESSION["msg"];
    $status = $_SESSION["status"];

    $_SESSION["msg"] = "";
    $_SESSION["status"] = "";

  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pizzaria Trio de Três</title>
	<!-- Boostrap -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- App CSS -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg ">
			<a href="index.php" class="navbar-brand">
				<img src="img/pizza.svg" alt="Pizzaria do João" id="brand-logo"
			</a>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a href="index.php" class="nav-link">Pizzaria Trio de Três</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<?php if ($msg != ""): ?>
		<div class="alert alert-<?= $status ?>">
			<p><?= $msg ?></p>
		</div>
	<?php endif; ?>