<table border="1">
<tr>
    <td>No</td><td>Nama</td><td>Email</td><td>Jenis Kelamin</td><td>Minat</td>
</tr>
<?php
$no = 1;
$data = fopen("buku_tamu.DAT", "r");
while(! feof($data)){
    $nama = fgets($data, 255);
    if($nama == FALSE)
    break;
    $email = trim(fgets($data, 255));
    $jenis_kelamin = trim(fgets($data, 255));
    $minat = trim(fgets($data, 255));
?>
<tr><td><?php echo $no;?></td><td><?php echo $nama;?></td><td><?php echo $email;?></td><td><?php echo $jenis_kelamin;?></td>
<td>
<?php
    $minat1 = "programming";
    $minat2 = "desain";
    $minat3 = "networking";
    $minat4 = "hacking";
    $pos_minat1 = strpos($minat, $minat1);
    $pos_minat2 = strpos($minat, $minat2);
    $pos_minat3 = strpos($minat, $minat3);
    $pos_minat4 = strpos($minat, $minat4);
    if ($pos_minat1 !== false)
        echo "Programming<br>";
    if ($pos_minat2 !== false)
        echo "Desain<br>";
    if ($pos_minat3 !== false)
        echo "Networking<br>";
    if ($pos_minat4 !== false)
        echo "Hacking<br>";
?>
</td>
</tr>
<?php
    $no++;
}
?>
</table>
