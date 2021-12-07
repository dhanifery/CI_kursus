
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
          <p>Edit Peserta</p>
        </div>

      </div>
      <div class="form-input">
        <?php foreach ($peserta as $psr) { ?>
          <form action=""  method="post">
            <div class="form-group">
              <label>Name *</label>
              <input type="hidden" name="id_peserta" value="<?php echo $psr->id_peserta ?>">
              <input type="text" name="username" value="<?php echo $psr->username ?>"  autocomplete="off">
              <span class="error-validasi"><?php echo form_error('username'); ?></span>
            </div>
            <div class="form-group">
              <label>TTL *</label>
              <input type="date" name="TTL_peserta" value="<?php echo $psr->TTL_peserta ?>">
            </div>
            <div class="form-group">
              <label>Email *</label>
              <input type="text" name="email_peserta" value="<?php echo $psr->email_peserta ?>" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Password </label>
              <input type="password" name="password_peserta" value="<?php echo $psr->password_peserta ?>">
              <span class="error-validasi"><?php echo form_error('password_peserta'); ?></span>
            </div>
            <div class="form-group">
              <label>Alamat *</label>
              <textarea  name="alamat_peserta" rows="2" cols="1" ><?php echo $psr->alamat_peserta; ?></textarea>
            </div>
            <div class="form-group">
              <label>No.telp *</label>
              <input type="text" name="no_telp" value="<?php echo $psr->no_telp ?>" autocomplete="off">
              <span class="error-validasi"><?php echo form_error('no_telp'); ?></span>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin </label>
              <select name="JK_peserta">
                <?php $JK_peserta= $psr->JK_peserta ? $psr->JK_peserta  : $psr->$JK_peserta   ?>
                <option value="Male">Male</option>
                <option value="Female"<?php=$JK_peserta == Female ? 'selected' : null ?>Female</option>
              </select>
              <span class="error-validasi"><?php echo form_error('JK_peserta'); ?></span>
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
