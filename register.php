<?php include 'assets/header.php'; ?>



<body>


    <div class="register">
        <!-- As a link -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <div class="grouphead">
                    <div class="img">
                        <img src="assets/img/term.png" alt="" srcset="">
                    </div>
                    <div class="title">
                        <p class="">Thai Easy Pass</p>
                        <p class="">ทางการพิเศษแห่งประเทศไทย</p>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="register-container">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li>หน้าหลัก</li>
                    <span class="bi bi-chevron-double-right">เมนู</span>
                    <span class="bi bi-chevron-double-right" class="active"><a href="">ลงทะเบียนสมาชิกบัตร Easy Pass</a></span>
                </ol>
            </div>
        </div>
        <div class="form-register">
            <div class="text-title">
                <h1>ลงทะเบียนสมาชิกบัตร Easy <br><span class="cs-pass">Pass</span></h1>
            </div>
            <div class="wrap">
                <div class="list">
                    <form>
                        <p class="title">ลงทะเบียนด้วย</p>
                        <select id="card-type" name="card-type" required="">
                            <option value="0">Smard Card และ OBU</a></option>
                            <option value="1">Smart Card และ บัตรประจำตัวประชาชน/นิติบุคคล(สาขา 5 หลัก)</option>
                            <option value="2">OBU และ บัตรประจำตัวประชาชน/นิติบุคคล(สาขา 5 หลัก)</option>
                        </select><br><br>
                        <input type="text" id="name" name="name" maxlength="10" onkeypress="return isNumberKey(event,this,19)" placeholder="Smard Card(10 หลัก) เช่น 1234567890" style="width:60%;"><label for="name">ตัวอย่าง</label><br><br>
                        <input type="text" id="name" name="name" maxlength="10" onkeypress="return isNumberKey(event,this,19)" placeholder="Smard Card(10 หลัก) เช่น 1234567890" style="width:60%;"><label for="name">ตัวอย่าง</label><br><br>
                        <p class="title">โทรศัพท์มือถือ</p>
                        <input type="tel" id="phone" name="phone" placeholder="หมายเลขโทรศัพท์มือถือ 10 หลัก เช่น 0899999999" maxlength="10" onkeypress="return isNumberKey(event,this,10)" required="" style="width:100%;"><br><br>
                        <p class="title">อีเมล (Email)</p>
                        <input type="email" id="email" name="email" required="email" placeholder="อีเมล เช่น example@gmail.com" style="width:100%;"><br><br>
                        <p class="title">รหัสผ่าน</p>
                        <input type="password" id="phone" name="password" required="password" autocomplete="new-password" placeholder="ต้องประกอบด้วย A-Z เเละ a-z เเละ 0-9 เเละมีความยาวอย่างน้อย 6 ตัวอักษร" style="width:60%;"><br><br>
                        <i id="password_eye_01" type="text" class="glyphicon glyphicon-eye-open" onclick="show_password()"></i>
                        <p class="title">ยืนยันรหัสผ่าน</p>
                        <input type="confirm" id="phone" name="confirm" required="" id="password" autocomplete="new-password" placeholder="ต้องประกอบด้วย A-Z เเละ a-z เเละ 0-9 เเละมีความยาวอย่างน้อย 6 ตัวอักษร" style="width:100%;"><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>




</body>

</html>