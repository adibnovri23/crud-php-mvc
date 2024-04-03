<div class="container mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data ['prd'] ['nama']; ?></h5>
    <p class="card-text mb-0"> Harga :
    <?= $data ['prd'] ['harga']; ?>
    </p>
    <p class="card-text"> Jenis :
    <?= $data ['prd'] ['jenis']; ?>
    </p>
    <a href="<?= BASEURL; ?>/product/" class="btn btn-primary">back</a>
  </div>
</div>
</div>