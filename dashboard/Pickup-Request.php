<?php include("./include/header.php")?>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center mb-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Pickup Request</h3>
        </div>

        <div>
            <button type="button" class="btn btn-success btn-point rounded-pill mt-2" data-bs-toggle="modal"
                data-bs-target="#add-pickup-point">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                    <path d="M12 4V20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M20 11.9999H4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg> Add Pickup Point </button>

        </div>


    </div>

    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="gradient-bg-pick-request">
                <form>
                    <div class="d-flex gap-2 gap-lg-5 flex-lg-nowrap flex-wrap">
                        <div class="form-group w-100">
                            <input type="text" placeholder="Enter Pickup Request id" class="form-control lh-lg"
                                required>

                        </div>
                        <h5 class="text-white m-auto">or</h5>
                        <div class="form-group w-100">
                            <input type="date" class="form-control lh-lg" required>

                        </div>
                    </div>
                    <hr style="border-color: #fff">
                    <button type="button" class="btn btn-success btn-green-gradient lh-lg  w-sm-100"
                        style="padding: 10px 55px">Apply</button>
                    <button type="button" class="btn btn-light btn-clear lh-lg"
                        style="padding: 10px 55px">Clear</button>

                </form>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-5 gap-3">
                        <h4 class="mb-5"> Latest Orders</h4>
                        <div>
                            <select class="form-select form-control">
                                <option selected="">Latest Order</option>
                                <option value="1">Oldest order</option>

                            </select>
                        </div>
                    </div>
                    <div class="fancy-table table-responsive mt-4 border rounded">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                            <thead>
                                <tr>
                                    <th scope="col">Request ID </th>
                                    <th scope="col">Pickup Point </th>
                                    <th scope="col">Pickup date & Time</th>
                                    <th scope="col">Package Count</th>
                                    <th scope="col">Center </th>
                                    <th scope="col">Delivery Partner</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="text-dark">
                                        <p style="color: #7939CC" ;>161624223</p> 02 Apr, 2024 <span>08:32 PM</span>
                                    </td>

                                    <td class="text-dark">Professionalcourier behind 55, <br> opposite VM and company,
                                        opposite 2859, Delhi</td>
                                    <td>05 Apr, 2024 <span>08:32 PM</span></td>
                                    <td>
                                        01
                                    </td>
                                    <td>
                                        Delhi_KirtiNagar_L
                                    </td>


                                    <td>
                                        <img src="../assets/images/index/deliverey.png" alt="" srcset="" class="w-75">
                                        <span><b>B2B</b></span>
                                    </td>


                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="add-pickup-point" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><b>New Pickup Request</b></h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body rate_form">
                    <div class="form_flex">
                        <div class="form-group w-100">
                            <label>Shipping Partner*</label>
                            <select class="form-select form-control">
                                <option selected="">Select Partner</option>
                                <option value="1">DELHIEVERY LIGHT</option>
                                <option value="2">Ecom</option>
                                <option value="2">Amazon</option>
                                <option value="2">Ekart</option>
                                <option value="2">xbees</option>

                            </select>
                        </div>
                        <div class="form-group w-100">
                            <label class="form-label">Warehouse*</label>
                            <select class="form-select form-control">
                                <option selected="">Select Warehouse</option>
                                <option value="1">Home</option>
                                <option value="2">Office</option>

                            </select>

                        </div>

                    </div>

                    <!-- <hr> -->

                    <div class="form_flex">

                        <div class="form-group w-100">
                            <label>Expected Package Count*</label>
                            <input type="number" placeholder="Enter Contact number" class="form-control" required>
                        </div>
                        <div class="form-group w-100">
                            <label>Pickup Date*</label>
                            <input type="date" class="form-control" required>
                        </div>

                    </div>
                    <div class="form_flex">
                        <div class="form-group w-100">
                            <label>Pickup Time*</label>
                            <input type="time" class="form-control" required>
                        </div>
                        <div class="form-group w-100">
                            
                        </div>


                    </div>

                </div>
                <div class="bordertop-delete-modal">

                </div>

                <div class="modal-footer m-auto d-flex mt-2 flex-lg-nowrap w-100 flex-wrap">
                    <button type="button" class="btn btn-success lh-lg w-100">Add Pickup Request</button>
                    <button type="button" class="btn btn-outline-danger lh-lg w-100">Cancel Request</button>
                </div>
            </div>
        </div>
    </div>

</div>


<?php include("./include/footer.php")?>