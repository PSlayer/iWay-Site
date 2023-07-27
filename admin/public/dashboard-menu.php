<?php 

	

	// total_notifications
	$sql_total_notifications = "SELECT COUNT(*) as num FROM tbl_notifications";
	$total_notifications = mysqli_query($connect, $sql_total_notifications);
	$total_notifications = mysqli_fetch_array($total_notifications);
	$total_notifications = $total_notifications['num'];

	// total_services
	$sql_total_services = "SELECT COUNT(*) as num FROM tbl_services";
	$total_services = mysqli_query($connect, $sql_total_services);
	$total_services = mysqli_fetch_array($total_services);
	$total_services = $total_services['num'];

	// total_types
	$sql_total_types = "SELECT COUNT(*) as num FROM tbl_types";
	$total_types = mysqli_query($connect, $sql_total_types);
	$total_types = mysqli_fetch_array($total_types);
	$total_types = $total_types['num'];

	// total_categories
	$sql_total_categories = "SELECT COUNT(*) as num FROM tbl_categories";
	$total_categories = mysqli_query($connect, $sql_total_categories);
	$total_categories = mysqli_fetch_array($total_categories);
	$total_categories = $total_categories['num'];

	// total_admin
	$sql_total_admin = "SELECT COUNT(*) as num FROM tbl_admin";
	$total_admin = mysqli_query($connect, $sql_total_admin);
	$total_admin = mysqli_fetch_array($total_admin);
	$total_admin = $total_admin['num'];


    $username = $_SESSION['user'];
    $sql_query = "SELECT id FROM tbl_admin WHERE username = ?";
    $data = array();
    $stmt = $connect->stmt_init();
    if($stmt->prepare($sql_query)) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result(
            $data['id']
            );
        $stmt->fetch();
        $stmt->close();
    }		

?>

<style>
  .borderless tr, .borderless td, .borderless th {
    border: none !important;
   }
</style>
<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<!--tab start-->
	<div class="container-fluid full-width-container">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li class="active">Главная</li>
		</ol><!--breadcrum end-->
	
		<div class="section"> 



		 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-title" align="center">
					<h1 class="pmd-card-title-text typo-fill-secondary propeller-title">ИНФОРМАЦИЯ</h1>
				</div>
				<div class="pmd-card-body">
					<table class="table pmd-table" id="table-propeller">
						<tr>
							<td>Администраторов</td>
							<td>:</td>
							<td><?php echo $total_admin; ?></td>
						</tr>
						<tr>
							<td>Новостей</td>
							<td>:</td>
							<td><?php echo $total_notifications; ?></td>
						</tr>
						<tr>
							<td>Услуг</td>
							<td>:</td>
							<td><?php echo $total_services; ?></td>
						</tr>
						<tr>
							<td>Типов</td>
							<td>:</td>
							<td><?php echo $total_types; ?></td>
						</tr>
						<tr>
							<td>Категорий</td>
							<td>:</td>
							<td><?php echo $total_categories; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		

		

		</div>
			
	</div>

</div>