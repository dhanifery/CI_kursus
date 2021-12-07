<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>B I S T I R</title>
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
       });  class="nav-link"

     </script>

   </head>
    <body onload="initClock()">
        <div class="sidebar">
          <div class="logo-details">
            <i class='bx bxs-cube-alt icon'></i>
              <div class="logo_name">B I S T I R</div>
              <i class='bx bx-menu' id="btn" ></i>
          </div>
          <ul class="nav-list">
            <li>
                <i class='bx bx-search' ></i>
               <input type="text" placeholder="Search...">
               <span class="tooltip">Search</span>
            </li>
            <li>
              <a class="nav-link" href="<?php echo base_url() . 'Dashboard'; ?>">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
              </a>
               <span class="tooltip">Dashboard</span>
            </li>
            <li>
             <a class="nav-link" href="<?php echo base_url() . 'Crud'; ?>">
               <i class='bx bxs-calendar' ></i>
               <span class="links_name">Jadwal</span>
             </a>
             <span class="tooltip">Jadwal</span>
           </li>
           <li>
             <a class="nav-link" href="<?php echo base_url() . 'Crud_peserta'; ?>">
               <i class='bx bxs-group' ></i>
               <span class="links_name">Data Peserta</span>
             </a>
             <span class="tooltip">Data Peserta</span>
           </li>
           <li>
             <a class="nav-link" href="<?php echo base_url() . 'Crud_instruktur'; ?>">
               <i class='bx bxs-group' ></i>
               <span class="links_name">Data Instruktur</span>
             </a>
             <span class="tooltip">Data Instuktur</span>
           </li>
           <li>
             <a class="nav-link" href="#">
               <i class='bx bx-cog' ></i>
               <span class="links_name">Setting</span>
             </a>
             <span class="tooltip">Setting</span>
           </li>
           <li class="profile">
               <div class="profile-details">
                 <div class="name_job">
                   <div class="name">Log Out</div>
                 </div>
               </div>
               <a href="<?= site_url('Auth') ?>">
                 <i class='bx bx-log-out' id="log_out" ></i>
              </a>
           </li>
          </ul>
        </div>


            <!--Right Side-->
