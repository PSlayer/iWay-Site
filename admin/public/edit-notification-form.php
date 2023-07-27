<?php

    include('public/sql-query.php');

	if (isset($_GET['not_id'])) {
 		$qry 	= "SELECT * FROM tbl_notifications WHERE id ='".$_GET['not_id']."'";
		$result = mysqli_query($connect, $qry);
		$row 	= mysqli_fetch_assoc($result);
 	}

	if(isset($_POST['submit'])) {

		if ($_FILES['photo']['name'] != '') {
			unlink('upload/notification/'.$_POST['old_image']);
			$product_image = time().'_'.$_FILES['photo']['name'];
			$pic2 = $_FILES['photo']['tmp_name'];
   			$tpath2 = 'upload/notification/'.$product_image;
			copy($pic2, $tpath2);
		} else {
			$product_image = $_POST['old_image'];
		}
 
		$data = array(											 

			'id'  				=> $_POST['id'],
			'name'  			=> $_POST['name'],
			'descripdion'  		=> $_POST['descripdion'],
			'photo' 			=> $product_image,
            'date'				=> $_POST['date'],

		);	

			$hasil = Update('tbl_notifications', $data, "WHERE id = '".$_POST['id']."'");

			if ($hasil > 0) {
			//$_SESSION['msg'] = "";
		        $succes =<<<EOF
					<script>
					alert('Product successfully updated...');
					window.location = 'manage-notification.php';
					</script>
EOF;
				echo $succes;
			exit;
			}

	}


?>

<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<!--tab start-->
	<div class="container-fluid full-width-container">
		<h1></h1>
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="dashboard.php">Главная</a></li>
		  <li class="active">Редактирование новости</li>
		</ol>
		<!--breadcrum end-->
	
		<div class="section"> 

			<form id="validationForm" method="post" enctype="multipart/form-data">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">

					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="lead">Редактирование новости</div>
						</div>
					</div>

					<div class="group-fields clearfix row">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="name" class="control-label">Название новости *</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Название новости" value="<?php echo $row['name'];?>" required>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield">
								<label class="control-label">Описание новости *</label>
  								<textarea required class="form-control" name="descripdion"><?php echo $row['descripdion'];?></textarea>
  								<script>                             
									CKEDITOR.replace( 'descripdion' );
								</script>	
							</div>
						</div>


						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="photo" class="control-label">Изображение ( jpg / png ) *</label>
								<input type="file" name="photo" id="photo"  class="dropify-image" data-max-file-size="1M" data-allowed-file-extensions="jpg jpeg png gif" data-default-file="upload/notification/<?php echo $row['photo'];?>" data-show-remove="false" />
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group pmd-textfield">
								<label for="date" class="control-label">Дата *</label>
								<input type="text" name="date" id="date" class="form-control" placeholder="2023-12-31" value="<?php echo $row['date'];?>" required>
							</div>
						</div>

						<input type="hidden" name="old_image" value="<?php echo $row['photo'];?>">
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