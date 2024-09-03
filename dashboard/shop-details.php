<?php include("./include/header.php")?>
<style>
.weight-reconciliation-tabs .nav-link {
    padding: 14px 70px;
}

.weight-reconciliation-tabs .nav-link.active {
    background: linear-gradient(90deg, #7939CC 0%, #4656A3 100%);
    box-shadow: 0px 4px 4px 0px rgba(121, 57, 204, 0.20);
}
</style>
<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h3>Booking Details</h3>
        </div>

        <div>
            <a href="Shop.php">
                <button class="btn btn-success btn-appoint rounded-pill mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 6H21" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> Shop </button>
            </a>


        </div>
    </div>

    <div class="row">
        <div class="card">


            <div class="card-body">

                <div class="table-responsive border rounded">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Order</th>
                                <th>Amount </th>
                                <th>Shiping Address</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                                <th>Tracking ID</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                <td>6 Tap Roll</td>
                                <td><small></small>9000</td>
                                <td>DEV KUMAR SINGH, 08777786316 2ND FLOOR PREMISES NO. 614 FLAT NO. C-2,SWARNAVA - II,
                                    59, SOUTH PURBACHAL ROAD,KOLKATA,KOLKATA,WEST BENGAL,700078 KOLKATA - CCU West
                                    Bengal-700078</td>
                                <td>Wallet</td>
                                <td>In Transit</td>
                                <td>4988310853996</td>

                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include("./include/footer.php")?>