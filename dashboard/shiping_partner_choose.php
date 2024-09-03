<?php include("./include/header.php")?>

<style>
    
    .btn-outline-light{
        white-space: nowrap;    }
    .min_charges small{
        color: #000;

        font-size: 14px;
    }
.rates_shipment p {
    color: #000;
}

a {
    color: inherit;
}

.shiping_my_details p {
    color: #e3e3e3;

}

.fa-indian-rupee-sign {
    font-size: 10px;
    /* margin-right:5px */
}

.shiping_my_details {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-bottom: 15px;


}

.realTime-track {
    display: flex;
    gap: 10px;
    width: 100%;
    height: fit-content;

}

.rates_shipment span {
    color: #7016d0;
}
.shiping-dates{
    display: flex;
    width: 100%;
gap: 15px;
justify-content: space-around;

    }
.money_overview .min_charges div{
    margin:8px 0;
}
@media (max-width: 767px) {

    p {
        margin: 0;
    }

    .overview_shipment .transparent_shipment {

        padding: 10px;
    }

    .shiping_my_details {

        margin-bottom: 15px;


    }

    .shipment_pic img {
        width: 50% !important;
    }

    .rates_shipment .shipment_pic {
        padding: 10px;

    }

    .overview_head_additional {

        margin: 10px 0;
    }

    .money_overview {
        padding: 12px;

    }

    .transparent_shipment h5 {
        color: #fff;
        font-size: 15px;
    }

    .fa-indian-rupee-sign {
        font-size: 10px;
        margin-right: 5px
    }

    .realTime-track {

        overflow: scroll;
    }

    .shiping-dates span {
        display: block;
    }
}
</style>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="row align-items-center">
                <div class="col">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-soft-light">
                            <li class="breadcrumb-item">Create New Order</li>
                            <li class="breadcrumb-item active" aria-current="page">Choose Shipping Partners</li>
                            <li class="breadcrumb-item" aria-current="page">Create Order Details</li>
                        </ol>
                    </nav>
                </div>

            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="overview_shipment">
                        <div class="transparent_shipment">
                            <div class="d-flex justify-content-between flex-lg-nowrap flex-wrap gap-5">
                                <div class="shiping_my_details">
                                    <div class="mr-5">
                                        <p>Pickup From</p>
                                        <h5>110006, Delhi</h5>
                                    </div>
                                    <div>
                                        <h3 class="mr-5">
                                            <i class="fa-solid fa-circle-arrow-right text-white"></i>

                                        </h3>
                                    </div>
                                    <div class="mr-5">
                                        <p>Deliver To</p>
                                        <h5>226013,Uttar Pradesh</h5>
                                    </div>

                                </div>
                                <div class="border-end"></div>
                                <div class="shiping_my_details">
                                    <div class="mr-5">
                                        <p>Order Value</p>
                                        <h5> 4400</h5>
                                    </div>
                                    <div class="mr-5">
                                        <p>Payment Mode</p>
                                        <h5>Prepaid</h5>
                                    </div>
                                    <div class="mr-5">
                                        <p>Dead Weight</p>
                                        <h5>50kg</h5>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>


            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="d-flex justify-content-between gap-1">

                        <select class="form-select form-control w-100">
                            <option selected=""> Shiping Partner</option>
                            <option value="1">Postpaid</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>


                        <select class="form-select form-control">
                            <option selected=""> Mode</option>
                            <option value="1">Postpaid</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <select class="form-select form-control">
                            <option selected="">Sort by</option>
                            <option value="1">High to Low</option>
                            <option value="2">Low to High</option>
                            <option value="3">default</option>
                        </select>

                    </div>

                </div>
                <!-- <div class="col-md-4"></div> -->

                <!-- <div class="col-md-2">
                    
                </div> -->
            </div>
            <a href="create_order_detail_b2c.php">
                <div class="rates_shipment">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="shipment_pic">
                                <img src="../assets/images/index/deliverey.png" alt="" srcset="" class="w-75 mb-3">
                                <h5><b>B2C</b></h5>
                                <p>Minimum weight: <span>20kg</span></p>
                                <div>
                                    <p>Vol.weight: <span>55kg</span></p>
                                    <p>charged weight: <span>55kg</span></p>

                                </div>
                            </div>

                        </div>


                        <div class="col-md-6">
                            <div class="overview_head_additional">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div style="position: relative" ;>
                                            <h4 class="my-3">Overheads</h4>
                                            <p>Docket Charge(6.5/kg):<span><i
                                                        class="fa-solid fa-indian-rupee-sign"></i>325</span></p>
                                            <p>Weight Charge(6.5/kg):<span><i
                                                        class="fa-solid fa-indian-rupee-sign"></i>325</span></p>
                                            <p>Fuel Charge:<span><i class="fa-solid fa-indian-rupee-sign"></i>325</span>
                                            </p>
                                            <p>ROV Charge:<span><i class="fa-solid fa-indian-rupee-sign"></i>325</span>
                                            </p>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="position: relative" ;>
                                            <h4 class="my-3">Additional</h3>
                                                <p>ODA Charge:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>325</span>
                                                </p>
                                                <p>COD Charges:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>325</span>
                                                </p>
                                                <p>Handling charges:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>325</span></p>
                                                <p>Green Tax:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>325</span>
                                                </p>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="col-md-3">
                            <div class="money_overview">
                                <div class="min_charges">
                                    <div>
                                        <h3 class="text-white"> <i class="fa-solid fa-indian-rupee-sign"></i><b> 685</b></h3>
                                    </div>
                                    <div>
                                        <small class="text-white">Min charge:</small> <span class="text-white"><i class="fa-solid fa-indian-rupee-sign"></i> 325 + GST
                                        </span>
                                    </div>
                                    <div>
                                        <small class="text-white" >GST:</small> <span class="text-white"> <i class="fa-solid fa-indian-rupee-sign"></i> 325 + GST
                                        </span>

                                    </div>
                                    <div>
                                        <small class="text-white">Zone: </small> <span class="text-white"> <i class="fa-solid fa-location-dot"></i> N1 To N3</span>

                                    </div>
                                </div>

                                <div class="rating">
                                    <p class="text-white" >Rating</p>
                                    <h4 class="text-white">9.8</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated"
                                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 75%"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="bottom_tracking d-flex gap-2 justify-content-between flex-wrap flex-lg-nowrap">
                        <div class="realTime-track">
                            <button class="btn btn-outline-light" style="color: #000">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                    fill="none">
                                    <path
                                        d="M23.5 16.5C23.5 15.0166 23.0601 13.5666 22.236 12.3332C21.4119 11.0999 20.2406 10.1386 18.8701 9.57091C17.4997 9.00325 15.9917 8.85472 14.5368 9.14411C13.082 9.4335 11.7456 10.1478 10.6967 11.1967C9.64781 12.2456 8.9335 13.582 8.64411 15.0368C8.35472 16.4917 8.50325 17.9997 9.07091 19.3701C9.63856 20.7406 10.5999 21.9119 11.8332 22.736C13.0666 23.5601 14.5166 24 16 24C17.9884 23.9976 19.8947 23.2067 21.3007 21.8007C22.7067 20.3947 23.4976 18.4884 23.5 16.5ZM16 23C14.7144 23 13.4577 22.6188 12.3888 21.9046C11.3199 21.1903 10.4868 20.1752 9.99479 18.9874C9.50282 17.7997 9.3741 16.4928 9.6249 15.2319C9.8757 13.971 10.4948 12.8129 11.4038 11.9038C12.3129 10.9948 13.471 10.3757 14.7319 10.1249C15.9928 9.8741 17.2997 10.0028 18.4874 10.4948C19.6752 10.9868 20.6903 11.8199 21.4046 12.8888C22.1188 13.9577 22.5 15.2144 22.5 16.5C22.498 18.2233 21.8126 19.8754 20.594 21.094C19.3754 22.3126 17.7233 22.998 16 23Z"
                                        fill="url(#paint0_linear_827_2582)" />
                                    <path
                                        d="M16 11C14.9122 11 13.8488 11.3226 12.9444 11.9269C12.0399 12.5313 11.3349 13.3902 10.9187 14.3952C10.5024 15.4002 10.3935 16.5061 10.6057 17.573C10.8179 18.6399 11.3417 19.6199 12.1109 20.3891C12.8801 21.1583 13.8601 21.6821 14.927 21.8943C15.9939 22.1065 17.0998 21.9976 18.1048 21.5813C19.1098 21.1651 19.9687 20.4601 20.5731 19.5556C21.1774 18.6512 21.5 17.5878 21.5 16.5C21.4983 15.0418 20.9183 13.6439 19.8872 12.6128C18.8561 11.5817 17.4582 11.0017 16 11ZM19 17H17.408C17.3241 17.2387 17.1811 17.4523 16.9922 17.6207C16.8034 17.7891 16.5749 17.9069 16.3282 17.9631C16.0814 18.0192 15.8245 18.0119 15.5814 17.9417C15.3383 17.8716 15.1169 17.741 14.938 17.562C14.759 17.3831 14.6284 17.1618 14.5583 16.9186C14.4881 16.6755 14.4808 16.4186 14.5369 16.1718C14.5931 15.9251 14.7109 15.6966 14.8793 15.5078C15.0477 15.3189 15.2613 15.1759 15.5 15.092V12H16.5V15.092C16.7091 15.1667 16.8991 15.2869 17.0561 15.4439C17.2131 15.6009 17.3333 15.7909 17.408 16H19V17Z"
                                        fill="url(#paint1_linear_827_2582)" />
                                    <path d="M13.1886 3.5L13.6886 2.5H5.30859L5.80859 3.5H13.1886Z"
                                        fill="url(#paint2_linear_827_2582)" />
                                    <path
                                        d="M7.5 16.5C7.50317 14.2466 8.39973 12.0865 9.9931 10.4931C11.5865 8.89973 13.7466 8.00317 16 8C16.3343 8.00141 16.6683 8.02311 17 8.065V3C17 2.86739 16.9473 2.74021 16.8536 2.64645C16.7598 2.55268 16.6326 2.5 16.5 2.5H14.81L13.945 4.225C13.904 4.3079 13.8406 4.37762 13.7619 4.42624C13.6832 4.47485 13.5925 4.50041 13.5 4.5H5.5C5.40752 4.50041 5.31678 4.47485 5.23811 4.42624C5.15944 4.37762 5.096 4.3079 5.055 4.225L4.19 2.5H2.5C2.36739 2.5 2.24021 2.55268 2.14645 2.64645C2.05268 2.74021 2 2.86739 2 3V30C2 30.1326 2.05268 30.2598 2.14645 30.3536C2.24021 30.4473 2.36739 30.5 2.5 30.5H16.5C16.6326 30.5 16.7598 30.4473 16.8536 30.3536C16.9473 30.2598 17 30.1326 17 30V24.935C16.6683 24.9769 16.3343 24.9986 16 25C13.7466 24.9968 11.5865 24.1003 9.9931 22.5069C8.39973 20.9135 7.50317 18.7534 7.5 16.5Z"
                                        fill="url(#paint3_linear_827_2582)" />
                                    <path
                                        d="M25.4042 23.0742L22.5742 25.9042L26.8192 30.1442C27.0011 30.345 27.2219 30.5067 27.4683 30.6196C27.7146 30.7324 27.9812 30.794 28.2521 30.8007C28.5229 30.8074 28.7923 30.7589 29.0439 30.6584C29.2954 30.5578 29.524 30.4071 29.7155 30.2155C29.9071 30.024 30.0578 29.7954 30.1584 29.5439C30.2589 29.2923 30.3074 29.0229 30.3007 28.7521C30.294 28.4812 30.2324 28.2146 30.1196 27.9683C30.0067 27.7219 29.845 27.5011 29.6442 27.3192L25.4042 23.0742ZM28.5852 29.7922L24.3427 25.5492L25.0492 24.8427L29.2917 29.0852L28.5852 29.7922Z"
                                        fill="url(#paint4_linear_827_2582)" />
                                    <path
                                        d="M16 17C16.2761 17 16.5 16.7761 16.5 16.5C16.5 16.2239 16.2761 16 16 16C15.7239 16 15.5 16.2239 15.5 16.5C15.5 16.7761 15.7239 17 16 17Z"
                                        fill="url(#paint5_linear_827_2582)" />
                                    <path
                                        d="M23.9889 23.0739L22.6689 21.7539C22.2538 22.279 21.779 22.7538 21.2539 23.1689L22.5739 24.4889L23.9889 23.0739Z"
                                        fill="url(#paint6_linear_827_2582)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_827_2582" x1="16" y1="9" x2="16" y2="24"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7939CC" />
                                            <stop offset="1" stop-color="#3D1D66" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_827_2582" x1="16" y1="11" x2="16" y2="22"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7939CC" />
                                            <stop offset="1" stop-color="#3D1D66" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_827_2582" x1="9.49859" y1="2.5" x2="9.49859"
                                            y2="3.5" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7939CC" />
                                            <stop offset="1" stop-color="#3D1D66" />
                                        </linearGradient>
                                        <linearGradient id="paint3_linear_827_2582" x1="9.5" y1="2.5" x2="9.5" y2="30.5"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7939CC" />
                                            <stop offset="1" stop-color="#3D1D66" />
                                        </linearGradient>
                                        <linearGradient id="paint4_linear_827_2582" x1="26.4378" y1="23.0742"
                                            x2="26.4378" y2="30.8013" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7939CC" />
                                            <stop offset="1" stop-color="#3D1D66" />
                                        </linearGradient>
                                        <linearGradient id="paint5_linear_827_2582" x1="16" y1="16" x2="16" y2="17"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7939CC" />
                                            <stop offset="1" stop-color="#3D1D66" />
                                        </linearGradient>
                                        <linearGradient id="paint6_linear_827_2582" x1="22.6214" y1="21.7539"
                                            x2="22.6214" y2="24.4889" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7939CC" />
                                            <stop offset="1" stop-color="#3D1D66" />
                                        </linearGradient>
                                    </defs>
                                </svg>Real Time Tracking</button>
                            <button class="btn btn-outline-light" style="color: #000"">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                fill="none">
                                <path
                                    d="M16 1.5C13.0333 1.5 10.1332 2.37973 7.66645 4.02796C5.19972 5.67618 3.27713 8.01886 2.14181 10.7597C1.0065 13.5006 0.709449 16.5166 1.28823 19.4264C1.86701 22.3361 3.29562 25.0088 5.3934 27.1066C7.49119 29.2044 10.1639 30.633 13.0737 31.2118C15.9834 31.7906 18.9994 31.4935 21.7403 30.3582C24.4812 29.2229 26.8238 27.3003 28.4721 24.8336C30.1203 22.3668 31 19.4667 31 16.5C31 12.5218 29.4197 8.70644 26.6066 5.8934C23.7936 3.08035 19.9783 1.5 16 1.5ZM16.643 10.714C18.0065 10.7156 19.3137 11.2579 20.2779 12.2221C21.2421 13.1863 21.7844 14.4935 21.786 15.857H20.5C20.4989 14.8344 20.0922 13.854 19.3691 13.1309C18.646 12.4078 17.6656 12.0011 16.643 12V10.714ZM20.808 25.5C20.769 25.5 16.908 25.434 11.943 20.557C7.06601 15.594 7.00001 11.731 7.00001 11.692C7.00001 11.211 10 7.5 10.663 7.5C10.893 7.5 11.072 7.656 11.268 7.89C11.74 8.452 13.827 11.746 13.731 12.295C13.685 12.553 13.466 12.749 12.838 13.276C12.5286 13.5193 12.239 13.7868 11.972 14.076C12.0999 14.6052 12.2898 15.1174 12.538 15.602C13.4625 17.5029 14.9986 19.0383 16.9 19.962C17.3846 20.2102 17.8968 20.4001 18.426 20.528C18.7152 20.261 18.9827 19.9714 19.226 19.662C19.753 19.034 19.949 18.815 20.207 18.769C20.756 18.669 24.05 20.76 24.612 21.232C24.846 21.432 25.002 21.607 25.002 21.837C25 22.5 21.289 25.5 20.808 25.5ZM23.714 15.857C23.7119 13.9823 22.9662 12.185 21.6406 10.8594C20.315 9.53378 18.5177 8.78812 16.643 8.786V7.5C18.8586 7.50265 20.9827 8.38396 22.5494 9.95063C24.116 11.5173 24.9974 13.6414 25 15.857H23.714Z"
                                    fill="url(#paint0_linear_827_2577)" />
                                <defs>
                                    <linearGradient id="paint0_linear_827_2577" x1="16" y1="1.5" x2="16" y2="31.5"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#7939CC" />
                                        <stop offset="1" stop-color="#3D1D66" />
                                    </linearGradient>
                                </defs>
                                </svg>Call Before Delivery : Available
                            </button>
                            <button class="btn btn-outline-light" style="color: #000"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                    fill="none">
                                    <path
                                        d="M26.9818 5.5918H5.01818C2.25455 5.5918 0 7.84634 0 10.61V22.4282C0 25.1554 2.25455 27.41 5.01818 27.41H27.0182C29.7455 27.41 32 25.1554 32 22.3918V10.61C32 7.84634 29.7455 5.5918 26.9818 5.5918ZM19.1636 12.9009H24.6182C25.1636 12.9009 25.6364 13.3373 25.6364 13.9191C25.6364 14.5009 25.2 14.9373 24.6182 14.9373H19.1636C18.6182 14.9373 18.1455 14.5009 18.1455 13.9191C18.1455 13.3373 18.6182 12.9009 19.1636 12.9009ZM14.9455 16.5009C14.9455 19.3736 12.6545 21.7009 9.78182 21.7009C6.90909 21.7373 4.54545 19.41 4.54545 16.5373C4.50909 13.6645 6.83636 11.3009 9.70909 11.3009C12.5818 11.2645 14.9091 13.5918 14.9455 16.4645V16.5009ZM25.0182 20.1009H19.1636C18.6182 20.1009 18.1455 19.6645 18.1455 19.0827C18.1455 18.5009 18.5818 18.0645 19.1636 18.0645H25.0182C25.5636 18.0645 26.0364 18.5009 26.0364 19.0827C26.0364 19.6645 25.5636 20.1009 25.0182 20.1009Z"
                                        fill="url(#paint0_linear_827_2571)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_827_2571" x1="16" y1="5.5918" x2="16"
                                            y2="27.41" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7939CC" />
                                            <stop offset="1" stop-color="#3D1D66" />
                                        </linearGradient>
                                    </defs>
                                </svg>POD: Instant</button>

                        </div>
                        <div class="shiping-dates">
                            <p>Estimated Date : <span>26 Mar, 2024</span></p>

                            <p>Pickup Delivery: <span>Tomorrow</span></p>
                        </div>
                    </div>

                </div>
            </a>
            <a href="create_order_detail_b2b.php">
            <div class="rates_shipment">

<div class="row">
    <div class="col-md-3">
        <div class="shipment_pic">
            <img src="../assets/images/index/deliverey.png" alt="" srcset="" class="w-75 mb-3">
            <h5><b>B2B</b></h5>
            <p>Minimum weight: <span>20kg</span></p>
            <div>
                <p>Vol.weight: <span>55kg</span></p>
                <p>charged weight: <span>55kg</span></p>

            </div>
        </div>

    </div>


    <div class="col-md-6">
        <div class="overview_head_additional">
            <div class="row">
                <div class="col-md-6">
                    <div style="position: relative" ;>
                        <h4 class="my-3">Overheads</h4>
                        <p>Docket Charge(6.5/kg):<span><i
                                    class="fa-solid fa-indian-rupee-sign"></i>325</span></p>
                        <p>Weight Charge(6.5/kg):<span><i
                                    class="fa-solid fa-indian-rupee-sign"></i>325</span></p>
                        <p>Fuel Charge:<span><i class="fa-solid fa-indian-rupee-sign"></i>325</span>
                        </p>
                        <p>ROV Charge:<span><i class="fa-solid fa-indian-rupee-sign"></i>325</span>
                        </p>


                    </div>
                </div>
                <div class="col-md-6">
                    <div style="position: relative" ;>
                        <h4 class="my-3">Additional</h3>
                            <p>ODA Charge:<span><i
                                        class="fa-solid fa-indian-rupee-sign"></i>325</span>
                            </p>
                            <p>COD Charges:<span><i
                                        class="fa-solid fa-indian-rupee-sign"></i>325</span>
                            </p>
                            <p>Handling charges:<span><i
                                        class="fa-solid fa-indian-rupee-sign"></i>325</span></p>
                            <p>Green Tax:<span><i
                                        class="fa-solid fa-indian-rupee-sign"></i>325</span>
                            </p>

                    </div>
                </div>

            </div>
        </div>


    </div>
    <div class="col-md-3">
                            <div class="money_overview">
                                <div class="min_charges">
                                    <div>
                                        <h3 class="text-white"> <i class="fa-solid fa-indian-rupee-sign"></i><b> 1800</b></h3>
                                    </div>
                                    <div>
                                        <small class="text-white">Min charge:</small> <span class="text-white"><i class="fa-solid fa-indian-rupee-sign"></i> 325 + GST
                                        </span>
                                    </div>
                                    <div>
                                        <small class="text-white" >GST:</small> <span class="text-white"> <i class="fa-solid fa-indian-rupee-sign"></i> 325 + GST
                                        </span>

                                    </div>
                                    <div>
                                        <small class="text-white">Zone: </small> <span class="text-white"> <i class="fa-solid fa-location-dot"></i> N1 To N3</span>

                                    </div>
                                </div>

                                <div class="rating">
                                    <p class="text-white" >Rating</p>
                                    <h4 class="text-white">9.8</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated"
                                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 75%"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
</div>
<hr />

<div class="bottom_tracking d-flex gap-2 justify-content-between flex-wrap flex-lg-nowrap">
    <div class="realTime-track">
        <button class="btn btn-outline-light" style="color: #000">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                fill="none">
                <path
                    d="M23.5 16.5C23.5 15.0166 23.0601 13.5666 22.236 12.3332C21.4119 11.0999 20.2406 10.1386 18.8701 9.57091C17.4997 9.00325 15.9917 8.85472 14.5368 9.14411C13.082 9.4335 11.7456 10.1478 10.6967 11.1967C9.64781 12.2456 8.9335 13.582 8.64411 15.0368C8.35472 16.4917 8.50325 17.9997 9.07091 19.3701C9.63856 20.7406 10.5999 21.9119 11.8332 22.736C13.0666 23.5601 14.5166 24 16 24C17.9884 23.9976 19.8947 23.2067 21.3007 21.8007C22.7067 20.3947 23.4976 18.4884 23.5 16.5ZM16 23C14.7144 23 13.4577 22.6188 12.3888 21.9046C11.3199 21.1903 10.4868 20.1752 9.99479 18.9874C9.50282 17.7997 9.3741 16.4928 9.6249 15.2319C9.8757 13.971 10.4948 12.8129 11.4038 11.9038C12.3129 10.9948 13.471 10.3757 14.7319 10.1249C15.9928 9.8741 17.2997 10.0028 18.4874 10.4948C19.6752 10.9868 20.6903 11.8199 21.4046 12.8888C22.1188 13.9577 22.5 15.2144 22.5 16.5C22.498 18.2233 21.8126 19.8754 20.594 21.094C19.3754 22.3126 17.7233 22.998 16 23Z"
                    fill="url(#paint0_linear_827_2582)" />
                <path
                    d="M16 11C14.9122 11 13.8488 11.3226 12.9444 11.9269C12.0399 12.5313 11.3349 13.3902 10.9187 14.3952C10.5024 15.4002 10.3935 16.5061 10.6057 17.573C10.8179 18.6399 11.3417 19.6199 12.1109 20.3891C12.8801 21.1583 13.8601 21.6821 14.927 21.8943C15.9939 22.1065 17.0998 21.9976 18.1048 21.5813C19.1098 21.1651 19.9687 20.4601 20.5731 19.5556C21.1774 18.6512 21.5 17.5878 21.5 16.5C21.4983 15.0418 20.9183 13.6439 19.8872 12.6128C18.8561 11.5817 17.4582 11.0017 16 11ZM19 17H17.408C17.3241 17.2387 17.1811 17.4523 16.9922 17.6207C16.8034 17.7891 16.5749 17.9069 16.3282 17.9631C16.0814 18.0192 15.8245 18.0119 15.5814 17.9417C15.3383 17.8716 15.1169 17.741 14.938 17.562C14.759 17.3831 14.6284 17.1618 14.5583 16.9186C14.4881 16.6755 14.4808 16.4186 14.5369 16.1718C14.5931 15.9251 14.7109 15.6966 14.8793 15.5078C15.0477 15.3189 15.2613 15.1759 15.5 15.092V12H16.5V15.092C16.7091 15.1667 16.8991 15.2869 17.0561 15.4439C17.2131 15.6009 17.3333 15.7909 17.408 16H19V17Z"
                    fill="url(#paint1_linear_827_2582)" />
                <path d="M13.1886 3.5L13.6886 2.5H5.30859L5.80859 3.5H13.1886Z"
                    fill="url(#paint2_linear_827_2582)" />
                <path
                    d="M7.5 16.5C7.50317 14.2466 8.39973 12.0865 9.9931 10.4931C11.5865 8.89973 13.7466 8.00317 16 8C16.3343 8.00141 16.6683 8.02311 17 8.065V3C17 2.86739 16.9473 2.74021 16.8536 2.64645C16.7598 2.55268 16.6326 2.5 16.5 2.5H14.81L13.945 4.225C13.904 4.3079 13.8406 4.37762 13.7619 4.42624C13.6832 4.47485 13.5925 4.50041 13.5 4.5H5.5C5.40752 4.50041 5.31678 4.47485 5.23811 4.42624C5.15944 4.37762 5.096 4.3079 5.055 4.225L4.19 2.5H2.5C2.36739 2.5 2.24021 2.55268 2.14645 2.64645C2.05268 2.74021 2 2.86739 2 3V30C2 30.1326 2.05268 30.2598 2.14645 30.3536C2.24021 30.4473 2.36739 30.5 2.5 30.5H16.5C16.6326 30.5 16.7598 30.4473 16.8536 30.3536C16.9473 30.2598 17 30.1326 17 30V24.935C16.6683 24.9769 16.3343 24.9986 16 25C13.7466 24.9968 11.5865 24.1003 9.9931 22.5069C8.39973 20.9135 7.50317 18.7534 7.5 16.5Z"
                    fill="url(#paint3_linear_827_2582)" />
                <path
                    d="M25.4042 23.0742L22.5742 25.9042L26.8192 30.1442C27.0011 30.345 27.2219 30.5067 27.4683 30.6196C27.7146 30.7324 27.9812 30.794 28.2521 30.8007C28.5229 30.8074 28.7923 30.7589 29.0439 30.6584C29.2954 30.5578 29.524 30.4071 29.7155 30.2155C29.9071 30.024 30.0578 29.7954 30.1584 29.5439C30.2589 29.2923 30.3074 29.0229 30.3007 28.7521C30.294 28.4812 30.2324 28.2146 30.1196 27.9683C30.0067 27.7219 29.845 27.5011 29.6442 27.3192L25.4042 23.0742ZM28.5852 29.7922L24.3427 25.5492L25.0492 24.8427L29.2917 29.0852L28.5852 29.7922Z"
                    fill="url(#paint4_linear_827_2582)" />
                <path
                    d="M16 17C16.2761 17 16.5 16.7761 16.5 16.5C16.5 16.2239 16.2761 16 16 16C15.7239 16 15.5 16.2239 15.5 16.5C15.5 16.7761 15.7239 17 16 17Z"
                    fill="url(#paint5_linear_827_2582)" />
                <path
                    d="M23.9889 23.0739L22.6689 21.7539C22.2538 22.279 21.779 22.7538 21.2539 23.1689L22.5739 24.4889L23.9889 23.0739Z"
                    fill="url(#paint6_linear_827_2582)" />
                <defs>
                    <linearGradient id="paint0_linear_827_2582" x1="16" y1="9" x2="16" y2="24"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7939CC" />
                        <stop offset="1" stop-color="#3D1D66" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_827_2582" x1="16" y1="11" x2="16" y2="22"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7939CC" />
                        <stop offset="1" stop-color="#3D1D66" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_827_2582" x1="9.49859" y1="2.5" x2="9.49859"
                        y2="3.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7939CC" />
                        <stop offset="1" stop-color="#3D1D66" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_827_2582" x1="9.5" y1="2.5" x2="9.5" y2="30.5"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7939CC" />
                        <stop offset="1" stop-color="#3D1D66" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_827_2582" x1="26.4378" y1="23.0742"
                        x2="26.4378" y2="30.8013" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7939CC" />
                        <stop offset="1" stop-color="#3D1D66" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_827_2582" x1="16" y1="16" x2="16" y2="17"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7939CC" />
                        <stop offset="1" stop-color="#3D1D66" />
                    </linearGradient>
                    <linearGradient id="paint6_linear_827_2582" x1="22.6214" y1="21.7539"
                        x2="22.6214" y2="24.4889" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7939CC" />
                        <stop offset="1" stop-color="#3D1D66" />
                    </linearGradient>
                </defs>
            </svg>Real Time Tracking</button>
        <button class="btn btn-outline-light" style="color: #000"">
            <svg xmlns=" http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
            fill="none">
            <path
                d="M16 1.5C13.0333 1.5 10.1332 2.37973 7.66645 4.02796C5.19972 5.67618 3.27713 8.01886 2.14181 10.7597C1.0065 13.5006 0.709449 16.5166 1.28823 19.4264C1.86701 22.3361 3.29562 25.0088 5.3934 27.1066C7.49119 29.2044 10.1639 30.633 13.0737 31.2118C15.9834 31.7906 18.9994 31.4935 21.7403 30.3582C24.4812 29.2229 26.8238 27.3003 28.4721 24.8336C30.1203 22.3668 31 19.4667 31 16.5C31 12.5218 29.4197 8.70644 26.6066 5.8934C23.7936 3.08035 19.9783 1.5 16 1.5ZM16.643 10.714C18.0065 10.7156 19.3137 11.2579 20.2779 12.2221C21.2421 13.1863 21.7844 14.4935 21.786 15.857H20.5C20.4989 14.8344 20.0922 13.854 19.3691 13.1309C18.646 12.4078 17.6656 12.0011 16.643 12V10.714ZM20.808 25.5C20.769 25.5 16.908 25.434 11.943 20.557C7.06601 15.594 7.00001 11.731 7.00001 11.692C7.00001 11.211 10 7.5 10.663 7.5C10.893 7.5 11.072 7.656 11.268 7.89C11.74 8.452 13.827 11.746 13.731 12.295C13.685 12.553 13.466 12.749 12.838 13.276C12.5286 13.5193 12.239 13.7868 11.972 14.076C12.0999 14.6052 12.2898 15.1174 12.538 15.602C13.4625 17.5029 14.9986 19.0383 16.9 19.962C17.3846 20.2102 17.8968 20.4001 18.426 20.528C18.7152 20.261 18.9827 19.9714 19.226 19.662C19.753 19.034 19.949 18.815 20.207 18.769C20.756 18.669 24.05 20.76 24.612 21.232C24.846 21.432 25.002 21.607 25.002 21.837C25 22.5 21.289 25.5 20.808 25.5ZM23.714 15.857C23.7119 13.9823 22.9662 12.185 21.6406 10.8594C20.315 9.53378 18.5177 8.78812 16.643 8.786V7.5C18.8586 7.50265 20.9827 8.38396 22.5494 9.95063C24.116 11.5173 24.9974 13.6414 25 15.857H23.714Z"
                fill="url(#paint0_linear_827_2577)" />
            <defs>
                <linearGradient id="paint0_linear_827_2577" x1="16" y1="1.5" x2="16" y2="31.5"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#7939CC" />
                    <stop offset="1" stop-color="#3D1D66" />
                </linearGradient>
            </defs>
            </svg>Call Before Delivery : Available
        </button>
        <button class="btn btn-outline-light" style="color: #000"><svg
                xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                fill="none">
                <path
                    d="M26.9818 5.5918H5.01818C2.25455 5.5918 0 7.84634 0 10.61V22.4282C0 25.1554 2.25455 27.41 5.01818 27.41H27.0182C29.7455 27.41 32 25.1554 32 22.3918V10.61C32 7.84634 29.7455 5.5918 26.9818 5.5918ZM19.1636 12.9009H24.6182C25.1636 12.9009 25.6364 13.3373 25.6364 13.9191C25.6364 14.5009 25.2 14.9373 24.6182 14.9373H19.1636C18.6182 14.9373 18.1455 14.5009 18.1455 13.9191C18.1455 13.3373 18.6182 12.9009 19.1636 12.9009ZM14.9455 16.5009C14.9455 19.3736 12.6545 21.7009 9.78182 21.7009C6.90909 21.7373 4.54545 19.41 4.54545 16.5373C4.50909 13.6645 6.83636 11.3009 9.70909 11.3009C12.5818 11.2645 14.9091 13.5918 14.9455 16.4645V16.5009ZM25.0182 20.1009H19.1636C18.6182 20.1009 18.1455 19.6645 18.1455 19.0827C18.1455 18.5009 18.5818 18.0645 19.1636 18.0645H25.0182C25.5636 18.0645 26.0364 18.5009 26.0364 19.0827C26.0364 19.6645 25.5636 20.1009 25.0182 20.1009Z"
                    fill="url(#paint0_linear_827_2571)" />
                <defs>
                    <linearGradient id="paint0_linear_827_2571" x1="16" y1="5.5918" x2="16"
                        y2="27.41" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7939CC" />
                        <stop offset="1" stop-color="#3D1D66" />
                    </linearGradient>
                </defs>
            </svg>POD: Instant</button>

    </div>
    <div class="shiping-dates">
        <p>Estimated Date : <span>26 Mar, 2024</span></p>

        <p>Pickup Delivery: <span>Tomorrow</span></p>
    </div>
</div>

</div>
            </a>



        </div>
    </div>
</div>
<?php include("./include/footer.php")?>