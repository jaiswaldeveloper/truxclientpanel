<?php include("./include/header.php")?>

<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Delivery Appointment</h3>
        </div>

        <div>
            <button type="button" class="btn btn-success btn-appoint rounded-pill mt-2" data-bs-toggle="modal"
                data-bs-target="#add-Appointment">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                    <path d="M12 4V20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M20 11.9999H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg> Add Appointment </button>

        </div>
    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="weight_reconcilation_bg" style="padding: 2rem"
                style="background: linear-gradient(93deg, rgba(17, 35, 165, 0.75) 0%, rgba(121, 57, 204, 0.52) 100%);">
                <form class="rate_form">
                    <div class="form_flex">
                        <div class="form-group w-100">
                            <input type="search" placeholder="Search by LR/AWB" class="form-control "
                                style="border-radius: 3px">
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
                                    <th>APPOINTMENT DATE</th>
                                    <th>SLOT TIME</th>
                                    <th>PO NUMBER</th>
                                    <th>MODE</th>
                                    <th>PO COPY</th>
                                    <th>ASN</th>
                                    <th>STATUS</th>
                                    <th>REMARK</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>253854460 </td>
                                    <td>03 Aug, 2023 </td>
                                    <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                    <td> 1326310073211</td>
                                    <td>Prepaid</td>
                                    <td>(file) Attachment </td>
                                    <td>19021900 </td>
                                    <td> </td>
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


<div class="modal fade" id="add-Appointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-appoitment">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><b>Register Your Appointment</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="rate_form ">
                    <div class="form-group w-100">
                        <label class="form-label"> LR*</label>
                        <select class="form-select form-control">
                            <option selected="">Select LR</option>
                            <option value="1">Postpaid</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group w-100">
                        <label class="form-label"> Appointment Date*</label>
                        <input type="date" placeholder="Enter Appointment Date" class="form-control" required>

                    </div>
                    <div class="form_flex ">
                        <div class="form-group w-100">
                            <label>Start Time*</label>
                            <input type="time" placeholder="Start Time " class="form-control" required>
                        </div>
                        <div class="form-group w-100">
                            <label>End Time*</label>
                            <input type="time" placeholder="End Time" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group w-100">
                        <label class="form-label"> Appointment ID*</label>
                        <input type="text" placeholder="Enter Appointment ID" class="form-control" required>

                    </div>
                    <div class="form_flex ">
                        <div class="form-group w-100">
                            <label>PO*</label>
                            <input type="text" placeholder="Enter PO " class="form-control" required>
                        </div>
                        <div class="form-group w-100">
                            <label>ASN*</label>
                            <input type="text" placeholder="Enter ASN" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group w-100">
                        <label class="form-label"> PO Copy*</label>
                        <input type="file" class="form-control" required>

                    </div>

                </form>

            </div>

            <div class="modal-footer  mt-2">
                <button type="button" class="btn btn-success btn-green-gradient lh-lg w-100">Add Appointment</button>
            </div>
        </div>
    </div>
</div>
<?php include("./include/footer.php")?>