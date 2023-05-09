<?php 
// SETTING KONEKSI KE DATABASE
$conn = mysqli_connect("localhost","root","","db_2201010348");


if (!$conn){
  die("Koneksi Gagal: ".mysqli_connect_error()); // cek error
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD UTS Pemrograman Web 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style> body {
        background-image: url('img/bg_instiki.jpg') ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
  </head>
  <body>
    <div class="container mt-5">
        <img style="max-height: 90px;" class="mx-auto d-block" src="img/logo_instiki.png">
        <h2 class="text-center text-light mb-5">CRUD UTS Pemrograman Web 2023</h2>
        <div class="card">
            <div class="card-header py-3 d-flex justify-content-between">
                <h4 class="mt-3">Data Buku</h4>

                <!-- Pencarian -->

                <div class="py-3 d-flex justify-content-between">
                  <form class="mx-3">
                    <input type="text" class="form-control pencarian" data-table="mahasiswa" placeholder="Pencarian">
                    </form>
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
                      Tambah Data
                    </button>
                    </div>

                    <!-- Modal Tambah Data -->
                    <div class="modal fade" id="tambahdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <div class="mb-3">
                                <label class="form-label" for="Tid_buku">ID BUKU</label>
                                <input type="text" name="Tid_buku" minlength="10" pattern="^[0-9]+[0-9]*$" placeholder="Ketikan ID Buku"  maxlength="10" class="form-control" required>
                              </div>
                             <div class="mb-3">
                                <label class="form-label" for="Tjudul_buku">JUDUL BUKU</label>
                                <input type="text" placeholder="Ketikan Judul Buku" name="Tjudul_buku" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="Tkategori">KATEGORI</label>
                                  <select class="form-select" name="Tkategori" id="" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="HOBI">HOBI</option>
                                    <option value="FIKSI">FIKSI</option>
                                    <option value="KOMPUTER">KOMPUTER</option>
                                    <option value="KARTUN">KARTUN</option>
                                    <option value="PEMBELAJARAN">PEMBELAJARAN</option>
                                    <option value="BIOGRAFI">BIOGRAFI</option>
                                    <option value="DONGENG">DONGENG</option>
                                    <option value="KARYA ILMIAH">KARYA ILMIAH</option>
                                  </select>
                                </div>
                              <div class="mb-3">
                                <label class="form-label" for="Tpenerbit">Penerbit</label>
                                <input type="text" placeholder="Ketikan Penerbit Buku" name="Tpenerbit" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="Tpenulis">PENULIS BUKU</label>
                                <input type="text" placeholder="Ketikan Penulis Buku" name="Tpenulis" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="Tstok">STOK BUKU</label>
                                <input type="number" placeholder="Ketikan Stok Buku" name="Tstok" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="Tharga">HARGA BUKU</label>
                                <input type="number" placeholder="Ketikan harga Buku" name="Tharga" class="form-control" required>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="submit" class="btn btn-success " name="tambahData"  >Tambahkan</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
                          </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      

            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered mahasiswa" >
                  <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID BUKU</th>
                        <th>JUDUL BUKU</th>
                        <th>KATEGORI BUKU</th>
                        <th>PENERBIT</th>
                        <th>PENULIS</th>
                        <th>STOK</th>
                        <th>HARGA</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                  <tbody >
                    <?php 
                     $read = "SELECT * FROM tb_buku_2201010348";
                          $fetch = mysqli_query($conn,$read);
                          $no = 1;
                          if (mysqli_num_rows($fetch) == 0) {
                                echo "<tr><td colspan='9' class='text-center'>Tidak Ada Data Yang Ditemukan</td></tr>";} 
                        else {
                    while($row = mysqli_fetch_array($fetch)) :?>
                        <tr>
                            <td><?=$no++ ?></td>
                            <td><?=$row['id_buku_2201010348'] ?></td>
                            <td><?=$row['judul_buku_2201010348'] ?></td>
                            <td><?=$row['kategori_buku_2201010348'] ?></td>
                            <td><?=$row['penerbit_2201010348'] ?></td>
                            <td><?=$row['penulis_2201010348'] ?></td>
                            <td><?=$row['stok_2201010348'] ?></td>
                            <td>Rp. <?=number_format($row['harga_2201010348']) ?></td>
                            <td>
                                <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Editdata<?= $no ?>">EDIT</a>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#HapusData<?= $no ?>">HAPUS</a>
                            </td>
                        </tr>


                         <!-- Modal Ubah Data -->
                    <div class="modal fade" id="Editdata<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <div class="mb-3">
                                <label class="form-label" for="Eid_buku">ID BUKU</label>
                                <input type="text"  name="Eid_buku" minlength="10" value="<?=$row['id_buku_2201010348'] ?>" pattern="^[0-9]+[0-9]*$" placeholder="Ketikan ID Buku"  maxlength="10" class="form-control" disabled>
                                <input type="text"  name="Eid_buku" minlength="10" value="<?=$row['id_buku_2201010348'] ?>" pattern="^[0-9]+[0-9]*$" placeholder="Ketikan ID Buku"  maxlength="10" class="form-control" hidden>
                              </div>
                             <div class="mb-3">
                                <label class="form-label" for="Tjudul_buku">JUDUL BUKU</label>
                                <input type="text" placeholder="Ketikan Judul Buku" value="<?=$row['judul_buku_2201010348'] ?>" name="Ejudul_buku" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="Ekategori">KATEGORI</label>
                                  <select class="form-select" name="Ekategori" id="" required>
                                    <option value="<?=$row['kategori_buku_2201010348'] ?>" selected><?=$row['kategori_buku_2201010348'] ?></option>
                                    <option value="HOBI">HOBI</option>
                                    <option value="FIKSI">FIKSI</option>
                                    <option value="KOMPUTER">KOMPUTER</option>
                                    <option value="KARTUN">KARTUN</option>
                                    <option value="PEMBELAJARAN">PEMBELAJARAN</option>
                                    <option value="BIOGRAFI">BIOGRAFI</option>
                                    <option value="DONGENG">DONGENG</option>
                                    <option value="KARYA ILMIAH">KARYA ILMIAH</option>
                                  </select>
                                </div>
                              <div class="mb-3">
                                <label class="form-label" for="Epenerbit">Penerbit</label>
                                <input type="text" placeholder="Ketikan Penerbit Buku" value="<?=$row['penerbit_2201010348'] ?>" name="Epenerbit" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="Tpenulis">PENULIS BUKU</label>
                                <input type="text" placeholder="Ketikan Penulis Buku" value="<?=$row['penulis_2201010348'] ?>" name="Epenulis" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="Estok">STOK BUKU</label>
                                <input type="number" placeholder="Ketikan Stok Buku" value="<?=$row['stok_2201010348'] ?>" name="Estok" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="Tharga">HARGA BUKU</label>
                                <input type="number" placeholder="Ketikan harga Buku" name="Eharga" value="<?=$row['harga_2201010348'] ?>" class="form-control" required>
                              </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-success" name="ubahData" >Ubah Data</button>
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
                            </form>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>



                    <!-- Modal Konfirmasi Hapus Data -->
            <div class="modal fade"  id="HapusData<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data Mahasiswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body"><form method="post" action="">
                            <h6>Apakah Anda Akan Menghapus Data Buku Berikut:</h6>
                            <p><?= $row['judul_buku_2201010348'] ." (". $row['id_buku_2201010348'].")"  ;?></p>
                            <input type="hidden" name="Hjudul" value="<?=$row['judul_buku_2201010348']?>">
                            <input type="hidden" name="Hid_buku" value="<?=$row['id_buku_2201010348']?>">
                          </div>
                          <div class="modal-footer">
                            <button type="sumbit" class="btn btn-success" name="hapusData">Hapus</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
            </div>
                    <?php endwhile;}?>
                    </tbody> 
                </table>
            </div>
        </div>
        <div class="count mt-3 text-light">
        <?php $jlmhdata = mysqli_num_rows($fetch);
        echo "<h6>Menampilkan $jlmhdata Data Buku" ?>
    </div>


<!-- Javascript Fitur Pencarian -->


    <script>
(function(document) {
  'use strict';

  let TableFilter = (function(myArray) {
    let search_input;

    function _onInputSearch(e) {
      search_input = e.target;
      let tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
      myArray.forEach.call(tables, function(table) {
        myArray.forEach.call(table.tBodies, function(tbody) {
          let visible_rows = 0;
          let no_matching_rows = tbody.querySelectorAll('.no-matching-row');
          myArray.forEach.call(tbody.rows, function(row) {
            let text_content = row.textContent.toLowerCase();
            let search_val = search_input.value.toLowerCase();
            let row_display = text_content.indexOf(search_val) > -1 ? '' : 'none';
            row.style.display = row_display;
            if (row_display === '') {
              visible_rows++;
            }
          });
          if (visible_rows === 0) {
            if (no_matching_rows.length === 0) {
              let no_matching_row = tbody.insertRow();
              no_matching_row.classList.add('no-matching-row');
              let no_matching_cell = no_matching_row.insertCell();
              no_matching_cell.colSpan = tbody.parentNode.querySelectorAll('thead th, thead td').length;
              no_matching_cell.classList.add('text-center');
              no_matching_cell.textContent = 'Data Tidak Ditemukan';
            }
          } else {
            myArray.forEach.call(no_matching_rows, function(row) {
              tbody.removeChild(row);
            });
          }
        });
      });
    }

    return {
      init: function() {
        let inputs = document.getElementsByClassName('pencarian');
        myArray.forEach.call(inputs, function(input) {
          input.oninput = _onInputSearch;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      TableFilter.init();
    }
  });

})(document);

</script>
    </div>




<?php 
// Logika Pemrosesan Input PHP

// LOGIKA TAMBAH DATA

if (isset($_POST['tambahData'])) {
  $idBuku = $_POST['Tid_buku'];
  $judul = $_POST['Tjudul_buku'];
  $kategori = $_POST['Tkategori'];
  $penerbit = $_POST['Tpenerbit'];
  $penulis = $_POST['Tpenulis'];
  $stok = $_POST['Tstok'];
  $harga = $_POST['Tharga'];

  if (!empty($idBuku) && !empty($judul) && !empty($kategori) && !empty($penerbit) && !empty($penulis) && !empty($stok) && !empty($harga) ){
  $sql = "INSERT INTO tb_buku_2201010348 (id_buku_2201010348,judul_buku_2201010348,kategori_buku_2201010348,penerbit_2201010348,penulis_2201010348,stok_2201010348,harga_2201010348) VALUES ('$idBuku','$judul','$kategori','$penerbit','$penulis','$stok','$harga')";
  $tambah = mysqli_query($conn,$sql);  // $tambah = $sql->query($conn);
      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
            <script>

            Swal.fire({
            title: 'Sukses!',
            text: 'Data Buku $judul ($idBuku) berhasil ditambahkan.',
            icon: 'success', 
            confirmButtonText: 'OK'
            }).then(() => {
            window.location.href = 'index.php';
            });

            </script>";
  }
  else {
       echo"<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
            <script>

            Swal.fire({
            title: 'Gagal!',
            text: 'Data gagal ditambahkan.',
            icon: 'error',
            confirmButtonText: 'OK'
            }).then(() => {
            window.location.href = 'index.php';
            });

            </script>".mysqli_error($conn);
  } 
}
?>


<?php 
  // LOGIKA UBAH DATA

if (isset($_POST['ubahData'])) {
  $EidBuku = $_POST['Eid_buku'];
  $Ejudul = $_POST['Ejudul_buku'];
  $Ekategori = $_POST['Ekategori'];
  $Epenerbit = $_POST['Epenerbit'];
  $Epenulis = $_POST['Epenulis'];
  $Estok = $_POST['Estok'];
  $Eharga = $_POST['Eharga'];

    if (!empty($EidBuku) && !empty($Ejudul) && !empty($Ekategori) && !empty($Epenerbit) && !empty($Epenulis) && !empty($Estok) && !empty($Eharga)) {
        $datasql = "UPDATE tb_buku_2201010348 SET judul_buku_2201010348='$Ejudul',kategori_buku_2201010348='$Ekategori',penerbit_2201010348='$Epenerbit',stok_2201010348='$Estok',harga_2201010348='$Eharga' WHERE id_buku_2201010348 = '$EidBuku'";
        $edit = $conn->query($datasql);
        if ($edit) {
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
            <script>

            Swal.fire({
            title: 'Sukses!',
            text: 'Data Buku $Ejudul ($EidBuku) berhasil diubah.',
            icon: 'success',
            confirmButtonText: 'OK'
            }).then(() => {
            window.location.href = 'index.php';
            });

            </script>"; 
  }
         else {
      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
            <script>

            Swal.fire({
            title: 'Gagal!',
            text: 'Data Buku gagal diubah.',
            icon: 'error',
            confirmButtonText: 'OK'
            }).then(() => {
            window.location.href = 'index.php';
            });

            </script>".mysqli_error($conn);

        }
 
}
}

 ?>


<?php // LOGIKA HAPUS DATA

if (isset($_POST['hapusData'])) {
  $id_del = $_POST['Hid_buku'];
  $Hjudul = $_POST['Hjudul'];
  $del = "DELETE FROM tb_buku_2201010348 WHERE id_buku_2201010348='$id_del'";
  $delete = mysqli_query($conn, $del);
  if ($delete) {
      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
            <script>

            Swal.fire({
            title: 'Sukses!',
            text: 'Data Buku $Hjudul ($id_del) berhasil dihapus.',
            icon: 'success',
            confirmButtonText: 'OK'
            }).then(() => {
            window.location.href = 'index.php';
            });

            </script>";
  } else {
      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
            <script>

            Swal.fire({
            title: 'Gagal!',
            text: 'Data Buku gagal dihapus.',
            icon: 'error',
            confirmButtonText: 'OK'
            }).then(() => {
            window.location.href = 'index.php';
            });

            </script>".mysqli_error($conn);
  }
}
?>




    </body>
</html>