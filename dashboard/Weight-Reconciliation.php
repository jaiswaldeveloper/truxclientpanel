<?php include("./include/header.php")?>

<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center flex-wrap my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Weight Reconciliation</h3>
        </div>

        <div>
            <button type="button" class="btn rounded-pill mt-2" style="border-radius: 32px;
background: #7939CC;
box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(121, 57, 204, 0.40); color: #fff" ;="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                    <g clip-path="url(#clip0_1787_15419)">
                        <path d="M8 0.5C6.41775 0.5 4.87104 0.969192 3.55544 1.84824C2.23985 2.72729 1.21447 3.97672 0.608967 5.43853C0.00346629 6.90034 -0.15496 8.50887 0.153721 10.0607C0.462403 11.6126 1.22433 13.038 2.34315 14.1569C3.46197 15.2757 4.88743 16.0376 6.43928 16.3463C7.99113 16.655 9.59966 16.4965 11.0615 15.891C12.5233 15.2855 13.7727 14.2602 14.6518 12.9446C15.5308 11.629 16 10.0823 16 8.5C16 6.37827 15.1571 4.34344 13.6569 2.84315C12.1566 1.34285 10.1217 0.5 8 0.5ZM10.6243 13.6533H5.37567C5.19886 13.6533 5.02929 13.5831 4.90427 13.4581C4.77924 13.333 4.709 13.1635 4.709 12.9867C4.709 12.8099 4.77924 12.6403 4.90427 12.5153C5.02929 12.3902 5.19886 12.32 5.37567 12.32H10.6243C10.8011 12.32 10.9707 12.3902 11.0957 12.5153C11.2208 12.6403 11.291 12.8099 11.291 12.9867C11.291 13.1635 11.2208 13.333 11.0957 13.4581C10.9707 13.5831 10.8011 13.6533 10.6243 13.6533ZM11.0957 8.63867L8.46934 11.2667C8.34432 11.3916 8.17478 11.4619 7.998 11.4619C7.82123 11.4619 7.65169 11.3916 7.52667 11.2667L4.90434 8.64467C4.77907 8.51966 4.70858 8.35001 4.7084 8.17304C4.70821 7.99607 4.77833 7.82627 4.90334 7.701C5.02834 7.57573 5.19799 7.50525 5.37496 7.50506C5.55194 7.50487 5.72173 7.575 5.847 7.7L7.33334 9.18633V3.28833C7.33334 3.11152 7.40358 2.94195 7.5286 2.81693C7.65362 2.6919 7.82319 2.62167 8 2.62167C8.17682 2.62167 8.34638 2.6919 8.47141 2.81693C8.59643 2.94195 8.66667 3.11152 8.66667 3.28833V9.18233L10.153 7.696C10.2787 7.57456 10.4471 7.50737 10.6219 7.50888C10.7967 7.5104 10.9639 7.58052 11.0876 7.70412C11.2112 7.82773 11.2813 7.99494 11.2828 8.16973C11.2843 8.34453 11.2171 8.51293 11.0957 8.63867Z" fill="white"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_1787_15419">
                            <rect width="16" height="16" fill="white" transform="translate(0 0.5)"></rect>
                        </clipPath>
                    </defs>
                </svg> Report </button>

        </div>


    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="weight_reconcilation_bg">
                <form class="rate_form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form_flex">
                                <div class="form-group w-100">
                                    <input type="search" placeholder="Search by LR/AWB" class="form-control"
                                        style="border-radius: 3px" ;>


                                </div>
                                <div class="form-group w-100">
                                    <select class="form-select form-control" style="border-radius: 3px" ;>
                                        <option selected="">All status</option>
                                        <option value="1">Postpaid</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>


                                <div class="form-group w-100">
                                    <select class="form-select form-control" style="border-radius: 3px" ;>
                                        <option selected="">All Dates</option>
                                        <option value="1">Today</option>
                                        <option value="2">1 week</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="border-end"></div>
                                <div class="form-group w-50">
                                    <button class="btn btn-success btn-green-gradient w-100 lh-lg">Submit
                                    </button>
                                </div>
                                <div class="form-group w-50">
                                    <button class="btn btn-light w-100 lh-lg ms-2">Clear
                                    </button>
                                </div>

                            </div>


                        </div>
                        


                    </div>
                </form>

                <hr>

                <h3 class="text-white">Overview</h3>
                <hr class="hr-horizontal">

                <div class="d-flex gap-5 ">
                    <div>
                        <h6 class="text-white">Total Weight Discrepancies </h6>
                        <h3 class="text-white">4.53 Kg</h3>
                    </div>
                    <div>
                        <h6 class="text-white">Discrepancies Accepted </h6>
                        <h3 class="text-white">4.53 Kg</h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-12 mt-5">
            <ul class="nav nav-pills mb-3 weight-reconciliation-tabs gap-5" id="pills-tab" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                        aria-selected="true">Mismatched <span class="badge bg-light text-dark ms-2">4</span> </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"
                        aria-selected="false">Disputes Raised <span class="badge bg-light text-dark ms-2">4</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
                        aria-selected="false">Disputes Settled <span class="badge bg-light text-dark ms-2">4</span></a>
                </li>
            </ul>
            <div class="card">

                <div class="card-body" style="padding: 0" ;>

                    <div class="tab-content" id="pills-tabContent-2">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="card-body">

                                <div class="table-responsive border rounded">
                                    <table id="datatable" class="table " data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>AWB/LR</th>
                                                <th>ORDER INFO</th>
                                                <th>TOTAL VALUE</th>
                                                <th>SHIPPING PARTNER</th>
                                                <th>ENTERED WEIGHT & DIMENSIONS</th>
                                                <th>CHARGED WEIGHT & DIMENSIONS</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><svg id="Layer_1" enable-background="new 0 0 100 100" width="14"
                                                        height="14" viewBox="0 0 100 100"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m87.58564 14.2638445h-5.9526749v-2.4558439c0-3.7090864-3.0116806-6.7207689-6.7308197-6.7207689h-.2526627c-3.7090836 0-6.7308884 3.0116825-6.7308884 6.7207689v2.4558439h-35.8371925v-2.4558439c0-3.7090864-3.0217972-6.7207689-6.7308846-6.7207689h-.2526588c-3.719141 0-6.7308235 3.0116825-6.7308235 6.7207689v2.4558439h-5.9526749c-5.467526 0-9.9143591 4.4467707-9.9143591 9.9143591v11.9052887.0202293 48.9048004c0 5.4574127 4.4468331 9.9042435 9.9143591 9.9042435h75.17128c5.4675293 0 9.91436-4.4468307 9.91436-9.9042435v-48.9048004c0-.0101128 0-.0101128 0-.0202293v-11.9052887c0-5.4675884-4.4468307-9.9143591-9.91436-9.9143591zm-15.6244889-2.4558439c0-1.4755535 1.2026596-2.678216 2.6883316-2.678216h.2526627c1.4856033 0 2.6882706 1.2026625 2.6882706 2.678216v6.8723278c0 1.4856091-1.2026672 2.6882706-2.6882706 2.6882706h-.2526627c-1.485672 0-2.6883316-1.2026615-2.6883316-2.6882706zm-49.5515632 0c0-1.4755535 1.2026615-2.678216 2.6882706-2.678216h.2526588c1.4856701 0 2.6883335 1.2026625 2.6883335 2.678216v6.8723278c0 1.4856091-1.2026634 2.6882706-2.6883335 2.6882706h-.2526588c-1.4856091 0-2.6882706-1.2026615-2.6882706-2.6882706zm71.0478553 73.2005214c0 3.2340546-2.6377487 5.8616943-5.8718033 5.8616943h-75.1712799c-3.2340546 0-5.8718057-2.6276398-5.8718057-5.8616943v-46.9037552h86.9148865v46.9037552z" />
                                                        <path
                                                            d="m42.8318977 57.8148613h-5.4805832c-1.2056046 0-2.1829453-.9773369-2.1829453-2.1829453v-5.4805832c0-1.2056084.9773407-2.1829453 2.1829453-2.1829453h5.4805832c1.2056084 0 2.1829453.9773369 2.1829453 2.1829453v5.4805832c0 1.2056084-.9773369 2.1829453-2.1829453 2.1829453z" />
                                                        <path
                                                            d="m62.6486855 57.8148613h-5.4805832c-1.2056084 0-2.1829453-.9773369-2.1829453-2.1829453v-5.4805832c0-1.2056084.9773369-2.1829453 2.1829453-2.1829453h5.4805832c1.2056046 0 2.1829414.9773369 2.1829414 2.1829453v5.4805832c0 1.2056084-.9773369 2.1829453-2.1829414 2.1829453z" />
                                                        <path
                                                            d="m82.4654694 57.8148613h-5.4805832c-1.2056046 0-2.1829453-.9773369-2.1829453-2.1829453v-5.4805832c0-1.2056084.9773407-2.1829453 2.1829453-2.1829453h5.4805832c1.2056046 0 2.1829453.9773369 2.1829453 2.1829453v5.4805832c-.0000001 1.2056084-.9773408 2.1829453-2.1829453 2.1829453z" />
                                                        <path
                                                            d="m23.0151138 81.0118637h-5.4805832c-1.2056065 0-2.1829443-.9773331-2.1829443-2.1829453v-5.4805832c0-1.2056046.9773378-2.1829453 2.1829443-2.1829453h5.4805832c1.2056065 0 2.1829453.9773407 2.1829453 2.1829453v5.4805832c0 1.2056122-.9773388 2.1829453-2.1829453 2.1829453z" />
                                                        <path
                                                            d="m23.0151138 57.8148613h-5.4805832c-1.2056065 0-2.1829443-.9773369-2.1829443-2.1829453v-5.4805832c0-1.2056084.9773378-2.1829453 2.1829443-2.1829453h5.4805832c1.2056065 0 2.1829453.9773369 2.1829453 2.1829453v5.4805832c0 1.2056084-.9773388 2.1829453-2.1829453 2.1829453z" />
                                                        <path
                                                            d="m42.8318977 81.0118637h-5.4805832c-1.2056046 0-2.1829453-.9773331-2.1829453-2.1829453v-5.4805832c0-1.2056046.9773407-2.1829453 2.1829453-2.1829453h5.4805832c1.2056084 0 2.1829453.9773407 2.1829453 2.1829453v5.4805832c0 1.2056122-.9773369 2.1829453-2.1829453 2.1829453z" />
                                                        <path
                                                            d="m62.6486855 81.0118637h-5.4805832c-1.2056084 0-2.1829453-.9773331-2.1829453-2.1829453v-5.4805832c0-1.2056046.9773369-2.1829453 2.1829453-2.1829453h5.4805832c1.2056046 0 2.1829414.9773407 2.1829414 2.1829453v5.4805832c0 1.2056122-.9773369 2.1829453-2.1829414 2.1829453z" />
                                                    </svg> 12 Apr, 2024 </td>
                                                <td>260055843</td>
                                                <td>Name: Noodle Sauce <br>QTY : 34 <br>Order Id : 3100122476</td>
                                                <td><svg id="Capa_1" enable-background="new 0 0 512 512" height="14"
                                                        viewBox="0 0 512 512" width="14"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path
                                                                d="m418.474 0h-324.949v64.559h114.593c42.083 0 77.976 26.986 91.3 64.559h-205.893v64.559h205.893c-13.324 37.573-49.217 64.559-91.3 64.559h-114.593v64.559l189.203 189.205 45.65-45.651-143.552-143.552h23.292c77.943 0 143.158-55.538 158.153-129.119h52.203v-64.559h-52.203c-4.858-23.84-14.99-45.783-29.116-64.559h81.319z" />
                                                        </g>
                                                    </svg> 3,000.00</td>
                                                <td> <img src="../assets/images/index/deliverey.png" alt="" srcset=""
                                                        class="w-75"></td>
                                                <td>Weight: 24 kg <br>
                                                    Dimensions :2:38x33x26 cm<br>
                                                    Vol wt: 14.49 kg<br>
                                                    Applied Amt: 498.62</td>
                                                <td>Weight: 344 kg <br>Charged Amt: 7021</td>
                                                <td>Pending</td>
                                                <td><button class="btn btn-primary rounded-pill btn-dispute "
                                                        data-bs-toggle="modal" data-bs-target="#create_dispute">Create
                                                        Dispute</button></td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="create_dispute" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalCenterTitle" style="color: #7939CC"><b>Subject</b>
                    <br><small>Weight Exception raised against the tracking no- 245774050</small>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body rate_form">
                <div class="pickup-details-modal-info">
                    <div class="pickup-details-modal-info p-2 tex-center">
                        <div class="form-group">
                            <label>Details</label>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Type your details here"
                                class="form-control" style="height: 200px; border-color: #7016d0";></textarea>

                        </div>
                        <div class="form-group">
                            <label>Attachment</label>

                            <div style=" border: 1px solid #7016d0; border-radius:5px" class="p-2 ">
                                <input type="file" class=" w-100  lh-lg" required>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer my-2">
                <button type="button" class="btn btn-success m-auto lh-lg w-50 btn-green-gradient">Submit</button>
                <button type="button" class="btn btn-danger m-auto lh-lg w-50">Cancel</button>
            </div>
        </div>
    </div>
</div>
<?php include("./include/footer.php")?>