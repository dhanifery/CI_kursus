<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    </style>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <a href="<?=site_url('Crud/index')?>" class="btn-peserta">
            <i class='bx bx-arrow-back' ></i> Back
        </a>
        <div class="sub-judul">
          <p>List Peserta</p>
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
                  <th>Jenis Mobil</th>
                  <th>Tanggal latihan</th>
                  <th>Jam Latihan</th>
                  <th>Banyak Pertemuan</th>
                </tr>
              </thead>
              <tbody>            
                <?php
                $no=1;
                foreach ($jadwal as $j){
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $j->kd_jadwal?></td>
                    <td><?php echo $j->instr_name?></td>
                    <td><?php echo $j->peserta_name?></td>
                    <td><?php echo $j->jenis_mobil?></td>
                    <td><?php echo $j->tgl_latihan?></td>
                    <td><?php echo $j->jam_latihan?></td>
                    <td><?php echo $j->byk_pertemuan?></td>

                  </tr>
                <?php } ?>
              </tbody>
            </table>
         </div>
        </div>
    </div>
  </body>
</html>
