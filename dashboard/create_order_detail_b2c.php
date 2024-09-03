<?php include("./include/header.php")?>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row mb-5">
        <div class="col-lg-12">
            <div class="row align-items-center mb-2">
                <div class="col mt-3">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-soft-light">
                            <li class="breadcrumb-item " aria-current="page">Create New Order</li>
                            <li class="breadcrumb-item" aria-current="page">Choose Shipping Partners</li>
                            <li class="breadcrumb-item active">Create Order Details</li>
                        </ol>
                    </nav>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="selected_shipment">
                        <div class="shipment_pic">
                            <img src="../assets/images/index/deliverey.png" alt="" srcset="" class="w-75">
                            <span><b>B2C</b></span>
                            <h2 style="color: #7939CC" ;><small><i class="fa-solid fa-indian-rupee-sign"></i>
                                </small><span>685</span></h2>
                            <div>
                                <p>Min Amt: <span>350+GST</span></p>
                                <p>charged weight: <span>55kg</span></p>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">


                            <form class="rate_form">
                                <h5 class="mb-3">Order Details</h5>

                                <div class="form_flex">
                                    <div class="form-group w-100">
                                        <label>Product Description*</label>
                                        <input type="text" placeholder="Enter Product Description" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Pickup Point*</label>
                                        <input type="text" placeholder="Enter Pickup Point" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Product Type*</label>
                                        <input type="text" placeholder="Enter Product Type*" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <hr />


                                <h5 class="mb-3">Seller Details</h5>
                                <div class="form_flex">
                                    <div class="form-group w-100">
                                        <label>Seller Name*</label>
                                        <input type="text" placeholder="Enter Seller Name" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Seller Address*</label>
                                        <input type="text" placeholder="Enter Seller Address" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Seller GSTIN*</label>
                                        <input type="text" placeholder="Enter Seller GSTIN*" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <hr />
                                <h5 class="mb-3">Other Details</h5>
                                <div class="form_flex">
                                    <div class="form-group w-100">
                                        <label>Product Description*</label>
                                        <input type="text" placeholder="Enter Product Description" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>HSN Code*</label>
                                        <input type="text" placeholder="Enter HSN Code" class="form-control" required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Ewaybill Number*</label>
                                        <input type="text" placeholder="Enter Ewaybill Number" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Invoice Number*</label>
                                        <input type="text" placeholder="Enter Invoice Number" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <hr />
                                <h5 class="mb-3">Consignee Details</h5>

                                <div class="form_flex">
                                    <div class="form-group w-100">
                                        <label>Customer Name*</label>
                                        <input type="text" placeholder="Enter Customer Name" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Phone Number*</label>
                                        <input type="text" placeholder="Enter Phone Number" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Email ID*</label>
                                        <input type="text" placeholder="Enter Email ID*" class="form-control" required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Enter Address" class="form-control" required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>City*</label>
                                        <input type="text" placeholder="Enter City" class="form-control" required>
                                    </div>
                                    <div class="form-group w-100">
                                        <label>State*</label>
                                        <input type="text" placeholder="Enter State" class="form-control" required>
                                    </div>

                                </div>


                                <div class="d-flex flex-lg-nowrap gap-4 flex-wrap justify-content-between mt-3">
                                    <button class="btn btn-success btn-green-gradient  w-100 lh-lg">Submit
                                    </button>

                                    <button class="btn btn-outline-danger w-100 lh-lg">Reset</button>



                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include("./include/footer.php")?>