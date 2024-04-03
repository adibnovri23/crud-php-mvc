<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/about">
              <span data-feather="file"></span>
              About
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/product">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          

        
      </div>
    </nav>
    <!-- Menampilkan selamat datang -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product</h1>
      </div>
      <h3>Daftar Product</h3>

    <!-- Memanggil flasher -->
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Product 
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/product/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Product.." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-outline-primary" type="submit" id="tombolCari">Search</button>
        </div>
        </form>
      </div>
    </div>


      <!-- Button trigger modal -->
      <div class="row">
        <div class="col-lg-8">
        <ul class="list-group">
          <?php foreach ($data['prd'] as $prd ) : ?>
          <li class="list-group-item">
            <?= $prd ['nama']; ?>
            <a href="<?= BASEURL; ?>/product/hapus/<?= $prd ['id'] ?>" class="badge bg-danger float-end ms-1"
            onclick="return confirm('Hapus data?')"  style="text-decoration:none" >hapus</a>

            <a href="<?= BASEURL; ?>/product/ubah/<?= $prd ['id'] ?>" class="badge bg-warning float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" style="text-decoration:none" data-id="<?= $prd ['id']; ?>" >ubah</a>

            <a href="<?= BASEURL; ?>/product/detail/<?= $prd ['id'] ?>" class="badge bg-primary float-end ms-1"  style="text-decoration:none" >detail</a>
          </li>
          <?php endforeach ?>
        </ul>
        </div>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      

      <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- form -->
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/product/tambah" method="POST">
        <input type="hidden" name="id" id="id">
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" required>
        </div>
        <div class="mb-2">
          <label for="harga" class="form-label">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga" aria-describedby="harga" required>
        </div>
        <div class="mb-2">
          <label for="jenis" class="form-label">Jenis Product</label>
          <select id="jenis" name="jenis" class="form-select" required>
          <option value="Pedas">Pedas</option>
          <option value="Manis">Manis</option>
          <option value="Asin">Asin</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>

    </main>
  </div>
</div> 