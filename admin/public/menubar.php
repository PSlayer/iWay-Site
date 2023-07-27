<?php include 'includes/config.php'; ?>


<?php

    $username = $_SESSION['user'];
    $sql_query = "SELECT username FROM tbl_admin WHERE username = ?";

    $data = array();
            
    $stmt = $connect->stmt_init();
    if($stmt->prepare($sql_query)) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result(
            $data['username']
            );
        $stmt->fetch();
        $stmt->close();
    }

            
?>

<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

<title>Admin | iWay</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/dropify.css">

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="assets/css/propeller.min.css">
<!-- /build -->

<!-- Select2 css-->
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/select2-bootstrap.css" />
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/pmd-select2.css" />

<link rel="stylesheet" type="text/css" href="assets/plugins/pagination/css/pagination.css" />

<!-- Propeller date time picker css-->
<!-- <link rel="stylesheet" type="text/css" href="components/datetimepicker/css/bootstrap-datetimepicker.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="components/datetimepicker/css/pmd-datetimepicker.css" /> -->

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="assets/themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="assets/themes/css/propeller-admin.css">

</head>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

	<div class="container-fluid">
		<div class="pmd-navbar-right-icon pull-right navigation">
			<!-- Notifications -->
            
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="javascript:void(0);" data-target="basicSidebar" data-placement="left" data-position="slidepush" is-open="true" is-open-width="1200" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons md-light">menu</i></a>	
		  <a href="dashboard.php" class="navbar-brand">
		  	iWay
		  </a>
		</div>
	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside id="basicSidebar" class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">
		
		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left">
					<img src="assets/themes/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle">Привет, <?php echo $data['username'] ?></div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
		</li><!-- End user info -->
		
		<li> 
			<a class="pmd-ripple-effect" href="dashboard.php">	
				<i class="media-left media-middle material-icons">dashboard</i>
				<span class="media-body">Главная</span>
			</a> 
		</li>


		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="material-icons media-left pmd-sm">local_mall</i> 
				<span class="media-body">Интернет</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="add-service.php">Добавить</a></li>
				<li><a href="manage-services.php">Все услуги</a></li>
				<li style="display:none;"><a href="edit-service.php"></a></li>
				<li style="display:none;"><a href="send-onesignal-service-notification.php"></a></li>
			</ul>
		</li>

		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="material-icons media-left pmd-sm">notifications</i> 
				<span class="media-body">Новости</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="add-notification.php">Добавить</a></li>
				<li><a href="manage-notification.php">Все новости</a></li>
				<li style="display:none;"><a href="edit-notification.php"></a></li>
				<li style="display:none;"><a href="send-onesignal-notification.php"></a></li>
			</ul>
		</li>		


		<li> 
			<a class="pmd-ripple-effect" href="logout.php">	
				<i class="media-left media-middle material-icons">power_settings_new</i>
				<span class="media-body">Выход</span>
			</a> 
		</li>
		
	</ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->  