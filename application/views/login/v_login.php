
	<div class="container">
		<div class="img">
			<img src="assets/img/undraw_fast_car_p-4-cu.svg">

		</div>

		<div class="login-content">
			<form action="<?= site_url('Auth/proses') ?>" method="post">
				<img src="assets/img/undraw_profile.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" id="username" class="input" name="username" autocomplete="off" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="username" type="password"  name="password"class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" name="submit" class="btn" >
            </form>
        </div>
    </div>
