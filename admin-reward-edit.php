<?php include 'assets/header.php'; ?>

<body>


    <div class="admin reward-edit">
        <div class="menu-left">
            <div class="logo-admin">
                <img src="assets/img/logo-admin.png" alt="" srcset="">
            </div>
            <ul class="list-menu">
                <div class="list-item">
                    <i class="bi bi-house"></i>หน้าหลัก
                </div>
                <li class="list-item"><i class="bi bi-person-fill"></i>ระบบบริหารจัดการข้อมูลสมาชิก</li>
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


                <div class="title-content">
                    <p>ระบบบริหารจัดการของรางวัล</p>

                    <div class="wrap">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title">
                                    <span>เพิ่มข้อมูลของรางวัล</span>
                                    <span>/ รายระเอียด</span>
                                </div>
                                <div class="insert-img">

                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-edit">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">ชื่อของรางวัล</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>

                                        <label for="exampleInputEmail1" class="form-label">รายละเอียด</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Comments</label>
                                        </div>
                                    </form>
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