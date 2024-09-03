<?php include("./include/header.php")?>

<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between flex-lg-nowrap flex-wrap align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Orders Report</h3>
        </div>

        <div class="d-flex justify-content-between gap-2 mb-3">
            <button class="btn btn-light lh-lg"
                style="border-radius: 5px; background: #007736; box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.25) inset, 0px 4px 4px 0px rgba(121, 57, 204, 0.25); color: #fff">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_1616_8629)">
                        <path
                            d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17317C0.00433286 8.00043 -0.193701 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8079C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0ZM13.2804 16.4417H6.71959C6.49857 16.4417 6.28661 16.3539 6.13033 16.1976C5.97405 16.0413 5.88625 15.8293 5.88625 15.6083C5.88625 15.3873 5.97405 15.1754 6.13033 15.0191C6.28661 14.8628 6.49857 14.775 6.71959 14.775H13.2804C13.5014 14.775 13.7134 14.8628 13.8697 15.0191C14.026 15.1754 14.1138 15.3873 14.1138 15.6083C14.1138 15.8293 14.026 16.0413 13.8697 16.1976C13.7134 16.3539 13.5014 16.4417 13.2804 16.4417ZM13.8696 10.1733L10.5867 13.4583C10.4304 13.6146 10.2185 13.7023 9.9975 13.7023C9.77653 13.7023 9.56461 13.6146 9.40834 13.4583L6.13042 10.1808C5.97383 10.0246 5.88573 9.81252 5.8855 9.5913C5.88526 9.37009 5.97291 9.15784 6.12917 9.00125C6.28543 8.84466 6.49749 8.75656 6.7187 8.75633C6.93992 8.75609 7.15217 8.84374 7.30875 9L9.16667 10.8579V3.48542C9.16667 3.2644 9.25447 3.05244 9.41075 2.89616C9.56703 2.73988 9.77899 2.65208 10 2.65208C10.221 2.65208 10.433 2.73988 10.5893 2.89616C10.7455 3.05244 10.8333 3.2644 10.8333 3.48542V10.8529L12.6913 8.995C12.8484 8.8432 13.0589 8.75921 13.2774 8.76111C13.4959 8.763 13.7049 8.85064 13.8594 9.00515C14.0139 9.15966 14.1016 9.36867 14.1035 9.58717C14.1054 9.80566 14.0214 10.0162 13.8696 10.1733Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1616_8629">
                            <rect width="20" height="20" fill="white" />
                        </clipPath>
                    </defs>
                </svg> &nbsp; AWB Report</button>
            <button class="btn btn-light lh-lg"
                style="border-radius: 4px; background: linear-gradient(180deg, #008 0%, #4656A3 100%);  box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.25) inset, 0px 4px 4px 0px rgba(121, 57, 204, 0.25); color: #fff">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_1616_8629)">
                        <path
                            d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17317C0.00433286 8.00043 -0.193701 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8079C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0ZM13.2804 16.4417H6.71959C6.49857 16.4417 6.28661 16.3539 6.13033 16.1976C5.97405 16.0413 5.88625 15.8293 5.88625 15.6083C5.88625 15.3873 5.97405 15.1754 6.13033 15.0191C6.28661 14.8628 6.49857 14.775 6.71959 14.775H13.2804C13.5014 14.775 13.7134 14.8628 13.8697 15.0191C14.026 15.1754 14.1138 15.3873 14.1138 15.6083C14.1138 15.8293 14.026 16.0413 13.8697 16.1976C13.7134 16.3539 13.5014 16.4417 13.2804 16.4417ZM13.8696 10.1733L10.5867 13.4583C10.4304 13.6146 10.2185 13.7023 9.9975 13.7023C9.77653 13.7023 9.56461 13.6146 9.40834 13.4583L6.13042 10.1808C5.97383 10.0246 5.88573 9.81252 5.8855 9.5913C5.88526 9.37009 5.97291 9.15784 6.12917 9.00125C6.28543 8.84466 6.49749 8.75656 6.7187 8.75633C6.93992 8.75609 7.15217 8.84374 7.30875 9L9.16667 10.8579V3.48542C9.16667 3.2644 9.25447 3.05244 9.41075 2.89616C9.56703 2.73988 9.77899 2.65208 10 2.65208C10.221 2.65208 10.433 2.73988 10.5893 2.89616C10.7455 3.05244 10.8333 3.2644 10.8333 3.48542V10.8529L12.6913 8.995C12.8484 8.8432 13.0589 8.75921 13.2774 8.76111C13.4959 8.763 13.7049 8.85064 13.8594 9.00515C14.0139 9.15966 14.1016 9.36867 14.1035 9.58717C14.1054 9.80566 14.0214 10.0162 13.8696 10.1733Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1616_8629">
                            <rect width="20" height="20" fill="white" />
                        </clipPath>
                    </defs>
                </svg> &nbsp; MIS Report</button>
        </div>

    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="weight_reconcilation_bg" style="padding: 2rem"
                style="background: linear-gradient(93deg, rgba(17, 35, 165, 0.75) 0%, rgba(121, 57, 204, 0.52) 100%);">
                <form class="rate_form">
                    <div class="form_flex">
                        <div class="form-group w-100">
                            <select class="form-select form-control" style="border-radius: 3px" ;>
                                <option selected="">All Status </option>
                                <option value="1">Postpaid</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group w-100">
                            <select class="form-select form-control" style="border-radius: 3px" ;>
                                <option selected="">All Payment </option>
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

                    </div>

                </form>


            </div>
        </div>
        <div class="col-lg-12 mt-3">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive border rounded">
                        <table id="datatable" class="table " data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>AWB NO.</th>
                                    <th>ORDER</th>
                                    <th>MANIFESTED DATE</th>
                                    <th>LAST SCAN LOCATION</th>
                                    <th>PAYMENT MODE</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>253854460 </td>
                                    <td>Pen-drive </td>
                                    <td>aneetelectrials</td>
                                    <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                    <td> Delhi_KirtiNagar_L (Delhi)</td>
                                    <td><button class="btn btn-warning rounded-pill">Prepaid</button></td>
                                    <td><button class="btn btn-primary btn-dispute rounded-pill"><i
                                                class="fa-solid fa-location-dot"></i> Track</button></td>


                                </tr>

                            </tbody>

                        </table>
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
                                class="form-control" style="height: 200px" ;></textarea>

                        </div>
                        <div class="form-group">
                            <label>Attachment</label>

                            <input type="file" class="form-control w-100 rounded-pill lh-lg" required>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer my-2">
                <button type="button" class="btn btn-success m-auto lh-lg w-50 btn-green-gradient">Update</button>
            </div>
        </div>
    </div>
</div>
<?php include("./include/footer.php")?>