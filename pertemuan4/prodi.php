<!-- <h2>DISINI ADA DAFTAR PRODI</h2> -->

<!-- <?php
//$nama = "Giant";
//$nilai = 70;
//echo "Nilai siswa yang bernama " . $nama . " adalah " . $nilai;
?> -->

<!-- <p>Nilai siswa yang bernama <?php //echo $nama ?> adalah <?php //echo $nilai ?>, dan dia mendapatkan grade nilai <?php //echo grade ($nilai); ?></p> -->

<?php 
function grade($nilai){
    if ($nilai >= 80) {
        $grade = "A";
    }elseif ($nilai >= 70) {
        $grade = "B";
    }elseif ($nilai >= 60) {
        $grade = "C";
    }elseif ($nilai >= 50) {
        $grade = "D";
    }else {
        $grade = "E";
    }
    return $grade;
}

//$laliga = array("Real Madrid","Barcelona","Sevilla","Atl. Madrid");
//echo $laliga[0];
//$jumlah_laliga = count($laliga);
?>
<!-- <ul>
    <?php //for ($i=0; $i < $jumlah_laliga; $i++) { ?>
        <li> <?php //echo $laliga[$i]; ?> </li>
    <?php //} ?>
</ul> -->

<?php
    $laliga = array("Barcelona" => "85","Real Madrid" => "80","Sevilla" => "75","Alt. Madrid" => "73");
    //var_dump($laliga);
?>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Team</th>
            <th>Point</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($laliga as $l => $l_value) : ?>
            <tr>
                <td></td>
                <td><?php echo $l; ?></td>
                <td><?php echo $l_value; ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
