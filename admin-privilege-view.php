<?php include 'assets/header.php'; ?>

<body>


    <div class="admin privilege-view">
        <div class="menu-left">
            <div class="logo-admin">
                <img src="assets/img/logo-admin.png" alt="" srcset="">
            </div>
            <ul class="list-menu">
                <div class="list-item">
                    <i class="bi bi-house"></i>หน้าหลัก
                </div>
                <li class="list-item "><i class="bi bi-person-fill"></i>ระบบบริหารจัดการข้อมูลสมาชิก</li>
                <li class="list-item active"><i class="bi bi-arrow-left-right"></i>ระบบบริหารจัดการแต้มสะสม</li>
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
                    <p>ระบบบริหารจัดการแต้มสะสม</p>
                    <span>/ รายระเอียด</span>
                </div>

                <div class="wrap">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="user">
                                <span class="title">ข้อมูลสมาชิก</span>
                                <div class="detail">
                                    <div class="list">
                                        <span>ชื่อ</span>
                                        <span>พี่น้ำ</span>
                                    </div>
                                    <div class="list">
                                        <span>นามสกุล</span>
                                        <span>หวาน</span>
                                    </div>
                                    <div class="list">
                                        <span>วันที่ลงทะเบียน</span>
                                        <span>10/01/2566</span>
                                    </div>
                                    <div class="list">
                                        <span>Card</span>
                                        <span>xxx-xxx-xxxxxx</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="privilege-manage">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">ปรับปรุง Point</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">ประวัติการปรับปรุง Point</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="wrap">
                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <div class="list">
                                                        <span>Adjust No</span>
                                                        <input type="email" class="form-control"
                                                            id="exampleFormControlInput1"
                                                            placeholder="name@example.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="list">
                                                        <span>Card</span>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Smart-Card</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <div class="list">
                                                        <span>จำนวนแต้มสะสมทั้งหมด</span>
                                                        <input type="email" class="form-control"
                                                            id="exampleFormControlInput1"
                                                            placeholder="name@example.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <div class="list">
                                                        <span>จำนวนแต้มคงเหลือ</span>
                                                        <input type="email" class="form-control"
                                                            id="exampleFormControlInput1"
                                                            placeholder="name@example.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <div class="list">
                                                        <span>ปรับปรุงแต้มจำนวน</span>
                                                        <input type="email" class="form-control"
                                                            id="exampleFormControlInput1"
                                                            placeholder="name@example.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                </div>
                                            </div>

                                            <div class="row mb-3 row-cs">
                                                <div class="col-lg-3">
                                                    <span class="">ปรับปรุงแต้มจำนวน</span>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            หักแล้วจากการ Redeem
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            ระบบไม่คำนวนแต้ม
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3 row-cs">
                                                <div class="col-lg-3">
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            เพิ่มแต้มจากเงื่อนไขพิเศษ
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 ">
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                อื่นๆ
                                                            </label>
                                                        </div>
                                                        <input type="email" class="form-control mx-2"
                                                            id="exampleFormControlInput1" placeholder="name@example.com"
                                                            fdprocessedid="ydpiyb">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3 row-cs">
                                                <div class="col-lg-3">
                                                    <span class="">หมายเหตุการปรับปรุง</span>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary ">ปิด</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade score-history" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
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

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>