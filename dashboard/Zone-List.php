<?php include("./include/header.php")?>

<style>
.table tbody tr td {
    width: 2%;
}

.accordion-button {
    background: #fff;
}

.accordion-body {
    padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
    background: #fff;
}

.table thead tr {
    background: #fff;
}

.accordion-item {
    border-color: #7939cc;
}
</style>

<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3">
        <div class="d-flex flex-column">
            <h4>Zone List</h4>
        </div>
    </div>



    <section class="zone_list">
        <div class="row">
            <div class="col-lg-11">
                <div class="card">
                    <div class="card-body">
                        <div class="row  mt-4">
                            <div class="col-lg-3">
                                <h4 class="m-4 fw-light" style="color: #7939CC">5 Matrix</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="accordion" id="accordionExampleOne">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <table class="table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Zone</th>
                                                            <th>Cities</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExampleTwo">
                                            <div class="accordion-body">
                                                <div class="table-responsive border  rounded">
                                                    <table class="table m-0">
                                                        <tbody>

                                                            <tr>
                                                                <td>North</td>
                                                                <td>Delhi,Haryana,Rajasthan,Uttar Pradesh,Uttarakhand,
                                                                    Kansas,
                                                                    Punjab,
                                                                    Chandigarh,Himachal Pradesh,Jammu and Kashmir</td>
                                                            </tr>

                                                            <tr>
                                                                <td>West</td>
                                                                <td>Gujarat,Maharashtra, Goa, Madhya
                                                                    Pradesh,Silvassa,Chhattisgarh,Dadra
                                                                    and Nagar
                                                                    Haveli and Daman, Daman and Diu </td>
                                                            </tr>

                                                            <tr>
                                                                <td>South</td>
                                                                <td>Kerala,Karnataka, Tamil Nadu, Andhra
                                                                    Pradesh,Telangana,Pondicherry
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>East</td>
                                                                <td>West Bengal, Odisha, Bihar, Jharkhand, Andaman and
                                                                    Nicobar
                                                                    Islands
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>North East</td>
                                                                <td>Assam, Meghalaya, Tripura, Arunachal Pradesh,
                                                                    Mizoram,
                                                                    Manipur,
                                                                    Nagaland, Sikkim
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


                        <div class="row  mt-4">
                            <div class="col-lg-3">
                                <h4 class="m-4 fw-light" style="color: #7939CC">24 Matrix</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="accordion" id="accordionExampleTwo">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <table class="table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Zone</th>
                                                            <th>Type Zone</th>
                                                            <th>Cities</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExampleTwo">
                                            <div class="accordion-body">
                                                <div class="table-responsive border  rounded">
                                                    <table class="table m-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>N1</td>
                                                                <td>Metro</td>
                                                                <td>Ambala</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N2</td>
                                                                <td>Metro</td>
                                                                <td>Delhi, Noida, Gurgaon, Faridabad, Ghaziabad </td>
                                                            </tr>
                                                            <tr>
                                                                <td>N3</td>
                                                                <td>Metro</td>
                                                                <td>Jaipur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N4</td>
                                                                <td>Metro</td>
                                                                <td>Lucknow</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N5</td>
                                                                <td>Non Metro</td>
                                                                <td>Punjab, Chandigarh, Himachal Pradesh, J&amp;K</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N6</td>
                                                                <td>Non Metro</td>
                                                                <td>Haryana, Uttrakhand, Uttar Pradesh West</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N7</td>
                                                                <td>Non Metro</td>
                                                                <td>Rajasthan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N8</td>
                                                                <td>Non Metro</td>
                                                                <td>Uttar Pradesh East</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W1</td>
                                                                <td>Metro</td>
                                                                <td>Indore, Ahmedabad</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W2</td>
                                                                <td>Metro</td>
                                                                <td>Mumbai, Pune, Nagpur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W3</td>
                                                                <td>Non Metro</td>
                                                                <td>Gujarat, Madhya Pradesh, Daman &amp; Diu, Dadra
                                                                    &amp; Nagar
                                                                    Haveli</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W4</td>
                                                                <td>Non Metro</td>
                                                                <td>Maharashtra, Goa, Chhattisgarh </td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1</td>
                                                                <td>Metro</td>
                                                                <td>Hyderabad</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S2</td>
                                                                <td>Metro</td>
                                                                <td>Bangalore, Chennai</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S3</td>
                                                                <td>Metro</td>
                                                                <td>Coimbatore</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S4</td>
                                                                <td>Non Metro</td>
                                                                <td>Andhra Pradesh, Telangana</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S5</td>
                                                                <td>Non Metro</td>
                                                                <td>Karnataka, Tamil Nadu, Pondicherry</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S6</td>
                                                                <td>Metro</td>
                                                                <td>Kerala</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E1</td>
                                                                <td>Metro</td>
                                                                <td>Jamshedpur, Kolkata</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E2</td>
                                                                <td>Metro</td>
                                                                <td>Guwahati, Siliguri</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E3</td>
                                                                <td>Non Metro</td>
                                                                <td>West Bengal, Odisha, Bihar, Jharkhand</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E4</td>
                                                                <td>Non Metro</td>
                                                                <td>Assam, Meghalaya, Tripura, Arunachal Pradesh,
                                                                    Mizoram,
                                                                    Manipur, Nagaland, Sikkim</td>
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

                        <div class="row  mt-4">
                            <div class="col-lg-3">
                                <h4 class="m-4 fw-light" style="color: #7939CC">16 Matrix</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="accordion" id="accordionExampleThree">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <table class="table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Zone</th>
                                                            <th>Cities</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExampleThree">
                                            <div class="accordion-body">
                                                <div class="table-responsive border  rounded">
                                                    <table class="table m-0">

                                                        <tbody>
                                                            <tr>
                                                                <td>N1</td>
                                                                <td>New Delhi, Faridabad, Gurgaon, Ghaziabad, Noida,
                                                                    Sahibabad, Chandigarh, Jaipur </td>
                                                            </tr>
                                                            <tr>
                                                                <td>N2</td>
                                                                <td>Dehradun, Ludhiana</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N3</td>
                                                                <td>Haryana, Punjab, Rajasthan, Uttar Pradesh</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N4</td>
                                                                <td>Himachal Pradesh, Jammu &amp; Kashmir, Uttarakhand
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>C1</td>
                                                                <td>Bhopal, Indore, Raipur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>C2</td>
                                                                <td>Chattisgarh, Madhya Pradesh</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W1</td>
                                                                <td>Mumbai, Pune, Thane, Ahmedabad , Surat</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W2</td>
                                                                <td>Maharashtra, Gujarat, Goa</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1</td>
                                                                <td>Bengaluru, Hyderabad, Chennai</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S2</td>
                                                                <td>Andhra Pradesh, Karnataka, Telangana</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S3</td>
                                                                <td>Tamil Nadu, Pondicherry</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S4</td>
                                                                <td>Kerala</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E1</td>
                                                                <td>Kolkata, Patna, Ranchi, Bhubaneswar , Siliguri</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E2</td>
                                                                <td>Bihar, Odisha, Jharkhand, West Bengal</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NE1</td>
                                                                <td>Guwahati</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NE2</td>
                                                                <td>Arunachal Pradesh, Assam, Manipur, Meghalaya,
                                                                    Mizoram,
                                                                    Nagaland, Sikkim, Tripura</td>
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


                        <div class="row  mt-4">
                            <div class="col-lg-3">
                                <h4 class="m-4 fw-light" style="color: #7939CC">11 Matrix</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="accordion" id="accordionExampleFour">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                <table class="table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Zone</th>
                                                            <th>Cities</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExampleFour">
                                            <div class="accordion-body">
                                                <div class="table-responsive border  rounded">
                                                    <table class="table m-0">

                                                        <tbody>

                                                            <tr>
                                                                <td>N1</td>
                                                                <td>Delhi, Uttar Pradesh, Haryana, Rajasthan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N2</td>
                                                                <td>Chandigarh, Punjab, Uttarakhand, Ladakh</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N3</td>
                                                                <td>Himachal Pradesh, Jammu &amp; Kashmir </td>
                                                            </tr>
                                                            <tr>
                                                                <td>C1</td>
                                                                <td>Madhya Pradesh</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W1</td>
                                                                <td>Gujarat, Daman &amp; Diu and Dadra &amp; Nagar
                                                                    Haveli</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W2</td>
                                                                <td>Maharashtra, Goa</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1</td>
                                                                <td>Andhra Pradesh, Telangana, Karnataka, Tamilnadu
                                                                    &amp; Puducherry</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S2</td>
                                                                <td>Kerala</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E1</td>
                                                                <td>West Bengal, Odisha, Bihar, Jharkhand, Chhattisgarh
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>NE1</td>
                                                                <td>Guwahati</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NE2</td>
                                                                <td>Assam, Meghalaya, Tripura, Arunachal Pradesh,
                                                                    Mizoram, Manipur, Nagaland and Sikkim</td>
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

                        <div class="row  mt-4">
                            <div class="col-lg-3">
                                <h4 class="m-4 fw-light" style="color: #7939CC">Gati Zone</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="accordion" id="accordionExampleFive">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                <table class="table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Zone</th>
                                                            <th>Cities</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExampleFive">
                                            <div class="accordion-body">
                                                <div class="table-responsive border  rounded">
                                                    <table class="table m-0">

                                                        <tbody>

                                                            <tr>
                                                                <td>N1</td>
                                                                <td>Delhi, Ghaziabad, Noida, Faridabad, Gurgaon</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N2</td>
                                                                <td>Himachal Pradesh, Punjab , Uttar Pradesh, Haryana,
                                                                    Chandigarh, Ladakh, Uttarakhand, Rajasthan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W1</td>
                                                                <td>Daman and Diu, Mumbai, Dadra and Nagar Haveli,
                                                                    Gujarat</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W2</td>
                                                                <td>Chhattisgarh, Madhya Pradesh, Rest of Maharashtra,
                                                                    Goa </td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1</td>
                                                                <td>Karnataka , Chennai, Pondicherry, Telangana, Andhra
                                                                    Pradesh</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S2</td>
                                                                <td>Kerala, Tamil Nadu, , Lakshadweep</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E</td>
                                                                <td>Sikkim, Jharkhand, West Bengal, Odisha, Bihar</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NE1</td>
                                                                <td>Guwahati</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NE2</td>
                                                                <td>Assam, Nagaland, Mizoram, Manipur, Meghalaya,
                                                                    Arunachal Pradesh, Tripura</td>
                                                            </tr>
                                                            <tr>
                                                                <td>SXR</td>
                                                                <td>Jammu and Kashmir, Srinagar</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IXZ</td>
                                                                <td>Port Blair</td>
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

                        <div class="row  mt-4">
                            <div class="col-lg-3">
                                <h4 class="m-4 fw-light" style="color: #7939CC">Smartr Zone</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="accordion" id="accordionExamplesix">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingsix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                <table class="table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Zone</th>
                                                            <th>Cities</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </button>
                                        </h2>
                                        <div id="collapsesix" class="accordion-collapse collapse"
                                            aria-labelledby="headingsix" data-bs-parent="#accordionExamplesix">
                                            <div class="accordion-body">
                                                <div class="table-responsive border  rounded">
                                                    <table class="table m-0">
                                                        <tbody>

                                                            <tr>
                                                                <td>N1</td>
                                                                <td>Delhi, Ghaziabad, Noida, Faridabad, Gurgaon</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N2</td>
                                                                <td>Himachal Pradesh, Punjab , Uttar Pradesh, Haryana,
                                                                    Chandigarh, Rajasthan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>N3</td>
                                                                <td>Uttarakhand</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W1</td>
                                                                <td>Mumbai, Navi Mumbai, Vasai, Bhiwandi, Panvel,
                                                                    Kalyan, Dombivli</td>
                                                            </tr>
                                                            <tr>
                                                                <td>W2</td>
                                                                <td>Gujarat, Diu &amp; Daman, Madhya Pradesh,
                                                                    Chhattisgarh, Rest of Maharashtra, Goa </td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1</td>
                                                                <td>Chennai, Bangalore, Hyderabady</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S2</td>
                                                                <td>Karnataka, Tamil Nadu, , Andhra Pradesh, Telangana,
                                                                    Pondicherry</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S3</td>
                                                                <td>Kerala</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E1</td>
                                                                <td>West Bengal, Odisha, Sikkim</td>
                                                            </tr>
                                                            <tr>
                                                                <td>E2</td>
                                                                <td>Bihar</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NE1</td>
                                                                <td>Assam, Nagaland, Mizoram, Manipur, Meghalaya,
                                                                    Arunachal Pradesh, Tripura</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NE2</td>
                                                                <td>Jammu &amp; Kashmir,Ladakh</td>
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

                        <div class="row  mt-4">
                            <div class="col-lg-3">
                                <h4 class="m-4 fw-light" style="color: #7939CC">Ekart B2B Matrix</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="accordion" id="accordionExampleseven">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingseven">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                aria-expanded="false" aria-controls="collapseseven">
                                                <table class="table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Zone</th>
                                                            <th>Cities</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </button>
                                        </h2>
                                        <div id="collapseseven" class="accordion-collapse collapse"
                                            aria-labelledby="headingseven" data-bs-parent="#accordionExampleseven">
                                            <div class="accordion-body">
                                                <div class="table-responsive border  rounded">
                                                    <table class="table m-0">
                                                        <tbody>

                                                            <tr>
                                                                <td>North</td>
                                                                <td>Delhi,Haryana,Rajasthan,Uttar Pradesh,Uttarakhand,
                                                                    Punjab,Himachal Pradesh</td>
                                                            </tr>

                                                            <tr>
                                                                <td>West</td>
                                                                <td>Gujarat,Maharashtra, Goa, Madhya
                                                                    Pradesh,Chhattisgarh,Dadra and Nagar Haveli and
                                                                    Daman, Daman and Diu </td>
                                                            </tr>

                                                            <tr>
                                                                <td>South</td>
                                                                <td>Kerala,Karnataka, Tamil Nadu, Andhra
                                                                    Pradesh,Telangana,Pondicherry </td>
                                                            </tr>

                                                            <tr>
                                                                <td>East</td>
                                                                <td>West Bengal, Odisha, Bihar, Jharkhand, Assam</td>
                                                            </tr>

                                                            <tr>
                                                                <td>North East</td>
                                                                <td> Meghalaya, Tripura, Arunachal Pradesh, Mizoram,
                                                                    Manipur, Nagaland, Sikkim</td>
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


            </div>
        </div>

    </section>

</div>



<?php include("./include/footer.php")?>