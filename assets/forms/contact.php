<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Tujuan email
    $to = "aldogiyantoro@gmail.com"; // Ganti dengan email kamu

    // Subjek email
    $email_subject = "Pesan Baru dari Website: $subject";

    // Isi email
    $email_body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    // Header
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Pesan gagal dikirim.";
    }
}
?>
