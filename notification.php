
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Подключение к сети Интернет</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="stylesheet" href="css/style.min.css?_v=20230707133436">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="Подключение к интернету, роутер, интернет, интернет + TV" >
    
        <!-- Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.min.css">

        <!-- Propeller css -->
        <link rel="stylesheet" type="text/css" href="admin/assets/css/propeller.min.css">

        <!-- Propeller theme css-->
        <link rel="stylesheet" type="text/css" href="admin/assets/themes/css/propeller-theme.css" />

        <!-- Propeller admin theme css-->
        <link rel="stylesheet" type="text/css" href="admin/assets/themes/css/propeller-admin.css">

	<meta name="description" content="Подключение к сети Интернет. Безграничные возможности технологий интернета и высокая скорость соединения. Единый доступ для всех устройств в квартире или в частном доме">
</head>


<?php 
include 'public/list.php'; 

if (isset($_GET['id_n'])) {
   $qry 	= "SELECT * FROM tbl_notifications WHERE id ='".$_GET['id_n']."'";
   $result  = mysqli_query($connect, $qry);
   $row 	= mysqli_fetch_assoc($result);
}

?>
<body>
    <div class="wrapper">
    <?php include 'header.php'; ?>
        <main class="page">
            <article class="service">
                <div class="service__container">
                    <div class="service__body">
                        
                        <div class="service__main">
                            <section class="service__block block-service mb">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h1 class="service__title title2"> 
                                                        <?php echo $row['name'];?>
                                                    </h1>
                                                    <p class="text-left text-muted">
                                                        <?php echo $row['date'];?>
                                                    </p>
                                                    <div class="block-service__text">
                                                        <?php echo $row['descripdion'];?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="admin/upload/notification/<?php echo $row['photo'];?>"  class="rounded" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </section>     
                        </div>
                        
                    </div>
                </div>
            </article>
        </main>

		<?php include 'footer.php'; ?>
</body>

</html>