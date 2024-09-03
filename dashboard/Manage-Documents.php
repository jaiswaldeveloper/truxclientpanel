<?php include("./include/header.php")?>

<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Manage Documents</h3>
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">

            <form action="" style="background: #fff; padding: 10%; border-radius: 32px ;border: 2px dashed #7939CC " ;>
                <div class="form-group w-100">
                    <div class="form-group row">
                        <label class="control-label col-sm-4 align-self-center mb-0 fw-bold" for="email11">LR:</label>
                        <div class="col-sm-8">
                            <div class="form-group w-100 lh-lg">
                                <select class="form-select form-control rounded-pill" ;>
                                    <option selected="">Select any one </option>
                                    <option value="1">Today</option>
                                    <option value="2">1 week</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-4 align-self-center mb-0 fw-bold"
                            for="email11">Documents:</label>
                        <div class="col-sm-8 mt-3">
                            <input type="file" class="form-control rounded-pill">
                        </div>
                    </div>


                    <div class="text-center mt-5">
                        <button class="btn btn-success btn-green-gradient rounded-pill lh-lg w-100">Update </button>
                    </div>
                </div>
            </form>


        </div>


        <div class="col-lg-12 mt-3">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive border rounded">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>LR No.</th>
                                    <th>Date</th>
                                    <th>DOCUMENTS</th>
                                    <th>Remark</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>253854460 </td>

                                    <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                    <td></td>
                                    <td></td>


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