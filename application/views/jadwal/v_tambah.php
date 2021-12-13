
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <a href="<?=site_url('Crud/index')?>" class="btn-peserta">
            <i class='bx bx-arrow-back' ></i> Back
        </a>
        <div class="sub-judul">
          <p><?=ucfirst($page)?> Jadwal</p>
        </div>

      </div>
      <div class="form-input">
        <form action="<?= site_url('Crud/proses') ?>"  method="post">
          <div class="form-group">
            <label>Kode Jadwal *</label>
            <input type="hidden" name="id_jadwal" value="<?= $row->id_jadwal ?>">
            <input type="text" name="kode_jadwal" value="<?= $row->kode_jadwal ?>" autocomplete="off">
          </div>

          <div class="form-group">
               <label>Nama Peserta*</label>
               <select class="" name="id_peserta">
                    <?php foreach ($peserta->result() as $key => $data) { ?>
                         <option value="<?=$data->id_peserta?>" <?=$data->id_peserta == $row->id_peserta ? "selected" : null ?>><?=$data->username?></option>
                    <?php } ?>
               </select>
          </div>
          <div class="form-group">
            <label>Nama Instruktur*</label>
            <select class="" name="id_instr">
              <option value="">- Pilih -</option>
              <?php foreach ($instruktur->result() as $key => $data) { ?>
                <option value="<?=$data->id_instr?>" <?=$data->id_instr == $row->id_instr ? "selected" : null ?>><?=$data->username?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Pilih Paket *</label>
            <select class="" name="id">
              <option value="">- Pilih -</option>
              <?php foreach ($paket->result() as $key => $data) { ?>
                <option value="<?=$data->id?>" <?=$data->id == $row->id ? "selected" : null ?>><?=$data->nama?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Jenis Mobil *</label>
            <select name="jenis_mobil">
              <option value="">- Pilih -</option>
              <option value="Manual"> Manual</option>
              <option value="Matic"> Matic </option>
            </select>
            <span class="error-validasi"><?php echo form_error('jenis_mobil'); ?></span>
          </div>
          <div class="form-group">
            <label>Tgl Latihan *</label>
            <input type="date" name="tgl_latihan" value"" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Jam latihan *</label>
            <input type="time" name="jam_latihan" value"" autocomplete="off">
          </div>
          <div class="form-group">
            <input type="submit" name="<?=$page?>" value="Save">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
