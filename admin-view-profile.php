<?php include 'assets/header.php'; ?>

<body>

    <div class="modal fade score-history" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home"
                                aria-selected="true">ประวัติการสะสมแต้ม</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile"
                                aria-selected="false">ประวัติการแลกของรางวัล</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">วันที่</th>
                                        <th scope="col">ช่องทางทำรายการ</th>
                                        <th scope="col">Point</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="date">10/01/2566</td>
                                        <td>เติมเงิน 1,000 บาท</td>
                                        <td class="point-plus">+ 100 Point</td>
                                    </tr>
                                    <tr>
                                        <td class="date">10/01/2566</td>
                                        <td>เติมเงิน 1,000 บาท</td>
                                        <td class="point-plus">+ 100 Point</td>
                                    </tr>
                                    <tr>
                                        <td class="date">10/01/2566</td>
                                        <td>เติมเงิน 1,000 บาท</td>
                                        <td class="point-plus">+ 100 Point</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">วันที่</th>
                                        <th scope="col">ของรางวัล</th>
                                        <th scope="col">Point</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="date">10/01/2566</td>
                                        <td>Auntie Anne’s Original Pretzel 1 ชิ้น มูลค่า 35 บาท</td>
                                        <td class="point-less">- 12 Point</td>
                                    </tr>
                                    <tr>
                                        <td class="date">10/01/2566</td>
                                        <td>Auntie Anne’s Original Pretzel 1 ชิ้น มูลค่า 35 บาท</td>
                                        <td class="point-less">- 12 Point</td>
                                    </tr>
                                    <tr>
                                        <td class="date">10/01/2566</td>
                                        <td>Auntie Anne’s Original Pretzel 1 ชิ้น มูลค่า 35 บาท</td>
                                        <td class="point-less">- 12 Point</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>


    <div class="admin view-profile">
        <div class="menu-left">
            <div class="logo-admin">
                <img src="assets/img/logo-admin.png" alt="" srcset="">
            </div>
            <ul class="list-menu">
                <div class="list-item">
                    <i class="bi bi-house"></i>หน้าหลัก
                </div>
                <li class="list-item active"><i class="bi bi-person-fill"></i>ระบบบริหารจัดการข้อมูลสมาชิก</li>
                <li class="list-item"><i class="bi bi-arrow-left-right"></i>ระบบบริหารจัดการแต้มสะสม</li>
                <li class="list-item"><i class="bi bi-gift-fill"></i>ระบบบริหารจัดการของรางวัล</li>
                <li class="list-item"><i class="bi bi-shop"></i>ระบบบริหารจัดการการแลกของรางวัล</li>
                <li class="list-item"><i class="bi bi-card-text"></i>ระบบรายงาน</li>
                <li class="list-item"><i class="bi bi-grid-fill"></i>ระบบบริหารจัดการ</li>
            </ul>
        </div>

        <div class="menu-right">
            <div class="content">

                <div class="navbar-admin">
                    <span>Welcome , Admin 🙌</span>
                    <div class="wrap">
                        <img src="assets/img/user-admin.png" alt="" srcset="">
                        <span class="name">Admin </span>
                    </div>
                </div>


                <div class="title-content view-profile-cs">
                    <p>ระบบจัดการข้อมูลสมาชิก</p>
                    <span>/ ข้อมูลส่วนตัว</span>
                </div>

                <div class="wrap">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="information">
                                <p class="title">ข้อมูลสมาชิก</p>
                                <div class="detail">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <p class="head">ชื่อ</p>
                                            <p>หมิวหมิวหมิว</p>
                                            <p class="head">วันที่ลงทะเบียน</p>
                                            <p>10/01/2566</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <p class="head">นามสกุล</p>
                                            <p>นะจ๊ะนะ</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <p class="head">เบอร์โทร</p>
                                            <p>098-7654321</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="your-point">
                                <p>Your Point</p>
                                <div class="text-center">
                                    <span> 360 Point</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap-card">
                    <p class="title">ข้อมูลสมาชิก</p>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="image">
                                    <img src="assets/img/credit-card.png" class="w-100" alt="" srcset="">
                                </div>
                                <div class="history">
                                    <div class="list">
                                        <span class="item">ประวัติการสะสมแต้ม </span><button type="button"
                                            class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="bi bi-eye"></i></button>
                                    </div>
                                    <div class="list">
                                        <span class="item">ประวัติการสะสมแต้ม </span><button type="button"
                                            class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="bi bi-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="image">
                                    <img src="assets/img/esp.png" class="w-100" alt="" srcset="">
                                </div>
                                <div class="history">
                                    <div class="list">
                                        <span class="item">ประวัติการสะสมแต้ม </span><button type="button"
                                            class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="bi bi-eye"></i></button>
                                    </div>
                                    <div class="list">
                                        <span class="item">ประวัติการสะสมแต้ม </span><button type="button"
                                            class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="bi bi-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="image">
                                    <img src="assets/img/esp.png" class="w-100" alt="" srcset="">
                                </div>
                                <div class="history">
                                    <div class="list">
                                        <span class="item">ประวัติการสะสมแต้ม </span><button type="button"
                                            class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="bi bi-eye"></i></button>
                                    </div>
                                    <div class="list">
                                        <span class="item">ประวัติการสะสมแต้ม </span><button type="button"
                                            class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="bi bi-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

</body>

</html>