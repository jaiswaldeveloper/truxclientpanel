<?php include("./include/header.php")?>
<style>
.accordion-button {
    background: #f0e7fa;
}

.accordion-item {
    margin-bottom: 1rem;
}

.accordion-body {
    background: #fff;
}

#displayValues {
    position: relative;
}

#displayValues .d-length {
    position: absolute;
    right: 14%;
    font-size: 16px;
    top: -24px;
}

#displayValues .d-width {
    position: absolute;
    right: 3%;
    font-size: 16px;
    top: -27px;
}

#displayValues .d-height {
    position: absolute;
    right: 0%;
    font-size: 16px;
    top: -75px;
}
</style>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="row align-items-center mb-2">
                <div class="col">
                    <h4 class="mb-4">Shipping Rate Calculator</h4>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-7">
                    <div class="order_create">
                        <form class="rate_form ">
                            <div class="form_flex">
                                <div class="form-group w-100">
                                    <label>Pick-up Area Pin code*</label>
                                    <input type="text" placeholder="Enter 6 Digit area Pin Code " class="form-control"
                                        required>
                                </div>
                                <div class="form-group w-100">
                                    <label>Drop Area Pincode*</label>
                                    <input type="text" placeholder="Enter 6 Digit area Drop Pincode "
                                        class="form-control" required>
                                </div>
                            </div>


                            <div class="form_flex">
                                <div class="form-group w-100">
                                    <label class="form-label">Payment Mode*</label>
                                    <select class="form-select form-control">
                                        <option selected="">Prepaid</option>
                                        <option value="1">Postpaid</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="form-group w-100">
                                    <label>Approx Weight(Kg)*</label>
                                    <input type="text" placeholder="Enter Weight " class="form-control" required>
                                </div>

                            </div>

                            <div class="form-group w-100">
                                <label>Invoice Value*</label>
                                <input type="text" placeholder="Enter Invoice Value " class="form-control" required>
                            </div>


                            <div class="demission_area mt-3">
                                <h4 class="text-white">Dimensions in cms</h4>

                                <div class="form_flex mt-4">
                                    <div class="form-group w-100">
                                        <label>Qty</label>
                                        <input type="number" id="qty" placeholder="Qty " class="form-control area-dem"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Length</label>
                                        <input type="number" id="length" placeholder="L " class="form-control area-dem"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Width</label>
                                        <input type="number" id="width" placeholder=" W " class="form-control area-dem"
                                            required>
                                    </div>
                                    <div class="form-group w-100  ">
                                        <label>Height</label>
                                        <input type="number" id="height" placeholder=" H " class="form-control area-dem"
                                            required>
                                    </div>
                                    <div class="border-end">

                                    </div>
                                    <div class="demsion-image ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"
                                            viewBox="0 0 232 232" fill="none">
                                            <g filter="url(#filter0_b_619_9979)">
                                                <rect width="232" height="232" rx="8"
                                                    fill="url(#paint0_radial_619_9979)" />
                                                <path
                                                    d="M166.288 72.6046C166.288 76.1686 164.379 79.4027 161.353 81.0527L149.904 87.2568L140.165 92.4709L119.965 103.427C117.793 104.615 115.425 105.209 112.99 105.209C110.556 105.209 108.187 104.615 106.015 103.427L64.6276 81.0527C61.6009 79.4027 59.6927 76.1686 59.6927 72.6046C59.6927 69.0405 61.6009 65.8064 64.6276 64.1564L77.5901 57.1603L87.9206 51.5502L106.015 41.782C110.358 39.406 115.622 39.406 119.965 41.782L161.353 64.1564C164.379 65.8064 166.288 69.0405 166.288 72.6046ZM99.1789 111.202L60.6863 91.8637C57.7253 90.3457 54.3037 90.5437 51.4744 92.2597C48.645 93.9757 47 97.0118 47 100.312V136.81C47 143.147 50.4874 148.823 56.1461 151.661L94.6387 170.933C95.9547 171.593 97.4023 171.923 98.8499 171.923C100.561 171.923 102.271 171.461 103.785 170.471C106.614 168.755 108.259 165.719 108.259 162.419V125.92C108.325 119.716 104.838 114.04 99.1789 111.202ZM179 100.391V136.89C179 143.16 175.519 148.836 169.86 151.674L131.368 171.012C129.922 171.733 128.315 172.069 126.702 171.988C125.089 171.907 123.523 171.412 122.156 170.55C119.392 168.834 117.682 165.798 117.682 162.498V126.065C117.682 119.729 121.169 114.053 126.828 111.215L140.975 104.153L150.844 99.203L165.32 91.9429C168.281 90.4249 171.703 90.5569 174.532 92.3389C177.296 94.0549 179 97.091 179 100.391Z"
                                                    fill="white" />
                                                <path
                                                    d="M145.642 88.9058L135.903 94.1199L73.3281 58.8093L83.6586 53.1992L144.062 87.3878C144.72 87.7838 145.247 88.3118 145.642 88.9058ZM146.556 100.845V115.828C146.556 118.534 144.319 120.778 141.621 120.778C138.923 120.778 136.686 118.534 136.686 115.828V105.796L146.556 100.845Z"
                                                    fill="url(#paint1_linear_619_9979)" />
                                                <g filter="url(#filter1_b_619_9979)">
                                                    <rect width="2.79418" height="58.8211" rx="1.39709"
                                                        transform="matrix(0.46908 -0.883156 -0.883156 -0.46908 88.9492 185.059)"
                                                        fill="url(#paint2_radial_619_9979)" />
                                                    <rect x="-0.289251" y="-0.944597" width="1.39709" height="57.424"
                                                        rx="0.698545"
                                                        transform="matrix(0.46908 -0.883156 -0.883156 -0.46908 87.9614 183.415)"
                                                        stroke="url(#paint3_radial_619_9979)" stroke-width="1.39709" />
                                                    <rect x="-0.289251" y="-0.944597" width="1.39709" height="57.424"
                                                        rx="0.698545"
                                                        transform="matrix(0.46908 -0.883156 -0.883156 -0.46908 87.9614 183.415)"
                                                        stroke="url(#paint4_radial_619_9979)" stroke-width="1.39709" />
                                                    <rect x="-0.289251" y="-0.944597" width="1.39709" height="57.424"
                                                        rx="0.698545"
                                                        transform="matrix(0.46908 -0.883156 -0.883156 -0.46908 87.9614 183.415)"
                                                        stroke="url(#paint5_linear_619_9979)" stroke-width="1.39709" />
                                                </g>
                                                <circle cx="88.5" cy="183.5" r="4.5" fill="white" />
                                                <circle cx="36.5" cy="155.5" r="4.5" fill="white" />
                                                <g filter="url(#filter2_b_619_9979)">
                                                    <rect width="2.79418" height="58.8211" rx="1.39709"
                                                        transform="matrix(-0.474368 -0.880327 -0.880327 0.474368 183.938 157.271)"
                                                        fill="url(#paint6_radial_619_9979)" />
                                                    <rect x="-0.946315" y="-0.283581" width="1.39709" height="57.424"
                                                        rx="0.698545"
                                                        transform="matrix(-0.474368 -0.880327 -0.880327 0.474368 182.293 156.289)"
                                                        stroke="url(#paint7_radial_619_9979)" stroke-width="1.39709" />
                                                    <rect x="-0.946315" y="-0.283581" width="1.39709" height="57.424"
                                                        rx="0.698545"
                                                        transform="matrix(-0.474368 -0.880327 -0.880327 0.474368 182.293 156.289)"
                                                        stroke="url(#paint8_radial_619_9979)" stroke-width="1.39709" />
                                                    <rect x="-0.946315" y="-0.283581" width="1.39709" height="57.424"
                                                        rx="0.698545"
                                                        transform="matrix(-0.474368 -0.880327 -0.880327 0.474368 182.293 156.289)"
                                                        stroke="url(#paint9_linear_619_9979)" stroke-width="1.39709" />
                                                </g>
                                                <circle cx="182.389" cy="156.779" r="4.5"
                                                    transform="rotate(-56.2928 182.389 156.779)" fill="white" />
                                                <circle cx="130.241" cy="184.498" r="4.5"
                                                    transform="rotate(-56.2928 130.241 184.498)" fill="white" />
                                                <g filter="url(#filter3_b_619_9979)">
                                                    <rect width="2.35571" height="50.6607" rx="1.17786"
                                                        transform="matrix(-0.999625 -0.0273992 0.00419033 0.999991 190.43 91.2539)"
                                                        fill="url(#paint10_radial_619_9979)" />
                                                    <rect x="-0.58624" y="0.572787" width="1.17786" height="49.4829"
                                                        rx="0.588929"
                                                        transform="matrix(-0.999625 -0.0273992 0.00419033 0.999991 189.255 91.2378)"
                                                        stroke="url(#paint11_radial_619_9979)" stroke-width="1.17786" />
                                                    <rect x="-0.58624" y="0.572787" width="1.17786" height="49.4829"
                                                        rx="0.588929"
                                                        transform="matrix(-0.999625 -0.0273992 0.00419033 0.999991 189.255 91.2378)"
                                                        stroke="url(#paint12_radial_619_9979)" stroke-width="1.17786" />
                                                    <rect x="-0.58624" y="0.572787" width="1.17786" height="49.4829"
                                                        rx="0.588929"
                                                        transform="matrix(-0.999625 -0.0273992 0.00419033 0.999991 189.255 91.2378)"
                                                        stroke="url(#paint13_linear_619_9979)" stroke-width="1.17786" />
                                                </g>
                                                <ellipse cx="189.451" cy="92.1967" rx="3.9074" ry="3.7612"
                                                    transform="rotate(-117.319 189.451 92.1967)" fill="white" />
                                                <ellipse cx="189.38" cy="143.054" rx="3.9074" ry="3.7612"
                                                    transform="rotate(-117.319 189.38 143.054)" fill="white" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_b_619_9979" x="-42" y="-42" width="316" height="316"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="21" />
                                                    <feComposite in2="SourceAlpha" operator="in"
                                                        result="effect1_backgroundBlur_619_9979" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_backgroundBlur_619_9979" result="shape" />
                                                </filter>
                                                <filter id="filter1_b_619_9979" x="-4.50781" y="113.49" width="136.277"
                                                    height="113.076" filterUnits="userSpaceOnUse"
                                                    color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="21" />
                                                    <feComposite in2="SourceAlpha" operator="in"
                                                        result="effect1_backgroundBlur_619_9979" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_backgroundBlur_619_9979" result="shape" />
                                                </filter>
                                                <filter id="filter2_b_619_9979" x="89.3242" y="113.307" width="136.117"
                                                    height="113.373" filterUnits="userSpaceOnUse"
                                                    color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="21" />
                                                    <feComposite in2="SourceAlpha" operator="in"
                                                        result="effect1_backgroundBlur_619_9979" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_backgroundBlur_619_9979" result="shape" />
                                                </filter>
                                                <filter id="filter3_b_619_9979" x="146.078" y="49.2207" width="86.5586"
                                                    height="134.662" filterUnits="userSpaceOnUse"
                                                    color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="21" />
                                                    <feComposite in2="SourceAlpha" operator="in"
                                                        result="effect1_backgroundBlur_619_9979" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_backgroundBlur_619_9979" result="shape" />
                                                </filter>
                                                <radialGradient id="paint0_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(2.08678 6.90247) rotate(44.0741) scale(315.062 503.897)">
                                                    <stop stop-color="white" stop-opacity="0.4" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </radialGradient>
                                                <linearGradient id="paint1_linear_619_9979" x1="109.942" y1="53.1992"
                                                    x2="109.942" y2="120.778" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#7939CC" />
                                                    <stop offset="1" stop-color="#4656A3" />
                                                </linearGradient>
                                                <radialGradient id="paint2_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0251329 1.75005) rotate(87.1911) scale(55.6309 8.71432)">
                                                    <stop stop-color="white" stop-opacity="0.4" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </radialGradient>
                                                <radialGradient id="paint3_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0251329 1.75005) rotate(87.1911) scale(55.6309 8.71432)">
                                                    <stop stop-color="white" stop-opacity="0" />
                                                    <stop offset="1" stop-color="white" />
                                                </radialGradient>
                                                <radialGradient id="paint4_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0384384 57.0224) rotate(-87.1901) scale(55.3389 8.66275)">
                                                    <stop stop-color="white" stop-opacity="0" />
                                                    <stop offset="1" stop-color="white" />
                                                </radialGradient>
                                                <linearGradient id="paint5_linear_619_9979" x1="0.051744" y1="1.60421"
                                                    x2="3.95833" y2="1.689" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white" stop-opacity="0.9" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                                <radialGradient id="paint6_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0251329 1.75005) rotate(87.1911) scale(55.6309 8.71432)">
                                                    <stop stop-color="white" stop-opacity="0.4" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </radialGradient>
                                                <radialGradient id="paint7_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0251329 1.75005) rotate(87.1911) scale(55.6309 8.71432)">
                                                    <stop stop-color="white" stop-opacity="0" />
                                                    <stop offset="1" stop-color="white" />
                                                </radialGradient>
                                                <radialGradient id="paint8_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0384384 57.0224) rotate(-87.1901) scale(55.3389 8.66275)">
                                                    <stop stop-color="white" stop-opacity="0" />
                                                    <stop offset="1" stop-color="white" />
                                                </radialGradient>
                                                <linearGradient id="paint9_linear_619_9979" x1="0.051744" y1="1.60421"
                                                    x2="3.95833" y2="1.689" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white" stop-opacity="0.9" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                                <radialGradient id="paint10_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0211891 1.50726) rotate(87.2503) scale(47.9107 7.34723)">
                                                    <stop stop-color="white" stop-opacity="0.4" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </radialGradient>
                                                <radialGradient id="paint11_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0211891 1.50726) rotate(87.2503) scale(47.9107 7.34723)">
                                                    <stop stop-color="white" stop-opacity="0" />
                                                    <stop offset="1" stop-color="white" />
                                                </radialGradient>
                                                <radialGradient id="paint12_radial_619_9979" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(0.0324066 49.1116) rotate(-87.2493) scale(47.6593 7.30375)">
                                                    <stop stop-color="white" stop-opacity="0" />
                                                    <stop offset="1" stop-color="white" />
                                                </radialGradient>
                                                <linearGradient id="paint13_linear_619_9979" x1="0.0436243" y1="1.38166"
                                                    x2="3.33725" y2="1.45163" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white" stop-opacity="0.9" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <div id="displayValues" class="p-3"></div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-warning rounded-pill">Add more</button>

                                </div>



                                <div class="form_flex gap-2 mt-5 ">
                                    <button class="btn btn-success btn-calculate w-100 lh-lg">Calculate</button>
                                    <button class="btn btn-outline-light w-100 lh-lg">Reset</button>


                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-lg-5">
                    <div class="shipping-rates mb-5"
                        >
                        <div class="card" style="border: none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="wraper-shiping">
                                            <img src="https://b2b.truxcargo.com/assets/images/DTDC%20B2B.png" alt=""
                                                srcset="" style="width: 70px; height:70px" ;>
                                            <h3 class="my-2" style="color: #7939cc"> <small
                                                    style="font-size: 12px ;color: #7939cc""><i
                                                        class=" fa-solid fa-indian-rupee-sign"></i></small>
                                                647.58
                                            </h3>
                                            <h6>Min Amt: 380+GST</h6>
                                            <h6>Charged Wt:<span> 550kg</span></h6>

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class=" body_rate_cal">
                                            <h4 class="mb-3 fw-bold" style="color: #7939cc">DTDC B2B </h4>

                                            <ul class="">

                                                <li>Charged Weight:<span> 550kg</span></li>
                                                <li>Weight Charge <small>(6.2/kg):</small><span>
                                                        <i class="fa-solid fa-indian-rupee-sign"></i>3410</span></li>
                                                <li>Docket Charge: <span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>100</span></li>
                                                <li>Fuel Surcharge:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>682</span></li>
                                                <li>ROV Charge:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>100</span>
                                                </li>
                                                <li>GST:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>1267.56</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                
                            </div>
                        </div>
                        <div class="card" style="border: none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="wraper-shiping">
                                            <img src="https://b2b.truxcargo.com/assets/images/DTDC%20B2B.png" alt=""
                                                srcset="" style="width: 70px; height:70px" ;>
                                            <h3 class="my-2" style="color: #7939cc"> <small
                                                    style="font-size: 12px ;color: #7939cc""><i
                                                        class=" fa-solid fa-indian-rupee-sign"></i></small>
                                                647.58
                                            </h3>
                                            <h6>Min Amt: 380+GST</h6>
                                            <h6>Charged Wt:<span> 550kg</span></h6>

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class=" body_rate_cal">
                                            <h4 class="mb-3 fw-bold" style="color: #7939cc">DTDC B2B </h4>

                                            <ul class="">

                                                <li>Charged Weight:<span> 550kg</span></li>
                                                <li>Weight Charge <small>(6.2/kg):</small><span>
                                                        <i class="fa-solid fa-indian-rupee-sign"></i>3410</span></li>
                                                <li>Docket Charge: <span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>100</span></li>
                                                <li>Fuel Surcharge:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>682</span></li>
                                                <li>ROV Charge:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>100</span>
                                                </li>
                                                <li>GST:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>1267.56</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                
                            </div>
                        </div>

                        <div class="card" style="border: none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="wraper-shiping">
                                            <img src="https://b2b.truxcargo.com/assets/images/DTDC%20B2B.png" alt=""
                                                srcset="" style="width: 70px; height:70px" ;>
                                            <h3 class="my-2" style="color: #7939cc"> <small
                                                    style="font-size: 12px ;color: #7939cc""><i
                                                        class=" fa-solid fa-indian-rupee-sign"></i></small>
                                                647.58
                                            </h3>
                                            <h6>Min Amt: 380+GST</h6>
                                            <h6>Charged Wt:<span> 550kg</span></h6>

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class=" body_rate_cal">
                                            <h4 class="mb-3 fw-bold" style="color: #7939cc">DTDC B2B </h4>

                                            <ul class="">

                                                <li>Charged Weight:<span> 550kg</span></li>
                                                <li>Weight Charge <small>(6.2/kg):</small><span>
                                                        <i class="fa-solid fa-indian-rupee-sign"></i>3410</span></li>
                                                <li>Docket Charge: <span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>100</span></li>
                                                <li>Fuel Surcharge:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>682</span></li>
                                                <li>ROV Charge:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>100</span>
                                                </li>
                                                <li>GST:<span><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>1267.56</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                
                            </div>
                        </div>




                    </div>

                    <!-- <div>
                        <img src="../assets/images/calculator/slide1-map.png" class="d-block w-100" alt="...">

                    </div> -->

                </div>
            </div>
        </div>



    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const length = document.getElementById('length');
    const width = document.getElementById('width');
    const height = document.getElementById('height');
    const displayValues = document.getElementById('displayValues');

    function updateDisplay() {
        displayValues.innerHTML = `
                    <p class="d-length"> ${length.value}</p>
                    <p class="d-width"> ${width.value}</p>
                    <p class="d-height"> ${height.value}</p>
                `;
    }

    length.addEventListener('input', updateDisplay);
    width.addEventListener('input', updateDisplay);
    height.addEventListener('input', updateDisplay);
});
</script>
<?php include("./include/footer.php")?>