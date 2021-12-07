
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    </style>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <div class="sub-judul">
          <p>List Jadwal</p>
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
                  <th>Kode Jadwal</th>
                  <th>Nama Instruktur</th>
                  <th>Nama Peserta</th>
                  <th>Detail Jadwal</th>
                </tr>
              </thead>
              <tbody>
                <?php if (empty($jadwal)):?>
                <tr>
                  <td colspan="3" >
                    <div class="alert">
                      <h3>Data not found!</h3>
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php foreach ($jadwal as $j){
                  ?>
                  <tr>
                    <td><?php echo ++$start?></td>
                    <td><?php echo $j->kd_jadwal?></td>
                    <td><?php echo $j->instr_name?></td>
                    <td><?php echo $j->peserta_name?></td>
                    <td class="text-center" width="100px">
                      <a href="<?=site_url('Crud/detail') ?>" class="btn-edit">
                        <i class='bx bx-info-circle'></i>Details
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
