<?php
session_start();
 
if (empty($_SESSION['login'])) {
    header("Location: /phpjapindo/finaljapindo/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan</title>
    <link rel="stylesheet" href="./css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./images/hero-slider-3.jpg">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
            border-radius: 5px;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-in-out;
            color: #008080; /* Teal color */
        }

        #menu-list {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            animation: fadeIn 1s ease-in-out;
        }

        .menu-item {
            flex: 0 0 30%; /* Adjust the width as needed */
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px;
            box-sizing: border-box;
            text-align: left;
            animation: fadeInUp 1s ease-in-out;
            background-color: #fff;
        }

        .menu-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .order-button {
            width: 100%;
            height: 35px;
            border-radius: 2px;
            animation: fadeIn 1s ease-in-out;
            background-color: #008080; /* Teal color */
            color: #fff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media only screen and (max-width: 600px) {
            .menu-item {
                flex: 0 0 100%; /* Full width for small screens */
            }
        }
    </style>
</head>

<body>
<div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Japindo</p>
  </div>

    <h1>Menu Makanan Mingguan Minori Group</h1>

    <ul id="menu-list">
        <?php
        include "function.php";
        $data = mysqli_query($koneksi, "SELECT * FROM menu");
        while ($hasil = mysqli_fetch_array($data)) {
        ?>
            <li class="menu-item">
                <img src="/phpjapindo/finaljapindo/gambar/<?php echo $hasil['gambar']?>" alt="gambar">
                <div>
                    <h3 style="color: #008080;"><?php echo $hasil['nama']; ?></h3>
                    <h4><?php echo $hasil['hari']; ?></h4>
                    <p><?php echo $hasil['deskripsi']; ?></p>
                </div>
                <button class="order-button" onclick="orderNow('<?php echo $hasil['nama']; ?>')">Makan</button>
            </li>
        <?php
        }
        ?>
    </ul>

    <script>
        function orderNow(menuName) {
            alert(`memesan makanan untuk menu ${menuName}`);
            <?php
            $query_menu = "SELECT * FROM `menu`";
            $result = mysqli_query($koneksi, $query_menu);
            $query_users = "SELECT * FROM `users`";
            $result_users = mysqli_query($koneksi, $query_users);
            

            $row_menu = mysqli_fetch_assoc($result);
            $row_users = mysqli_fetch_assoc($result_users);
            $query_pindah = "INSERT INTO `pemesanan` (`id_pesan`, `username`, `hari`, `status`, `nama`, `perusahaan`, `id_users`, `id_menu`) VALUES (NULL, '$row_users[username]', '$row_menu[hari]', 'makan', '$row_users[nama]', '$row_users[perusahaan]', '14', '23');";
            $result = mysqli_query($koneksi, $query_pindah);
            ?>
        }
    </script>
    <script src="./js/script.js"></script>

<!-- 
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <div class="bwh">
        <a href="indexuser.php" style="color: #008080;"> Kembali </a>
    </div>
</body>

</html>
