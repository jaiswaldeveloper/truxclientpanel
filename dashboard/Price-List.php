<?php include("./include/header.php")?>
<style>
.weight-reconciliation-tabs .nav-link {
    /* padding: 14px 70px; */
    font-size: 18px;

}

.weight-reconciliation-tabs .nav-link.active {
    background: linear-gradient(90deg, #7939CC 0%, #4656A3 100%);
    box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.20);
}


.table thead tr th,
.table tbody tr td {
    text-align: center;
    border: 1px solid #7939CC;
}

.table-container .table thead tr {
    background-color: #EBE4F4;
}

.table tbody tr td img {
    width: 100px !important;
}

.table-container .table tbody tr td {
    background: #fff;
}

.table-container .table {
    overflow: auto;

}

/* .table tbody tr td:first-child{
    display: flex;

 } */
.table-container th:first-child {
    background-color: #EBE4F4;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;

}

.table-container th:first-child,
.table-container td:first-child {
    position: sticky;
    left: 0;
    z-index: 1;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;

}

.table-container th:first-child {
    z-index: 3;
}

.Overheads_price thead tr {
    background: rgba(121, 57, 204, 0.75);
    color: #fff;
}

.nav-pills .nav-link.active {
    border-radius: 200px;
    background: linear-gradient(99deg, #7939CC 0%, #4656A3 100%);
    box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.20);
}

.nav-pills .nav-link.active>img {
    filter: brightness(0) invert(1);

}

.weight-reconciliation-tabs img {
    /* HEIGHT: 26PX;
    aspect-ratio: 1 / 1;
    object-fit: CONTAIN;
   
    width: 70% !important; */
}

.weight-reconciliation-tabs span {
    font-size: 12px;
}

.weight-reconciliation-tabs .nav-link {
    /* padding: 8px 10px; */
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
            <h3>Pricing List</h3>
        </div>


    </div>

    <div class="row">

        <div class="col-sm-12 col-lg-12 mt-5">
            <ul class="nav nav-pills mb-3  weight-reconciliation-tabs gap-5" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-open" role="tab"
                        aria-selected="true" style="padding: 8px 40px">B2B </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-pending" role="tab"
                        aria-selected="false" style="padding: 8px 40px">B2C</a>
                </li>



            </ul>
            <!-- <hr> -->
            <div class="card">

                <div class="card-body" style="padding: 0">

                    <div class="tab-content" id="pills-tabContent-2">
                        <div class="tab-pane fade show active" id="pills-open" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="card-body">
                                <h4>All Shipping Partners</h4>
                                <div class="table-container table-responsive border rounded mt-5">
                                    <table class="table" style="margin: 0">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h3><b>Couriers</b></h3>
                                                    <hr />
                                                </th>
                                                <th>
                                                    Mode
                                                    <hr />
                                                </th>
                                                <th>Min. Weight
                                                    <hr />
                                                </th>
                                                <th>Zone A
                                                    <hr />
                                                    <small> Within City
                                                        Upto | Add.</small>
                                                </th>
                                                <th>Zone C1
                                                    <hr />
                                                    <small>Metro-Metro
                                                        Upto | Add.</small>
                                                </th>
                                                <th>Zone C2
                                                    <hr />
                                                    <small>Metro-Metro
                                                        Upto | Add.</small>
                                                </th>
                                                <th>Zone D1
                                                    <hr />
                                                    <small>Rest of India
                                                        Upto | Add.</small>
                                                </th>
                                                <th>Zone D2
                                                    <hr />
                                                    <small>Rest of India
                                                        Upto | Add.</small>
                                                </th>
                                                <th>Zone E
                                                    <hr />
                                                    <small>Jammu, HP, North East excluding Manipur
                                                        Upto | Add.</small>
                                                </th>
                                                <th>Zone F
                                                    <hr />
                                                    <small>Kashmir, Manipur, Ladakh, Andaman & Nicobar
                                                        Upto | Add.</small>
                                                </th>
                                                <th>COD
                                                    <hr />
                                                    <small>Charges / %
                                                    </small>
                                                </th>
                                                <th>FSC
                                                    <hr />
                                                    <small>Fuel Surcharge
                                                    </small>
                                                </th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/index/deliverey.png" alt="" srcset=""
                                                        class="w-100">
                                                    <small>Small</small>
                                                </td>

                                                <td>Surface</td>
                                                <td>0.5 kg</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>

                                                <td> <small>₹</small> 35 | 1.5</td>
                                                <td> <small>₹</small> 15%
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/index/deliverey.png" alt="" srcset=""
                                                        class="w-100">
                                                    <small>Small</small>
                                                </td>

                                                <td>Surface</td>
                                                <td>0.5 kg</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>

                                                <td> <small>₹</small> 35 | 1.5</td>
                                                <td> <small>₹</small> 15%
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/index/deliverey.png" alt="" srcset=""
                                                        class="w-100">
                                                    <small>Small</small>
                                                </td>

                                                <td>Surface</td>
                                                <td>0.5 kg</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>

                                                <td> <small>₹</small> 35 | 1.5</td>
                                                <td> <small>₹</small> 15%
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/index/deliverey.png" alt="" srcset=""
                                                        class="w-100">
                                                    <small>Small</small>
                                                </td>

                                                <td>Surface</td>
                                                <td>0.5 kg</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>

                                                <td> <small>₹</small> 35 | 1.5</td>
                                                <td> <small>₹</small> 15%
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/index/deliverey.png" alt="" srcset=""
                                                        class="w-100">
                                                    <small>Small</small>
                                                </td>

                                                <td>Surface</td>
                                                <td>0.5 kg</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>

                                                <td> <small>₹</small> 35 | 1.5</td>
                                                <td> <small>₹</small> 15%
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/index/deliverey.png" alt="" srcset=""
                                                        class="w-100">
                                                    <small>Small</small>
                                                </td>

                                                <td>Surface</td>
                                                <td>0.5 kg</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>

                                                <td> <small>₹</small> 35 | 1.5</td>
                                                <td> <small>₹</small> 15%
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="../assets/images/index/deliverey.png" alt="" srcset=""
                                                        class="w-100">
                                                    <small>Small</small>
                                                </td>

                                                <td>Surface</td>
                                                <td>0.5 kg</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>
                                                <td> <small>₹</small> 27 | 22</td>

                                                <td> <small>₹</small> 35 | 1.5</td>
                                                <td> <small>₹</small> 15%
                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>
                                </div>

                                <div class="Overheads_price">
                                    <h4 class="my-5">Ekart 10KG Overheads</h4>
                                    <div class="table-responsive">

                                    
                                    <table class="table " style="margin: 0">
                                        <thead>
                                            <tr>
                                                <th>ODA Charges</th>
                                                <th>Handling Charge</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>INR 2/Kg or 500 Per Docket Which is Higher</td>
                                                <td>(>32-90 Kg, Rs 25),(>90-200 Kg, Rs 250), (>200Kg, Rs 2500)</td>

                                            </tr>

                                        </tbody>

                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pending" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="card-body">


                        
                            <div class="row">


                                <div class="col-sm-12 col-lg-12 mt-5">
                                    <ul class="nav nav-pills mb-3 nav-fill weight-reconciliation-tabs gap-5"
                                        id="pills-tab-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                href="#pills-home" role="tab" aria-selected="true"> <img
                                                    src="../assets/images/partner_logo/deliverey.png" alt="" srcset=""
                                                    class=""> <span>Cargo</span> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                href="#pills-profile" role="tab" aria-selected="false"><img
                                                    src="../assets/images/partner_logo/deliverey.png" alt="" srcset=""
                                                    class=""> <span>B2B</span> </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                href="#pills-contact" role="tab" aria-selected="false"><img
                                                    src="../assets/images/partner_logo/dtdc.png" alt="" srcset=""
                                                    class=""> </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" id="pills-commission-tab" data-bs-toggle="pill"
                                                href="#pills-commission" role="tab" aria-selected="false"> <img
                                                    src="../assets/images/partner_logo/smarter.png" alt="" srcset=""
                                                    class=""> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-delivered-tab" data-bs-toggle="pill"
                                                href="#pills-delivered" role="tab" aria-selected="true"><img
                                                    src="../assets/images/partner_logo/gati.png" alt="" srcset=""
                                                    class=""> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-rto-tab" data-bs-toggle="pill"
                                                href="#pills-rto" role="tab" aria-selected="false"><img
                                                    src="../assets/images/partner_logo/Oxygen.png" alt="" srcset=""
                                                    class=""> </a>
                                        <li class="nav-item ">
                                            <a class="nav-link" id="pills-not-tab" data-bs-toggle="pill"
                                                href="#pills-not" role="tab" aria-selected="false"> <img
                                                    src="../assets/images/partner_logo/deliverey.png" alt="" srcset=""
                                                    class=""> <span>B2C</span> </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" id="pills-not-tab" data-bs-toggle="pill"
                                                href="#pills-not" role="tab" aria-selected="false"> <img
                                                    src="../assets/images/partner_logo/v-xpress.png" alt="" srcset=""
                                                    class=""></a>
                                        </li>

                                    </ul>
                                    <div class="hr-pricing">

                                    </div>



                                    <div class="tab-content" id="pills-tabContent-2">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">

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
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <h1>Coming soon</h1>

                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                            aria-labelledby="pills-contact-tab">
                                            <h1>Coming soon</h1>


                                        </div>
                                        <div class="tab-pane fade" id="pills-commission" role="tabpanel"
                                            aria-labelledby="pills-commission-tab">

                                            <h1>Coming soon</h1>
                                        </div>
                                        <div class="tab-pane fade" id="pills-delivered" role="tabpanel"
                                            aria-labelledby="pills-commission-tab">

                                            <h1>Coming soon</h1>
                                        </div>
                                        <div class="tab-pane fade" id="pills-rto" role="tabpanel"
                                            aria-labelledby="pills-commission-tab">

                                            <h1>Coming soon</h1>
                                        </div>
                                        <div class="tab-pane fade" id="pills-not" role="tabpanel"
                                            aria-labelledby="pills-commission-tab">

                                            <h1>Coming soon</h1>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
        </div>
    </div>
</div>



<?php include("./include/footer.php")?>