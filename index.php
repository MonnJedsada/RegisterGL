<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="120x120" href="Asset/picture/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="Asset/picture/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="Asset/picture/favicons/favicon-16x16.png">
<link rel="manifest" href="Asset/picture/favicons/site.webmanifest">
<link rel="mask-icon" href="Asset/picture/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


    <!-- Css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="Asset/css/style.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <title>Glory-Register</title>
</head>

<body>
    <!-- Add fixed-top in Nav class for fix tab menu -->
    <nav class="navbar navbar-expand-lg navbar-custom" style="background-color: #fef6e6;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Asset/picture/logo_top.png" width="100" height="80" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <a  style="color: #ff7f00;">Menu</a> <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color: #ff7f00; font-size:28px"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="#regispage">ลงทะเบียน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">ความเป็นมา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#map">แผนที่ตั้งบริษัท</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Asset/picture/home/kawebook_banner1.jpg" width="1180" height="800">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Asset/picture/home/kawebook_banner2.jpeg" width="1180" height="800">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Asset/picture/home/kawebook_banner3.jpg" width="1180" height="800">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <a name="regispage"></a>
    <header data-jarallax data-speed="0.2" class="page-title jarallax" style="background-image: url('Asset/picture/jalalax.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="display-4 font-weight-bold" style="color:#ff7f00">ลงทะเบียนร่วมสนุกกิจกรรมพิเศษ</h5>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Form Register -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> กรุณากรอกข้อมูล </h5>
                        <form method="post" action="setting/process.php">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>ชื่อ</label>
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>นามสกุล</label>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>เบอร์โทรติดต่อ</label>
                                    <input type="text" name="numphone" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>อีเมล์</label>
                                    <input type="text" name="e_mail" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>หมวดนิยายหรือการ์ตูนที่ชอบ</label>
                                    <select class="custom-select" type="text" name="detail">
                                        <option selected>กรุณาระบุหมวดนิยายหรือการ์ตูนที่ชอบ</option>
                                        <option value="แฟนตาซี">แฟนตาซี</option>
                                        <option value="ตลก">ตลก</option>
                                        <option value="ความรัก">ความรัก,ดราม่า</option>
                                        <option value="สายวาย">สายวาย</option>
                                        <option value="แอคชั่นกำลังภายใน">แอคชั่นกำลังภายใน</option>
                                        <option value="ย้อนยุค,อนาคต">ย้อนยุค,อนาคต</option>
                                        <option value="สืบสวนสอบสวนระทึกขวัญ">สืบสวนสอบสวนระทึกขวัญ</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="btn-submit" class="btn btn-primary d-block mx-auto">ลงทะเบียน</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Section header -->
    <a name="project"></a>
    <header data-jarallax data-speed="0.2" class="page-title jarallax bg-alpha" style="background-image: url('Asset/picture/jalalax.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="display-4 font-weight-bold" style="color:#ff7f00">ความเป็นมา</h5>
                    <br>
                    <h3 style="color:#ff7f00"><strong>Glory Forever Public Company Limited หรือ บมจ.รุ่งเรืองตลอดไป</strong> </h3>
                     <h4 style="color:#ff7f00">เป็นบริษัท Startup ที่ก่อตั้งในปี 2560 โดยเกิดจาก passion ที่มีต่อหนังสือ รวมถึงความหลงใหลในเทคโนโลยีของ <Strong> คุณจรัญพัฒณ์ บุญยัง </Strong> CEO รุ่นใหม่ มากความสามารถ จนได้พัฒนาเป็นแพลตฟอร์ม Kawebook (กวีบุ้ค) สำหรับ อ่าน-เขียนนิยาย การ์ตูน หนังสือออนไลน์ กลายเป็นแพลตฟอร์มน้องใหม่ที่เติบโตอย่างรวดเร็วจนเป็นที่จับตามอง</h4>
                </div>
            </div>
        </div>
    </header>


    <!-- owl carousal -->

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-body">
                        <iframe src="https://www.youtube.com/embed/osCnO35ByAc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" width="100%" height="700" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>


    <!-- map -->
    <a name="map"></a>
    <header data-jarallax data-speed="0.2" class="page-title jarallax" style="background-image: url('Asset/picture/jalalax.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="display-4 font-weight-bold" style="color:#ff7f00">แผนที่ตั้งบริษัท</h5>
                </div>
            </div>
        </div>
    </header>


    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1939.1650215106338!2d100.37707951377999!3d13.576636540890577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2b90b604923ef%3A0xc5dbdeae516b1d30!2zR2xvcnkgRm9yZXZlciBQdWJsaWMgQ29tcGFueSBMaW1pdGVkIFvguJrguKPguLTguKnguLHguJcg4Lij4Li44LmI4LiH4LmA4Lij4Li34Lit4LiH4LiV4Lil4Lit4LiU4LmE4LibIOC4iOC4s-C4geC4seC4lCAo4Lih4Lir4Liy4LiK4LiZKV0!5e0!3m2!1sth!2sth!4v1661761501444!5m2!1sth!2sth" width="100%" height="700" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footerเมนู -->
    <a name="contact"></a>
    <footer class="semi-footer p-5 text-center text-md-left">
        <div class="row">
            <div class="col-md-4">
                <a class="navbar-brand" href="#">
                    <img src="Asset/picture/logo_top.png" width="100" height="80" alt="">
                </a>
                <p>
                    <i class="fa-solid fa-square-phone"></i> 099-9999999 <br>
                    <i class="fa-solid fa-envelope"></i> email@kawebook.com <br>
                    <i class="fa-solid fa-address-card"></i> บริษัท รุ่งเรืองตลอดไป จำกัด (มหาชน 20 ม.6 ถ. พระราม 2 พันท้ายนรสิงห์ อำเภอเมืองสมุทรสาคร สมุทรสาคร 74000
                </p>
            </div>
            <div class="col-md-4">
                <h4>MENU</h4>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#regispage">ลงทะเบียน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">ความเป็นมา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#map">แผนที่ตั้งบริษัท</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Social Media</h3>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i class="fa-brands fa-line fa-2xl"></i>  LINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i class="fa-brands fa-facebook-square fa-2xl"></i>  FACEBOOK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i class="fa-brands fa-twitter fa-2xl"></i> TWITTER</a>
                    </li>
                </ul>
                <!-- <i class="fa-brands fa-line fa-2xl"></i><br>
            <i class="fa-brands fa-facebook-square fa-2xl"></i><br>
            <i class="fa-brands fa-twitter fa-2xl"></i> -->
            </div>

    </footer>

    </footer>
    <!-- Footerส่วนท้าย -->
    <footer class="endline" style="color:#ff7f00">
        <span >COPYRIGHT © 2022 <a href="#" target="_blank"></a></span>
        ALL Rights Reserved
    </footer>

    <!-- Section buttom to top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="Asset/js/main.js"></script>
</body>

</html>
