 <?php 
 session_start();
 error_reporting(1);
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
        <div style="  margin-left: 2%; margin-right: 2%" class="row chitiet">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <section class="background-container background-form" style="background-image: url('Images/baiviet.jpg')">
                        <div class="background-overlay"></div>
                        <div class="container">
                            <div class="text-inner-background">
                                <h1 class="color-white">T???o Tu???n Spa </h1>
                                <p   style="font-size: 25px;color: white; 
                                ">Ph????ng ch??m ch??? cung c???p c??c d??ng s???n ph???m Spa thu???n thi??n nhi??n, b???n ch???c ch???n s??? h??i l??ng v???i ch???t l?????ng c??ng c??ng hi???u tuy???t v???i t??? d??ng S???n ph???m Spa do Ng???c Anh Spa cung c???p </p>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="row wow bounceInUp"data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">

                    <div class=" col-sm-4  ">
                       <h2 style="margin-top: 117px;font-style: italic;color: #f60bce;font-weight: bold;font-size: 40px;">D???ch v??? <br>T???o Tuan Spa</h2>
                       <span class="beautypress-gradient-separetor"></span>
                       <br>
                       <p style="font-size: 16px;color: #607070;">H??y ?????n v???i T???o Tuan Spa ????? b???n ???????c ch??m s??c s???c kh???e v?? s???c ?????p nh?? m???t ch??nh kh??ch c???a Ho??ng Gia !</p> <br>
                       <a href="gioithieu.php"><button type="button" class="btn btn-danger">V??? Ch??ng T??i</button></a>
                   </div>
                   <div class="  col-sm-1  ">

                   </div>
                   <div class="  col-sm-7  ">
                    <div class="row">
                        <div class="  col-sm-6  ">
                            <img class="img-rounded"  src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/ngoc-anh-spa-u-trang.jpg" style="width: 315px;height: 340px;">
                        </div>
                        <div class="  col-sm-6  ">
                            <img class="img-rounded"  src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/ngoc-anh-spa.jpg" style="    width: 315px;height: 170px;"  >
                        </div>

                        <div class="  col-sm-6  ">
                            <img class="img-rounded"  src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/ngoc-anh-salon-hair-quan-3.jpg"style=" margin-top: 10px;width: 315px;height: 340px;"  >
                        </div>
                        <div class="  col-sm-6  ">
                            <img class="button" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/spa-cao-thang-tphcm-chat-luong.jpg"  style="  margin-top: -190px;  width: 315px;height: 170px;"  >

                        </div>
                    </div>
                </div>
                <div class="row">
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
                <div class="row">
                    <h2>C??c s???n ph???m th???nh h??nh hi???n nay!</h2>
                    <div class="  col-sm-6">
                        <div class="thumbnail" style="background: #e7ecec;">
                            <img src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-8.jpg" style="width: 500px;">
                            <div class="caption">
                                <a href="#" class="beautypress-service-title">BOTULIN EFFECT CREAM.</a>
                                <p>( KEM CH???NG L??O H??A ?????C TR??? C??C N???P NH??N BI???U HI???N TR??N KHU??N M???T)
                                    TH??NH PH???N : SNAP ??? 25 ANTAGONIST, HIBISKUS PEPTIDE, VITAMIN E, PUFA???
                                    C??NG D???NG:
                                    ??i???u tr??? t??ch c???c gi???m c??c n???p nh??n ?????ng .
                                    Cung c???p d?????ng ch???t, ch???ng oxy h??a .
                                    Cung c???p ???m s??u.
                                    T??ng c?????ng hi???u qu??? sau c??c th??? thu???t th???m m??? : ph???u thu???t c??n da m???t v?? c??? , n??ng c?? Rf, VENUS???
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="  col-sm-6">
                        <div class="thumbnail" style="background: #e7ecec;">

                            <img src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-2.jpg" style="width: 500px;">
                            <div class="caption">
                                <a href="#" class="beautypress-service-title"> EYE CREAM CH???NG NH??N V??NG M???T</a>
                                <p>(KEM D?????NG CH???NG NH??N V??NG M???T)
                                    TH??NH PH???N : ARGANIA SPINOSAT, DECAPEPTIDE ??? 4, ACETYL ??? TETRAPEPTIDE 9, PHOSPHOLIPIDS, SODIUM HYALURINATE.
                                    C??NG D???NG:
                                    Gi??m r??nh nh??n v??ng m???t .
                                    T??ng Collagen, gi??p da v??ng m???t s??n ch???c v?? t??ng ????? ????n h???i .
                                    Cung c???p ???m v?? gi??? ???m v??ng m???t .
                                    Da v??ng m???t c?? d???u hi???u l??o h??a do ??nh s??ng v?? th??i quen sinh ho???t.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="  col-sm-6">
                        <div class="thumbnail" style="background: #e7ecec;">
                            <img src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-7.jpg" style="width: 500px;">
                            <div class="caption">
                                <a href="#" class="beautypress-service-title">KEM   BAMBOO WHITENING AQUA</a>
                                <p>Bamboo Whitening Aqua v???i th??nh ph???n ch??nh l?? 3-mer EGF Peptide ???????c ph??t hi???n n??m 1986 b???i nh?? khoa h???c Stanley Cohen v???i gi???i th?????ng Nobel cho nghi??n c???u quan tr???ng.
                                 EGF l?? y???u t??? t??ng tr?????ng ????ng vai tr?? quan tr???ng trong vi???c ??i???u ti???t t??ng tr?????ng t??? b??o, s??? sinh s??i v?? ph??n b??o. EGF ho???t ?????ng b???ng c??ch g???n l??n b??? m???t t??? b??o, gi??p s???p x???p l???i t??? ch???c nh???m k??ch th??ch s???n xu???t n??ng l?????ng v?? t???ng h???p protein. EGF c?? ????? ho???t h??a v?? th???m th???u cao cho hi???u qu??? s??? d???ng ngay l???p t???c ch??? sau 1 l???n s??? d???ng.

                                 Dung t??ch: 150ml/chai.


                                 T??c d???ng:
                                 - Da c??ng b??ng, s??ng m???n.
                                 - T??i t???o da m???i, l??m m??? v???t th??m, ph???c h???i c??c t??? b??o b??? t???n th????ng.
                                 - Th??c ?????y da h???p th??? ch???t dinh d?????ng t???t h??n.
                                 - Th??c ?????y s???n sinh collagen v?? ch???ng oxy h??a, cho da ????n h???i v?? kh???e m???nh h??n.


                                 C??ch d??ng:
                             S??? d???ng nh?? s???n ph???m ch??m s??c da h??ng ng??y, ?????c bi???t ?????i v???i da v???a bong do ??i???u tr??? laser, l??n kim, thay da sinh h???c,???</p>
                         </div>
                     </div>
                 </div>
                 <div class="  col-sm-6">
                    <div class="thumbnail" style="background: #e7ecec;">
                        <img  src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-1.jpg"style="width: 500px;">
                        <div class="caption">
                            <a href="#" class="beautypress-service-title">SI??U PH???M KEM CELL FEED</a>
                            <p>Kem Cell Feed l?? si??u ph???m ?????c tr??? sau laser v???i nh???ng th??nh ph???n l?? nguy??n li???u c???u t???o t??? b??o v?? s???i collagen nh???m m???c ????ch t??i t???o da h?? t???n, cung c???p d?????ng ???m, k??ch th??ch s??? ph??t tri???n c???a t???  b??o v?? t??i c???u tr??c m??.
                               Kh??ng c?? b???t k??? ph???n ???ng ph??? n??o k??? c??? v???i da nh???y c???m, ch???a th??nh ph???n n???ng ????? peptide cao. Hi???u qu??? tr??? li???u tuy???t v???i ?????i v???i h???i ph???c, gi???m vi??m v?? t??i t???o da sau laser, l??n kim, peeling,???


                               Th??nh ph???n:
                               PEG-100, Palmitoyle sh-Tripeptide-4 Amide, d???u Olive, Polyacrylamide, C13-14 Isoparaffin, Sodium Hydroxide, Palimitcyle sh-Tripeptide-53 Amide, Arbutin.


                               C??ng d???ng:
                               - T??ng c?????ng s??? ????n h???i cho da.
                               - C???i thi???n l???p bi???u b?? c???a da b??? h?? t???n.
                           - T??i t???o ph???c h???i t???n th????ng m???t c??ch hi???u qu???.</p>
                       </div>
                   </div>
               </div>



           </div>
           <div class="row">
              <?php include('bottom.php'); ?>
          </div>
      </div>
      
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