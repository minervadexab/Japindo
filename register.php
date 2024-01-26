<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/log.css">
	<title>Register Member Minori</title>
</head>
<body class="bg-dark-subtle">
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">

				<?php
if (isset($_SESSION['error'])) {
    ?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error'] ?>
				</div>
				<?php
}
?>

				<?php
if (isset($_SESSION['message'])) {
    ?>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['message'] ?>
				</div>
				<?php
}
?>


				<div class="card">
				  <div class="card-title text-center text-center fs-2 text-dark subtle-emphasis fw-bold">Register Form</div>
					<div class="card-body">
						<form action="process-register.php" method="post">
							<div class="form-group">
								<label for="username">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="name" value="<?php echo @$_SESSION['nama'] ?>" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off">

							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" value="<?php echo @$_SESSION['username'] ?>" aria-describedby="username" placeholder="username" autocomplete="off">

							</div>
							<div class="form-group">
								<label for="perusahaan">Perusahaan</label>
								<input type="text" name="perusahaan" class="form-control" id="perusahaan" value="<?php echo @$_SESSION['perusahaan'] ?>" aria-describedby="perusahaan" placeholder="perusahaan Minori Group" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" value="<?php echo @$_SESSION['password'] ?>" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="password">Konfirmasi Password</label>
								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation'] ?>"  placeholder="Password">
							</div>
							<span>Kembali ke halaman?</span>
							<a href="login.php">login</a>
							<br>
							<button type="submit" class="btn btn-primary">Register</button>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
</body>
<?php
session_destroy();
?>