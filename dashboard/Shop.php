<?php include("./include/header.php")?>
<style>
    .shop_wrapper span{
        font-size: 18px;
    }
    .rates_details {
                width: 400px;

        display: flex;
        justify-content: space-between;
    }
.shop_wrapper div {
    margin-bottom: 1rem;
}
.btn.active>img {
}
.pay-method .btn-check:checked+.btn,
.pay-method .btn-check:active+.btn,
.pay-method .btn:active,
.pay-method .btn.active,
.pay-method .btn.show {
    border-radius: 32px;

    background: linear-gradient(90deg, #7939CC 0%, #4656A3 100%);
    box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.20);
}

.pay-method .btn-check:checked + .btn img,
.pay-method .btn-check:active + .btn img,
.pay-method .btn:active img,
.pay-method .btn.active img,
.pay-method .btn.show img {
    filter: brightness(0) invert(1);
}
.tap-img{
    text-align: "center";
    border-radius: 24px;
    background: #FFF;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}
@media (max-width: 767px) {
    .rates_details {
        width: 100%;
}
.tap-img{
    margin-bottom: 20px;
}
}
  
   

</style>
<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex justify-content-between w-100">
           
            <div>
                <h3>Shop</h3>

            </div>
            <div>
                <a href="shop-details.php">
                    <button class="btn btn-danger rounded-pill mt-2"
                        style="background: linear-gradient(90deg, #BC3C43 0%, #561B1F 100%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path
                                d="M12 22.5C17.5228 22.5 22 18.0228 22 12.5C22 6.97715 17.5228 2.5 12 2.5C6.47715 2.5 2 6.97715 2 12.5C2 18.0228 6.47715 22.5 12 22.5Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 8.5L8 12.5L12 16.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16 12.5H8" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Back </button>
                </a>


            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-md-5 col-12">
            <div class="tap-img card-body text-center p-5 " style="
                   ">
                <img src="../assets/images/shop.png" alt="" srcset="" class="w-75 ">

            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="shop_wrapper">
                <div>
                    <h3 style="color: #7939CC">Packaging Tape</h3>
                    <h4  class="mb-5">Rs. 35/Piece (1 Tap Roll = 6 Pieces)</h4>
                </div>
                <div class="">
                    <h5 class="mb-2">Quantity Roll</h5>
                    <div class="form-group w-100">
                        <input type="number" placeholder="Enter Quantity of tap" value="1" class="form-control w-100 lh-lg ">
                    </div>
                </div>
                <div >
                    <div class="rates_details">
                       <h5>Subtotal :</h5> <span> <small>₹</small><b>9000</b></span>

                    </div>
                    <div class="rates_details">
                   <h5 class="my-2">GST (18%) : </h5><span> <small>₹</small><b>9000</b></span>
                   </div>
                   <div class="rates_details">
                   <h5>Payable Amount :</h5><span> <small>₹</small><b>306</b></span>

                   </div>
                </div>
               
               
                <div>
                    <button class="btn btn-success btn-green-gradient w-100" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Buy</button>

                </div>
            </div>
        </div>


    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delivery Address & Payment Mode</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="rate_form">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" placeholder="Enter Your Full Name" class="form-control " required>
                    </div>
                    <div class="form-group">
                        <label>Contact No</label>
                        <input type="text" placeholder="Enter mobile Number" class="form-control " required>
                    </div>
                    <div class="form-group">
                        <label>Address 1</label>
                        <input type="text" placeholder="Enter Address" class="form-control " required>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" placeholder="Enter Your City" class="form-control " required>
                    </div>
                   <div class="d-flex justify-content-between gap-2 w-100">
                   <div class="form-group w-100">
                        <label>State</label>
                        <input type="text" placeholder="Enter Your State" class="form-control  " required>
                    </div>
                    <div class="form-group  w-100">
                        <label>Pincode</label>
                        <input type="text" placeholder="Enter Your Pincode" class="form-control " required>
                    </div>
                   </div>
                   

                    <div class="pay-method">
                    <h5 class="mb-3">Select Payment mode :</h5>
                    <div class="btn-group w-100" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check " name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-light rounded-pill" for="btnradio1" style="margin-right:10px">
                            <img src="../assets/images/wallet/paytm.png" alt="" srcset="" style="width:80px"></label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-light rounded-pill" for="btnradio2">
                        <img src="../assets/images/wallet/wallet.png" alt="" srcset="" style="width:25px">
                        </label>

                            </label>


                    </div>
                    <div class="text-center mt-5">
                        <button type="button" class="btn btn-success w-100 lh-lg"
                           >Payment Now</button>
                    </div>

                </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include("./include/footer.php")?>