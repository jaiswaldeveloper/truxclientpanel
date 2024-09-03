<?php include("./include/header.php")?>
<style>

.nav-pills .nav-link.active>img {
    filter: brightness(0) invert(1);

}



.weight-reconciliation-tabs span {
    font-size: 12px;
}

.weight-reconciliation-tabs .nav-link {
    padding: 8px 10px;
}

.hr-pricing {
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.00) 0%, #000 49.2%, rgba(255, 255, 255, 0.00) 94.61%);
    margin: 2rem;
    /* width: 100%; */
    height: 2px;
}

.overheads .table thead tr th {
    
    background: rgba(121, 57, 204, 0.20);
    border-right: 1px solid rgba(121, 57, 204, 0.20);



}

.overheads .table {
    background: #fff;
    border-radius: 25px;



}

.overheads .table tbody tr td {
    border-right: 1px solid rgba(121, 57, 204, 0.20);



}

.startup_bussiness .table thead tr th,
.Zones_Cities .table thead tr th {
    /* border-radius: 8px 0px 0px 0px; */
    /* border: 1px solid #7939CC; */
    background: linear-gradient(180deg, #7939CC 0%, #1123A5 100%);
    color: #fff !important;


}

/* .startup_bussiness .table tbody tr:first-child {
        background: #fff;

    } */
.startup_bussiness table {
    background: #fff
}

.startup_bussiness .fancy-table table tbody tr:nth-child(even) td:first-child,
.startup_bussiness .fancy-table table tbody tr:nth-child(odd) td:first-child {
    border-bottom: 1px solid rgba(0, 0, 0, 0.25);
    background: linear-gradient(180deg, #7939CC 0%, #1123A5 100%);
    color: #fff !important;

}

.startup_bussiness .fancy-table table tbody tr td,
.Zones_Cities .table tbody tr td {
    background: none;
    color: #7939CC !important;
}

.startup_bussiness .table-striped>tbody>tr:nth-of-type(even)>*,
.Zones_Cities .table-striped>tbody>tr:nth-of-type(even)>* {
    --bs-table-accent-bg: none;
    color: #7939CC !important;


}

.startup_bussiness thead,
.startup_bussiness tbody,
.startup_bussiness tfoot,
.startup_bussiness tr,
.startup_bussiness td,
.startup_bussiness th {

    border-width: 2px;
    border-color: #efe0ff;

}

.startup_bussiness tbody tr span {
    width: 4px;
    border-radius: 50px;
    background: #fff;
    height: 25px;
    margin: 0 1rem;
    display: inline-block;
}
.overheads thead tr{
    white-space: break-spaces;
}
</style>

<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Pricing</h3>
        </div>

    </div>

    <div class="row">


        <div class="col-sm-12 col-lg-12 mt-5">
            <ul class="nav nav-pills mb-3 nav-fill weight-reconciliation-tabs gap-5" id="pills-tab-1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                        aria-selected="true"> <img src="../assets/images/partner_logo/deliverey.png" alt="" srcset=""
                            class=""> <span>Cargo</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"
                        aria-selected="false"><img src="../assets/images/partner_logo/deliverey.png" alt="" srcset=""
                            class=""> <span>B2B</span> </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
                        aria-selected="false"><img src="../assets/images/partner_logo/dtdc.png" alt="" srcset=""
                            class=""> </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-commission-tab" data-bs-toggle="pill" href="#pills-commission"
                        role="tab" aria-selected="false"> <img src="../assets/images/partner_logo/smarter.png" alt=""
                            srcset="" class=""> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-delivered-tab" data-bs-toggle="pill" href="#pills-delivered"
                        role="tab" aria-selected="true"><img src="../assets/images/partner_logo/gati.png" alt=""
                            srcset="" class=""> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-rto-tab" data-bs-toggle="pill" href="#pills-rto" role="tab"
                        aria-selected="false"><img src="../assets/images/partner_logo/Oxygen.png" alt="" srcset=""
                            class=""> </a>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-not-tab" data-bs-toggle="pill" href="#pills-not" role="tab"
                        aria-selected="false"> <img src="../assets/images/partner_logo/deliverey.png" alt="" srcset=""
                            class=""> <span>B2C</span> </a>
                </li>

            </ul>
            <div class="hr-pricing">

            </div>



            <div class="tab-content" id="pills-tabContent-2">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="overheads my-5">
                        <h3 class="mb-5">Overheads</h3>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Min Weight</th>
                                        <th>Docket Charge</th>
                                        <th>Fuel</th>
                                        <th>ROV Charges</th>
                                        <th>Insurance</th>
                                        <th>ODA Charges</th>
                                        <th>COD Charge</th>
                                        <th>Handling Charge</th>
                                        <th>FM Charge</th>
                                        <th>Appointment Charge</th>
                                        <th>Divisor</th>
                                        <th>Min Charge</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20 kg</td>
                                        <td>Rs. 100</td>
                                        <td>20%</td>
                                        <td>0.1% or INR 100 Which is Higher</td>
                                        <td>0.2% or INR 100 Which is Higher</td>
                                        <td>INR 4/Kg or 400 Per Docket Which is Higher</td>
                                        <td>Rs. 100 or 0.2% of COD Amt Which is Higher</td>
                                        <td>if 100kg>= INR 4/Kg or 400 Which is Higher</td>
                                        <td>INR 1/Kg or 100 Per Docket Which is Higher</td>
                                        <td>INR 1/Kg or 700 Per Docket Which is Higher</td>
                                        <td>3540</td>
                                        <td>Rs. 350 + GST</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>

                    <hr>




                    <div class="startup_bussiness my-5">
                        <div class="fancy-table table-responsive  rounded-5">
                            <table class="table table-striped mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Zone</th>
                                        <th scope="col">N1 </th>
                                        <th scope="col">N2 </th>

                                        <th scope="col">N3</th>
                                        <th scope="col">E1</th>
                                        <th scope="col">NE1</th>
                                        <th scope="col">NE2</th>
                                        <th scope="col">W1</th>
                                        <th scope="col">W2</th>
                                        <th scope="col">S1</th>
                                        <th scope="col">S2</th>
                                        <th scope="col">Central</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td class="text-dark">N1</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>

                                    </tr>
                                    <tr>
                                        <td class="text-dark">N2</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>

                                    </tr>
                                    <tr>
                                        <td class="text-dark">N3</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>

                                    </tr>
                                    <tr>
                                        <td class="text-dark">E1</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">NE1</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">NE2</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">W1</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">W2</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">S1</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>

                                    </tr>
                                    <tr>
                                        <td class="text-dark">S2</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">central</td>
                                        <td class="text-dark">12.6</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                        <td class="text-dark">12.7</td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>












                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h1>Coming soon</h1>

                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h1>Coming soon</h1>


                </div>
                <div class="tab-pane fade" id="pills-commission" role="tabpanel" aria-labelledby="pills-commission-tab">

                    <h1>Coming soon</h1>
                </div>
                <div class="tab-pane fade" id="pills-delivered" role="tabpanel" aria-labelledby="pills-commission-tab">

                    <h1>Coming soon</h1>
                </div>
                <div class="tab-pane fade" id="pills-rto" role="tabpanel" aria-labelledby="pills-commission-tab">

                    <h1>Coming soon</h1>
                </div>
                <div class="tab-pane fade" id="pills-not" role="tabpanel" aria-labelledby="pills-commission-tab">

                    <h1>Coming soon</h1>
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