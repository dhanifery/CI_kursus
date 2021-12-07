
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
          <p>Edit Instruktur</p>
        </div>

      </div>
      <div class="form-input">
        <?php foreach ($instruktur as $ins) { ?>
          <form action=""  method="post">
            <div class="form-group">
              <label>Name *</label>
              <input type="hidden" name="id_instr" value="<?php echo $ins->id_instr ?>">
              <input type="text" name="username" value="<?php echo $ins->username ?>"  autocomplete="off">
              <span class="error-validasi"><?php echo form_error('username'); ?></span>
            </div>
            <div class="form-group">
              <label>TTL *</label>
              <input type="date" name="TTL_instr" value="<?php echo $ins->TTL_instr ?>">
            </div>
            <div class="form-group">
              <label>Email *</label>
              <input type="text" name="email_instr" value="<?php echo $ins->email_instr ?>" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Password </label>
              <input type="password" name="password_instr" value="<?php echo $ins->password_instr ?>">
              <span class="error-validasi"><?php echo form_error('password_peserta'); ?></span>
            </div>
            <div class="form-group">
              <label>Alamat *</label>
              <textarea  name="alamat_instr" rows="2" cols="1" ><?php echo $ins->alamat_instr; ?></textarea>
            </div>
            <div class="form-group">
              <label>No.telp *</label>
              <input type="text" name="telp_instr" value="<?php echo $ins->telp_instr ?>" autocomplete="off">
              <span class="error-validasi"><?php echo form_error('no_telp'); ?></span>
            </div>
            <div class="form-group">
              <label>Honor Per Jam*</label>
              <input type="text" name="honor_per_jam" value="<?php echo $ins->honor_per_jam ?>" autocomplete="off">
              <span class="error-validasi"><?php echo form_error('honor_per_jam'); ?></span>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin </label>
              <select name="JK_instr">
                <?php $JK_peserta= $ins->JK_instr ? $psr->JK_peserta  : $ins->$JK_instr   ?>
                <option value="Male">Male</option>
                <option value="Female"<?php=$JK_instr == Female ? 'selected' : null ?>Female</option>
              </select>
              <span class="error-validasi"><?php echo form_error('JK_instr'); ?></span>
            </div>
            <div class="form-group">
              <input type="submit" name="" value="Save">
            </div>
          </form>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
