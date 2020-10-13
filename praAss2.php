<?php 

$buku = array(
		array('judul' => 'Sherelock Holmes', 'pengarang' => 'Arthur Conan Doyle', 'harga' => '50000', 'stok' => '20'),
		array('judul' => 'Arsene Lupin', 'pengarang' => 'Maurice LeBlanc', 'harga' => '250000', 'stok' => '50') ,
		array('judul' => 'Game Of Throne', 'pengarang' => 'George R.R. Martin', 'harga'=> '125000', 'stok' => '60'),
	);


$pembelian = array(
	         array('judul' => 'Sherelock Holmes', 'jumlah' => '5',),
	         array('judul' => 'Arsene Lupin', 'jumlah' => '2'),
	         array('judul' => 'Game Of Throne', 'jumlah' => '4'),
		 );
		 


echo "<center><table border='1' cellpadding='10'>";
echo "<tr>";
echo "<th><i>Judul Buku</i></th>";
echo "<th><i>Harga Buku</i></th>";
echo "<th><i>Jumlah Yang Dibeli</i></th>";
echo "<th><i>Total Harga</i></th>";
echo "</tr>";


$total = 0;
foreach($pembelian as $tampil2){
	echo "<tr>";
	echo "<td>".$tampil2["judul"]."</td>";
    for($y = 0;$y<count($buku);$y++){
        if($tampil2['judul']==$buku[$y]['judul']){
            $harga = $buku[$y]['harga']* $tampil2 ['jumlah'];
            break;
        }
    }
   $hargaBuku = $buku[$y]['harga'];
    echo "<td>".$hargaBuku."</td>"; 
    echo "<td>".$tampil2["jumlah"]."</td>";
    echo "<td> Rp. $harga";
    echo "</tr>";
    $total = $total + $harga;
}
    echo "<th colspan = '3'>Total Semua Harga Buku</th>";
    echo "<td>Rp. $total</td>"; 



?>