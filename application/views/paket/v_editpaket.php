
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <a href="<?=site_url('Paket/index')?>" class="btn-peserta">
            <i class='bx bx-arrow-back' ></i> Back
        </a>
        <div class="sub-judul">
          <p>Edit Paket</p>
        </div>

      </div>
      <div class="form-input">
        <form action="<?= site_url('Paket/proses') ?>"  method="post">
          <div class="form-group">
            <label>Nama Paket *</label>
            <input type="hidden" name="id" value="<?= $row->id?>">
            <input type="text" name="nama" value"<?= $row->nama ?>" autocomplete="off" autofocus>
            <span class="error-validasi"><?php echo form_error('nama'); ?></span>
          </div>
          <!-- <div class="form-group">
            <label>Nama Instruktur*</label>
            <select class="" name="id_instr">
              <option value="">- Pilih -</option>
              <?php foreach ($instruktur->result() as $key => $data) { ?>
                <option value="<?=$data->id_instr?>"><?=$data->username?></option>
              <?php } ?>s
            </select>
          </div> -->
          <div class="form-group">
            <label>Harga *</label>
            <input type="text" name="harga" value="<?= $row->harga ?>" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Banyak Pertemuan *</label>
            <input type="text" name="byk_pertemuan" value="<?= $row->byk_pertemuan ?>" autocomplete="off">
            <span class="error-validasi"><?php echo form_error('byk_pertemuan'); ?></span>
          </div>
          <div class="form-group">
            <input type="submit" name="<?=$page?>" value="Save">
          </form>
      </div>
    </div>
  </body>
</html>
