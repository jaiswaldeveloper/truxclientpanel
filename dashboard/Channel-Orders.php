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
            <h3>Channel Orders</h3>
        </div>

    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="weight_reconcilation_bg" style="padding: 2rem">
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
                                <option selected="">All Channel</option>
                                <option value="1">Today</option>
                                <option value="2">1 week</option>
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