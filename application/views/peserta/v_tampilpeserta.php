
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    </style>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <a href="<?=base_url('Crud_peserta/tambah')?>" class="btn-peserta">
            <i class='bx bxs-user-plus'></i>Tambah
        </a>
        <div class="sub-judul">
          <p>List Peserta</p>
        </div>
        <div class="row-input">
          <div class="col">
            <form action="<?php site_url('Crud_peserta/keyword') ?>" method="post">
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
                  <th>Username</th>
                  <th>Email</th>
                  <th>TTL</th>
                  <th>Jenis Kelamin</th>
                  <th class="text-center">Option</th>

                </tr>

              </thead>
              <tbody>
                <?php if (empty($peserta)):?>
                <tr>
                  <td colspan="6" >
                    <div class="alert">
                      <h3>Data not found!</h3>
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php foreach ($peserta as $psr){
                  ?>
                  <tr>
                    <td><?php echo ++$start?></td>
                    <?php    $psr->id_peserta?>
                    <td><?php echo $psr->username?></td>
                    <td><?php echo $psr->email_peserta?></td>
                    <td><?php echo $psr->TTL_peserta?></td>
                    <td width="120px;"><?php echo $psr->JK_peserta?></td>

                    <td class="text-center" width="150px">
                      <a href="<?=site_url('Crud_peserta/edit/'.$psr->id_peserta) ?>" class="btn-edit">
                        <i class='bx bxs-edit-alt'></i>edit
                      </a>
                      <a href="<?=site_url('Crud_peserta/hapus/'.$psr->id_peserta) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn-hapus">
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
