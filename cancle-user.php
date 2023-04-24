<?php include 'assets/header.php'; ?>

<body>


    <div class="modal fade modal-cn-user" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="img">
                        <img src="assets/img/warning-fill.png" alt="" srcset="">
                    </div>
                    <p>ยืนยันการยกเลิกการเชื่อมต่อระบบสะสมแต้ม</p>
                    <div class="mt-3">
                        <a href="login.php"><button type="button" class="btn btn-login" data-bs-dismiss="modal">ใช่</button>
                            <a href="user-information.php"><button type="button" class="btn btn-light" data-bs-dismiss="modal">ไม่ใช่</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cancle-user">
        <div class="container-fluid">
            <div class="wrap">
                <div class="navbar-search">
                    <div class="group">
                        <a href="user-information.php">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                        <span>
                            ยกเลิกการเชื่อมต่อระบบสะสมแต้ม
                        </span>
                        <span></span>
                    </div>

                </div>

                <div class="detail">
                    <div class="img">
                        <img src="assets/img/cancle-user.png" alt="" srcset="">
                    </div>
                    <div class="wrap">
                        <p class="title">คำอธิบายยกเลิกการใช้งานสมาชิก</p>
                        <p class="short">การยกเลิกการเชื่อมต่อการใช้งานสมาชิกของ Easy pass</p>
                        <div class="box">
                            <span class="textcs">“</span><span>บัญชีผู้ใช้จะไม่สามารถเช็คแต้ม สะสมแต้ม ดูสิทธิพิเศษและ
                                แลกใช้สิทธิพิเศษได้
                                แต่ยังสามารถรับข่าวสามารถได้ผ่านทาง Easy Pass LINE Official Account</span><span class="textcs">“</span>
                        </div>
                        <div class="list">
                            <ul>
                                <li>หากผู้ใช้ยกเลิกบัญชีจะพลาดข่าวสารและการแจ้งเตือน
                                    เกี่ยวกับสิทธิพิเศษและโปรโมชั่นต่างๆมากมาย สำหรับคุณเท่านั้น</li>
                            </ul>
                        </div>
                        <div class="text-center mt-5">
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#exampleModal">ดำเนินการต่อ</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



</body>

<script>

</script>