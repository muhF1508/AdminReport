<?php include_once('../_header.php');?>

<div class="row" ">
	<marquee>
    <div  align="center">
    	<h1>---{ Selamat Datang Di School Report }---</h1>
    </div>
</marquee>
    <div class="col-lg-12">
        <h1 class="fa fa-fw fa-dashboard">Dashboard</h1>
        <p>Hallo <mark><?=$_SESSION['user']?></mark> </p>
        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
    </div>
</div>

<?php include_once('../_footer.php');?>
