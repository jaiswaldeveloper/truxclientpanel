<?php include("./include/header.php")?>
<style>
.weight-reconciliation-tabs .nav-link.active {
    background: linear-gradient(90deg, #7939CC 0%, #4656A3 100%);
    box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.20);
}
</style>
<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Members Management</h3>
        </div>
        <div>
            <button type="button" class="btn btn-success btn-point rounded-pill mt-2" data-bs-toggle="modal"
                data-bs-target="#add-pickup-point">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                    <path d="M12 4V20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M20 11.9999H4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg> Add member </button>

        </div>




    </div>

    <div class="row">


        <div class="col-sm-12 col-lg-12 mt-5">
            <ul class="nav nav-pills mb-3 weight-reconciliation-tabs gap-5" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                        aria-selected="true">All Member </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"
                        aria-selected="false">Members Wallet </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
                        aria-selected="false"> Member Orders </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-commission-tab" data-bs-toggle="pill" href="#pills-commission"
                        role="tab" aria-selected="false"> Your Commission </a>
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
                                                <th>S.NO</th>
                                                <th>USER ID</th>
                                                <th>NAME</th>
                                                <th>CONTACT NO.</th>
                                                <th>EMAIL</th>

                                                <th>CITY</th>
                                                <th>STATUS</th>
                                                <th>JOINING DATE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1 </td>
                                                <td>TRUXCARGO3766</td>
                                                <td>ALLIED ALLIED</td>
                                                <td>9339530464</td>
                                                <td> ALLIEDPHARMA1972@YAHOO.COM</td>
                                                <td>KOLKATA</td>
                                                <td>Active</td>
                                                <td>15 Feb, 2023</td>

                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="card-body">

                                <div class="table-responsive border rounded">
                                    <table id="datatable" class="table " data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>USER ID</th>
                                                <th>NAME</th>
                                                <th>RECHARGE</th>
                                                <th>DEDUCTION</th>

                                                <th>REFUND</th>
                                                <th>WALLET BALANCE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1 </td>
                                                <td>TRUXCARGO3766</td>
                                                <td>ALLIED ALLIED</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    2 </td>
                                                <td>TRUXCARGO3766</td>
                                                <td>ALLIED ALLIED</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>

                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">

                            <div class="weight_reconcilation_bg"
                                style="background: linear-gradient(93deg, #7939CC 0%, #4656A3 50%, #36CB72 100%)" ;>
                                <form class="rate_form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form_flex">
                                                <div class="form-group w-100">
                                                    <input type="search" placeholder="Search by LR/AWB"
                                                        class="form-control rounded-pill" style="border-radius: 3px" ;>


                                                </div>
                                                <div class="form-group w-50">
                                                    <select class="form-select form-control" style="border-radius: 3px"
                                                        ;>
                                                        <option selected="">All Members</option>
                                                        <option value="1">Today</option>
                                                        <option value="2">1 week</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                                <div class="form-group w-50">
                                                    <select class="form-select form-control" style="border-radius: 3px"
                                                        ;>
                                                        <option selected="">All payments</option>
                                                        <option value="1">Today</option>
                                                        <option value="2">1 week</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="form-group w-50">
                                                    <select class="form-select form-control" style="border-radius: 3px"
                                                        ;>
                                                        <option selected="">All status</option>
                                                        <option value="1">Postpaid</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>




                                                <div class="form-group w-50">
                                                    <select class="form-select form-control" style="border-radius: 3px"
                                                        ;>
                                                        <option selected="">All Dates</option>
                                                        <option value="1">Today</option>
                                                        <option value="2">1 week</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-success btn-green-gradient rounded-pill"
                                                        ;>Apply
                                                    </button>
                                                </div>

                                            </div>


                                        </div>


                                    </div>
                                </form>

                                <hr>

                                <h3 class="text-white">Overview</h3>
                                <hr class="hr-horizontal">

                                <div class="d-flex justify-content-between ">
                                    <div>
                                        <h6 class="text-white">Today Load </h6>
                                        <h3 class="text-white">4.53 Kg</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-white">Overall Load (Base On Search)  </h6>
                                        <h3 class="text-white">0 Kg</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive border rounded">
                                    <table id="datatable" class="table " data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>USER ID</th>
                                                <th>LR/AWB NO.</th>
                                                <th>MANIFESTED DATE</th>
                                                <th>TYPE</th>
                                                <th>WEIGHT</th>
                                                <th>CHARGED AMOUNT</th>
                                                <th>STATUS</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>

                                                <td>TRUXCARGO3766</td>
                                                <td>ALLIED ALLIED</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>

                                            </tr>


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-commission" role="tabpanel"
                            aria-labelledby="pills-commission-tab">

                            <div class="weight_reconcilation_bg"
                                style="background: linear-gradient(93deg, #7939CC 0%, #4656A3 50%, #36CB72 100%)" ;>


                                <h3 class="text-white">Overview</h3>
                                <hr class="hr-horizontal">

                                <div class="d-flex justify-content-between ">
                                    <div>
                                        <h6 class="text-white">Total Weight Discrepancies </h6>
                                        <h3 class="text-white">4.53 Kg</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-white">Discrepancies Accepted </h6>
                                        <h3 class="text-white">4.53 Kg</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-white">Discrepancies Rejected </h6>
                                        <h3 class="text-white">0 Kg</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive border rounded">
                                    <table id="datatable" class="table " data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>USER ID</th>
                                                <th>COMMISSION MONTH </th>
                                                <th>TRANSACTION</th>
                                                <th>AMOUNT</th>
                                                <th>STATUS</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1 </td>
                                                <td>TRUXCARGO3766</td>
                                                <td>ALLIED ALLIED</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td><button class="btn btn-warning">unpaid</button></td>


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