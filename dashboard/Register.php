<?php include("./include/designlink.php")?>

<style>
       .login-section {
        height: inherit !important;
    }
.mypaddingwrapper {
    padding: 3rem !important;
}

.content-wrapper {
    background: #fff;
    padding: 4rem 0 0 4rem;
    overflow: hidden
}

@media (max-width:767px) {
    .login-section {
        height: inherit !important;
    }

    .mypaddingwrapper {
        padding: 2rem !important;
    }

    .content-wrapper {
        padding: 15px 0 0 15px;
        }
    .content-wrapper ul {
        width: 95%;
        }

    .btn_newletter {
        right: inherit;
        position: relative !important;

    }

    .newsletter_input {
        width: 100%;
    }
}
</style>
<section class="login-section" style="padding: 0">
    <div class="">
        <div class="row">

            <div class=" col-lg-6 col-12 order-lg-1 order-2">
                <div style="position: relative">
                    <img src="../assets/images/registernew.svg" alt="" srcset="" style="max-width: 90%">

                </div>
              
                <a href="#sectiontwo">
                    <div class="downArrow bounce">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.0303 7.71967C20.3232 8.01256 20.3232 8.48744 20.0303 8.78033L12.5303 16.2803C12.2374 16.5732 11.7626 16.5732 11.4697 16.2803L3.96967 8.78033C3.67678 8.48744 3.67678 8.01256 3.96967 7.71967C4.26256 7.42678 4.73744 7.42678 5.03033 7.71967L12 14.6893L18.9697 7.71967C19.2626 7.42678 19.7374 7.42678 20.0303 7.71967Z"
                                fill="white" />
                        </svg>

                    </div>
                </a>
            </div>

            <div class="col-lg-5 col-12 order-lg-2 order-1 ">
                <div class="mypaddingwrapper">
                    <form class="login_form register_form">
                        <div class="text-center ">
                            <img src="../assets/images/logo/company_logo.png" class="logo-title w-50 mb-5" alt=""
                                srcset="">

                        </div>
                        <h2 class="main-heading">Sign Up</h2>
                        <div class="form-group">
                            <h6>Signing up is easy. It only takes a few steps</h6>
                        </div>

                        <div class="">
                            <div class="form-group w-100">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z"
                                        fill="currentColor" />
                                </svg>
                                <input type="text" placeholder="Enter First Name" class="form-control" required>
                            </div>
                            <div class="form-group w-100">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z"
                                        fill="currentColor" />
                                </svg>
                                <input type="text" placeholder="Enter Last Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group w-100">
                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                                    fill="currentColor"></path>
                            </svg>
                            <input type="email" placeholder="Enter Email Id" class="form-control" required>
                        </div>

                        <div class="form-group w-100">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.4183 5.49C13.9422 5.40206 13.505 5.70586 13.4144 6.17054C13.3238 6.63522 13.6285 7.08891 14.0916 7.17984C15.4859 7.45166 16.5624 8.53092 16.8353 9.92995V9.93095C16.913 10.3337 17.2675 10.6265 17.6759 10.6265C17.7306 10.6265 17.7854 10.6215 17.8412 10.6115C18.3043 10.5186 18.609 10.0659 18.5184 9.60018C18.1111 7.51062 16.5027 5.89672 14.4183 5.49Z"
                                    fill="currentColor" />
                                <path
                                    d="M14.3558 2.00793C14.1328 1.97595 13.9087 2.04191 13.7304 2.18381C13.5472 2.32771 13.4326 2.53557 13.4078 2.76841C13.355 3.23908 13.6946 3.66479 14.1646 3.71776C17.4063 4.07951 19.9259 6.60477 20.2904 9.85654C20.3392 10.2922 20.7047 10.621 21.1409 10.621C21.1738 10.621 21.2057 10.619 21.2385 10.615C21.4666 10.59 21.6698 10.4771 21.8132 10.2972C21.9556 10.1174 22.0203 9.89351 21.9944 9.66467C21.5403 5.60746 18.4002 2.45862 14.3558 2.00793Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.0317 12.9724C15.0208 16.9604 15.9258 12.3467 18.4656 14.8848C20.9143 17.3328 22.3216 17.8232 19.2192 20.9247C18.8306 21.237 16.3616 24.9943 7.6846 16.3197C-0.993478 7.644 2.76158 5.17244 3.07397 4.78395C6.18387 1.67385 6.66586 3.08938 9.11449 5.53733C11.6544 8.0765 7.04266 8.98441 11.0317 12.9724Z"
                                    fill="currentColor" />
                            </svg>
                            <input type="tel" placeholder="Enter Contact Number" class="form-control" required>
                        </div>

                        <div class="form-group w-100">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.7044 3.51898C10.034 3.51898 9.46373 3.9848 9.30365 4.61265H14.6863C14.5263 3.9848 13.956 3.51898 13.2856 3.51898H10.7044ZM16.2071 4.61264H18.1881C20.2891 4.61264 22 6.34428 22 8.47085C22 8.47085 21.94 9.3711 21.92 10.6248C21.918 10.724 21.8699 10.8212 21.7909 10.88C21.3097 11.2354 20.8694 11.5291 20.8294 11.5493C19.1686 12.6632 17.2386 13.447 15.1826 13.8369C15.0485 13.8632 14.9165 13.7934 14.8484 13.6739C14.2721 12.6754 13.1956 12.0253 11.995 12.0253C10.8024 12.0253 9.71586 12.6683 9.12256 13.6678C9.05353 13.7853 8.92346 13.8531 8.7904 13.8278C6.75138 13.4369 4.82141 12.6541 3.17059 11.5594L2.21011 10.8911C2.13007 10.8405 2.08004 10.7493 2.08004 10.6481C2.05003 10.1316 2 8.47085 2 8.47085C2 6.34428 3.71086 4.61264 5.81191 4.61264H7.78289C7.97299 3.1443 9.2036 2 10.7044 2H13.2856C14.7864 2 16.017 3.1443 16.2071 4.61264ZM21.6598 12.8152L21.6198 12.8355C19.5988 14.1924 17.1676 15.0937 14.6163 15.4684C14.2561 15.519 13.8959 15.2861 13.7959 14.9216C13.5758 14.0912 12.8654 13.5443 12.015 13.5443H12.005H11.985C11.1346 13.5443 10.4242 14.0912 10.2041 14.9216C10.1041 15.2861 9.74387 15.519 9.38369 15.4684C6.83242 15.0937 4.4012 14.1924 2.38019 12.8355C2.37019 12.8254 2.27014 12.7646 2.1901 12.8152C2.10005 12.8659 2.10005 12.9874 2.10005 12.9874L2.17009 18.1519C2.17009 20.2785 3.87094 22 5.97199 22H18.018C20.1191 22 21.8199 20.2785 21.8199 18.1519L21.9 12.9874C21.9 12.9874 21.9 12.8659 21.8099 12.8152C21.7599 12.7849 21.6999 12.795 21.6598 12.8152ZM12.7454 17.0583C12.7454 17.4836 12.4152 17.8177 11.995 17.8177C11.5848 17.8177 11.2446 17.4836 11.2446 17.0583V15.7519C11.2446 15.3367 11.5848 14.9924 11.995 14.9924C12.4152 14.9924 12.7454 15.3367 12.7454 15.7519V17.0583Z"
                                    fill="currentColor" />
                            </svg>
                            <input type="tel" placeholder="Enter Campany Name" class="form-control" required>
                        </div>



                        <div class="form-group w-100 my-4">
                            <div class="checkbox-wrapper-33">
                                <label class="checkbox">
                                    <input class="checkbox__trigger visuallyhidden" type="checkbox" />
                                    <span class="checkbox__symbol">
                                        <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px"
                                            viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 14l8 7L24 7"></path>
                                        </svg>
                                    </span>
                                    <small class="checkbox__textwrapper">I agree to all Terms & Conditions</small>
                                </label>
                            </div>

                        </div>
                        <div class=" w-100">
                            <button class="btn btn-primary btn-login lh-lg w-100">Get Started </button>
                            <h6 class="text-center mt-2">or</h6>

                            <button class="btn btn-outline-light btn-google w-100 mt-2">
                                <svg version="1.1" id="fi_281764" xmlns="http://www.w3.org/2000/svg"
                                    style="width:25px; margin-right: 10px" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                                    c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                                    C103.821,274.792,107.225,292.797,113.47,309.408z"></path>
                                    <path style="fill:#518EF8;"
                                        d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                                            c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                                            c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z">
                                    </path>
                                    <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                                    c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                                    c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"></path>
                                    <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                                    c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                                    C318.115,0,375.068,22.126,419.404,58.936z"></path>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>SignUp with Google </button>
                        </div>
                        <h6 class="text-center mt-4">Already have an account? <a href="login.php"
                                style=" color: #7939CC">Login Now</a></h6>
                    </form>

                </div>
            </div>

        </div>

    </div>

</section>

<div id="sectiontwo" class="content-wrapper">
    <div class="">
        <div class="row">

            <div class="col-lg-6">
                <div>
                    <h2 class="main-heading mb-5">Optimize your shipping process with our app!</h2>
                    <p>Manage business on the go! - Available on Play Store and App Store</p>
                    <ul class="list" style="color: #000; line-height: 2" ;>
                        <li><b>Create Orders in Minutes:</b> Quickly create new orders with just a few taps.
                        </li>
                        <li><b>Schedule Pickups Easily:</b>Arrange for package pickups without any hassle.</li>
                        <li><b>Instantly Calculate Rates:</b>Get immediate rate calculations for your shipments.</li>
                        <li><b>Resolve Weight Disputes Easily:</b> Address and settle any weight discrepancies.</li>
                        <li><b>Recharge Your Wallet on the Go:</b>Top up your wallet instantly from anywhere.</li>
                        <li><b>Check Pin codes Instantly:</b>Verify delivery availability with quick pincode checks.
                        </li>
                        <li><b>Get a Summary of All Your Bookings:</b> View a concise overview of all your orders.</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="../assets/images/registerElement.png" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content-wrapper" style="background: #e9e9f4">
    <div class="">
        <div class="row">

            <div class="col-lg-6">
                <div class="cdiv">
                    <h2 class="main-heading mb-5">Streamline Your Logistics with Ease</h2>
                    <p>Discover a wide range of logistics solutions designed to simplify your operations, enhance
                        customer satisfaction, and boost efficiency. From booking deliveries to managing disputes, our
                        services have you covered.</p>
                    <ul class="list" style="color: #000; line-height: 2" ;>
                        <li><b>Generate Pickup Requests:</b> Easily create pickup requests from pickup and delivery
                            points.</li>
                        <li><b>Booking & Scheduling:</b> Easily book and schedule deliveries to over 30,500+ Pincodes.
                        </li>
                        <li><b>Multiple Payment Options:</b>Choose from various payment methods for seamless
                            transactions.</li>
                        <li><b>Courier Ratings:</b> Select the best courier partners based on user ratings.</li>
                        <li><b>Dedicated Customer Support:</b> Access dedicated customer support for all your queries.
                        </li>
                        <li><b>Weight Dispute Management:</b> Address any inconsistencies in delivery weight with our
                            dispute management services.</li>
                        <li><b>NDR Management:</b> Efficiently handle non-delivery issues with advanced NDR management.
                        </li>
                        <li><b>Early COD Remittance: </b> Receive cash on delivery remittance within 1-3 days for faster
                            cash flow.</li>
                        <li><b>Delivery Appointment: </b> Efficiently schedule your deliveries at your own convenience.
                        </li>
                        <li><b>Much more</b>Enjoy various integrations, check price lists, shop etc!</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div>
                    <img src="../assets/images/registerElement2.png" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5">

    <div class="container">
        <div class="cdiv"
            style="background: url(https://b2b.truxcargo.com/assets/images/newsletter.png); background-size: cover; background-repeat: no-repeat; background-position: center;padding: 5%; border-radius: 17px;">
            <div class="newletter-register text-center text-white p-4">
                <h2 class="text-white">Trusted By Thousands of Online Sellers</h2>
                <p>Please feel free to reach out to us for any questions or assistance related to Sign Up.</p>
                <span class="alert-success" id="nwe1"></span>
                <form autocomplete="off" id="news" name="newsForm">
                    <input type="text" placeholder="Enter your email id" class="newsletter_input" id="nemail" value="">

                    <button type="submit" class="btn btn_newletter btn btn-primary">Subscribe</button>

                </form>
                <span class="alert-danger" id="nwe"></span>
            </div>
        </div>

    </div>

</div>
</body>