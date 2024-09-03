<?php include("./include/header.php")?>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row mb-5">
        <div class="col-lg-12">
            <div class="row align-items-center">
                <div class="col">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-soft-light">
                            <li class="breadcrumb-item active"><a href="#">Create New Order</a></li>
                            <li class="breadcrumb-item" aria-current="page">Choose Shipping Partners</li>
                            <li class="breadcrumb-item" aria-current="page">Create Order Details</li>
                        </ol>
                    </nav>
                </div>

            </div>

            <div class="row">
                <div class="col-md-9">
                    <form class="rate_form order_create">
                        <h5 class="mb-3">Pickup & Destination Details </h5>

                        <div class="form_flex">
                            <div class="form-group w-100">
                                <label>Pick-up Area Pin code *</label>
                                <input type="text" placeholder="Enter 6 Digit area Pin Code " class="form-control"
                                    required>
                            </div>
                            <div class="form-group w-100">
                                <label>Drop Area Pincode *</label>
                                <input type="text" placeholder="Enter 6 Digit area Drop Pincode " class="form-control"
                                    required>
                            </div>
                        </div>

                        <div class="self-dro-appoitment d-flex gap-5 mt-3">
                            <div>
                                <label for="">Self Drop</label>
                                <div class="checkbox-wrapper-34">
                                    <input class='tgl tgl-ios' id='toggle-34' type='checkbox'>
                                    <label class='tgl-btn' for='toggle-34'></label>
                                </div>
                            </div>
                            <div>
                                <h1>|</h1>
                            </div>
                            <div>
                                <label for="">Appointment Base Delivery</label>
                                <div class="checkbox-wrapper-34">
                                    <input class='tgl tgl-ios' id='toggle-35' type='checkbox'>
                                    <label class='tgl-btn' for='toggle-35'></label>
                                </div>
                            </div>

                        </div>
                        <hr style="border: 1px dashed ;" />

                        <h5 class="mb-3">Weight & Dimensions(In cm) </h5>
                        <div class="demission_area weight_dm mb-3 ">

                            <div class="form_flex">
                                <div class="form-group w-100">
                                    <label>Weight(Kg)</label>
                                    <input type="text" placeholder="Total Weight " class="form-control area-dem "
                                        required>
                                </div>
                                <div class="form-group w-100">
                                    <label>Qty</label>
                                    <input type="text" placeholder="Qty " class="form-control area-dem" required>
                                </div>
                                <div class="form-group w-100">
                                    <label>Length</label>
                                    <input type="text" placeholder="Length " class="form-control area-dem" required>
                                </div>
                                <div class="form-group w-100">
                                    <label>Breath</label>
                                    <input type="text" placeholder=" Breath " class="form-control area-dem" required>
                                </div>
                                <div class="form-group w-100">
                                    <label>Height</label>
                                    <input type="text" placeholder=" Height " class="form-control area-dem" required>
                                </div>
                               
                            </div>


                        </div>
                        <hr style="border: 1px dashed;" />

                        <h5 class="mb-3">Mode & Invoice Details </h5>

                        <div class="form_flex">
                            <div class="form-group w-100">
                                <label class="form-label">Payment Mode*</label>
                                <select class="form-select form-control">
                                    <option selected="">Prepaid</option>
                                    <option value="1">Postpaid</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group w-100">
                                <label>Invoice Value *</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-indian-rupee-sign"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Invoice Value "
                                        aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                            </div>

                        </div>
                        <h6 class="mb-1">Insurance?</h6>

                        <div class="d-flex gap-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                            </div>

                        </div>



                        <div class="d-flex flex-lg-nowrap gap-4 flex-wrap justify-content-between mt-3">
                            <button class="btn btn-success btn-green-gradient w-100 lh-lg">Search Courier
                                Partner</button>
                            <button class="btn btn-outline-danger w-100 lh-lg">Reset
                            </button>

                        </div>

                    </form>
                </div>
                <div class="col-md-3 ">
                    <img src="../assets/images/create-order-banner.svg" class="w-100 mt-2" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("./include/footer.php")?>