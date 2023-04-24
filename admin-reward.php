<?php include 'assets/header.php'; ?>


<style>
    tr {
        vertical-align: middle;
    }
</style>

<body>


    <div class="admin">
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
                    <p>ระบบจัดการข้อมูลสมาชิก</p>
                </div>

                <div class="filter-admin">
                    <div class="left">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <button type="button" class="btn btn-dark"><i class="bi bi-search"></i>ค้นหา</button>
                    </div>

                    <div class="right">
                        <p>สถานะ</p>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ทั้งหมด
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-admin mt-3">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">NO.</th>
                                <th scope="col">รูปภาพ</th>
                                <th scope="col">ชื่อรางวัล</th>
                                <th scope="col">รายละเอียด</th>
                                <th scope="col">Point</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="assets/img/cheese.png" class="w-100" alt=""></td>
                                <td>Auntie Anne’s Original Pretzel</td>
                                <td>ใช้ 300 คะแนน แลก 1 ชิ้น มูลค่า 35 บาท</td>
                                <td class="point">300</td>
                                <td>
                                    <a href="" class="btn btn-success"><i class="bi bi-pen"></i>Edit</a>
                                    <button type="button" class="btn btn-danger"><i
                                            class="bi bi-eye"></i>Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td><img src="assets/img/cheese.png" class="w-100" alt=""></td>
                                <td>Auntie Anne’s Original Pretzel</td>
                                <td>ใช้ 300 คะแนน แลก 1 ชิ้น มูลค่า 35 บาท</td>
                                <td class="point">300</td>
                                <td>
                                    <a href="" class="btn btn-success"><i class="bi bi-pen"></i>Edit</a>
                                    <button type="button" class="btn btn-danger"><i
                                            class="bi bi-eye"></i>Delete</button>
                                </td>
                            </tr>
                          
                          

                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">

                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</body>

</html>