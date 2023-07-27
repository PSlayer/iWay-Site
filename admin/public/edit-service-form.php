<?php

    include('public/sql-query.php');

	if (isset($_GET['id_e'])) {
 		$qry 	= "SELECT * FROM tbl_services WHERE id ='".$_GET['id_e']."'";
		$result = mysqli_query($connect, $qry);
		$row 	= mysqli_fetch_assoc($result);
 	}

	if(isset($_POST['submit'])) {

 
		$data = array(											 

			'name'  			=> $_POST['name'],
			'day_speed'  		=> $_POST['day_speed'],
			'night_speed'  		=> $_POST['night_speed'],
			'cost_to_add' 		=> $_POST['cost_to_add'],
            'type'				=> $_POST['type'],
            'price'				=> $_POST['price'],
            'category'  		=> $_POST['category'],
            'pgt'  				=> $_POST['pgt'],
            'turbo'  			=> $_POST['turbo']

		);	

			$hasil = Update('tbl_services', $data, "WHERE id = '".$_POST['id']."'");

			if ($hasil > 0) {
			//$_SESSION['msg'] = "";
		        $succes =<<<EOF
					<script>
					alert('Product successfully updated...');
					window.location = 'manage-services.php';
					</script>
EOF;
				echo $succes;
			exit;
			}

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
		  <li class="active">Редактирование услуги</li>
		</ol>
		<!--breadcrum end-->
	
		<div class="section"> 

			<form id="validationForm" method="post" enctype="multipart/form-data">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">

					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="lead">Редактирование услуги</div>
						</div>
					</div>

					<div class="group-fields clearfix row">

						
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="name" class="control-label">Название Услуги *</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Название услуги" value="<?php echo $row['name'];?>" required>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="day_speed" class="control-label">Скорость днем *</label>
								<input type="text" name="day_speed" id="day_speed" class="form-control" placeholder="50" value="<?php echo $row['day_speed'];?>" required>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="night_speed" class="control-label">Скорость ночью *</label>
								<input type="number" name="night_speed" id="night_speed" class="form-control" placeholder="100" value="<?php echo $row['night_speed'];?>" required>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">       
								<label>Категория *</label>
								<select class="select-with-search form-control pmd-select2" name="category" id="category">
									<?php															 
										while($r_c_row = mysqli_fetch_array($category_result)) {
										$sel = '';
										if ($r_c_row['id'] == $row['category']) {
											$sel = "selected";	
										}	
									?>
									<option value="<?php echo $r_c_row['id'];?>" <?php echo $sel; ?>><?php echo $r_c_row['category_name'];?></option>
									<?php }?>
								</select>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="cost_to_add" class="control-label">Стоимость подключения *</label>
								<input type="number" name="cost_to_add" id="cost_to_add" class="form-control" placeholder="1000" value="<?php echo $row['cost_to_add'];?>" required>
							</div>
						</div>


						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">       
								<label>Тип *</label>
								<select class="select-with-search form-control pmd-select2" name="type" id="type">
									<?php															 
										while($r_t_row = mysqli_fetch_array($types_result)) {
										$sel = '';
										if ($r_t_row['id'] == $row['type']) {
											$sel = "selected";	
										}	
									?>
									<option value="<?php echo $r_t_row['id'];?>" <?php echo $sel; ?>><?php echo $r_t_row['type'];?></option>
									<?php }?>
								</select>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="price" class="control-label">Стоимость тарифа *</label>
								<input type="number" name="price" id="price" class="form-control" placeholder="199" value="<?php echo $row['price'];?>" required>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
							<label for="price" class="control-label">Турбокнопка *</label>
									<?php						
										$tur = '';
										$tur1 = '';
										
										if ($row['turbo'] == 1) {
											$tur = "checked";	
										}
										else {$tur1 = "checked";}	
									?>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="turbo" id="turbo" value="0" <?php echo $tur1; ?> >
											<label class="form-check-label" for="turbo">
												Нет
											</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="turbo" id="turbo" value="1" <?php echo $tur; ?> >
											<label class="form-check-label" for="turbo">
												Да
											</label>
									</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group pmd-textfield">
							<label for="price" class="control-label">Для пгт.Максаковка и м.Чов *</label>
									<?php						
										$pgt1 = '';
										$pgt2 = '';
										
										if ($row['pgt'] == 1) {
											$pgt1 = "checked";	
										}
										else {$pgt2 = "checked";}	
									?>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="pgt" id="pgt" value="0" <?php echo $pgt2; ?>>
											<label class="form-check-label" for="pgt">
												Нет
											</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="pgt" id="pgt" value="1" <?php echo $pgt1; ?>>
											<label class="form-check-label" for="pgt">
												Да
											</label>
									</div>
							</div>
						</div>
						<input type="hidden" name="id" value="<?php echo $row['id'];?>">

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