<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="sidebar.css" />
    <link rel="stylesheet" href="tasanesiaform.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>List Petani</title>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-image" href="#"
            ><img
              src="permata desa indonesia logo horisontal (1).png"
              alt=""
              style="width: 150px; margin-left: 10px"
          /></a>
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Dashboard</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Manajemen Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Manajemen Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Manajemen order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Manajemen Berita</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <div class="text-center">
      <h1 style="color: #315343; font-weight: bold">List Pembina</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2" style="margin-bottom: 20px">
          <button type="button" class="btn btn-success">Tambah</button>
        </div>
        <div class="col-lg-2 btn-group">
          <button type="button" class="btn btn-success">Lokasi</button>
          <button
            type="button"
            class="btn btn-success dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table table-bordered" style="border: 1px solid black">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pembina</th>
          <th scope="col">ID Pembina</th>
          <th scope="col">Detail</th>
          <th scope="col">Edit</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Jundi Kariman</td>
          <td>12</td>
          <td>http\tasanesia.com\jundi</td>
          <td>
            <form>
              <button type="button" class="btn btn-danger mx-2">Hapus</button>
              <button type="button" class="btn btn-outline-success">
                Success
              </button>
            </form>
          </td>
        </tr>
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
