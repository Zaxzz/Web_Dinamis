<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="simpan_data.php" method="POST">
        Nama : <input type="text" name="nama"><br>
        e-mail : <input type="text" name="email"><br>
        Jenis Kelamin : <input type="radio" value="L" name="jenis_kelamin">Laki-laki
                        <input type="radio" value="P" name="jenis_kelamin">Perempuan<br>
        Minat : <br>
        <input type="checkbox" name="minat1" value="programming">Programming<br>
        <input type="checkbox" name="minat2" value="desain">Design<br>
        <input type="checkbox" name="minat3" value="networking">Networking<br>
        <input type="checkbox" name="minat4" value="hacking">Hacking<br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
