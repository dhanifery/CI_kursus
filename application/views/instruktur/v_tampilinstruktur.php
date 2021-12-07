<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    </style>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <a href="<?=base_url('Crud_instruktur/tambah')?>" class="btn-peserta">
            <i class='bx bxs-user-plus'></i>Tambah
        </a>
        <div class="sub-judul">
          <p>List Instruktur</p>
        </div>
        <div class="excel">
          <a href="<?php site_url().'Crud_instruktur/excel' ?>" class="btn-excel-1">
            <i class='bx bx-table'></i> Excel
          </a>
            <a href="#" class="btn-excel-2">
              <i class='bx bx-download'></i></i> Download
            </a>
        </div>
        <div class="row-input">
          <div class="col">
            <form action="<?php site_url('Crud_instruktur/keyword') ?>" method="post">
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
                  <th>Honor per jam</th>
                  <th class="text-center">Option</th>

                </tr>

              </thead>
              <tbody>
                <?php if (empty($instruktur)):?>
                <tr>
                  <td colspan="6" >
                    <div class="alert">
                      <h3>Data not found!</h3>
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php foreach ($instruktur as $ins){
                  ?>
                  <tr>
                    <td><?php echo ++$start?></td>
                    <?php    $ins->id_instr?>
                    <td><?php echo $ins->username?></td>
                    <td><?php echo $ins->email_instr?></td>
                    <td><?php echo $ins->TTL_instr?></td>
                    <td width="120px;"><?php echo $ins->JK_instr?></td>
                    <td><?php echo $ins->honor_per_jam?></td>

                    <td class="text-center" width="150px">
                      <a href="<?=site_url('Crud_instruktur/edit/'.$ins->id_instr) ?>" class="btn-edit">
                        <i class='bx bxs-edit-alt'></i>edit
                      </a>
                      <a href="<?=site_url('Crud_instruktur/hapus/'.$ins->id_instr) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn-hapus">
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
