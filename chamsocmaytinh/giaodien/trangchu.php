<?php

?>
<!DOCTYPE html>
<html>

<head>
   <title>Chăm sóc máy tính</title>
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
   <header>
      <section class="header">
         <div class="top-header">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-3">
                     <div class="logo">
                        <img src="../image/logo.png" />
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="search">
                        <form class="form-inline justify-content-center row">
                           <div class="form-search col-10">
                              <input class="form-control w-100" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-search p-o" type="submit">
                                 <i class="fa fa-search" aria-hidden="true"></i>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="contact">
                        <h4>
                           Hotline hỗ trợ
                        </h4>
                        <h5>
                           0348363413 - 0893421414
                        </h5>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <button class="btn btn-cart">
                        <i class="fa fa-cart-plus mr-2" aria-hidden="true"></i>
                        <span>Đơn hàng </span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <div class="menu-wrapper">
            <div class="container">
               <nav class="navbar navbar-expand-lg p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="trangchu.php">Trang chủ<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dịch vụ
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./Dichvu.php">Sửa chữa và Bảo dưỡng</a>
                              <a class="dropdown-item" href="#">Diệt virus và Bảo mật</a>
                              <a class="dropdown-item" href="#">Sao lưu và Khôi phục dữ liệu</a>
                              <a class="dropdown-item" href="#">Tối ưu hóa Hiệu suất </a>
                              <a class="dropdown-item" href="#">Hỗ trợ Kỹ thuật từ xa </a>
                              <a class="dropdown-item" href="#">Tư vấn Mua sắm và Nâng cấp</a>
                           </div>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="./baohanh.php">
                              Chính sách Bảo hành
                           </a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              Giới thiệu
                           </a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </section>
   </header>
   <div class="main-wrapper">
      <section class="banner-wrapper">
         <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
               <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="../image/banner.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="../image/banner_2.jpg" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="../image/banner_3.jpg" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                  </div>
               </div>
            </div>
         </div>
   </div>
   </div>


   <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
   </div>
   </section>

   <section class="banner-01">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="box-item">
                  <div class="left">
                     <i class="fa fa-wrench" aria-hidden="true"></i>
                  </div>
                  <div class="right">
                     <h2>
                        Sửa Chữa Các Dòng Laptop
                     </h2>
                     <p class="mb-0">
                        Thay Linh kiện Laptop
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box-item">
                  <div class="left">
                     <i class="fa fa-handshake-o" aria-hidden="true"></i>
                  </div>
                  <div class="right">
                     <h2>
                        Bảo Hành Chuyên Nghiệp
                     </h2>
                     <p class="mb-0">
                        Đảm Bảo Uy Tín Và Chất Lượng
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box-item">
                  <div class="left">
                     <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                  </div>
                  <div class="right">
                     <h2>
                        Chất Lượng Đảm Bảo
                     </h2>
                     <p class="mb-0">
                        Luôn Cập Nhập Mẫu Mới - Giá Thành Hợp Lý
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="product-highlights">
      <h3 class="title-page">
         DÒNG SẢN PHẨM NỔI BẬT
      </h3>
      <div class="container">
         <div class="list-box row">
            <div class="col-md-4">
               <div class="box-item">
                  <div class="img-box">
                     <img src="../image/ki_thuat.jpg">
                  </div>
                  <div class="content-box">
                     <h4>
                        <a href="">
                           Đội Ngũ Chuyên Nghiệp
                        </a>
                     </h4>
                     <p class="mb-0">
                        Đội Ngũ chuyên viên dày dặn kinh nghiệm</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box-item">
                  <div class="img-box">
                     <img src="../image/linh_kien.png">
                  </div>
                  <div class="content-box">
                     <h4>
                        <a href="">
                           HỆ THỐNG SỬA CHỮA LAPTOP
                        </a>
                     </h4>
                     <p class="mb-0">
                        Linh Kiện Mới Chính Hãng, Zin 100%, Bảo Hành Dài Hạn Từ 12- 36 Tháng, 1 đổi 1 Trong Suốt Thời Gian Bảo Hành. </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box-item">
                  <div class="img-box">
                     <img src="../image/thiet_bi.jpg">
                  </div>
                  <div class="content-box">
                     <h4>
                        <a href="">
                           Trang Bị Thiết Bị Hiện Đại
                        </a>
                     </h4>
                     <p class="mb-0">
                        Quy trình sửa chữa chuyên nghiệp</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="news">
      <h3 class="title-page">
         DỊCH VỤ
      </h3>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <h3 class="title-news">
                  BẢO DƯỠNG
               </h3>
               <article>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/bao_duong_may.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Bảo dưỡng máy </a>
                        </h5>
                        <p class="mb-0">
                           Bảo dưỡng máy tính định kỳ giúp duy trì hiệu suất và tuổi thọ của hệ thống. </p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/bao_duong_2.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Kiểm tra và làm sạch ổ đĩa cứng </a>
                        </h5>
                        <p class="mb-0">
                           Sử dụng công cụ như Disk Cleanup để làm sạch các tập tin tạm thời, rác, và các tập tin không cần thiết khác trên ổ đĩa C. </p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/bao_duong_3.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Kiểm tra tình trạng phần cứng </a>
                        </h5>
                        <p class="mb-0">
                           Kiểm tra nhiệt độ của CPU và GPU và đảm bảo chúng không quá nóng </p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/bao_duong_4.png">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Kiểm tra và bảo mật hệ thống </a>
                        </h5>
                        <p class="mb-0">
                           Cập nhật và quét hệ thống với phần mềm diệt virus và malware
                           Đảm bảo tường lửa và các tính năng bảo mật khác đang hoạt động đúng cách. </p>
                     </div>
                  </div>
               </article>

            </div>
            <div class="col-md-4">
               <h3 class="title-news">
                  NÂNG CẤP MÁY
               </h3>
               <article>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/o_cung.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Ổ cứng mới chính hãng, zin 100%.
                           </a>
                        </h5>
                        <p class="mb-0">
                           Bảo hành lên đến 365 ngày
                           1 đổi 1 trong thời gian bảo hành.</p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/nang-cap-ram.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Nâng cấp Ram
                           </a>
                        </h5>
                        <p class="mb-0">
                           Bảo hành lên đến 365 ngày
                           1 đổi 1 trong thời gian bảo hành.</p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/nang-cap-cpu.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Nâng cấp CPU
                           </a>
                        </h5>
                        <p class="mb-0">
                           Bảo hành lên đến 365 ngày
                           1 đổi 1 trong thời gian bảo hành. </p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/nang-cap-win.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Nâng cấp windown
                           </a>
                        </h5>
                        <p class="mb-0">
                           giúp cho máy tính, laptop của bạn chạy mượt mà và nhiều tính năng hơn. Khi bạn tiến hành cập nhật, bạn sẽ được nhận các bản sửa lỗi và bản cải tiến bảo mật mới nhất để thiết bị của bạn luôn được bảo vệ. </p>
                     </div>
                  </div>
               </article>

            </div>
            <div class="col-md-4">
               <h3 class="title-news">
                  VỆ SINH MÁY-SỬA LỖI
               </h3>
               <article>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/phan-mem-diet-virus.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Diệt virus máy tính</a>
                        </h5>
                        <p class="mb-0">
                           Loại bỏ virus bảo vệ máy an toàn </p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/ve_sinh_may_tinh.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Vệ sinh máy</a>
                        </h5>
                        <p class="mb-0">
                           Loại bỏ bụi bẩn và tạp chất giúp máy làm việc hiệu quả hơn. </p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/thay-pin.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Thay pin chính hãng
                           </a>
                        </h5>
                        <p class="mb-0">
                           pin không còn khả năng hoạt động tốt, có thể gây ảnh hưởng không nhỏ đến chiếc laptop bạn đang sử dụng. </p>
                     </div>
                  </div>
                  <div class="row item-news">
                     <div class="col-md-5 pr-0">
                        <div class="thumnail-news h-100">
                           <a href="">
                              <img src="../image/treo_may.jpeg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 right">
                        <h5>

                           Sửa lỗi treo máy</a>
                        </h5>
                        <p class="mb-0">
                           Sử dụng máy tính, laptop trong thời gian dài sẽ không thể tránh khỏi trường hợp máy vi tính bị đơ, treo máy hay chạy chậm khiến công việc bị đình trệ. </p>
                     </div>
                  </div>
               </article>

            </div>
         </div>
      </div>
   </section>
   </div>
   </div>
   <footer>
      <div class="container">
         <div class="row contact">
            <div class="col-md-3">
               <h4>Hỗ Trợ Khách Hàng</h4>
               <ul>
                  <li><a href="">Hướng dẫn Thanhh Toán</a>
                  <li>Chính Sách Bảo Hành</li>
                  <li>Chính Sách Bảo Mật</li>
               </ul>
            </div>
            <div class="col-md-3">
               <h4>Về Chúng Tôi</h4>
               <ul>
                  <li>Giới Thiệu</li>
                  <li>Dịch Vụ </li>
                  <li>Tuyển Dụng</li>
                  <li>Sơ Đồ Chỉ Đường</li>
                  <li>Chăm Sóc Khách Hàng</li>
               </ul>
            </div>
            <div class="col-md-3">
               <h4>Quy định và chính sách</h4>
               <ul>
                  <li>Chính sách và quy định chung</li>
                  <li>Chính sách bảo hành </li>
                  <li>Chính sách bảo mật thông tin</li>
                  <li>Quy định và hình thức thanh toán</li>

               </ul>
            </div>
            <div class="col-md-3 p-0">
               <h4>Vị trí cửa hàng</h4>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8670507994925!2d105.74328887379752!3d21.03800498746385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454962c0b6523%3A0x5c76c67564d9d1b9!2zUC4gVHLhu4tuaCBWxINuIELDtCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1705582812396!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
         <div class="row address-store">
            <div class="col-md-4">
               <h4>
                  <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                  HỆ THỐNG CỬA HÀNG
               </h4>
               <ul>
                  <li>Địa chỉ: Trịnh Văn Bô-Hà Nội</li>
                  <li>Hotline: 097864324</li>
                  <li>Email: Chamsocmaytinh.vn@gmail.com</li>
               </ul>
            </div>
            <div class="col-md-4">
               <h4>
                  <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                  HỆ THỐNG CỬA HÀNG
               </h4>
               <ul>
                  <li>Địa chỉ: Lê Chân-Hải Phòng</li>
                  <li>Hotline: 0877923842</li>
                  <li>Email: Chamsocmaytinh.vn@gmail.com</li>
               </ul>
            </div>
            <div class="col-md-4">
               <h4>
                  <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                  HỆ THỐNG CỬA HÀNG
               </h4>
               <ul>
                  <li>Địa chỉ: Từ Sơn-Bắc Ninh</li>
                  <li>Hotline: 0988634328</li>
                  <li>Email: Chamsocmaytinh.vn@gmail.com</li>
               </ul>
            </div>
            <div class="col-md-4">
            </div>

   </footer>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/fontawesome.min.js" type="text/javascript"></script>
<script type="text/javascript">
   $('.carousel').carousel({
      interval: 2000
   })
</script>

</html>