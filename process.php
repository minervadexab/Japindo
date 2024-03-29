<?php
session_start();

include "koneksi.php";

//dapatkan data user dari form
$user = [
	'username' => $_POST['username'],
	'password' => $_POST['password'],
];

//check apakah user dengan username tersebut ada di table users
$query = "select * from users where username = ? limit 1";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('s', $user['username']);

$stmt->execute();

$result = $stmt->get_result();

$row = $result->fetch_array(MYSQLI_ASSOC);

if($row != null){
	//username ditemukan
	//kita cek apakah password dengan hash password sesuai.
	if(password_verify($user['password'], $row['password'])){
		$_SESSION['username'] =  $user['id_users'];
		$_SESSION['login'] = true;
		$_SESSION['username'] =  $user['username'];
		$_SESSION['nama'] =  $user['nama'];
		$_SESSION['message']  = 'Berhasil login ke dalam website.';
		header("Location: menuminori.php");
		if($row ['roles_id']==1) {
            header("Location: indexadmin.php");
        } else {header("location: menuminori.php");}
	}else{
		$_SESSION['error'] = 'Password anda salah.';
		header("Location: login.php");
	}

}else{
	$_SESSION['error'] = 'Username atau password anda tidak ditemukan.';
	header("Location: login.php");
}

?>