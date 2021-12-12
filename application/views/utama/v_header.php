<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>B I S T I R</title>
   </head>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".akun_profil .icon_wrap").click(function(){
        $(this).parent().toggleClass("active");
        $(".notif , .pesan").removeClass("active");

      })
      $(".notif .icon_wrap").click(function(){
        $(this).parent().toggleClass("active");
        $(".akun_profil , .pesan").removeClass("active");
      });
      $(".pesan .icon_wrap").click(function(){
        $(this).parent().toggleClass("active");
        $(".akun_profil , .notif").removeClass("active");
      });
    });

  </script>

<body onload="initClock()">
  <!-- SIDEBAR -->

    <div class="sidebar close">
      <div class="logo-details">
        <i class='bx bxs-cube-alt icon'></i>
        <span class="logo_name">B I S T I R</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="<?php echo base_url() . 'User'; ?>">
            <i class='bx bx-grid-alt' ></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="<?php echo base_url() . 'User'; ?>">Dashboard</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url() . 'Crud'; ?>">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="link_name">Jadwal</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="<?php echo base_url() . 'Crud'; ?>">Jadwal</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-collection' ></i>
              <span class="link_name">Data</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Data</a></li>
            <li><a href="<?php echo base_url() . 'Crud_peserta'; ?>">Data Peserta</a></li>
            <li><a href="<?php echo base_url() . 'Crud_instruktur'; ?>">Data Instruktur</a></li>
            <li><a href="#">Data Transaksi</a></li>
            <li><a href="#">Data Paket</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-cog' ></i>
              <span class="link_name">Setting</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Setting</a></li>
            <li><a href="#">Bantuan Penggunaan</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Edit Profil</a></li>
          </ul>
        </li>
        <li>
          <div class="profile-details">
            <div class="profile-content">
              <!--<img src="image/profile.jpg" alt="profileImg">-->
            </div>
            <div class="name-job">
              <div class="profile_name">Log Out</div>
            </div><a href="<?= site_url('Auth/logout') ?>" onclick="return confirm('Apakah anda yakin Log out ?')">
              <i class='bx bx-log-out' ></i>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <!-- HOME SECTION PROFIL -->
    <section class="home-section">
      <nav>
        <div class="text">
          <i class='bx bx-menu' ></i>
          <p><?= $judul; ?></p>
        </div>
                <div class="navbar">
                  <div class="notif">
                    <div class="icon_wrap">
                      <i class='bx bx-bell'></i>
                    </div>
                    <div class="notification_dd" >
                      <ul class="notification_ul">
                        <li class="Succes">
                          <div class="notify_icon">
                            <i class='bx bx-check'></i>
                          </div>
                          <div class="notify_data">
                            <div class="title">Transaksi Berhasil</div>
                            <div class="sub_title">Lorem ipsum dolor sit amet.</div>
                          </div>
                          <div class="notify_status">
                            <p>Success</p>
                          </div>
                        </li>
                        <li class="Failed">
                          <div class="notify_icon">
                            <i class='bx bxs-x-circle'></i>
                          </div>
                          <div class="notify_data">
                            <div class="title">Transaksi Gagal</div>
                            <div class="sub_title">Lorem ipsum dolor sit amet.</div>
                          </div>
                          <div class="notify_status">
                            <p>Failed</p>
                          </div>
                        </li>
                      </ul>

                    </div>
                  </div>
                  <div class="pesan">
                    <div class="icon_wrap">
                      <i class='bx bx-chat' ></i>
                    </div>
                    <div class="notification_dd">
                      <ul class="notification_ul">
                        <li class="Succes">
                          <div class="notify_icon">
                            <i class='bx bx-check'></i>
                          </div>
                          <div class="notify_data">
                            <div class="title">John</div>
                            <div class="sub_title">Lorem ipsum dolor sit amet.</div>
                          </div>
                        </li>
                        <li class="Failed">
                          <div class="notify_icon">
                            <i class='bx bxs-x-circle'></i>
                          </div>
                          <div class="notify_data">
                            <div class="title">Robert</div>
                            <div class="sub_title">Lorem ipsum dolor sit amet.</div>
                          </div>
                        </li>
                      </ul>

                    </div>
                  </div>
                  <div class="akun_profil">
                    <div class="icon_wrap">
                      <img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" >
                      <span class="name"><?= $user['name']; ?></span>
                      <i class='bx bxs-chevron-down arrow' ></i>
                    </div>
                    <div class="profile_dd">
                      <ul class="profile_ul">
                        <li class="profile_li"><a class="profile" href="<?= site_url('User/profil') ?>"><span class="picon"><i class='bx bx-user' ></i>
                        </span> My Profile</a>
                        </li>
                        <li><a class="logout" href="<?= site_url('Auth/logout') ?>" onclick="return confirm('Apakah anda yakin Log out ?')"><span class="picon"><i class='bx bx-log-out'></i></span> Log Out </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
            </nav>

      <!-- CONTENT -->
    <div class="content">
