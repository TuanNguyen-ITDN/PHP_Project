<?php


error_reporting(1);
session_start();

include("addcard.php"); 
include("connection_db.php");

if(isset($_GET["action"]))  
{  
if($_GET["action"] == "delete")  
{  
foreach($_SESSION["shopping_cart"] as $keys => $values)  
{  
if($values["item_id"] == $_GET["id"])  
{  
unset($_SESSION["shopping_cart"][$keys]);  
echo '<script>alert("Item Removed")</script>';  
echo '<script>window.location="viewcart.php?action=add&id.php"</script>';  
} 


}  
}  
}  





 


$sql = "INSERT INTO customer_order (id_product,cus_name,gender, phone,email,  address, date_excute, time_excute, money ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)";



if($stmt = $mysqli->prepare($sql)){

$stmt->bind_param("isssssssi",$id_product, $name_cus,  $gender, $phone,$email, $address, $date_excute , $time_excute ,$money);

$id_product =$_SESSION['id'];
$name_cus = $_POST['fullname'];
if ($_POST['gender'] == 'nam') {
$gender = 'nam';
}else{
$gender = 'nu';
}

$phone = $_POST['phone'];
$email = $_POST['email']; 
$address = $_POST['address'];
$date_excute = $_POST['date_excute'];
$time_excute = $_POST['time_excute'];
$money =  	$_SESSION['total'] ;


$stmt->execute();

} else{
echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}
 

$stmt->close();
$mysqli->close(); 


?>

<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<style type="text/css">
.wrapper{
width: 650px;
margin: 0 auto;
}
.page-header h2{
margin-top: 0;
}
table tr td:last-child a{
margin-right: 15px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
<link rel="stylesheet" type="text/css" href="animate/animate.css">
<script type="text/javascript" src="animate/wow.min.js"></script>

<script type="text/javascript">
new WOW().init();
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<meta charset="utf-8">
<body  style="background: #effcfa;">
<?php
require_once "top.php";

?>
<section class ="wapper">


<div class="container ">
<div style="  margin-left: 2%; margin-right: 2%" class="row chitiet">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="page-header">
	<center>
		<h4 class="modal-title" style="color: #f809db;font-weight: bold;font-size: 30px;">Gi??? H??ng </h4>
		<?php  print_r($values["item_price"]);?>
	</center>
</div>
</div>
<div class="row">
<div class="col-sm-12">
	<div class="progress  wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">
		<div class="progress-bar progress-bar-striped" role="progressbar" style="width:100%">
		</div>
	</div>
</div>
</div>
<div class="row">


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ttin">
	<table class="table table-bordered">  
		<tr>  
			<th width="10%">Product's id</th> 
			<th width="40%">Product's Name</th>   
			<th width="30%">Price</th>

			<th width="5%">Action</th>  
		</tr>  
		<?php   
		if(!empty($_SESSION["shopping_cart"]))  
		{  
			$total = 0;  
			foreach($_SESSION["shopping_cart"] as $keys => $values)  
			{  
				?>  
				<tr>  
					<td><?php echo $values["item_id"]; ?></td>  
					<td><?php echo $values["item_name"]; ?></td>   
					<td>$ <?php echo $values["item_price"]; ?></td> 


					<td><a href="viewcart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Delete</span></a></td>  
				</tr>  
				<?php  
				$total = $total +   $values["item_price"];  
			}  
			?>  
			<tr>  
				<td colspan="	2" align="left ">Total</td>  
				<td align="right"> <?php echo number_format($total); ?>??</td>  
				<td></td>  
			</tr> 
			<?php  
		}  
		?>  
	</table> 



	<a style="    margin-left: 932px;" href="home.php"  class="btn btn-danger">Keep buying </a> 


	<!-- <button type="button" class="btn btn-default"><a href="viewcart.php?action=insert&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Order</span></a></button>  -->

	<a  style=" float: right;   " class="btn btn-primary" data-toggle="modal" href='#order'>Order</a>

	<div class="modal fade" id="order">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="panel panel-success">
					<form action="viewcart.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="panel-heading">
							<div class="row">
								<CENTER ><h4 class="modal-title" style="color: #f809db;font-weight: bold;font-size: 30px;">Spa T???o Tu???n </h4> </CENTER>
							</div>
							<div class="row">
								<CENTER ><h4 class="modal-title" style="color: #f809db;font-weight: bold;font-size: 25px;">Xin K??nh Ch??o Qu?? Kh??ch !</h4> </CENTER>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<center><h3 class="panel-title" style="color: black;font-weight: bold;font-size: 25px;">H??a ????n Thanh To??n</h3></center><br>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>H??? v?? t??n :</h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="text" name="fullname" id="input" class="form-control" value="" required="required" title="" placeholder="H??? t??n">
								</div>

							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Gi???i t??nh:</h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<select name="gender" id="input" class="form-control" required="required"   >
										<option value="nam">Nam</option>
										<option value="nu">N???</option>

									</select>
								</div>

							</div>

							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>S??? ??i???n tho???i : </h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="number" name="phone" id="input" class="form-control" value="" required="required" title="" placeholder="S??? ??i???n tho???i">
								</div>

							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Email : </h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="email" name="email" id="input" class="form-control" value="" required="required" title="" placeholder="Email">
								</div>

							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>?????a ch??? : </h4>
								</div>
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<textarea name="address" id="input" class="form-control" rows="2" required="required"></textarea><br>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Ng??y Th???c Hi???n: </h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="date" class="form-control" value="<?php $date_excute = date("H:i", strtotime($row['time_excute'])); echo "$date_excute"; ?>" id="date_excute" name="date_excute" />
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><h4>Th???i gian: </h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="time" class="form-control" value="<?php $date = date("H:i", strtotime($row['time_excute'])); echo "$time_excute"; ?>" id="time_excute" name="time_excute" />
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4> C??c d???ch v???	 :</h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<?php   
									if(!empty($_SESSION["shopping_cart"]))  
									{  
										$total = 0;  
										foreach($_SESSION["shopping_cart"] as $keys => $values)  
										{  
											?>  
											<tr>  

												<td><?php echo $values["item_id"]; 
												echo $values["item_name"]; ?>    
												$ <?php echo $values["item_price"]; ?></td> 



											</tr>  
											<?php  
											$total = $total +   $values["item_price"];  
											$_SESSION['total'] = $total;
											$_SESSION['id'] =$values["item_id"];
										}  
										?>  

										<?php  
									}  
									?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>T???ng ti???n :</h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<h4 align="right"> <?php echo number_format($total); ?>  $</h4> 	 
								</div>
							</div>

							<div class="row">
								<center><h3 style="color: #f809db">C???m ??n q??y kh??ch ???? s??? d???ng d???ch v??? n??y!</h3></center>

							</div>

						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="" class="btn btn-danger">Printf</button>
					</div>
				</form>
			</div>
		</div>

	</div>


</div>
</div>
<div class="row">
<div class="col-sm-12">
	<br><br><div class="progress  wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">
		<div class="progress-bar progress-bar-success" role="progressbar" style="width:100%">
		</div>
	</div>
</div>

<div class="col-sm-12 ">
	<div class="  col-sm-12">
		<center><h2 style="color: #f809db;font-weight: bold;">B??i Vi???t Li??n Quan</h2><br></center>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">

	</div>
	<div class="  col-sm-8">
		<img class="wp-image-739 size-full aligncenter" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CH??M-S??C-DA-TH???I-?????C-CH??-06.jpg" alt="" width="650" height="207" srcset="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CH??M-S??C-DA-TH???I-?????C-CH??-06.jpg 650w, http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CH??M-S??C-DA-TH???I-?????C-CH??-06-300x96.jpg 300w, http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CH??M-S??C-DA-TH???I-?????C-CH??-06-600x191.jpg 600w" sizes="(max-width: 650px) 100vw, 650px" style="width: 700px;">
	</div>
	<div class="  col-sm-4">

	</div>
</div>
<div class=" col-sm-12 ">
	<br></br><p>Ch?? l?? m???t ch???t r???t ?????c h???i, qua th???i gian, ch?? b??? t??ch t??? trong c?? th??? v?? g??y ???nh h?????ng nghi??m tr???ng ?????n s???c kh???e v?? s???c ?????p c???a b???n. Ch?? c?? th??? ??i v??o c?? th??? qua ???????ng ??n u???ng v?? th???m th???u qua da khi b???n s??? d???ng nhi???u s???n ph???m trang ??i???m ch???a ch?? ho???c da m???t hay ti???p x??c nhi???u v???i kh??i, b???i ?? nhi???m ??? tr??n ???????ng. Ch?? t??ch t??? trong c?? th??? s??? g??y ra r???t nhi???u b???nh l?? nghi??m tr???ng nh?? ung th??, r???i lo???n ti??u h??a, da s???m ??en, th?? r??p.Do ????, vi???c h??t ch?? th???i ?????c t???, l??m s???ch s??u cho da l?? v?? c??ng c???n thi???t.</p>
</div>
</div>
<div class="row">
<div class="row  wow bounceInUp"  data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">
	<div class="  col-sm-12  ">
		<h2 id="cauhoi">T???i sao n??n ch???n T???o Tu???n Spa ?</h2></br>
		<div class="row">
			<?php 
			require('connection_db.php');
			$sql1 = "SELECT * FROM Products where status_id =6   limit 3, 10   ;";
			if($result1 = mysqli_query($mysqli, $sql1)){
				if(mysqli_num_rows($result1) > 0){
					while($row = mysqli_fetch_array($result1)){
						?>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
							<form method="post" action="gioithieu.php?id=<?php echo $row["id"]; ?>">
								<div class=" thumbnail hovereffect  "  >
									<a href="products/DetailProduct.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " ></a>
									<div class="overlay">
										<h2>Spa T???o Tu???n</h2>

										<a class="info" href="chitiet.php?id=<?php echo $row['id'] ?>" style="background: white;">Xem th??m</a>
										<a class="info" href="#" style="background: white;"><input class="info" type="submit" name="add_to_cart" style="background: white;"   value="Add to Cart" /></a>
									</div>  
									<div class="caption">
										<h4 style="color: red;"><center> <?php echo $row['prod_name']; ?></center></h4>
										<p>
											<center><h4 style="color: black"> <?php echo $row['new_price']; ?> ??
												<strike> <?php echo $row['old_price']; ?> ?? </strike> </h4></center>
											</p>
											<p>
												<input type="hidden" name="prod_name" value="<?php echo $row["prod_name"]; ?>" />  
												<input type="hidden" name="new_price" value="<?php echo $row["new_price"]; ?>" />  
											</p>
										</div>
									</div>
								</form>
							</div>
							<?php
						}
						mysqli_free_result($result1);
					}else{
						echo "<p class='lead'> No records were found. </p>";
					}
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
				}

				mysqli_close($mysqli);

				?>    

			</div>
		</div>
	</div>
</div>
<div class="row">
	<?php include('bottom.php'); ?>
</div>
</div>
</div><!-- container-fluid -->
</div>

</body>
<script>
function addCart(id)  
{  
$.ajax({  
url:"add_cart.php",  
method:"POST",  
data:{id:id, quantity:quantity}, 
dataType:"text",  
success:function(data){  
alert(data);
}  
});  
}

$(document).on('click','a[data-role=delete]',function(){
var id  = $(this).data('id');

addCart(id);  


});

</script>

</html>