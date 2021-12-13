
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    </style>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <a href="<?=base_url('Paket/tambah')?>" class="btn-peserta">
            <i class='bx bxs-user-plus'></i>Tambah
        </a>
        <div class="sub-judul">
          <p>List Paket</p>
        </div>
        <div class="row-input">
          <div class="col">
            <form action="<?php site_url('Crud/keyword') ?>" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder=" Search Keyword..." name="keyword" autocomplete="off" autofocus>
                <input type="submit" name="Search" value="Search">
              </div>
            </form>
          </div>
        </div>

      </div>
      <div class="tabel">
        <div class="tabel_info">
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Banyak pertemuan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($paket)):?>
              <tr>
                <td colspan="3" >
                  <div class="alert">
                    <h3>Data not found!</h3>
                  </div>
                </td>
              </tr>
              <?php endif; ?>
              <?php foreach ($paket as $p){
                ?>
                <tr>
                  <td><?= ++$start?></td>
                  <td><?= $p->nama?></td>
                  <td><?= $p->harga?></td>
                  <td><?= $p->byk_pertemuan?></td>
                  <td class="text-center" width="150px">
                    <a href="<?=site_url('Paket/edit/'.$p->id) ?>" class="btn-edit">
                      <i class='bx bxs-edit-alt'></i>edit
                    </a>
                    <a href="<?=site_url('Paket/del/'.$p->id) ?>" onclick="return confirm('Yakin hapus data ?')"
                      class="btn-hapus">
                      <i class='bx bxs-trash-alt' ></i>delete
                    </a>
                  </td>

                </tr>
              <?php } ?>
            </tbody>
          </table>
          <h2>Results : <?=$total_rows; ?></h2>
       </div>
      </div>

          <?php echo $this->pagination->create_links();  ?>

    </div>
  </body>
</html>
