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
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center mt-5">Đăng ký</h2>
                    <form action="dangkydv1.php" method="post">
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="ngayhen">Ngày hẹn:</label>
                            <input type="date" class="form-control" id="ngayhen" name="ngayhen" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<section class="news">
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
            </div>
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