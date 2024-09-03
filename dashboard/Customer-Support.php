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
        padding: 10px 29px;
        }
}
</style>
<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Customer Support</h3>
        </div>

        <div>
            <button type="button" class="btn btn-success btn-appoint rounded-pill mt-2" data-bs-toggle="modal"
                data-bs-target="#add-request">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                    <path d="M12 4V20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M20 11.9999H4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg> Add New Request </button>

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
                <li class="nav-item">
                    <a class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" href="#pills-closed" role="tab"
                        aria-selected="false">Closed<span class="badge  bg-secondary">2</span> </a>
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
                                                <th>Ticket ID</th>
                                                <th>Category </th>
                                                <th>Subject</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                                <td>161624223 </td>
                                                <td>Operation Related</td>
                                                <td>Consignee Unavailable</td>


                                                <td>
                                                    <a href="supportticket-open.php">
                                                        <button class="btn btn-primary rounded-pill btn-dispute w-100">
                                                            View </button>
                                                    </a>
                                                </td>


                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pending" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="card-body">

                                <div class="table-responsive border rounded">
                                    <table id="datatable" class="table " data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>Ticket ID</th>
                                                <th>Category </th>
                                                <th>Subject</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                                <td>161624223 </td>
                                                <td>Operation Related</td>
                                                <td>Consignee Unavailable</td>


                                                <td>
                                                    <a href="supportticket-open.php">
                                                        <button class="btn btn-primary rounded-pill btn-dispute w-100">
                                                            View </button>
                                                    </a>
                                                </td>


                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab">
                            <div class="card-body">

                                <div class="table-responsive border rounded">
                                    <table id="datatable" class="table " data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>Ticket ID</th>
                                                <th>Category </th>
                                                <th>Subject</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                                <td>161624223 </td>
                                                <td>Operation Related</td>
                                                <td>Consignee Unavailable</td>


                                                <td>
                                                    <a href="supportticket-open.php">
                                                        <button class="btn btn-primary rounded-pill btn-dispute w-100">
                                                            View </button>
                                                    </a>
                                                </td>


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




<div class="modal fade" id="add-request" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-appoitment">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><b>Create New Request</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="rate_form">
                    
                    <div class="form-group w-100 my-3">

                        <select class="form-select form-control" name="category" id="category" required="required">
                            <option value="">Select Issue Category</option>
                            <option value="Account Related">Account Related</option>
                            <option value="Branch/FE Related">Branch/FE Related</option>
                            <option value="Client Panel Related issues">Client Panel Related issues</option>
                            <option value="Delivery Related">Delivery Related</option>
                            <option value="Finance Related Issues">Finance Related Issues</option>
                            <option value="Operation Related">Operation Related</option>
                            <option value="Package Details Related">Package Details Related</option>
                            <option value="Pick up Related">Pick up Related</option>
                            <option value="Pick up Request">Pick up Request</option>
                            <option value="Product Related">Product Related</option>
                            <option value="Report Related">Report Related</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group w-100 my-3">

                        <select class="form-select form-control" name="category" id="category" required="required">
                            <option value="">Select issue sub category </option>
                            <option value="Account Related">Account Related</option>

                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group w-100">
                        <input type="text" placeholder="Please Enter Subject " class="form-control w-100" required>


                    </div>
                    <div class="form-group w-100 my-3">
                        <textarea name="" id="" rows="5" cols="50" placeholder="Please enter Description"
                            class="form-control" style="height: inherit"></textarea>


                    </div>
                    <div class="form-group w-100 my-3">
                        <input type="file" class="form-control" style="height: inherit" required>

                    </div>


                </form>

            </div>

            <div class="modal-footer ">
                <button type="button" class="btn btn-success btn-green-gradient lh-lg w-100">Submit</button>
            </div>
        </div>
    </div>
</div>
<?php include("./include/footer.php")?>