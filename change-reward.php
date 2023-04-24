<?php include 'assets/header.php'; ?>

<body>
<div class="main-content">

    <div class="modal fade modal-cr" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <p class="title">ยืนยันการแลกรับสิทธิ์</p>
                    <div class="img">
                        <img src="assets/img/qr.png" alt="" srcset="">
                    </div>
                    <p class="score">300 คะแนน</p>

                    <div class="detail">
                        <p class="">หมายเลขบัตร : XXX-XXXX-XXX</p>
                        <p class="">คะแนนของคุณ : 76 คะแนน</p>
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#success">แลกตอนนี้</button>
                        <button type="button" class="btn btn-solid" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-success" id="success" tabindex="-1" aria-labelledby="success" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="img">
                        <img src="assets/img/success.png" alt="" srcset="">
                    </div>
                    <p>แลกรับสิทธิ์สำเร็จ</p>
                    <div class="mt-3">
                        <a class="btn btn-login" href="card.php">กลับสู่หน้าเริ่มต้น</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-not-success" id="not-success" tabindex="-1" aria-labelledby="not-success" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="img">
                        <img src="assets/img/not-success.png" alt="" srcset="">
                    </div>

                    <p>คะแนนของคุณไม่เพียงพอ</p>
                    <p>กรุณาตรวจสอบคะแนนอีกครั้ง</p>

                    <div class="mt-3">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="change-reward">
            <div class="wrap">
                <div class="navbar-search">
                    <div class="group">
                        <a href="card.php">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                        <span>
                            แลกของรางวัล
                        </span>
                        <span></span>
                    </div>

                </div>

                <div class="detail">
                    <div class="img">
                        <img src="assets/img/item-2.png" alt="" srcset="">
                    </div>

                    <div class="detail">
                        <div class="exchange">
                            <p class="title">แลกคะแนนเพียง 300 คะแนน เพื่อรับฟรี Auntie Anne’s Original Pretzel 1 ชิ้น
                                ในมูลค่า 35 บาท</p>
                            <div class="group">
                                <span class="card-id-red"><i class="bi bi-credit-card-2-back"></i>300 คะแนน</span>
                                <!-- <span class="card-id-blue"><i class="bi bi-credit-card-2-back"></i>300 คะแนน</span> -->
                                <span class="date-clock"><i class="bi bi-clock"></i>หมดอายุ 20 มีนาคม 2566</span>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">แลกรับสิทธิ์</button>
                                <!-- <button type="button" class="btn btn-grey" data-bs-toggle="modal"
                                data-bs-target="#not-success">คะแนนของท่านไม่เพียงพอ</button> -->
                            </div>
                        </div>
                    </div>

                    <div class="list">
                        <div class="group-item">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">รายละเอียด</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">เงื่อนไข</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">สาขา</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    แลกคะแนนเพียง 300 คะแนน เพื่อรับฟรี Auntie Anne’s Original Pretzel 1 ชิ้น ในมูลค่า 35
                                    บาท </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Provident, reiciendis!
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Lorem
                                    ipsum dolor sit amet
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    <?php include 'assets/footer.php'; ?>
     
</body>



<script>

</script>