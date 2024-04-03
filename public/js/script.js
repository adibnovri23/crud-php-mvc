$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#formModalLabel').html('Tambah Data Product');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  $('.tampilModalUbah').on('click', function () {
    $('#formModalLabel').html('Ubah Data Product');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/project-sederhana/public/product/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/project-sederhana/public/product/getubah',
      data: { id: id },
      type: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#harga').val(data.harga);
        $('#jenis').val(data.jenis);
        $('#id').val(data.id);
      },
    });
  });
});
