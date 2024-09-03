<?php include("./include/header.php")?>
<style>
.weight-reconciliation-tabs .nav-link {
    padding: 10px 70px;
}

.weight-reconciliation-tabs .nav-link.active {
    background: linear-gradient(90deg, #7939CC 0%, #4656A3 100%);
    box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.20);
}
@media (max-width: 767px) {
    .weight-reconciliation-tabs .nav-link {
        padding: 8px 12px !important;
    }
}
</style>
<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>NDR & Exception</h3>
        </div>

    </div>

    <div class="row">

        <div class="col-sm-12 col-lg-12 mt-5">
            <ul class="nav nav-pills mb-3  weight-reconciliation-tabs gap-5" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-open" role="tab"
                        aria-selected="true">Open <span class="badge  bg-secondary">2</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-pending" role="tab"
                        aria-selected="false">Pending<span class="badge  bg-secondary">2</span> </a>
                </li>


            </ul>
            <!-- <hr> -->
            <div class="card">

                <div class="card-body" style="padding: 0" ;>

                    <div class="tab-content" id="pills-tabContent-2">
                        <div class="tab-pane fade show active" id="pills-open" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="card-body">

                                <div class="table-responsive border rounded">
                                    <table id="datatable" class="table " data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>LR/AWB NO.</th>
                                                <th>Last Update</th>
                                                <th>Reason</th>
                                                <th>Attempts</th>
                                                <th>Mode</th>

                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                                <td>161624223 </td>
                                                <td>Bassi_Thana_D (Rajasthan) <br> <i
                                                        class="fa-solid fa-calendar-days"></i> 05 Apr, 2024 </td>
                                                <td>Consignee Unavailable </td>
                                                <td> 01</td>
                                                <td>COD</td>

                                                <td> <button class="btn btn-primary rounded-pill btn-dispute w-100"
                                                        data-bs-toggle="modal" data-bs-target="#ndr-action">
                                                        Take action </button></td>


                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pending" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <h1>Coming soon</h1>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="ndr-action" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-appoitment">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><b>Tracking ID : #4988310846904</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="rate_form ">
                    <div class="form-group w-100">
                        <label class="form-label"> Return*</label>
                        <select class="form-select form-control">
                            <option selected="">Select LR</option>
                            <option value="1">Postpaid</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                </form>

            </div>

            <div class="modal-footer  mt-2">
                <button type="button" class="btn btn-success btn-green-gradient lh-lg w-100">Submit</button>
            </div>
        </div>
    </div>
</div>
<?php include("./include/footer.php")?>