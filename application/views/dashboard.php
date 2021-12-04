<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/stylecss.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>B I S T I R</title>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
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
              <a href="#">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
              </a>
               <span class="tooltip">Dashboard</span>
            </li>
            <li>
             <a href="#">
               <i class='bx bxs-calendar' ></i>
               <span class="links_name">Jadwal</span>
             </a>
             <span class="tooltip">Jadwal</span>
           </li>
           <li>
             <a href="#">
               <i class='bx bxs-group' ></i>
               <span class="links_name">Data</span>
             </a>
             <span class="tooltip">Data</span>
           </li>
           <li>
             <a href="#">
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
                <i class='bx bx-log-out' id="log_out" ></i>
           </li>
          </ul>
        </div>
        <section class="home-section">
            <nav>
              <div class="text">
                <p>Dashboard</p>
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
                      <span class="name">Feri</span>
                      <i class='bx bxs-chevron-down arrow' ></i>
                    </div>
                    <div class="profile_dd">
                      <ul class="profile_ul">
                        <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class='bx bx-user' ></i>
                        </span> My Profile</a>
                        </li>
                        <li><a class="logout" href="#"><span class="picon"><i class='bx bx-log-out'></i></span> Log Out </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
            </nav>

          <!--Halaman content-->

            <div class="content">

            <!--Left Side-->

              <div class="content_ds">
                <img src="assets/img/5138226.jpg" alt="">
               <div class="background_img">
                 <div class="cloud">
                   <div class="cloud_one">
                       <p>Hai Admin....</p>
                       <p>Semoga harimu menyenangkan</p>
                   </div>
                 </div>
                 <div class="awan">
                   <div class="cloud_two">
                     <a href="#">Bantuan Penggunaan</a>
                   </div>
                 </div>
                 <div class="awan_two">
                   <div class="cloud_three">
                     <a href="#">Cek Email</a>
                   </div>
                 </div>
                 </div>
               </div>

            <!--Right Side-->
              <div class="tgl_kalender">

                <!--tanggal Side-->
                <div class="datetime">
                      <div class="date">
                        <span id="dayname">Day</span>,
                        <span id="month">Month</span>
                        <span id="daynum">00</span>,
                        <span id="year">Year</span>
                      </div>
                      <div class="time">
                        <span id="hour">00</span>:
                        <span id="minutes">00</span>:
                        <span id="seconds">00</span>
                        <span id="period">AM</span>
                      </div>
                    </div>

                <!--Kalender Side-->
                <div class="content_kalender">
                  <div class="calendar">
                    <div class="calendar-header">
                        <span class="month-picker" id="month-picker">February</span>
                        <div class="year-picker">
                            <span class="year-change" id="prev-year">
                                <pre><</pre>
                            </span>
                            <span id="year">2021</span>
                            <span class="year-change" id="next-year">
                                <pre>></pre>
                            </span>
                        </div>
                    </div>
                    <div class="calendar-body">
                          <div class="calendar-week-day">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="calendar-days">
                    </div>
                    <div class="calendar-footer">
                    </div>
                    <div class="month-list"></div>
                </div>
                </div>
              </div>
              <div class="lokasi">
                <div class="alamat">
                  <i class='bx bxs-edit-location'></i>
                  <span>Jalan Cut Mutiah Bekasi</span>
                </div>
                <div class="hp">
                  <i class='bx bxl-whatsapp' ></i>
                  <span>+628129087546</span>
                </div>
              </div>
            </div>
          </div>


        </section>
        <script type="text/javascript">
          function updateClock(){
            var now = new Date();
            var dname = now.getDay(),
                mo = now.getMonth(),
                dnum = now.getDate(),
                yr = now.getFullYear(),
                hou = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pe = "AM";

                if(hou >= 12){
                  pe = "PM";
                }
                if(hou == 0){
                  hou = 12;
                }
                if(hou > 12){
                  hou = hou - 12;
                }

                Number.prototype.pad = function(digits){
                  for(var n = this.toString(); n.length < digits; n = 0 + n);
                  return n;
                }

                var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
                var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
                var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
                for(var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
          }

          function initClock(){
            updateClock();
            window.setInterval("updateClock()", 0);
          }
        </script>
        <script type="text/javascript">
        let calendar = document.querySelector('.calendar')

        const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

        isLeapYear = (year) => {
        return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
        }

        getFebDays = (year) => {
          return isLeapYear(year) ? 29 : 28
        }

        generateCalendar = (month, year) => {

        let calendar_days = calendar.querySelector('.calendar-days')
        let calendar_header_year = calendar.querySelector('#year')

        let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

        calendar_days.innerHTML = ''

        let currDate = new Date()
        if (!month) month = currDate.getMonth()
        if (!year) year = currDate.getFullYear()

        let curr_month = `${month_names[month]}`
        month_picker.innerHTML = curr_month
        calendar_header_year.innerHTML = year

        // get first day of month

        let first_day = new Date(year, month, 1)

        for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
          let day = document.createElement('div')
          if (i >= first_day.getDay()) {
              day.classList.add('calendar-day-hover')
              day.innerHTML = i - first_day.getDay() + 1
              day.innerHTML += `<span></span>
                              <span></span>
                              <span></span>
                              <span></span>`
              if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                  day.classList.add('curr-date')
              }
          }
          calendar_days.appendChild(day)
        }
        }

        let month_list = calendar.querySelector('.month-list')

        month_names.forEach((e, index) => {
        let month = document.createElement('div')
        month.innerHTML = `<div data-month="${index}">${e}</div>`
        month.querySelector('div').onclick = () => {
          month_list.classList.remove('show')
          curr_month.value = index
          generateCalendar(index, curr_year.value)
        }
        month_list.appendChild(month)
        })

        let month_picker = calendar.querySelector('#month-picker')

        month_picker.onclick = () => {
        month_list.classList.add('show')
        }

        let currDate = new Date()

        let curr_month = {value: currDate.getMonth()}
        let curr_year = {value: currDate.getFullYear()}

        generateCalendar(curr_month.value, curr_year.value)

        document.querySelector('#prev-year').onclick = () => {
        --curr_year.value
        generateCalendar(curr_month.value, curr_year.value)
        }

        document.querySelector('#next-year').onclick = () => {
        ++curr_year.value
        generateCalendar(curr_month.value, curr_year.value)
        }

        let dark_mode_toggle = document.querySelector('.dark-mode-switch')

        dark_mode_toggle.onclick = () => {
        document.querySelector('body').classList.toggle('content_kalender')
        document.querySelector('body').classList.toggle('dark')
        }


        </script>
        <script>
          let sidebar = document.querySelector(".sidebar");
          let closeBtn = document.querySelector("#btn");
          let searchBtn = document.querySelector(".bx-search");

          closeBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
          });

          searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
          });

          // following are the code to change sidebar button(optional)
          function menuBtnChange() {
           if(sidebar.classList.contains("open")){
             closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
           }else {
             closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
           }
          }
        </script>
    </body>
</html>
