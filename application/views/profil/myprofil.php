<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="<?= base_url('assets/css/profile/profil.css'); ?>">
  </head>
    <div class="content_ds">
      <h2> My Profile </h2>
      <div class="wrapper">
          <div class="left">
              <img class="profil" src="<?= base_url('assets/img/profil/') . $user['image']; ?>"
              alt="user" width="100">
              <h4><?= $user['name']; ?></h4>
               <p>Admin</p>
          </div>
          <div class="right">
              <div class="info">
                  <h3>Information</h3>
                  <div class="info_data">
                       <div class="data">
                          <h4>Email</h4>
                          <p><?= $user['email']; ?></p>
                       </div>

                  </div>
              </div>

            <div class="projects">
                  <h3></h3>
                  <div class="projects_data">
                       <div class="data">
                          <h4>Member since</h4>
                          <p><?= date('d F Y', $user['date_created']); ?></p>
                       </div>
                  </div>
              </div>
          </div>
      </div>
     </div>
