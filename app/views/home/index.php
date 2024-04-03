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
        <h1 class="h2">Dashboard</h1>
      </div>
      <!-- Memanggil nama dengan model bukan url -->
      <div class="row col-lg-10 me-sm-auto">
        <p>
        Ini adalah website CRUD sederhana yang penggunanya dapat melakukan operasi membuat, membaca, memperbarui, dan menghapus data terkait produk-produk keripik. Contohnya, aplikasi ini mungkin memungkinkan pengguna untuk menambahkan produk keripik baru ke dalam basis data, melihat daftar produk keripik yang sudah ada, mengedit informasi produk yang ada, dan menghapus produk yang tidak lagi dijual atau sudah tidak tersedia.
        </p>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      
       
     </main>
  </div>
</div> 