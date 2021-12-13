
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <a href="<?=site_url('Crud_peserta/index')?>" class="btn-peserta">
            <i class='bx bx-arrow-back' ></i> Back
        </a>
        <div class="sub-judul">
          <p>Add Peserta</p>
        </div>

      </div>
      <div class="form-input">
        <form action=""  method="post">
          <div class="form-group">
            <label>Name *</label>
            <input type="text" name="username" value"" autocomplete="off" autofocus>
            <span class="error-validasi"><?php echo form_error('username'); ?></span>
          </div>
          <div class="form-group">
            <label>TTL *</label>
            <input type="date" name="TTL_peserta" value"" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Email *</label>
            <input type="text" name="email_peserta" value="" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Alamat *</label>
            <textarea name="alamat_peserta" rows="2" cols="1"></textarea>
          </div>
          <div class="form-group">
            <label>No.telp *</label>
            <input type="text" name="no_telp" value=""  autocomplete="off">
            <span class="error-validasi"><?php echo form_error('no_telp'); ?></span>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin *</label>
            <select name="JK_peserta">
              <option value="">- Pilih -</option>
              <option value="Male"> Male </option>
              <option value="Female"> Female </option>
            </select>
            <span class="error-validasi"><?php echo form_error('JK_peserta'); ?></span>
          </div>
          <div class="form-group">
            <input type="submit" name="" value="Save">
            <input type="reset" name="" value="Reset">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
