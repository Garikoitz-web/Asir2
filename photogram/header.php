<div class="h-header">
	<div class="h-logo"><a href="home.php"><img src="img/logo.png" width="130"></a></div>
	<div class="h-search"><input type="text" placeholder="search" class="search"></div>
	<div class="h-account">
		<a href="perfil.php?username=<?php echo $_SESSION['username'];?>">
			<img src="img/icons/perfil.png" class="i-icon">
		</a>
		<a href="logout.php">
			<img src="img/icons/close.png" class="i-icon" width="24px">
		</a>
	</div>
</div>