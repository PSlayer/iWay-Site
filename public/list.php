<?php include 'includes/config.php'; ?>
<?php 

// total_notifications
$sql_total_notifications = "SELECT COUNT(*) as num FROM tbl_notifications";
$total_notifications = mysqli_query($connect, $sql_total_notifications);
$total_notifications = mysqli_fetch_array($total_notifications);
$total_notifications = $total_notifications['num'];

// total_categories
$sql_total_categories = "SELECT COUNT(*) as num FROM tbl_categories";
$total_categories = mysqli_query($connect, $sql_total_categories);
$total_categories = mysqli_fetch_array($total_categories);
$total_categories = $total_categories['num'];

//take categories from database
$sql_category = "SELECT * FROM tbl_categories ORDER BY id ASC LIMIT 1,4";
$category_result = mysqli_query($connect, $sql_category);

$sql_services1 = "SELECT s.name, s.day_speed, s.night_speed, s.cost_to_add, t.type, s.price, s.pgt, s.turbo  FROM tbl_services s, tbl_types t WHERE s.type = t.id  AND s.category = 1 ORDER BY s.id ASC";
$services_result1 = mysqli_query($connect, $sql_services1);

$sql_services2 = "SELECT s.name, s.day_speed, s.night_speed, s.cost_to_add, t.type, s.price, s.pgt, s.turbo  FROM tbl_services s, tbl_types t WHERE s.type = t.id  AND s.category = 2 ORDER BY s.id ASC";
$services_result2 = mysqli_query($connect, $sql_services2);

$sql_notification = "SELECT n.id, n.name, n.descripdion, n.photo, n.date  FROM tbl_notifications n ORDER BY n.id DESC";
$services_notification = mysqli_query($connect, $sql_notification);

?>