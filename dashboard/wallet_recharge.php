<?php include("./include/header.php")?>
<style>
  
@media (max-width: 767px) {
    .wallet-slider {
    display: flex;
    flex-wrap: nowrap; /* Prevent wrapping to keep tabs in a single line */
    overflow-x: auto; /* Enable horizontal scrolling */
    white-space: nowrap; /* Ensure content stays on one line */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
   border-radius: 0 !important

}

.wallet-slider::-webkit-scrollbar {
    height: 2px; /* Set height for the scrollbar */
    display: none;
}

.wallet-slider::-webkit-scrollbar-thumb {
    background-color: #888; /* Color of the scrollbar */
    border-radius: 10px; 
}

.wallet-slider::-webkit-scrollbar-thumb:hover {
    background-color: #555; /* Darker color on hover */
}

}

.modal-body .money_enter input::placeholder {
    color: rgba(121, 57, 204, 0.20);
    /* font-family: Inter; */
    font-size: 90px;
    font-style: normal;
    font-weight: 500;
}

.modal-body .money_enter {
    width: 50%;
    margin: auto 0;
}

.modal-body .money_enter input {
    color: rgba(121, 57, 204, 0.20);
    /* font-family: Inter; */
    font-size: 60px;
    font-style: normal;
    font-weight: 500;
    /* line-height: normal; */
    border: none;
    padding: 0;
    font-family: fangsong;

}

.apply-coupon {
    padding: 10px;
    display: flex;
    border-radius: 8px;
    background: #FFF;
    gap: 10px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
</style>

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row mt-5">
        <div class="col-lg-7 col-xl-7">
            <div class="col">
                <h4 class="mb-4">Wallet Recharge </h4>
            </div>
            <div class="wallet_wrapper">
                <div class="row">
                    <div class="col-md-6 col-6 border-end-purple">

                        <div class="line_before">
                            <img src="../assets/images/wallet/paytm.png" alt="" srcset="">


                        </div>
                        <button class="btn btn-success btn-green-gradient rounded-pill lh-lg mt-5 w-100" type="button"
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paytm">Recharge
                            Wallet </button>

                    </div>
                    <div class="col-md-6 col-6">

                        <div class="line_before">
                            <img src="../assets/images/wallet/razarpay.png" alt="" srcset="">


                        </div>
                        <button class="btn btn-success btn-green-gradient rounded-pill lh-lg mt-5 w-100" type="button"
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paytm">Recharge
                            Wallet </button>


                    </div>



                </div>
            </div>


        </div>
        <div class="col-lg-5">
                <div class="healthy_wallet">
                    <div class="glass">
                        <div class="mt-5">
                            <h3 class="text-white">Amount</h3>
                            <h1><span><i class="fa-solid fa-indian-rupee-sign"></i> </span> 9000</h1>
                        </div>
                        <div class="border-end"></div>
                        <div class="healthy_circle">Wallet is Healthy</div>

                    </div>
                </div>

                <div class="rewards_wrapper mt-3">
                    <a href="rewards.php" class="w-100">
                        <div class="rewards_bg flex-wrap flex-lg-nowrap">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 65 64"
                                    fill="none">
                                    <path
                                        d="M30.7531 14.5414C28.9186 12.5518 25.7201 8.6395 24.6699 4.5625L23.0221 7.034C22.8473 7.29625 22.5043 7.38713 22.2226 7.24638L18.7344 5.50238C19.1942 6.42825 19.9306 7.68175 21.0289 8.96438C23.5374 11.894 26.8022 13.765 30.7531 14.5414Z"
                                        fill="#F5CF49" />
                                    <path
                                        d="M7.5 18.2917V23.8334C7.5 25.0625 8.5 26.0625 9.72925 26.0625H26.875V16.0625H9.72925C8.5 16.0626 7.5 17.0626 7.5 18.2917Z"
                                        fill="#EE4236" />
                                    <path d="M28.125 27.3125H36.875V59.8125H28.125V27.3125Z" fill="#EE4236" />
                                    <path d="M12.5 27.3125H26.875V30.4375H12.5V27.3125Z" fill="#FEBD02" />
                                    <path
                                        d="M7.8125 11.6875C9.36325 11.6875 10.625 10.4259 10.625 8.875C10.625 7.32413 9.36325 6.0625 7.8125 6.0625C6.26175 6.0625 5 7.32413 5 8.875C5 10.4259 6.26175 11.6875 7.8125 11.6875Z"
                                        fill="#F153FF" />
                                    <path d="M28.125 16.0625H36.875V26.0625H28.125V16.0625Z" fill="#FEBD02" />
                                    <path
                                        d="M12.5 46.6875H17.0417C19.0176 46.6875 20.625 48.295 20.625 50.2709V57.4791C20.625 58.3699 20.2976 59.185 19.7577 59.8125H26.875V31.6875H12.5V46.6875Z"
                                        fill="#EE4236" />
                                    <path
                                        d="M17.0417 47.9375H6.70825C5.42175 47.9375 4.375 48.9842 4.375 50.2709V51.0625H16.25C16.5953 51.0625 16.875 51.3422 16.875 51.6875C16.875 52.0328 16.5953 52.3125 16.25 52.3125H4.375V57.4791C4.375 58.7658 5.42175 59.8125 6.70825 59.8125H17.0417C18.3282 59.8125 19.375 58.7658 19.375 57.4791V50.2709C19.375 48.9842 18.3282 47.9375 17.0417 47.9375Z"
                                        fill="#F9C430" />
                                    <path
                                        d="M58.5834 38.5625H52.6666C51.5409 38.5625 50.625 39.4784 50.625 40.6041V42.3125H60.625V40.6041C60.625 39.4784 59.7091 38.5625 58.5834 38.5625Z"
                                        fill="#FF5800" />
                                    <path
                                        d="M57.5 9.1875C58.8785 9.1875 60 8.066 60 6.6875C60 5.309 58.8785 4.1875 57.5 4.1875C56.1215 4.1875 55 5.309 55 6.6875C55 8.066 56.1215 9.1875 57.5 9.1875Z"
                                        fill="#F153FF" />
                                    <path
                                        d="M50.625 52.6787L55.8081 47.4956C56.052 47.2515 56.448 47.2515 56.6919 47.4956C56.936 47.7396 56.936 48.1354 56.6919 48.3794L50.625 54.4463V57.7709C50.625 58.8966 51.5409 59.8125 52.6666 59.8125H58.5834C59.7091 59.8125 60.625 58.8966 60.625 57.7709V49.4463L55.4419 54.6294C55.198 54.8735 54.802 54.8735 54.5581 54.6294C54.314 54.3854 54.314 53.9896 54.5581 53.7456L60.625 47.6787V43.5625H50.625V52.6787Z"
                                        fill="#F5CF49" />
                                    <path d="M38.125 27.3125H52.5V30.4375H38.125V27.3125Z" fill="#FEBD02" />
                                    <path
                                        d="M55.2709 26.0624C56.5 26.0624 57.5 25.0624 57.5 23.8333V18.2916C57.5 17.0625 56.5 16.0625 55.2709 16.0625H38.125V26.0625H53.125H55.2709V26.0624Z"
                                        fill="#EE4236" />
                                    <path
                                        d="M52.5 37.3167V31.6875H38.125V59.8125H50.0875C49.642 59.251 49.375 58.5417 49.375 57.7709V40.6041C49.375 38.845 50.7621 37.4037 52.5 37.3167Z"
                                        fill="#EE4236" />
                                    <path
                                        d="M44.0103 8.92225C45.0937 7.64875 45.8188 6.41412 46.2723 5.50025L42.7816 7.24563C42.4996 7.38637 42.1568 7.2955 41.9821 7.03325L40.3973 4.65625C39.5002 8.98513 36.4042 12.5968 34.4766 14.495C38.3454 13.6886 41.5458 11.8195 44.0103 8.92225Z"
                                        fill="#F5CF49" />
                                    <path
                                        d="M51.5625 11.0625C52.0803 11.0625 52.5 10.6428 52.5 10.125C52.5 9.60723 52.0803 9.1875 51.5625 9.1875C51.0447 9.1875 50.625 9.60723 50.625 10.125C50.625 10.6428 51.0447 11.0625 51.5625 11.0625Z"
                                        fill="#FF00A8" />
                                    <path
                                        d="M59.0625 32.3125C59.5803 32.3125 60 31.8928 60 31.375C60 30.8572 59.5803 30.4375 59.0625 30.4375C58.5447 30.4375 58.125 30.8572 58.125 31.375C58.125 31.8928 58.5447 32.3125 59.0625 32.3125Z"
                                        fill="#FF00A8" />
                                    <path
                                        d="M14.6875 8.5625C15.2053 8.5625 15.625 8.14277 15.625 7.625C15.625 7.10723 15.2053 6.6875 14.6875 6.6875C14.1697 6.6875 13.75 7.10723 13.75 7.625C13.75 8.14277 14.1697 8.5625 14.6875 8.5625Z"
                                        fill="#FF00A8" />
                                    <path
                                        d="M5.3125 31.0625C5.83027 31.0625 6.25 30.6428 6.25 30.125C6.25 29.6072 5.83027 29.1875 5.3125 29.1875C4.79473 29.1875 4.375 29.6072 4.375 30.125C4.375 30.6428 4.79473 31.0625 5.3125 31.0625Z"
                                        fill="#FF00A8" />
                                    <path
                                        d="M8.4375 42.3125C8.95527 42.3125 9.375 41.8928 9.375 41.375C9.375 40.8572 8.95527 40.4375 8.4375 40.4375C7.91973 40.4375 7.5 40.8572 7.5 41.375C7.5 41.8928 7.91973 42.3125 8.4375 42.3125Z"
                                        fill="#EE4236" />
                                </svg>
                            </div>
                            <div class="border-end"></div>
                            <div>
                                <h5>Rewards</h5>

                            </div>
                        </div>
                    </a>
                    <a href="refer-earn.php" class="w-100">
                        <div class="rewards_bg">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 65 64"
                                    fill="none">
                                    <path
                                        d="M23.2002 50.7381L15.9656 57.9728C15.7846 58.1616 15.6848 58.4139 15.6876 58.6754C15.6903 58.937 15.7955 59.187 15.9804 59.372C16.1654 59.557 16.4155 59.6621 16.677 59.6649C16.9386 59.6677 17.1908 59.5679 17.3797 59.3869L24.6144 52.1523C24.7958 51.9635 24.896 51.7111 24.8934 51.4493C24.8909 51.1875 24.7857 50.9371 24.6006 50.7519C24.4154 50.5668 24.1651 50.4616 23.9032 50.459C23.6414 50.4564 23.389 50.5566 23.2002 50.7381Z"
                                        fill="#F9C430" />
                                    <path
                                        d="M12.3487 39.8865L5.11394 47.1212C4.93298 47.3101 4.8332 47.5623 4.83599 47.8238C4.83879 48.0854 4.94393 48.3354 5.12889 48.5204C5.31384 48.7053 5.56389 48.8104 5.82544 48.8132C6.08698 48.816 6.33921 48.7162 6.52806 48.5353L13.7627 41.3006C13.9442 41.1119 14.0444 40.8595 14.0418 40.5977C14.0392 40.3359 13.9341 40.0855 13.7489 39.9004C13.5638 39.7152 13.3135 39.6101 13.0516 39.6075C12.7898 39.6049 12.5375 39.705 12.3487 39.8865Z"
                                        fill="#F9C430" />
                                    <path
                                        d="M19.1848 46.7263C19.3662 46.5376 19.4663 46.2852 19.4637 46.0234C19.4611 45.7616 19.356 45.5113 19.1709 45.3262C18.9858 45.141 18.7354 45.0359 18.4737 45.0333C18.2119 45.0306 17.9595 45.1308 17.7707 45.3121L6.91856 56.1642C6.73763 56.3531 6.63787 56.6054 6.64068 56.8669C6.64349 57.1284 6.74864 57.3785 6.9336 57.5634C7.11855 57.7483 7.36859 57.8535 7.63013 57.8563C7.89167 57.859 8.1439 57.7593 8.33275 57.5783L19.1848 46.7263Z"
                                        fill="#F9C430" />
                                    <path
                                        d="M42.4736 8.51953C39.7541 8.52171 37.0987 9.34516 34.8551 10.882C32.6115 12.4189 30.8844 14.5976 29.8999 17.1326C28.9155 19.6677 28.7196 22.441 29.338 25.0892C29.9564 27.7375 31.3601 30.1372 33.3654 31.9742C35.3707 33.8111 37.8841 34.9996 40.5763 35.384C43.2685 35.7684 46.014 35.3307 48.4532 34.1283C50.8925 32.9259 52.9117 31.0149 54.2465 28.6455C55.5812 26.2761 56.1693 23.5588 55.9336 20.8495C55.6304 17.4865 54.0822 14.3578 51.5922 12.077C49.1023 9.79606 45.8503 8.52736 42.4736 8.51953ZM45.6636 17.9095H47.0536C47.3153 17.9148 47.5646 18.0224 47.7479 18.2094C47.9311 18.3964 48.0338 18.6478 48.0338 18.9096C48.0337 19.1714 47.9311 19.4227 47.7478 19.6097C47.5645 19.7967 47.3153 19.9043 47.0535 19.9095H45.7436C45.6365 21.8059 44.4485 24.1512 42.5036 24.1395H41.9736L44.7236 28.8495C44.8575 29.0789 44.8948 29.3522 44.8273 29.6091C44.7598 29.866 44.593 30.0856 44.3636 30.2195C44.1341 30.3535 43.8609 30.3908 43.604 30.3233C43.3471 30.2558 43.1275 30.0889 42.9936 29.8595C42.9429 29.7723 39.4129 23.7313 39.3636 23.6495C39.277 23.4972 39.2314 23.3249 39.2315 23.1496C39.2315 22.9743 39.2772 22.8021 39.3639 22.6498C39.4506 22.4975 39.5755 22.3704 39.7262 22.2809C39.877 22.1914 40.0484 22.1427 40.2236 22.1395H42.5036C43.2687 21.9777 43.6339 20.7365 43.7436 19.9095H37.9536C37.6911 19.9055 37.4407 19.7983 37.2565 19.6112C37.0723 19.4241 36.969 19.1721 36.969 18.9095C36.969 18.6469 37.0723 18.3949 37.2565 18.2078C37.4407 18.0207 37.6911 17.9136 37.9537 17.9095H43.6036C43.3536 16.9395 42.8636 16.3495 42.5036 16.3495H37.9536C37.6884 16.3495 37.434 16.2442 37.2465 16.0566C37.0589 15.8691 36.9536 15.6147 36.9536 15.3495C36.9536 15.0843 37.0589 14.83 37.2465 14.6424C37.434 14.4549 37.6884 14.3495 37.9536 14.3495H47.0536C47.3188 14.3495 47.5731 14.4549 47.7607 14.6424C47.9482 14.83 48.0536 15.0843 48.0536 15.3495C48.0536 15.6147 47.9482 15.8691 47.7607 16.0566C47.5731 16.2442 47.3188 16.3495 47.0536 16.3495H45.1736C45.4066 16.845 45.5714 17.3698 45.6636 17.9095Z"
                                        fill="#F9C430" />
                                    <path
                                        d="M53.7881 4.40347L47.0078 7.20358C49.4367 7.94312 51.6465 9.26845 53.4427 11.0629C55.2389 12.8574 56.5664 15.0659 57.3083 17.4941L60.0985 10.7138C61.8453 6.91318 57.5877 2.65787 53.7881 4.40347Z"
                                        fill="#EE4236" />
                                    <path
                                        d="M28.8473 14.6641L7.47641 23.4745C6.67149 23.8139 5.97305 24.3642 5.45474 25.0673C4.93643 25.7705 4.61744 26.6005 4.53141 27.4698C4.44539 28.3391 4.59551 29.2155 4.96594 30.0067C5.33638 30.7978 5.91341 31.4743 6.6362 31.9649L21.7069 42.0154C22.0145 42.223 22.2794 42.4878 22.487 42.7954L32.5374 57.8659C33.0277 58.5891 33.7041 59.1666 34.4953 59.5374C35.2864 59.9082 36.163 60.0585 37.0325 59.9725C37.9021 59.8865 38.7322 59.5673 39.4354 59.0488C40.1386 58.5302 40.6888 57.8314 41.0279 57.0261L49.8283 35.6551C36.3778 42.9121 21.5894 28.1377 28.8473 14.6641Z"
                                        fill="#EE4236" />
                                </svg>
                            </div>
                            <div class="border-end"></div>

                            <div>
                                <h5>Refer & Earn</h5>

                            </div>
                        </div>
                    </a>
                </div>
            </div>

        <div class="card-header d-flex justify-content-between mt-5">
            <div class="header-title">
                <h4 class="card-title">Wallet Recharge Detail</h4>
            </div>
        </div>
        <div class="row mt-5">

            <div class="col-md-12">
                <section class="recharge_detail">
                    <div class="card" style="border: none; background: none" ;>

                        <div class="">


                            <div class="gradient-wallet-recharge">
                                <div
                                    class="d-flex justify-content-between flex-lg-nowrap flex-wrap  align-items-center rounded gap-3">
                                    <input type="search" placeholder="search" class="form-control wallet_search">

                                    <div class="form-group w-25 mb-0">
                                        <select class="select2-basic-single js-states form-control" name="state"
                                            style="width: 100%;">
                                            <option>Past 30 Days</option>
                                            <option>Past 60 Days</option>
                                            <option>Past 90 Days</option>
                                            <option>Past 1 year</option>
                                            <option>Past 2 year</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-0 w-25">
                                        <input type="text" name="start"
                                            class="form-control range_flatpicker flatpickr-input active"
                                            placeholder="24 Jan 2022 to 23 Feb 2022" readonly="readonly">
                                    </div>
                                    <button type="button" class="btn btn-primary">Apply</button>
                                </div>

                                <hr style="border: 1px dashed #fff" ;>
                                <ul class="nav nav-pills mb-3 nav-fill wallet-slider" id="pills-tab-1" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab-fill" data-bs-toggle="pill"
                                            href="#pills-home-fill" role="tab" aria-selected="true">Deduction <br> ₹
                                            <span>9000</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab-fill" data-bs-toggle="pill"
                                            href="#pills-profile-fill" role="tab" aria-selected="false">Recharge
                                            <br> ₹
                                            <span>9000</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab-fill" data-bs-toggle="pill"
                                            href="#pills-contact-fill" role="tab" aria-selected="false">Refund <br>
                                            ₹
                                            <span>9000</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-weight-tab-fill" data-bs-toggle="pill"
                                            href="#pills-weight-fill" role="tab" aria-selected="false">Weight
                                            Reconciliation <br> ₹ <span>9000</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-cod-tab-fill" data-bs-toggle="pill"
                                            href="#pills-cod-fill" role="tab" aria-selected="false">
                                            COD Remittance <br> ₹ <span>9000</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-cashback-tab-fill" data-bs-toggle="pill"
                                            href="#pills-cashback-fill" role="tab" aria-selected="false">
                                            Cashback <br> ₹ <span>9000</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-passbook-tab-fill" data-bs-toggle="pill"
                                            href="#pills-passbook-fill" role="tab" aria-selected="false">
                                            Passbook <br> ₹ <span>9000</span>
                                        </a>
                                    </li>



                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent-1">
                                <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel"
                                    aria-labelledby="pills-home-tab-fill">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="table-responsive border rounded">
                                                <table id="datatable" class="table " data-toggle="data-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date & Time</th>
                                                            <th>Particular</th>
                                                            <th>Transaction ID</th>
                                                            <th>Amount</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> 09 Aug, 2023 04:06</td>
                                                            <td>Wallet Recharge</td>
                                                            <td>20240315010950000975436303188898</td>
                                                            <td>9000</td>

                                                        </tr>
                                                        <tr>
                                                            <td> 09 Aug, 2023 04:06</td>
                                                            <td>Wallet Recharge</td>
                                                            <td>20240315010950000975436303188898</td>
                                                            <td>9000</td>

                                                        </tr>
                                                        <tr>
                                                            <td> 09 Aug, 2023 04:06</td>
                                                            <td>Wallet Recharge</td>
                                                            <td>20240315010950000975436303188898</td>
                                                            <td>9000</td>

                                                        </tr>
                                                        <tr>
                                                            <td> 09 Aug, 2023 04:06</td>
                                                            <td>Wallet Recharge</td>
                                                            <td>20240315010950000975436303188898</td>
                                                            <td>9000</td>

                                                        </tr>
                                                        <tr>
                                                            <td> 09 Aug, 2023 04:06</td>
                                                            <td>Wallet Recharge</td>
                                                            <td>20240315010950000975436303188898</td>
                                                            <td>9000</td>

                                                        </tr>
                                                        <tr>
                                                            <td> 09 Aug, 2023 04:06</td>
                                                            <td>Wallet Recharge</td>
                                                            <td>20240315010950000975436303188898</td>
                                                            <td>9000</td>

                                                        </tr>
                                                        <tr>
                                                            <td> 09 Aug, 2023 04:06</td>
                                                            <td>Wallet Recharge</td>
                                                            <td>20240315010950000975436303188898</td>
                                                            <td>9000</td>

                                                        </tr>

                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel"
                                    aria-labelledby="pills-profile-tab-fill">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-contact-fill" role="tabpanel"
                                    aria-labelledby="pills-contact-tab-fill">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-weight-fill" role="tabpanel"
                                    aria-labelledby="pills-weight-tab-fill">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam harum
                                        iusto earum, nam, soluta praesentium amet numquam reprehenderit facilis
                                        illum non quo aut! Eos, quo tempora optio fugiat, voluptas architecto odio
                                        libero atque minus ipsa consequatur, sapiente quod totam qui ex magnam a
                                        minima quis et officiis tempore. Quibusdam, iure.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-cod-fill" role="tabpanel"
                                    aria-labelledby="pills-cod-tab-fill">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam harum
                                        iusto earum, nam, soluta praesentium amet numquam reprehenderit facilis
                                        illum non quo aut! Eos, quo tempora optio fugiat, voluptas architecto odio
                                        libero atque minus ipsa consequatur, sapiente quod totam qui ex magnam a
                                        minima quis et officiis tempore. Quibusdam, iure.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-cashback-fill" role="tabpanel"
                                    aria-labelledby="pills-cashback-tab-fill">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam harum
                                        iusto earum, nam, soluta praesentium amet numquam reprehenderit facilis
                                        illum non quo aut! Eos, quo tempora optio fugiat, voluptas architecto odio
                                        libero atque minus ipsa consequatur, sapiente quod totam qui ex magnam a
                                        minima quis et officiis tempore. Quibusdam, iure.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-passbook-fill" role="tabpanel"
                                    aria-labelledby="pills-passbook-tab-fill">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam harum
                                        iusto earum, nam, soluta praesentium amet numquam reprehenderit facilis
                                        illum non quo aut! Eos, quo tempora optio fugiat, voluptas architecto odio
                                        libero atque minus ipsa consequatur, sapiente quod totam qui ex magnam a
                                        minima quis et officiis tempore. Quibusdam, iure.</p>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="paytm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title " id="staticBackdropLabel"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h3 style="color: rgba(121, 57, 204, 0.75)">Add Money to Wallet</h3>
                <hr>
                <div class="d-flex justify-content-end gap-2">
                    <div style="margin: auto 0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <g opacity="0.7">
                                <path
                                    d="M27.0333 6C27.4751 6 27.8333 5.66419 27.8333 5.25V2.75C27.8333 2.33581 27.4751 2 27.0333 2H7.3C6.8582 2 6.5 2.33581 6.5 2.75V5.54675C6.5 5.96094 6.8582 6.29675 7.3 6.29675H12.9853C14.8059 6.29675 16.2027 6.91913 17.05 8H7.3C6.8582 8 6.5 8.33581 6.5 8.75V11.25C6.5 11.6642 6.8582 12 7.3 12H17.8838C17.4693 14.2554 15.6864 15.6645 12.9 15.6645H7.3C6.8582 15.6645 6.5 16.0003 6.5 16.4145V19.7278C6.5 19.9371 6.59333 20.1369 6.7574 20.2789L17.7609 29.8011C17.9086 29.929 18.1024 30 18.3035 30H23.8076C24.5359 30 24.8853 29.162 24.3502 28.6989L14.2914 19.9941C19.3913 19.8479 23.0343 16.6569 23.5126 12H27.0333C27.4751 12 27.8333 11.6642 27.8333 11.25V8.75C27.8333 8.33581 27.4751 8 27.0333 8H23.1207C22.8883 7.27869 22.5687 6.60962 22.1705 6H27.0333Z"
                                    fill="#7939CC" />
                            </g>
                        </svg>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="130" viewBox="0 0 6 130" fill="none">
                        <rect x="0.5" y="0.5" width="5" height="129" rx="2.5" fill="#7939CC" fill-opacity="0.4" />
                    </svg>
                    <div class="money_enter">
                        <input type="tel" placeholder="0" class="form-control" required>

                    </div>



                </div>
                <div class="my-5">
                    <button class="btn btn-outline-light rounded-pill" style="border-color: #7939CC ; color:#000"><b>+
                        </b><span>₹</span> 1000</button>
                    <button class="btn btn-outline-light rounded-pill" style="border-color: #7939CC ; color:#000"><b>+
                        </b><span>₹</span> 3000</button>
                    <button class="btn btn-outline-light rounded-pill" style="border-color: #7939CC ; color:#000"><b>+
                        </b><span>₹</span> 5000</button>
                    <button class="btn btn-outline-light rounded-pill" style="border-color: #7939CC ; color:#000"><b>+
                        </b><span>₹</span> 10,000</button>

                </div>


                <div class="apply-coupon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="30" viewBox="0 0 21 20" fill="none">
                        <path
                            d="M5.5026 6.86523C5.3921 6.86523 5.28612 6.90913 5.20798 6.98727C5.12984 7.06541 5.08594 7.17139 5.08594 7.2819V8.18685C5.08594 8.29736 5.12984 8.40334 5.20798 8.48148C5.28612 8.55962 5.3921 8.60352 5.5026 8.60352C5.61311 8.60352 5.71909 8.55962 5.79723 8.48148C5.87537 8.40334 5.91927 8.29736 5.91927 8.18685V7.2819C5.91927 7.17139 5.87537 7.06541 5.79723 6.98727C5.71909 6.90913 5.61311 6.86523 5.5026 6.86523Z"
                            fill="#7939CC" />
                        <path
                            d="M5.5026 9.12891C5.3921 9.12891 5.28612 9.1728 5.20798 9.25094C5.12984 9.32908 5.08594 9.43507 5.08594 9.54557V10.4505C5.08594 10.561 5.12984 10.667 5.20798 10.7451C5.28612 10.8233 5.3921 10.8672 5.5026 10.8672C5.61311 10.8672 5.71909 10.8233 5.79723 10.7451C5.87537 10.667 5.91927 10.561 5.91927 10.4505V9.54557C5.91927 9.43507 5.87537 9.32908 5.79723 9.25094C5.71909 9.1728 5.61311 9.12891 5.5026 9.12891Z"
                            fill="#7939CC" />
                        <path
                            d="M5.5026 11.3906C5.3921 11.3906 5.28612 11.4345 5.20798 11.5127C5.12984 11.5908 5.08594 11.6968 5.08594 11.8073V12.7122C5.08594 12.8227 5.12984 12.9287 5.20798 13.0069C5.28612 13.085 5.3921 13.1289 5.5026 13.1289C5.61311 13.1289 5.71909 13.085 5.79723 13.0069C5.87537 12.9287 5.91927 12.8227 5.91927 12.7122V11.8073C5.91927 11.6968 5.87537 11.5908 5.79723 11.5127C5.71909 11.4345 5.61311 11.3906 5.5026 11.3906Z"
                            fill="#7939CC" />
                        <path
                            d="M4.19727 2.08398C3.71195 2.12462 3.26981 2.44807 3.1084 2.93604L2.55339 4.61165C1.8767 4.66824 1.33594 5.2365 1.33594 5.92676V7.58447C1.33607 7.76526 1.45276 7.92534 1.62484 7.98079C2.14463 8.14856 2.58576 8.80159 2.58594 9.60107C2.58601 10.4008 2.1448 11.0544 1.62484 11.2222C1.45276 11.2776 1.33607 11.4377 1.33594 11.6185V14.1087C1.33594 14.8359 1.9344 15.4344 2.66162 15.4344H9.23958L16.314 17.8498C16.967 18.0728 17.6816 17.7078 17.8968 17.0571L18.4372 15.4246C19.1207 15.3752 19.6693 14.804 19.6693 14.1087V11.6177C19.6691 11.4369 19.5524 11.2768 19.3804 11.2214C18.8606 11.0536 18.4195 10.4006 18.4193 9.60107C18.4192 8.80134 18.8604 8.1478 19.3804 7.97998C19.5524 7.92453 19.6691 7.76445 19.6693 7.58366V5.92676C19.6693 5.19954 19.0708 4.60107 18.3436 4.60107H11.7673L4.69368 2.14339C4.52992 2.08604 4.35143 2.09329 4.19727 2.08398ZM4.2583 2.91081C4.31233 2.90712 4.3687 2.91423 4.42513 2.93278C6.02565 3.48856 7.62609 4.0449 9.22656 4.60107H3.43473L3.89941 3.19727C3.95541 3.02798 4.0962 2.92186 4.2583 2.91081ZM2.66162 5.43441H5.08594V5.83073C5.08594 6.06085 5.27249 6.2474 5.5026 6.2474C5.73272 6.2474 5.91927 6.06085 5.91927 5.83073V5.43441H18.3436C18.6236 5.43441 18.8359 5.64671 18.8359 5.92676V7.34522C18.0664 7.75064 17.5859 8.62437 17.5859 9.60107C17.5862 10.5775 18.0666 11.4509 18.8359 11.8561V14.1087C18.8359 14.3888 18.6236 14.6011 18.3436 14.6011H5.91846C5.92053 14.4573 5.91927 14.3093 5.91927 14.1641C5.91927 13.9339 5.73272 13.7474 5.5026 13.7474C5.27249 13.7474 5.08594 13.9339 5.08594 14.1641C5.0851 14.3087 5.08629 14.4582 5.08677 14.6011H2.66164C2.38151 14.6011 2.16927 14.3888 2.16927 14.1087V11.8569C2.9388 11.4515 3.41936 10.5778 3.41927 9.60107C3.41905 8.62468 2.93859 7.75129 2.16927 7.34603V5.92676C2.16927 5.64671 2.38157 5.43441 2.66162 5.43441ZM11.8185 15.4344H17.5558L17.1058 16.7951C17.031 17.0211 16.8041 17.1366 16.5833 17.0612L11.8185 15.4344Z"
                            fill="#7939CC" />
                        <path
                            d="M14.1572 10.6504C14.8989 10.6504 15.509 11.2604 15.509 12.0021C15.509 12.7438 14.8989 13.3547 14.1572 13.3547C13.4155 13.3547 12.8047 12.7438 12.8047 12.0021C12.8047 11.2604 13.4155 10.6504 14.1572 10.6504ZM14.1572 11.4837C13.8659 11.4837 13.638 11.7108 13.638 12.0021C13.638 12.2935 13.8659 12.5213 14.1572 12.5213C14.4486 12.5213 14.6756 12.2935 14.6756 12.0021C14.6756 11.7108 14.4486 11.4837 14.1572 11.4837Z"
                            fill="#7939CC" />
                        <path
                            d="M10.1885 6.68164C10.9302 6.68164 11.5402 7.29165 11.5402 8.03337C11.5402 8.77509 10.9302 9.38509 10.1885 9.38509C9.44675 9.38509 8.83594 8.77509 8.83594 8.03337C8.83594 7.29165 9.44676 6.68164 10.1885 6.68164ZM10.1885 7.51497C9.89713 7.51497 9.66927 7.74201 9.66927 8.03337C9.66927 8.32472 9.89713 8.55176 10.1885 8.55176C10.4798 8.55176 10.7069 8.32472 10.7069 8.03337C10.7069 7.74201 10.4798 7.51497 10.1885 7.51497Z"
                            fill="#7939CC" />
                        <path
                            d="M13.8557 7.73866L9.88763 11.7068C9.72496 11.8695 9.72496 12.1332 9.88763 12.2959C10.0503 12.4586 10.3141 12.4586 10.4768 12.2959L14.4449 8.32785C14.6076 8.16514 14.6076 7.90137 14.4449 7.73866C14.2747 7.58733 14.0162 7.57147 13.8557 7.73866Z"
                            fill="#7939CC" />
                    </svg>


                    <input type="text" placeholder="Apply Coupon Code" class="form-control w-100">
                    <button class="btn btn-primary">Apply</button>



                </div>
                <div class="my-5">
                    <a href="All_Coupons.php">All Coupons <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22 12C22 17.52 17.51 22 12 22L11.7202 21.9962C6.32942 21.8478 2 17.4264 2 12C2 6.49 6.48 2 12 2C17.51 2 22 6.49 22 12ZM10.02 8C9.73 8.3 9.73 8.77 10.03 9.06L12.98 12L10.03 14.94C9.73 15.23 9.73 15.71 10.02 16C10.32 16.3 10.79 16.3 11.08 16L14.57 12.53C14.71 12.39 14.79 12.2 14.79 12C14.79 11.8 14.71 11.61 14.57 11.47L11.08 8C10.94 7.85 10.75 7.78 10.56 7.78C10.36 7.78 10.17 7.85 10.02 8Z"
                                fill="currentColor" />
                        </svg></a>
                </div>


            </div>
            <div class="modal-footer mb-4">
                <button type="button" class="btn btn-primary m-auto" style="border-radius: 32px;
background: linear-gradient(93deg, #7939CC 0%, #008 100%);
box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.40);">Continue</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="razorpay" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="modal-title " id="staticBackdropLabel"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h3 style="color: rgba(121, 57, 204, 0.75)">Add Money to Wallet</h3>
                <hr>
                <div class="d-flex justify-content-end gap-2">
                    <div style="margin: auto 0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <g opacity="0.7">
                                <path
                                    d="M27.0333 6C27.4751 6 27.8333 5.66419 27.8333 5.25V2.75C27.8333 2.33581 27.4751 2 27.0333 2H7.3C6.8582 2 6.5 2.33581 6.5 2.75V5.54675C6.5 5.96094 6.8582 6.29675 7.3 6.29675H12.9853C14.8059 6.29675 16.2027 6.91913 17.05 8H7.3C6.8582 8 6.5 8.33581 6.5 8.75V11.25C6.5 11.6642 6.8582 12 7.3 12H17.8838C17.4693 14.2554 15.6864 15.6645 12.9 15.6645H7.3C6.8582 15.6645 6.5 16.0003 6.5 16.4145V19.7278C6.5 19.9371 6.59333 20.1369 6.7574 20.2789L17.7609 29.8011C17.9086 29.929 18.1024 30 18.3035 30H23.8076C24.5359 30 24.8853 29.162 24.3502 28.6989L14.2914 19.9941C19.3913 19.8479 23.0343 16.6569 23.5126 12H27.0333C27.4751 12 27.8333 11.6642 27.8333 11.25V8.75C27.8333 8.33581 27.4751 8 27.0333 8H23.1207C22.8883 7.27869 22.5687 6.60962 22.1705 6H27.0333Z"
                                    fill="#7939CC" />
                            </g>
                        </svg>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="130" viewBox="0 0 6 130" fill="none">
                        <rect x="0.5" y="0.5" width="5" height="129" rx="2.5" fill="#7939CC" fill-opacity="0.4" />
                    </svg>
                    <div class="money_enter">
                        <input type="tel" placeholder="0" class="form-control" required>

                    </div>



                </div>
                <div class="my-5">
                    <button class="btn btn-outline-light rounded-pill" style="border-color: #7939CC ; color:#000"><b>+
                        </b><span>₹</span> 1000</button>
                    <button class="btn btn-outline-light rounded-pill" style="border-color: #7939CC ; color:#000"><b>+
                        </b><span>₹</span> 3000</button>
                    <button class="btn btn-outline-light rounded-pill" style="border-color: #7939CC ; color:#000"><b>+
                        </b><span>₹</span> 5000</button>
                    <button class="btn btn-outline-light rounded-pill" style="border-color: #7939CC ; color:#000"><b>+
                        </b><span>₹</span> 10,000</button>

                </div>


                <div class="apply-coupon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="30" viewBox="0 0 21 20" fill="none">
                        <path
                            d="M5.5026 6.86523C5.3921 6.86523 5.28612 6.90913 5.20798 6.98727C5.12984 7.06541 5.08594 7.17139 5.08594 7.2819V8.18685C5.08594 8.29736 5.12984 8.40334 5.20798 8.48148C5.28612 8.55962 5.3921 8.60352 5.5026 8.60352C5.61311 8.60352 5.71909 8.55962 5.79723 8.48148C5.87537 8.40334 5.91927 8.29736 5.91927 8.18685V7.2819C5.91927 7.17139 5.87537 7.06541 5.79723 6.98727C5.71909 6.90913 5.61311 6.86523 5.5026 6.86523Z"
                            fill="#7939CC" />
                        <path
                            d="M5.5026 9.12891C5.3921 9.12891 5.28612 9.1728 5.20798 9.25094C5.12984 9.32908 5.08594 9.43507 5.08594 9.54557V10.4505C5.08594 10.561 5.12984 10.667 5.20798 10.7451C5.28612 10.8233 5.3921 10.8672 5.5026 10.8672C5.61311 10.8672 5.71909 10.8233 5.79723 10.7451C5.87537 10.667 5.91927 10.561 5.91927 10.4505V9.54557C5.91927 9.43507 5.87537 9.32908 5.79723 9.25094C5.71909 9.1728 5.61311 9.12891 5.5026 9.12891Z"
                            fill="#7939CC" />
                        <path
                            d="M5.5026 11.3906C5.3921 11.3906 5.28612 11.4345 5.20798 11.5127C5.12984 11.5908 5.08594 11.6968 5.08594 11.8073V12.7122C5.08594 12.8227 5.12984 12.9287 5.20798 13.0069C5.28612 13.085 5.3921 13.1289 5.5026 13.1289C5.61311 13.1289 5.71909 13.085 5.79723 13.0069C5.87537 12.9287 5.91927 12.8227 5.91927 12.7122V11.8073C5.91927 11.6968 5.87537 11.5908 5.79723 11.5127C5.71909 11.4345 5.61311 11.3906 5.5026 11.3906Z"
                            fill="#7939CC" />
                        <path
                            d="M4.19727 2.08398C3.71195 2.12462 3.26981 2.44807 3.1084 2.93604L2.55339 4.61165C1.8767 4.66824 1.33594 5.2365 1.33594 5.92676V7.58447C1.33607 7.76526 1.45276 7.92534 1.62484 7.98079C2.14463 8.14856 2.58576 8.80159 2.58594 9.60107C2.58601 10.4008 2.1448 11.0544 1.62484 11.2222C1.45276 11.2776 1.33607 11.4377 1.33594 11.6185V14.1087C1.33594 14.8359 1.9344 15.4344 2.66162 15.4344H9.23958L16.314 17.8498C16.967 18.0728 17.6816 17.7078 17.8968 17.0571L18.4372 15.4246C19.1207 15.3752 19.6693 14.804 19.6693 14.1087V11.6177C19.6691 11.4369 19.5524 11.2768 19.3804 11.2214C18.8606 11.0536 18.4195 10.4006 18.4193 9.60107C18.4192 8.80134 18.8604 8.1478 19.3804 7.97998C19.5524 7.92453 19.6691 7.76445 19.6693 7.58366V5.92676C19.6693 5.19954 19.0708 4.60107 18.3436 4.60107H11.7673L4.69368 2.14339C4.52992 2.08604 4.35143 2.09329 4.19727 2.08398ZM4.2583 2.91081C4.31233 2.90712 4.3687 2.91423 4.42513 2.93278C6.02565 3.48856 7.62609 4.0449 9.22656 4.60107H3.43473L3.89941 3.19727C3.95541 3.02798 4.0962 2.92186 4.2583 2.91081ZM2.66162 5.43441H5.08594V5.83073C5.08594 6.06085 5.27249 6.2474 5.5026 6.2474C5.73272 6.2474 5.91927 6.06085 5.91927 5.83073V5.43441H18.3436C18.6236 5.43441 18.8359 5.64671 18.8359 5.92676V7.34522C18.0664 7.75064 17.5859 8.62437 17.5859 9.60107C17.5862 10.5775 18.0666 11.4509 18.8359 11.8561V14.1087C18.8359 14.3888 18.6236 14.6011 18.3436 14.6011H5.91846C5.92053 14.4573 5.91927 14.3093 5.91927 14.1641C5.91927 13.9339 5.73272 13.7474 5.5026 13.7474C5.27249 13.7474 5.08594 13.9339 5.08594 14.1641C5.0851 14.3087 5.08629 14.4582 5.08677 14.6011H2.66164C2.38151 14.6011 2.16927 14.3888 2.16927 14.1087V11.8569C2.9388 11.4515 3.41936 10.5778 3.41927 9.60107C3.41905 8.62468 2.93859 7.75129 2.16927 7.34603V5.92676C2.16927 5.64671 2.38157 5.43441 2.66162 5.43441ZM11.8185 15.4344H17.5558L17.1058 16.7951C17.031 17.0211 16.8041 17.1366 16.5833 17.0612L11.8185 15.4344Z"
                            fill="#7939CC" />
                        <path
                            d="M14.1572 10.6504C14.8989 10.6504 15.509 11.2604 15.509 12.0021C15.509 12.7438 14.8989 13.3547 14.1572 13.3547C13.4155 13.3547 12.8047 12.7438 12.8047 12.0021C12.8047 11.2604 13.4155 10.6504 14.1572 10.6504ZM14.1572 11.4837C13.8659 11.4837 13.638 11.7108 13.638 12.0021C13.638 12.2935 13.8659 12.5213 14.1572 12.5213C14.4486 12.5213 14.6756 12.2935 14.6756 12.0021C14.6756 11.7108 14.4486 11.4837 14.1572 11.4837Z"
                            fill="#7939CC" />
                        <path
                            d="M10.1885 6.68164C10.9302 6.68164 11.5402 7.29165 11.5402 8.03337C11.5402 8.77509 10.9302 9.38509 10.1885 9.38509C9.44675 9.38509 8.83594 8.77509 8.83594 8.03337C8.83594 7.29165 9.44676 6.68164 10.1885 6.68164ZM10.1885 7.51497C9.89713 7.51497 9.66927 7.74201 9.66927 8.03337C9.66927 8.32472 9.89713 8.55176 10.1885 8.55176C10.4798 8.55176 10.7069 8.32472 10.7069 8.03337C10.7069 7.74201 10.4798 7.51497 10.1885 7.51497Z"
                            fill="#7939CC" />
                        <path
                            d="M13.8557 7.73866L9.88763 11.7068C9.72496 11.8695 9.72496 12.1332 9.88763 12.2959C10.0503 12.4586 10.3141 12.4586 10.4768 12.2959L14.4449 8.32785C14.6076 8.16514 14.6076 7.90137 14.4449 7.73866C14.2747 7.58733 14.0162 7.57147 13.8557 7.73866Z"
                            fill="#7939CC" />
                    </svg>


                    <input type="text" placeholder="Apply Coupon Code" class="form-control w-100">
                    <button class="btn btn-primary">Apply</button>



                </div>
                <div class="my-5">
                    <a href="All_Coupons.php">All Coupons <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22 12C22 17.52 17.51 22 12 22L11.7202 21.9962C6.32942 21.8478 2 17.4264 2 12C2 6.49 6.48 2 12 2C17.51 2 22 6.49 22 12ZM10.02 8C9.73 8.3 9.73 8.77 10.03 9.06L12.98 12L10.03 14.94C9.73 15.23 9.73 15.71 10.02 16C10.32 16.3 10.79 16.3 11.08 16L14.57 12.53C14.71 12.39 14.79 12.2 14.79 12C14.79 11.8 14.71 11.61 14.57 11.47L11.08 8C10.94 7.85 10.75 7.78 10.56 7.78C10.36 7.78 10.17 7.85 10.02 8Z"
                                fill="currentColor" />
                        </svg></a>
                </div>


            </div>
            <div class="modal-footer mb-4">
                <button type="button" class="btn btn-primary m-auto" style="border-radius: 32px;
background: linear-gradient(93deg, #7939CC 0%, #008 100%);
box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.40);">Continue</button>
            </div>
        </div>
    </div>
</div>

<?php include("./include/footer.php")?>