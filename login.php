<?php include 'assets/header.php';?>

<style>
.navbar-login #progressbar li:last-child {
    color: #777;
}

.navbar-login #progressbar li:nth-child(2) {
    color: #777;
}
</style>

<body>

    <div class="body-bg-login">

        <div class="navbar-login">
            <ul id="progressbar">
                <li class="active">เข้าสู่ระบบ</li>
                <li>เบอร์โทรศัพท์</li>
                <li>ยืนยัน OTP</li>
            </ul>
        </div>

        <div class="wrap-content-middle">
            <div class="card-login">
                <a href="check-tel.php">
                    <p class="title">เข้าสู่ระบบ</p>
                </a>
                <p>กรุณากรอก E-mail หรือ บัตรประจำตัวประชาชน 13 หลัก </p>
                <input type="" class="form-control form-cus" id="" aria-describedby="">
                <a href="check-tel.php"><button type="button" class="btn btn-login">ตรวจสอบ</button></a>
            </div>
        </div>
    </div>



</body>

</html>