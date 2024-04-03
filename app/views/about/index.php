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
            <a class="nav-link" href="<?= BASEURL ?>/product">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          

        
      </div>
    </nav>
    <!-- Menampilkan selamat datang -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About me </h1><br>
      </div>
      <div class="row">
      <p>Nama saya <?= $data['nama'] ?>, pekerjaan saya <?= $data['pekerjaan'] ?></p>
      <p>Saya merupakan lulusan Universitas Negeri Padang dengan jurusan Pendidikan Teknik Informatika</p>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      
       
     </main>
  </div>
</div> 