<?php include 'assets/header.php';?>


<style>

</style>

<body>


    <div class="body-bg-login">

        <div class="navbar-login">
        <ul id="progressbar">
                <li class="active">เข้าสู่ระบบ</li>
                <li class="active">เบอร์โทรศัพท์</li>
                <li class="active">ยืนยัน OTP</li>
            </ul>
        </div>

        <div class="wrap-content-middle">
            <div class="card-login otp">
                <a href="#">
                    <p class="title">ยืนยันรหัส OTP</p>
                </a>
                <p>รหัสยืนยัน OTP ได้ส่งไปที่</p>
                <p>เบอร์โทรศัพท์ 000-0000-0000 ของคุณแล้ว </p>
                <p>รหัสอ้างอิง : FKLI4A </p>

                <div class="otp">
                    <div class="otp-field">
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input class="space" type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                    </div>
                </div>

                <button type="button" class="btn btn-login">ตกลง</button>



                <div class="re-otp">
                    <div class="wrap">
                        <u><span>ขอรหัส OTP อีกครั้ง</span></u>
                        <span><i class="bi bi-arrow-clockwise"></i>0.58 วินาที</span>
                    </div>
                </div>

            </div>
        </div>
    </div>




</body>
<script>
const inputs = document.querySelectorAll(".otp-field input");
const show = document.getElementsByClassName(".show")

inputs.forEach((input, index) => {
    input.dataset.index = index;
    input.addEventListener("keyup", handleOtp);
    input.addEventListener("paste", handleOnPasteOtp);
});

function handleOtp(e) {

    /*<input type="text" maxlength="1" />
    NOTE: On mobile devices `maxlength` property isn't supported,
    So we to write our own logic to make it work. */

    const input = e.target;
    let value = input.value;
    let isValidInput = value.match(/[0-9a-z]/gi);
    input.value = "";
    input.value = isValidInput ? value[0] : "";

    let fieldIndex = input.dataset.index;
    if (fieldIndex < inputs.length - 1 && isValidInput) {
        input.nextElementSibling.focus();
    }

    if (e.key === "Backspace" && fieldIndex > 0) {
        input.previousElementSibling.focus();
    }

    if (fieldIndex == inputs.length - 1 && isValidInput) {
        submit();
    }
}

function handleOnPasteOtp(e) {
    const data = e.clipboardData.getData("text");
    const value = data.split("");
    if (value.length === inputs.length) {
        inputs.forEach((input, index) => (input.value = value[index]));
        submit();
    }
}

function submit() {
    console.log("Submitting...");
    // Entered OTP
    let otp = "";
    inputs.forEach((input) => {
        otp += input.value;
        input.disabled = true;
        input.classList.add("disabled");
    });
    console.log(otp);
    // Call API below
}
</script>

</html>