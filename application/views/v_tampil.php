<table class="data" border="1">
  <tr>
    <th>No</th>
    <th>Kode Jadwal</th>
    <th>Nama Peserta</th>
    <th>Nama Instruktur</th>
    <th>Jenis Mobil</th>
    <th>Tanggal Latihan</th>
    <th>Jam Latihan</th>
    <th>Banyak Pertemuan</th>
  </tr>
  <?php
  $no = 1;
  foreach ($jadwal as $j){
  ?>
  <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $j->kd_jadwal?></td>
    <td><?php echo $j->peserta_name?></td>
    <td><?php echo $j->instr_name?></td>
    <td><?php echo $j->jenis_mobil?></td>
    <td><?php echo $j->tgl_latihan?></td>
    <td><?php echo $j->jam_latihan?></td>
    <td><?php echo $j->byk_pertemuan?></td>
  </tr>
  <?php } ?>
</table>
