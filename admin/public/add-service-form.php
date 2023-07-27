<?php include_once('sql-query.php'); ?>

<?php

 	if (isset($_POST['submit'])) {


        $data = array(
			
		
			'name'  			=> $_POST['name'],
			'day_speed'  		=> $_POST['day_speed'],
			'night_speed'  		=> $_POST['night_speed'],
			'cost_to_add' 		=> $_POST['cost_to_add'],
            'type'				=> $_POST['type'],
            'price'				=> $_POST['price'],
            'category'  		=> $_POST['category'],
            'pgt'				=> $_POST['pgt'],
            'turbo'				=> $_POST['turbo']
		);		

 		$qry = Insert('tbl_services', $data);									
                      
  		//$_SESSION['msg'] = "";
		        $succes =<<<EOF
					<script>
					alert('New product successfully added...');
					window.location = 'manage-services.php';
					</script>
EOF;
				echo $succes;
		exit;

 	}

	$sql_category = "SELECT * FROM tbl_categories ORDER BY id ASC";
	$category_result = mysqli_query($connect, $sql_category);
	
	$sql_types = "SELECT * FROM tbl_types ORDER BY id ASC";
	$types_result = mysqli_query($connect, $sql_types);

?>

<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<!--tab start-->
	<div class="container-fluid full-width-container">
		<h1></h1>
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="dashboard.php">Главная</a></li>
		  <li class="active">Добавить услугу</li>
		</ol>
		<!--breadcrum end-->
	
		<div class="section"> 

			<form id="validationForm" method="post" enctype="multipart/form-data">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">

					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="lead">Добавить услугу</div>
						</div>
					</div>

					<div class="group-fields clearfix row">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="name" class="control-label">Название Услуги *</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Название услуги" required>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="day_speed" class="control-label">Скорость днем *</label>
								<input type="text" name="day_speed" id="day_speed" class="form-control" placeholder="50" required>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="night_speed" class="control-label">Скорость ночью *</label>
								<input type="number" name="night_speed" id="night_speed" class="form-control" placeholder="100" required>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">       
								<label>Категория *</label>
								<select class="select-with-search form-control pmd-select2" name="category" id="category">
									<?php while ($data2 = mysqli_fetch_array ($category_result)) { ?>
									<option value="<?php echo $data2['id'];?>"><?php echo $data2['category_name'];?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="cost_to_add" class="control-label">Стоимость подключения *</label>
								<input type="number" name="cost_to_add" id="cost_to_add" class="form-control" placeholder="1000" required>
							</div>
						</div>


						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">       
								<label>Тип *</label>
								<select class="select-with-search form-control pmd-select2" name="type" id="type">
									<?php while ($data3 = mysqli_fetch_array ($types_result)) { ?>
									<option value="<?php echo $data3['id'];?>"><?php echo $data3['type'];?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="price" class="control-label">Стоимость тарифа *</label>
								<input type="number" name="price" id="price" class="form-control" placeholder="199" required>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
							<label for="price" class="control-label">Турбокнопка *</label>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="turbo" id="turbo" value="0" checked>
											<label class="form-check-label" for="turbo">
												Нет
											</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="turbo" id="turbo" value="1" >
											<label class="form-check-label" for="turbo">
												Да
											</label>
									</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group pmd-textfield">
							<label for="price" class="control-label">Для пгт.Максаковка и м.Чов *</label>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="pgt" id="pgt" value="0" checked>
											<label class="form-check-label" for="pgt">
												Нет
											</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="pgt" id="pgt" value="1" >
											<label class="form-check-label" for="pgt">
												Да
											</label>
									</div>
							</div>
						</div>

						<div class="pmd-card-actions col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p align="right">
							<button type="submit" class="btn pmd-ripple-effect btn-danger" name="submit">Применить</button>
							</p>
						</div>						

						</div>

				</div>

			</div> <!-- section content end -->  
			</form>
		</div>
			
	</div><!-- tab end -->

</div><!--end content area