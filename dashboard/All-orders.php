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
            <h3>All Orders</h3>
        </div>

    </div>

    <div class="row">

        <div class="col-md-12">
            <div class="weight_reconcilation_bg" style="padding: 2rem">
                <form class="rate_form">
                    <div class="form_flex">
                        <div class="form-group w-100">
                            <input type="search" placeholder="Search by LR/AWB" class="form-control"
                                style="border-radius: 3px" ;>


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
                                <option selected="">All Shipping Partner</option>
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
        <div class="col-sm-12 col-lg-12 mt-5">
            <ul class="nav nav-pills mb-3 nav-fill weight-reconciliation-tabs gap-5" id="pills-tab-1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                        aria-selected="true">Booked <span class="badge  bg-secondary">2</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"
                        aria-selected="false">In-Transit <span class="badge  bg-secondary">2</span> </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
                        aria-selected="false"> Out of Delivery <span class="badge  bg-secondary">2</span> </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-commission-tab" data-bs-toggle="pill" href="#pills-commission"
                        role="tab" aria-selected="false"> Pending <span class="badge  bg-secondary">2</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-delivered-tab" data-bs-toggle="pill" href="#pills-delivered"
                        role="tab" aria-selected="true">Delivered <span class="badge  bg-secondary">2</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-rto-tab" data-bs-toggle="pill" href="#pills-rto" role="tab"
                        aria-selected="false">RTO <span class="badge  bg-secondary">2</span> </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="pills-not-tab" data-bs-toggle="pill" href="#pills-not" role="tab"
                        aria-selected="false"> Not Picked <span class="badge  bg-secondary">2</span> </a>
                </li>

            </ul>
            <hr>
            <div class="card">

                <div class="card-body" style="padding: 0" ;>

                    <div class="tab-content" id="pills-tabContent-2">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="card-body">

                                <div class="table-responsive border rounded">
                                    <table id="datatable" class="table " data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>LR/AWB NO.</th>
                                                <th>EDD</th>
                                                <th>CONSIGNEE</th>
                                                <th>TYPE</th>
                                                <th>BOX</th>

                                                <th>LAST UPDATED</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>161624223 </td>
                                                <td>6 Days Ago <br> <i class="fa-solid fa-calendar-days"></i> 05 Apr,
                                                    2024 </td>
                                                <td>Azhar A-136, Sanjay Colony, <br> Okhla Warehouse, Industrial Area,
                                                    <br> New Delhi 110020
                                                </td>
                                                <td>Prepaid</td>
                                                <td> <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                                        viewBox="0 0 17 16" fill="none">
                                                        <path
                                                            d="M14.9591 3.95207C14.9591 4.38408 14.7278 4.77608 14.3609 4.97609L12.9732 5.7281L11.7928 6.36011L9.34422 7.68813C9.08103 7.83213 8.7939 7.90414 8.4988 7.90414C8.2037 7.90414 7.91658 7.83213 7.65338 7.68813L2.63668 4.97609C2.2698 4.77608 2.03851 4.38408 2.03851 3.95207C2.03851 3.52006 2.2698 3.12805 2.63668 2.92805L4.20789 2.08004L5.46007 1.40002L7.65338 0.216004C8.17978 -0.0720012 8.81783 -0.0720012 9.34422 0.216004L14.3609 2.92805C14.7278 3.12805 14.9591 3.52006 14.9591 3.95207ZM6.82471 8.63055L2.15894 6.28651C1.80003 6.1025 1.3853 6.12651 1.04235 6.33451C0.699392 6.54251 0.5 6.91052 0.5 7.31053V11.7346C0.5 12.5026 0.922711 13.1906 1.60862 13.5346L6.27439 15.8707C6.4339 15.9507 6.60937 15.9907 6.78483 15.9907C6.9922 15.9907 7.19957 15.9347 7.38301 15.8147C7.72596 15.6067 7.92535 15.2387 7.92535 14.8387V10.4146C7.93333 9.66257 7.51062 8.97456 6.82471 8.63055ZM16.5 7.32013V11.7442C16.5 12.5042 16.0781 13.1922 15.3922 13.5362L10.7264 15.8803C10.5511 15.9676 10.3563 16.0084 10.1608 15.9986C9.9653 15.9888 9.77557 15.9287 9.60981 15.8243C9.27484 15.6163 9.06747 15.2483 9.06747 14.8483V10.4322C9.06747 9.66417 9.49018 8.97615 10.1761 8.63215L11.8909 7.77613L13.0872 7.17612L14.8419 6.29611C15.2008 6.11211 15.6155 6.12811 15.9585 6.34411C16.2934 6.55211 16.5 6.92012 16.5 7.32013Z"
                                                            fill="url(#paint0_linear_1542_7931)" />
                                                        <path
                                                            d="M12.4528 5.92768L11.2724 6.55969L3.6875 2.27962L4.93968 1.59961L12.2613 5.74368C12.3411 5.79168 12.4049 5.85568 12.4528 5.92768ZM12.5636 7.37491V9.19094C12.5636 9.51895 12.2925 9.79095 11.9655 9.79095C11.6384 9.79095 11.3673 9.51895 11.3673 9.19094V7.97492L12.5636 7.37491Z"
                                                            fill="white" />
                                                        <defs>
                                                            <linearGradient id="paint0_linear_1542_7931" x1="8.5" y1="0"
                                                                x2="8.5" y2="16" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#7939CC" />
                                                                <stop offset="1" stop-color="#000088" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg> 01</td>
                                                <td> <button class="btn btn-primary rounded-pill btn-dispute w-100"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                                            viewBox="0 0 21 21" fill="none">
                                                            <g clip-path="url(#clip0_1543_1242)">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M14.0262 9.53262C13.8967 9.53262 13.7701 9.49422 13.6624 9.42228C13.5548 9.35034 13.4709 9.24809 13.4213 9.12846C13.3718 9.00883 13.3588 8.87719 13.3841 8.75019C13.4093 8.62319 13.4717 8.50654 13.5633 8.41498C13.6548 8.32342 13.7715 8.26107 13.8985 8.23582C14.0255 8.21056 14.1571 8.22353 14.2767 8.27309C14.3964 8.32265 14.4986 8.40657 14.5705 8.51423C14.6425 8.6219 14.6809 8.74848 14.6809 8.87797C14.6806 9.05153 14.6116 9.21793 14.4889 9.34065C14.3661 9.46337 14.1997 9.53241 14.0262 9.53262ZM14.0262 7.28574C13.7113 7.28573 13.4034 7.37911 13.1416 7.55406C12.8797 7.72901 12.6756 7.97768 12.5551 8.26862C12.4346 8.55956 12.4031 8.87971 12.4645 9.18857C12.5259 9.49744 12.6776 9.78115 12.9002 10.0038C13.1229 10.2265 13.4066 10.3782 13.7155 10.4396C14.0244 10.501 14.3445 10.4695 14.6354 10.349C14.9264 10.2285 15.1751 10.0244 15.35 9.76257C15.525 9.50073 15.6184 9.19288 15.6184 8.87797C15.6179 8.45584 15.45 8.05113 15.1515 7.75263C14.853 7.45414 14.4483 7.28623 14.0262 7.28574ZM6.28027 17.8522C6.28027 17.7279 6.32966 17.6086 6.41757 17.5207C6.50547 17.4328 6.6247 17.3834 6.74902 17.3834H14.2508C14.3751 17.3834 14.4943 17.4328 14.5822 17.5207C14.6701 17.6086 14.7195 17.7279 14.7195 17.8522C14.7195 17.9765 14.6701 18.0957 14.5822 18.1836C14.4943 18.2716 14.3751 18.3209 14.2508 18.3209H6.74902C6.6247 18.3209 6.50547 18.2716 6.41757 18.1836C6.32966 18.0957 6.28027 17.9765 6.28027 17.8522ZM6.28027 13.5936C6.28027 13.4692 6.32966 13.35 6.41757 13.2621C6.50547 13.1742 6.6247 13.1248 6.74902 13.1248H14.2508C14.3751 13.1248 14.4943 13.1742 14.5822 13.2621C14.6701 13.35 14.7195 13.4692 14.7195 13.5936C14.7195 13.7179 14.6701 13.8371 14.5822 13.925C14.4943 14.0129 14.3751 14.0623 14.2508 14.0623H6.74902C6.6247 14.0623 6.50547 14.0129 6.41757 13.925C6.32966 13.8371 6.28027 13.7179 6.28027 13.5936ZM6.28027 15.7865C6.28027 15.6622 6.32966 15.543 6.41757 15.4551C6.50547 15.3672 6.6247 15.3178 6.74902 15.3178H14.2508C14.3751 15.3178 14.4943 15.3672 14.5822 15.4551C14.6701 15.543 14.7195 15.6622 14.7195 15.7865C14.7195 15.9108 14.6701 16.0301 14.5822 16.118C14.4943 16.2059 14.3751 16.2553 14.2508 16.2553H6.74902C6.6247 16.2553 6.50547 16.2059 6.41757 16.118C6.32966 16.0301 6.28027 15.9108 6.28027 15.7865ZM17.7117 9.53262C17.5822 9.53262 17.4557 9.49422 17.348 9.42228C17.2403 9.35034 17.1564 9.24809 17.1069 9.12846C17.0573 9.00883 17.0443 8.87719 17.0696 8.75019C17.0949 8.62319 17.1572 8.50654 17.2488 8.41498C17.3404 8.32342 17.457 8.26107 17.584 8.23582C17.711 8.21056 17.8427 8.22353 17.9623 8.27309C18.0819 8.32265 18.1842 8.40657 18.2561 8.51423C18.328 8.6219 18.3664 8.74848 18.3664 8.87797C18.3662 9.05153 18.2971 9.21793 18.1744 9.34065C18.0517 9.46337 17.8853 9.53241 17.7117 9.53262ZM17.7117 7.28574C17.3968 7.28573 17.089 7.37911 16.8271 7.55406C16.5653 7.72901 16.3612 7.97768 16.2407 8.26862C16.1201 8.55956 16.0886 8.87971 16.15 9.18857C16.2115 9.49744 16.3631 9.78115 16.5858 10.0038C16.8085 10.2265 17.0922 10.3782 17.401 10.4396C17.7099 10.501 18.03 10.4695 18.321 10.349C18.6119 10.2285 18.8606 10.0244 19.0356 9.76257C19.2105 9.50073 19.3039 9.19288 19.3039 8.87797C19.3034 8.45586 19.1354 8.05119 18.837 7.75271C18.5385 7.45423 18.1338 7.2863 17.7117 7.28574ZM19.5625 14.6995V7.66859C19.5623 7.50464 19.4971 7.34745 19.3812 7.23152C19.2653 7.11558 19.1081 7.05037 18.9441 7.0502H2.05598C1.89201 7.05036 1.73481 7.11556 1.61886 7.2315C1.50291 7.34743 1.43769 7.50463 1.4375 7.66859V14.6995C1.4377 14.8634 1.50292 15.0206 1.61887 15.1365C1.73482 15.2524 1.89202 15.3176 2.05598 15.3178H4.12406V11.6639C4.12411 11.5396 4.17352 11.4204 4.26141 11.3325C4.34931 11.2446 4.46851 11.1952 4.59281 11.1952H16.407C16.5314 11.1952 16.6506 11.2445 16.7385 11.3325C16.8264 11.4204 16.8758 11.5396 16.8758 11.6639V15.3178H18.9441C19.1081 15.3176 19.2653 15.2524 19.3812 15.1365C19.4971 15.0206 19.5623 14.8634 19.5625 14.6995ZM15.9383 19.3131V12.1327H5.06156V19.3131H15.9383ZM4.98906 1.68656H15.7934V6.1127H4.98906V1.68656ZM18.9441 6.1127H16.7309V1.21777C16.7309 1.09345 16.6815 0.974225 16.5936 0.886317C16.5057 0.798409 16.3864 0.749023 16.2621 0.749023H4.52031C4.39599 0.749023 4.27676 0.798409 4.18886 0.886317C4.10095 0.974225 4.05156 1.09345 4.05156 1.21777V6.1127H2.05598C1.64347 6.11317 1.24798 6.27725 0.956288 6.56893C0.664591 6.86061 0.500496 7.25608 0.5 7.66859L0.5 14.6995C0.500496 15.112 0.664592 15.5074 0.95629 15.7991C1.24799 16.0908 1.64347 16.2548 2.05598 16.2553H4.12406V19.7819C4.12406 19.9062 4.17345 20.0254 4.26136 20.1133C4.34926 20.2012 4.46849 20.2506 4.59281 20.2506H16.407C16.5314 20.2506 16.6506 20.2012 16.7385 20.1133C16.8264 20.0254 16.8758 19.9062 16.8758 19.7819V16.2553H18.9441C19.3566 16.2548 19.7521 16.0907 20.0438 15.7991C20.3354 15.5074 20.4995 15.1119 20.5 14.6995V7.66859C20.4995 7.25611 20.3354 6.86066 20.0437 6.56898C19.7521 6.2773 19.3566 6.11321 18.9441 6.1127ZM4.59281 11.1952H16.407C16.5314 11.1952 16.6506 11.2445 16.7385 11.3325C16.8264 11.4204 16.8758 11.5396 16.8758 11.6639V15.3178H18.9441C19.1081 15.3176 19.2653 15.2524 19.3812 15.1365C19.4971 15.0206 19.5623 14.8634 19.5625 14.6995V7.66859C19.5623 7.50464 19.4971 7.34745 19.3812 7.23152C19.2653 7.11558 19.1081 7.05037 18.9441 7.0502H2.05598C1.89201 7.05036 1.73481 7.11556 1.61886 7.2315C1.50291 7.34743 1.43769 7.50463 1.4375 7.66859V14.6995C1.4377 14.8634 1.50292 15.0206 1.61887 15.1365C1.73482 15.2524 1.89202 15.3176 2.05598 15.3178H4.12406V11.6639C4.12411 11.5396 4.17352 11.4204 4.26141 11.3325C4.34931 11.2446 4.46851 11.1952 4.59281 11.1952ZM14.0262 10.4702C14.3411 10.4702 14.6489 10.3768 14.9108 10.2018C15.1726 10.0269 15.3767 9.77821 15.4972 9.48727C15.6177 9.19632 15.6493 8.87618 15.5878 8.56731C15.5264 8.25845 15.3748 7.97473 15.1521 7.75206C14.9294 7.52938 14.6457 7.37773 14.3368 7.3163C14.028 7.25486 13.7078 7.2864 13.4169 7.40691C13.1259 7.52743 12.8773 7.73151 12.7023 7.99336C12.5274 8.25521 12.434 8.56305 12.434 8.87797C12.4345 9.3001 12.6024 9.7048 12.9009 10.0033C13.1993 10.3018 13.604 10.4697 14.0262 10.4702ZM17.7117 10.4702C18.0266 10.4702 18.3345 10.3768 18.5963 10.2018C18.8582 10.0269 19.0623 9.77821 19.1828 9.48727C19.3033 9.19632 19.3348 8.87618 19.2734 8.56731C19.212 8.25845 19.0603 7.97473 18.8376 7.75206C18.615 7.52938 18.3312 7.37773 18.0224 7.3163C17.7135 7.25486 17.3934 7.2864 17.1024 7.40691C16.8115 7.52743 16.5628 7.73151 16.3879 7.99336C16.2129 8.25521 16.1195 8.56305 16.1195 8.87797C16.1199 9.30012 16.2878 9.70485 16.5863 10.0034C16.8848 10.3019 17.2896 10.4697 17.7117 10.4702Z"
                                                                    fill="white" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_1543_1242">
                                                                    <rect width="20" height="20" fill="white"
                                                                        transform="translate(0.5 0.5)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg></button></td>


                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <h1>Coming soon</h1>

                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <h1>Coming soon</h1>


                        </div>
                        <div class="tab-pane fade" id="pills-commission" role="tabpanel"
                            aria-labelledby="pills-commission-tab">

                            <h1>Coming soon</h1>
                        </div>
                        <div class="tab-pane fade" id="pills-delivered" role="tabpanel"
                            aria-labelledby="pills-commission-tab">

                            <h1>Coming soon</h1>
                        </div>
                        <div class="tab-pane fade" id="pills-rto" role="tabpanel"
                            aria-labelledby="pills-commission-tab">

                            <h1>Coming soon</h1>
                        </div>
                        <div class="tab-pane fade" id="pills-not" role="tabpanel"
                            aria-labelledby="pills-commission-tab">

                            <h1>Coming soon</h1>
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