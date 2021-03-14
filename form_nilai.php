<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <title>Form Penilaian</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <h2>Sistem Penilaian</h2>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section>
        <div class="container my-5">
          <div class="row">
            <div class="col-md-12 mx-auto" >
              <div class="border p-5">
                <h2 class="mb-3 text-center">Form Nilai Siswa</h2>
                <form action="array_siswa.php" method="get">
                <div class="form-group row  mb-4">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                    <input type="text"  class="form-control" name="id" id="" value="">
                    </div>
                </div>
                <div class="row mb-3">                <div class="form-group row mb-4">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    <input type="number"  class="form-control" name="nim" id="" value="">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nilai UTS</label>
                    <div class="col-sm-10">
                    <input type="number"  class="form-control" name='uts' id="" value="">
                    </div>
                </div>
                <div class="form-group row  mb-4">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nilai UAS</label>
                    <div class="col-sm-10">
                    <input type="number"  class="form-control" name="uas" id="" value="">
                    </div>
                </div>
                <div class="form-group row  mb-4">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nilai Tugas/Praktikum</label>
                    <div class="col-sm-10">
                    <input type="number"  class="form-control" name="tugas" id="" value="">
                    </div>
                </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <section>
        <div class="container">
          <div class="border-top py-3">
            <h4 class="text-muted fw-light">
              Develop by Mahasiswa STT-NF @2021
            </h4>
          </div>
        </div>
      </section>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
  </body>
</html>