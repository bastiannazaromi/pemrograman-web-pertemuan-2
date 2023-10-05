<?php
// Memeriksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Mengambil nilai username dan password dari data POST
	$username = $_POST["username"];
	$password = $_POST["password"];

	echo "Selamat datang, " . $username . "!";
} else {
	// Jika tidak ada data POST, mungkin halaman ini diakses secara langsung tanpa pengiriman form
	echo "Akses dilarang.";
}
