<?php define('DarkCoreCMS', TRUE); include 'header.php';
if (isset($_POST['login']))
	do_login($_POST['login_username'],$_POST['login_password']);
if (!isset($_SESSION['usr'])) { ?>
	<div id='content'>
		<div id='content-wrapper'>
			<div id='user-box'>
				<div class='reg-alts-part'>
					<h3 class='user-box-title'>Login to your Account</h3>
					<span class='box-divider'></span>
					<form action='' method='post' autocomplete='off' enctype='multipart/form-data'>
                        <input style="display:none">
                        <input type="password" style="display:none">
                        <input value='' name='login_username' class='usrinput' placeholder="Username" autocomplete="off" type='text' />
						<input value='' name='login_password' class='usrinput' style="margin-top:5px;" placeholder="Password" autocomplete="off" type='password' />
						<input value='Login' name='login' id='submit' type='submit'>
                        <a href='register' /><div class='submit-submenu'>Register</div></a>
                    </form>
				</div>
				<div class='reg-left-block'>
				<div class='reg-alts-part-sec'>
						<h3 class='user-box-title'>Few reassons why you should choose us</h3>
						<span class='box-divider'></span>
						<p style="color:#009966">We are a great and friendly community started back in 01/01/2008 , our server is still under development and we are trying to make the gameplay as fun as possible. We love our great community and we listen every single suggestion you'll give us. Server is PvE based but we are trying to listen to your PvP suggestions and doing our best to bring you more PvP content. We bring you great solo PvE experience and few group world bosses. We have so far 18 tier sets,6 traveler tiers,upgradable VIP items. We have tons of custom quests and over 15000 custom items and numbers are still growing almost every week. We managed to fix a lot of common bugs and edited character creations. That means you won't start with useless stuff in your bags.</p> 
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include 'global-footer.php' ?>
<?php } else { 
	echo "<script> window.load.href = 'user' </script>";
} ?>
</html>
