<?php
include_once 'atas.php';
?>

<?php
  $id = $_GET['id'];
  $nim = $_GET['nim'];
  $uts = $_GET['uts'];
  $uas = $_GET['uas'];
  $tugas = $_GET['tugas'];
?>
    <main>
      <section>
        <div class="container my-5">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <h2>Daftar Nilai Siswa</h2>
          </div>
            <table class="table table-striped table-dark" >
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
                <th scope="col">Tugas</th>
                <th scope="col">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo '<tr><td>'.$id.'</td>';
                    echo '<td>'.$nim.'</td>';
                    echo '<td>'.$uts.'</td>';
                    echo '<td>'.$uas.'</td>';
                    echo '<td>'.$tugas.'</td>';
                    $nilai_akhir = ($uts + $uas + $tugas)/3;
                    echo '<td>'.$nilai_akhir.'</td>';
                    echo '<tr/>';
                ?>
            </tbody>
            </table>
        </div>
      </section>
    </main>
<?php
include_once 'bawah.php';
?>

