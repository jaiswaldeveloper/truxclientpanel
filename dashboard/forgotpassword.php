<?php include("./include/designlink.php")?>
<style>
    .login-section {
    /* opacity: 0.4; */
    background: #dfd9eb;
    background-size: cover;
    width: 100%;
    position: relative;
    padding: 2%;
    overflow: hidden;
}

.login_form .form-group svg {
    position: absolute;
  
    left: 14%;
    margin: 3% 0;
    /* bottom: 0; */
}
.login_form {
    /* background-color: #fff; */
    padding: 50px;
    /* filter: drop-shadow(0px 4px 4px rgba(121, 57, 204, 0.25)); */
    border-radius: 16px;
    position: relative;
    /* border: 1px solid #7939CC; */
    /* background: linear-gradient(179deg, #F5ECFF 0.83%, #DCECFC 151.58%); */
}
@media (max-width: 767px) {
    .forgot-password {
        padding: 1rem;
        height: 70vh;

    }
    .login-section{
            height: inherit !important;
        }
        .login_form .form-group svg {

    left: 8%;

    /* bottom: 0; */
}
}
</style>
<section class="login-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-12 order-lg-1 order-2 step-part">
                <div style="padding: 2rem" class="primum-steps">
                    <img src="../assets/images/forgot.png" alt="" srcset="" class="w-100">
                </div>

            </div>
            <div class="col-lg-5 col-12 order-lg-2 order-1">
                <div class="login_form forgot-password">


                    <form>
                        <div class="text-center ">
                            <img src="../assets/images/logo/company_logo.png" class="logo-title w-50 mb-5" alt=""
                                srcset="">

                        </div>
                        <h2 class="main-heading">Forgot Password</h2>
                        <div class="form-group mb-5">
                            <h6>We will send a link to your email address to reset the password.</h6>
                        </div>
                        <div class="form-group w-100">
                        <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                                <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                            </svg>
                            <input type="text" placeholder="Enter your Email ID" class="form-control" required>
                        </div>

                        <div class=" w-100"> 
                            <button class="btn btn-primary btn-login lh-lg w-100 mt-5">Submit </button>

                        </div>

                    </form>
                    <div class=" w-100 mt-3">
                        <a href="login.php"><button class="btn btn-outline-dark lh-lg w-100"><i
                                    class="fa-solid fa-arrow-left"></i> Back to Login </button>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>

</section>
</body>