<?php include 'assets/header.php'; ?>

<body>
   <div class="main-content">
    <div class="modal fade modal-expire" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">คะแนนที่จะหมดอายุ</h5>
                </div>
                <div class="modal-body">
                    <div class="wrap-expire">
                        <div class="expire">
                            <div class="wrap">
                                <div class="detail">
                                    <p class="cardid">บัตร 8756932157</p>
                                    <p class="date">วันอายุ 20/05/66</p>
                                </div>

                                <div class="score">
                                    <button type="button" class="btn btn-expire" data-bs-dismiss="modal"><i class="bi bi-credit-card-2-back"></i>300
                                        คะแนน</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrap-expire">
                        <div class="expire">
                            <div class="wrap">
                                <div class="detail">
                                    <p class="cardid">บัตร 8756932157</p>
                                    <p class="date">วันอายุ 20/05/66</p>
                                </div>

                                <div class="score">
                                    <button type="button" class="btn btn-expire" data-bs-dismiss="modal"><i class="bi bi-credit-card-2-back"></i>300
                                        คะแนน</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-skyblue" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>

    <div class="all-card">
        <div class="container-fluid">
            <div class="navbar-search">
                <div class="group">
                    <a href="">
                        <i class="bi bi-chevron-left"></i>
                    </a>
                    <span>
                        บัตร
                    </span>
                    <i class="bi bi-search" onclick="myFunction()"></i>
                </div>

                <div id="search-allcard" style="display:none;">
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                </div>

            </div>

            <div class="content-allcard">
                <div class="item">
                    <div class="wrap">
                        <div class="image">
                            <img src="assets/img/item-1.png" alt="">
                        </div>
                        <div class="detail">
                            <div class="title">
                                <span><i class="bi bi-car-front"></i></span>
                                <span>แต้มสะสม</span>
                            </div>
                            <p class="price">300</p>
                            <p class="score">คะแนน</p>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <p class="more">คลิกเพื่อดูจำนวนคะแนนที่จะหมดอายุ</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="wrap">
                        <div class="image">
                            <img src="assets/img/item-1.png" alt="">
                        </div>
                        <div class="detail">
                            <div class="title">
                                <span><i class="bi bi-car-front"></i></span>
                                <span>แต้มสะสม</span>
                            </div>
                            <p class="price">150</p>
                            <p class="score">คะแนน</p>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <p class="more">คลิกเพื่อดูจำนวนคะแนนที่จะหมดอายุ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="wrap">
                        <div class="image">
                            <img src="assets/img/item-1.png" alt="">
                        </div>
                        <div class="detail">
                            <div class="title">
                                <span><i class="bi bi-car-front"></i></span>
                                <span>แต้มสะสม</span>
                            </div>
                            <p class="price">200</p>
                            <p class="score">คะแนน</p>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <p class="more">คลิกเพื่อดูจำนวนคะแนนที่จะหมดอายุ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="wrap">
                        <div class="image">
                            <img src="assets/img/item-1.png" alt="">
                        </div>
                        <div class="detail">
                            <div class="title">
                                <span><i class="bi bi-car-front"></i></span>
                                <span>แต้มสะสม</span>
                            </div>
                            <p class="price">300</p>
                            <p class="score">คะแนน</p>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <p class="more">คลิกเพื่อดูจำนวนคะแนนที่จะหมดอายุ</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="wrap">
                        <div class="image">
                            <img src="assets/img/item-1.png" alt="">
                        </div>
                        <div class="detail">
                            <div class="title">
                                <span><i class="bi bi-car-front"></i></span>
                                <span>แต้มสะสม</span>
                            </div>
                            <p class="price">100</p>
                            <p class="score">คะแนน</p>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <p class="more">คลิกเพื่อดูจำนวนคะแนนที่จะหมดอายุ</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="wrap">
                        <div class="image">
                            <img src="assets/img/item-1.png" alt="">
                        </div>
                        <div class="detail">
                            <div class="title">
                                <span><i class="bi bi-car-front"></i></span>
                                <span>แต้มสะสม</span>
                            </div>
                            <p class="price">100</p>
                            <p class="score">คะแนน</p>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <p class="more">คลิกเพื่อดูจำนวนคะแนนที่จะหมดอายุ</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <?php include 'assets/footer.php'; ?>
   </div>
</body>

<script>
    function myFunction() {
        document.getElementById("search-allcard").style.display = "block";
    }
</script>