
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/peserta.css">
  </head>
  <body>
    <div class="content_2" style="background:#fff;">
      <div class="tambahdata">
        <a href="<?=site_url('Crud_instruktur/index')?>" class="btn-peserta">
            <i class='bx bx-arrow-back' ></i> Back
        </a>
        <div class="sub-judul">
          <p>Add Instruktur</p>
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
            <input type="date" name="TTL_instr" value"" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Email *</label>
            <input type="text" name="email_instr" value="" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Password *</label>
            <input type="password" name="password_instr" value="" autocomplete="off">
            <span class="error-validasi"><?php echo form_error('password_instr'); ?></span>
          </div>
          <div class="form-group">
            <label>Alamat *</label>
            <textarea name="alamat_instr" rows="2" cols="1"></textarea>
          </div>
          <div class="form-group">
            <label>No.telp *</label>
            <input type="text" name="telp_instr" value=""  autocomplete="off">
            <span class="error-validasi"><?php echo form_error('telp_instr'); ?></span>
          </div>
          <div class="form-group">
            <label>Honor Per Jam *</label>
            <input type="text" name="honor_per_jam" value=""  autocomplete="off">
            <span class="error-validasi"><?php echo form_error('honor_per_jam'); ?></span>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin *</label>
            <select name="JK_instr">
              <option value="">- Pilih -</option>
              <option value="Male"> Male </option>
              <option value="Female"> Female </option>
            </select>
            <span class="error-validasi"><?php echo form_error('JK_instr'); ?></span>
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
