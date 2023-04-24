<?php include 'assets/header.php';?>

<style>
.navbar-login #progressbar li:last-child {
    color: #777;
}
</style>

<body>


    <div class="body-bg-login">

        <div class="navbar-login">
            <ul id="progressbar">
                <li class="active">เข้าสู่ระบบ</li>
                <li class="active">เบอร์โทรศัพท์</li>
                <li>ยืนยัน OTP</li>
            </ul>
        </div>

        <div class="wrap-content-middle">
            <div class="card-login check-tel">
                <a href="otp.php">
                    <p class="title">เบอร์โทรศัพท์</p>
                </a>
                <input type="" class="form-control form-check-tel" id="" aria-describedby="" placeholder="0000-0000-0000">
                <a href="otp.php"><button type="button" class="btn btn-login">ตกลง</button></a>
            </div>
        </div>
    </div>
</div>


</body>

</html>