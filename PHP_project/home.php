<?php
include("addcard.php"); 
include("connection_db.php");
session_start(); 


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>


  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="swiper-master/dist/css/swiper.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript"></script>
  <script type="text/javascript" src="JS/script.js"></script>
  <meta name="Viewport" content="width=device-width.initial-scale=1">
  <meta http-equiv="X-UA-compatible" content="IE=edge"> 
  <link rel="stylesheet" type="text/css" href="animate/animate.css">
  <script type="text/javascript" src="animate/wow.min.js"></script>

  <script type="text/javascript">
    new WOW().init();
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<meta charset="utf-8">
</head>

<body  style="background: #effcfa;">
  <?php
  require_once "top.php";
  ?>
  <div id="wapper">

    <form method="post" action="chitiet.php?id=<?php echo $row["id"]; ?>">
      <div class="container ">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">

                        <div class="carousel-caption">
                            <h1>D???ch V??? Spa T???o Tuan</h1>
                            <p id="chuslide">H??y ?????n v???i T???o Tu???n Spa ????? ???????c ch??m s??c s???c kh???e nh?? m???t ch??nh kh??ch c???a ho??ng gia</p>
                        </div> 
                        <iframe style="width:100%;height: 395px" src="https://www.youtube.com/embed/PsiDTMgIWXI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="item">
                        <img src="Images/face.jpg" alt="New york" style="width:100%;height: 400px">
                        <div class="carousel-caption">
                            <h1>D???ch V??? Spa T???o Tu???n</h1>
                            <p id="chuslide">Cung c???p c??c s???n ph???m v?? ch???t l?????ng ph???c v??? t???t nh???t</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Xem th??m</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="Images/skinface.jpg" alt="New york" style="width:100%;height: 400px;">
                        <div class="carousel-caption">
                            <h1>D???ch V??? Spa T???o Tu???n</h1>
                            <p id="chuslide">?????m b???o ?????t chu???n n??m sao qu???c t??? v???i c??c chuy??n gia h??ng ?????u th??? gi???i</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Xem th??m</a></p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Tr?????c</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Sau</span>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <!-- start features Area --> 
                <section class="features-area section_gap">
                    <div class="container">
                        <div class="row features-inner">
                            <!-- single features -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                             <div class="single-features">
                                 <div class="f-icon">
                                    <img src="Images/features/f-icon1.png" alt="" style=" margin-left: 113px;margin-top: 30px;">
                                </div>
                                <h6 style="text-align: center;">Free Delivery</h6>
                                <p style="text-align: center;">Free Shipping on all order</p>
                            </div>
                        </div>
                        <!-- single features -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-features">
                                <div class="f-icon">
                                    <img src="Images/features/f-icon2.png" alt="" style=" margin-left: 113px;margin-top: 30px;">
                                </div>
                                <h6 style="text-align: center;">Return Policy</h6>
                                <p style="text-align: center;"> Free Shipping on all order</p>
                            </div>
                        </div>
                        <!-- single features -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-features">
                                <div class="f-icon">
                                    <img src="Images/features/f-icon3.png" alt="" style=" margin-left: 113px;margin-top: 30px;">
                                </div>
                                <h6 style="text-align: center;">24/7 Support</h6>
                                <p style="text-align: center;">Free Shipping on all order</p>
                            </div>
                        </div>
                        <!-- single features -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-features">
                                <div class="f-icon">
                                    <img src="Images/features/f-icon4.png" alt="" style="margin-left: 113px;margin-top: 30px;">
                                </div>
                                <h6 style="text-align: center;">Secure Payment</h6>
                                <p style="text-align: center;">Free Shipping on all order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <center style="color: red ;"><h1> C??c d???ch v??? n???i b???t</h1></center>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php 
            require('connection_db.php');
            $sql1 = "SELECT * FROM Products where category_id =5   limit 3   ;";
            if($result1 = mysqli_query($mysqli, $sql1)){
                if(mysqli_num_rows($result1) > 0){
                    while($row = mysqli_fetch_array($result1)){
                        ?>
                        <div class="col-sm-4">
                            <form method="post" action="home.php?id=<?php echo $row["id"]; ?>">
                                <div class=" thumbnail hovereffect  "  >
                                    <a href="chitiet.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " ></a>
                                    <div class="overlay">
                                        <h2>Spa T???o Tu???n</h2>

                                        <a class="info" href="chitiet.php?id=<?php echo $row['id'] ?>" style="background: white;">Xem th??m</a>

                                        <a class="info" href="#" style="background: white;"><input  class="info" type="submit" name="add_to_cart" style="background: white;"   value="Add to Cart" /></a>



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

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
                <a href="#">T???o Tu???n Spa</a>
            </div>
            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
                <a href="#">Ch???t l?????ng</a>
            </div>
            <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
                <a href="#">Nhi???t t??nh</a>
            </div>
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="100" style="width:20%">
            <a href="#">Nhi???u ??u ????i</a>
        </div>
    </div>

    <br>







    <div class="  col-xs-12 col-sm-12 col-md-12 col-lg-12   wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1" style="background-color: #e3ecec">
        <div class="row">
            <div class="  col-xs-2 col-sm-2 col-md-2 col-lg-1  ">
            </div>
            <?php 
            require('connection_db.php');
            $sql1 = "SELECT * FROM Products  where id = 4   ;";
            if($result1 = mysqli_query($mysqli, $sql1)){
                if(mysqli_num_rows($result1) > 0){
                    while($row = mysqli_fetch_array($result1)){
                     ?>
                     <div class="col-xs-9   col-sm-9 col-md-9   col-lg-6   ">
                        <a href="chitiet.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " width="400" height="400" ></a>
                    </div>
                    <div class="  col-xs-12 col-sm-12 col-md-12 col-lg-5  ">
                        <h2 sty le="color: black; font-weight: bold;"><?php echo $row['prod_name']; ?></h2>   
                        <h4 style="color: #4d4748;"><?php echo $row['description']; ?></h4> 
                        <h4 id="mauchu"></h4>
                        <p  id="mauchu"><span class="cacgoi">+ G??i 1 : U???n (Setting / l???nh/ u???n cup ph???ng/ u???n g???n to ) + c???t, g???i, s???y t???o ki???u.</span></p>
                        <p  id="mauchu"><span class="cacgoi">+ G??i 2: Du???i (C??p/ th???ng/ t??? nhi??n) + c???t + g???i + s???y t???o ki???u</span></p> 
                        <p id="mauchu"><span class="cacgoi">+ G??i 3: Nhu???m (m??u t??? nhi??n/ m??u th???i trang/ m??u phong th???y) + c???t + g???i + s???y t???o ki???u</span></p> 
                        <p id="mauchu"><span class="cacgoi">+ G??i 4: Ph???c h???i + c???t + g???i + s???y t???o ki???u</span></p>
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




<div class="  col-md-12   wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1" style="margin-top: 30px;margin-bottom: 30px;" >
    <div class="row">
<!--  <div class="  col-sm-1  ">
</div> -->
<div class=" col-xs-5 col-sm-5 col-md-5 col-lg-6   ">
    <h2 style="color: #f809db;font-weight: bold;">S???n ph???m Spa T???o Tu???n</h2>
    <h2 style="color: black;font-weight: bold;">Thu???n thi??n nhi??n</h2>
    <p>H??y l???a ch???n ngay nh???ng s???n ph???m Spa cao c???p sau ????y ????? ch??m s??c s???c kh???e v?? s???c ?????p to??n di???n nh???t .</p>
    <p></p></br>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            Ch???t L?????ng  <p class="glyphicon glyphicon-ok"></p>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            Ph?? H???p <p class="glyphicon glyphicon-ok"></p>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            Tr??ch Nhi???m  <p class="glyphicon glyphicon-ok"> </p>
        </div>
    </div>
</div>
<div class="  col-sm-5  ">
    <img  class="img-rounded" width="350" height="300" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-9-1024x683.jpg" style=" "><br><br><br><br>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
            <a href="#">T???o Tu???n Spa</a>
        </div>
        <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
            <a href="#">Ch???t l?????ng</a>
        </div>
        <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
            <a href="#">Nhi???t t??nh</a>
        </div>
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
        aria-valuemin="0" aria-valuemax="100" style="width:20%">
        <a href="#">Nhi???u ??u ????i</a>
    </div>
</div>
</div>
<div class="row">
    <h2 style="text-align: center;color: #F216F5 ">T???o Tu???n Hair & Spa
    </h2> 
    <h1 style="text-align: center;color: #020002; font-weight: bold;">G??i ??u ????i th??ng 11/2018
    </h1>
</div>
</br>
<div class="row">
    <div class="swiper-container swiper-container-horizontal swiper-container-free-mode ">

        <!-- slider s???n ph???m -->
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-20px, 0px, 0px);">
            <?php 
            require('connection_db.php');
            $sql1 = "SELECT * FROM Products where status_id =5;";
            if($result1 = mysqli_query($mysqli, $sql1)){
                if(mysqli_num_rows($result1) > 0){
                 while($row = mysqli_fetch_array($result1)){
                    ?>

                    <div class="swiper-slide">
                        <form method="post" action="home.php?id=<?php echo $row["id"]; ?>">
                            <div class="hovereffect  " data-wow-duration="1s" data-wow-delay="1s" data-wow-interaion="5">
                                <a href="viewcart.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " ></a>
                                <div class="overlay">
                                    <h2>??u ????i</h2>
                                    <a class="info" href="chitiet.php?id=<?php echo $row['id'] ?>" style="background: white;">Chi ti???t</a>
                                    <a class="info" href="#" style="background: white;"><input  class="info" type="submit" name="add_to_cart" style="background: white;"   value="Add to Cart" /></a>


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
<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">   
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span>
</div>

</div>
<div class="row">
  <?php include('bottom.php'); ?>
</div>
</div>
<script src="swiper-master/dist/js/swiper.min.js"></script>
<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
<script src="swiper-master/dist/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
<!-- Facebook comment -->









</form>



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