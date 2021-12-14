<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="<?= base_url('assets/css/profile/tambah.css'); ?>">
  </head>
    <div class="content_ds">
      <h2> Form Peserta </h2>
      <div class="wrapper">
           <div class="right">
                <div class="info">
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
                     <!-- <h3>Information</h3>
                     <div class="info_data">
                     <div class="data">
                     <h4>Email</h4>
                     <p><?= $user['email']; ?></p>
                </div>

           </div> -->
      </div>

                <div class="projects">
                     <!-- <h3></h3>
                     <div class="projects_data">
                     <div class="data">
                     <h4>Member since</h4>
                     <p><?= date('d F Y', $user['date_created']); ?></p>
                </div>
          </div> -->
          </div>
          </div>
          <div class="left">
              <img class="profil" src="<?= base_url('assets/img/5138226.jpg'); ?>"
              alt="user" width="100">
          </div>
      </div>
     </div>
