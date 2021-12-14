<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="<?= base_url('assets/css/profile/edit.css'); ?>">
  </head>
    <div class="content_ds">
      <h2> My Profile </h2>
      <div class="wrapper">

               <div class="left">
                    <img class="profil" src="<?= base_url('assets/img/profil/') . $user['image']; ?>"
                    alt="user" width="100">
                    <p>UI Developer</p>
               </div>
               <div class="right">
                    <div class="info">
                    <form class="" action="<?= base_url('Admin/edit'); ?>" method="post">
                         <h3>Edit Profile</h3>
                         <div class="info_data">
                              <div class="data">
                                   <h4>Email</h4>
                                   <input type="email" name="email" value="<?= $user['email']; ?>" id="email" readonly>
                              </div>
                         </div>
                         <div class="info_data">
                              <div class="data">
                                   <h4>Username</h4>
                                   <input type="name" name="name" value="<?= $user['name']; ?>" id="name">
                                   <span class="error-validasi"><?php echo form_error('name'); ?></span>
                              </div>
                         </div>

                    </div>

                    <div class="projects">
                         <h3></h3>
                         <div class="projects_data">
                              <div class="data">
                                   <h4>Picture</h4>
                              </div>
                              <div class="data">
                                   <label for="image">Choose File</label>
                                   <input type="file"  value="" name="image" id="image">
                              </div>
                         </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="" value="Save">
                    </div>
               </form>
               </div>

      </div>
     </div>
