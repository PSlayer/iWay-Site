<?php include 'functions.php'; ?>


	<?php 
		// create object of functions class
		$function = new functions;
		
		// create array variable to store data from database
		$data = array();
		
		if(isset($_GET['keyword'])) {	
			// check value of keyword variable
			$keyword = $function->sanitize($_GET['keyword']);
			$bind_keyword = "%".$keyword."%";
		} else {
			$keyword = "";
			$bind_keyword = $keyword;
		}
			
		if (empty($keyword)) {
			$sql_query = "SELECT s.id, s.name, s.day_speed, s.night_speed, s.cost_to_add, t.type, s.price, c.category_name, s.pgt, s.turbo FROM tbl_services s, tbl_categories c, tbl_types t WHERE s.category = c.id  AND s.type = t.id ORDER BY s.id DESC";
		} else {
			$sql_query = "SELECT s.id, s.name, s.day_speed, s.night_speed, s.cost_to_add, t.type, s.price, c.category_name, s.pgt, s.turbo FROM tbl_services s, tbl_categories c, tbl_types t WHERE s.category = c.id AND s.type = t.id AND s.name LIKE ? ORDER BY s.id DESC";
		}
		
		
		$stmt = $connect->stmt_init();
		if ($stmt->prepare($sql_query)) {	
			// Bind your variables to replace the ?s
			if (!empty($keyword)) {
				$stmt->bind_param('s', $bind_keyword);
			}
			// Execute query
			$stmt->execute();
			// store result 
			$stmt->store_result();
			$stmt->bind_result( 
					$data['id'],
					$data['name'],
					$data['day_speed'],
					$data['night_speed'],
					$data['cost_to_add'],
					$data['type'],
					$data['price'],
					$data['category_name'],
					$data['pgt'],
					$data['turbo']
					);
			// get total records
			$total_records = $stmt->num_rows;
		}
			
		// check page parameter
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}
						
		// number of data that will be display per page		
		$offset = 10;
						
		//lets calculate the LIMIT for SQL, and save it $from
		if ($page) {
			$from 	= ($page * $offset) - $offset;
		} else {
			//if nothing was given in page request, lets load the first page
			$from = 0;	
		}	
		
		if (empty($keyword)) {
			$sql_query = "SELECT s.id, s.name, s.day_speed, s.night_speed, s.cost_to_add, t.type, s.price, c.category_name, s.pgt, s.turbo FROM tbl_services s, tbl_categories c, tbl_types t WHERE s.category = c.id  AND s.type = t.id ORDER BY s.id DESC LIMIT ?, ?";
		} else {
			$sql_query = "SELECT s.id, s.name, s.day_speed, s.night_speed, s.cost_to_add, t.type, s.price, c.category_name, s.pgt, s.turbo FROM tbl_services s, tbl_categories c, tbl_types t WHERE s.category = c.id AND s.type = t.id AND s.name LIKE ? ORDER BY s.id DESC LIMIT ?, ?";
		}
		
		
		$stmt_paging = $connect->stmt_init();
		if ($stmt_paging ->prepare($sql_query)) {
			// Bind your variables to replace the ?s
			if (empty($keyword)) {
				$stmt_paging ->bind_param('ss', $from, $offset);
			} else {
				$stmt_paging ->bind_param('sss', $bind_keyword, $from, $offset);
			}
			// Execute query
			$stmt_paging ->execute();
			// store result 
			$stmt_paging ->store_result();
			$stmt_paging->bind_result(
				$data['id'],
				$data['name'],
				$data['day_speed'],
				$data['night_speed'],
				$data['cost_to_add'],
				$data['type'],
				$data['price'],
				$data['category_name'],
				$data['pgt'],
				$data['turbo']
			);
			// for paging purpose
			$total_records_paging = $total_records; 
		}

		// if no data on database show "No Reservation is Available"
		if ($total_records_paging == 0) {
	
	?>

<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<!--tab start-->
	<div class="container-fluid full-width-container">
	
		<h1 class="section-title" id="services"></h1>
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="dashboard.php">Главная</a></li>
		  <li class="active">Управление услугами</li>
		</ol><!--breadcrum end-->
	
		<div class="section"> 

			<form id="validationForm" method="get">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">

					<div class="group-fields clearfix row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="lead">Управление услугами</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right">
							<div class="form-group pmd-textfield">
								<input type="text" name="keyword" class="form-control" placeholder="Search...">
							</div>
						</div>
					</div>

					<div class="table-responsive"> 
						
						<p align="center">Ничего не найдено!</p>

					</div>
				</div>
			</div> <!-- section content end -->  
			<?php $function->doPages($offset, 'manage-services.php', '', $total_records, $keyword); ?>
			</form>
		</div>
			
	</div><!-- tab end -->

</div><!--end content area-->

<?php } else { $row_number = $from + 1; ?>

<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<!--tab start-->
	<div class="container-fluid full-width-container">
	
		<h1 class="section-title" id="services"></h1>
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="dashboard.php">Главная</a></li>
		  <li class="active">Управление услугами</li>
		</ol><!--breadcrum end-->
	
		<div class="section"> 

			<form id="validationForm" method="get">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">

					<div class="group-fields clearfix row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="lead">Управление услугами</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right">
							<div class="form-group pmd-textfield">
								<input type="text" name="keyword" class="form-control" placeholder="Search...">
							</div>
						</div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php if(isset($_SESSION['msg'])) { ?>
                                <div role="alert" class="alert alert-warning alert-dismissible">
                                    <?php echo $_SESSION['msg']; ?>
                                </div>
                            <?php unset($_SESSION['msg']); }?>
                        </div>

					</div>

					<div class="table-responsive"> 
						<table cellspacing="0" cellpadding="0" class="table pmd-table table-hover" id="table-propeller">
							<thead>
								<tr>
									<th>ID</th>
									<th>Название</th>
									<th>Скорость днем</th>
									<th>Скорость ночью</th>
									<th>Стоимость подключения</th>
									<th>Тип</th>
									<th>Категория</th>
									<th>Цена</th>
									<th>Для ПГТ</th>									
									<th>Турбокнопка</th>
									<th width="15%">Действия</th>
								</tr>
							</thead>

							<?php 
								while ($stmt_paging->fetch()) { ?>

							<tbody>
								<tr>
									<td><?php echo $data['id'];?></td>
									<td><?php echo $data['name'];?></td>
									<td><?php echo $data['day_speed'];?></td>
									<td><?php echo $data['night_speed'];?></td>									
									<td><?php echo $data['cost_to_add'];?> Руб.</td>
									<td><?php echo $data['type'];?></td>	
									<td><?php echo $data['category_name'];?></td>	
									<td><?php echo $data['price'];?> Руб.</td>									
									<td><?php if ($data['pgt'] == 1){echo "Да";} else {echo "Нет";} ;?></td>
									<td><?php if ($data['turbo'] == 1){echo "Да";} else {echo "Нет";} ;?></td>
									
									<td>
                                        <a href="edit-service.php?id_e=<?php echo $data['id'];?>">
									        <i class="material-icons">mode_edit</i>
									    </a>
									                        
									    <a href="delete-service.php?id_d=<?php echo $data['id'];?>" onclick="return confirm('Are you sure want to delete this product?')" >
									                <i class="material-icons">delete</i>
									    </a>
									</td>									
								</tr>
							</tbody>

							<?php } ?>

						</table>

					</div>
				</div>
			</div> <!-- section content end -->  
			<?php $function->doPages($offset, 'manage-services.php', '', $total_records, $keyword); ?>
			</form>
		</div>
			
	</div><!-- tab end -->

</div><!--end content area-->

<?php } ?>