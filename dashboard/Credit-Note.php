<?php include("./include/header.php")?>
<style>
     @media  (max-width:767px){
        .notes-btn{
        width: 100%;
    }
}
</style>
<div class="content-inner hlo container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center my-5 gap-3 flex-lg-nowrap flex-wrap">
        <div class="d-flex flex-column ">
            <h3>Credit Note</h3>
        </div>

        <div class="notes-btn" >
            <button type="button" class="btn rounded-pill mt-2 lh-lg "
                style="border-radius: 32px;
                   background: linear-gradient(90deg, #A62127 0%, #EE4236 100%);
                   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(121, 57, 204, 0.40); color: #fff;
                   " 
                   
                   
                   >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                    <g clip-path="url(#clip0_1787_15419)">
                        <path
                            d="M8 0.5C6.41775 0.5 4.87104 0.969192 3.55544 1.84824C2.23985 2.72729 1.21447 3.97672 0.608967 5.43853C0.00346629 6.90034 -0.15496 8.50887 0.153721 10.0607C0.462403 11.6126 1.22433 13.038 2.34315 14.1569C3.46197 15.2757 4.88743 16.0376 6.43928 16.3463C7.99113 16.655 9.59966 16.4965 11.0615 15.891C12.5233 15.2855 13.7727 14.2602 14.6518 12.9446C15.5308 11.629 16 10.0823 16 8.5C16 6.37827 15.1571 4.34344 13.6569 2.84315C12.1566 1.34285 10.1217 0.5 8 0.5ZM10.6243 13.6533H5.37567C5.19886 13.6533 5.02929 13.5831 4.90427 13.4581C4.77924 13.333 4.709 13.1635 4.709 12.9867C4.709 12.8099 4.77924 12.6403 4.90427 12.5153C5.02929 12.3902 5.19886 12.32 5.37567 12.32H10.6243C10.8011 12.32 10.9707 12.3902 11.0957 12.5153C11.2208 12.6403 11.291 12.8099 11.291 12.9867C11.291 13.1635 11.2208 13.333 11.0957 13.4581C10.9707 13.5831 10.8011 13.6533 10.6243 13.6533ZM11.0957 8.63867L8.46934 11.2667C8.34432 11.3916 8.17478 11.4619 7.998 11.4619C7.82123 11.4619 7.65169 11.3916 7.52667 11.2667L4.90434 8.64467C4.77907 8.51966 4.70858 8.35001 4.7084 8.17304C4.70821 7.99607 4.77833 7.82627 4.90334 7.701C5.02834 7.57573 5.19799 7.50525 5.37496 7.50506C5.55194 7.50487 5.72173 7.575 5.847 7.7L7.33334 9.18633V3.28833C7.33334 3.11152 7.40358 2.94195 7.5286 2.81693C7.65362 2.6919 7.82319 2.62167 8 2.62167C8.17682 2.62167 8.34638 2.6919 8.47141 2.81693C8.59643 2.94195 8.66667 3.11152 8.66667 3.28833V9.18233L10.153 7.696C10.2787 7.57456 10.4471 7.50737 10.6219 7.50888C10.7967 7.5104 10.9639 7.58052 11.0876 7.70412C11.2112 7.82773 11.2813 7.99494 11.2828 8.16973C11.2843 8.34453 11.2171 8.51293 11.0957 8.63867Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1787_15419">
                            <rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
                        </clipPath>
                    </defs>
                </svg> Processing CN </button>
            <button type="button" class="btn rounded-pill mt-2  lh-lg"
                style="border-radius: 32px;
                    background: #7939CC;
                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(121, 57, 204, 0.40); color: #fff">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                    <g clip-path="url(#clip0_1787_15419)">
                        <path
                            d="M8 0.5C6.41775 0.5 4.87104 0.969192 3.55544 1.84824C2.23985 2.72729 1.21447 3.97672 0.608967 5.43853C0.00346629 6.90034 -0.15496 8.50887 0.153721 10.0607C0.462403 11.6126 1.22433 13.038 2.34315 14.1569C3.46197 15.2757 4.88743 16.0376 6.43928 16.3463C7.99113 16.655 9.59966 16.4965 11.0615 15.891C12.5233 15.2855 13.7727 14.2602 14.6518 12.9446C15.5308 11.629 16 10.0823 16 8.5C16 6.37827 15.1571 4.34344 13.6569 2.84315C12.1566 1.34285 10.1217 0.5 8 0.5ZM10.6243 13.6533H5.37567C5.19886 13.6533 5.02929 13.5831 4.90427 13.4581C4.77924 13.333 4.709 13.1635 4.709 12.9867C4.709 12.8099 4.77924 12.6403 4.90427 12.5153C5.02929 12.3902 5.19886 12.32 5.37567 12.32H10.6243C10.8011 12.32 10.9707 12.3902 11.0957 12.5153C11.2208 12.6403 11.291 12.8099 11.291 12.9867C11.291 13.1635 11.2208 13.333 11.0957 13.4581C10.9707 13.5831 10.8011 13.6533 10.6243 13.6533ZM11.0957 8.63867L8.46934 11.2667C8.34432 11.3916 8.17478 11.4619 7.998 11.4619C7.82123 11.4619 7.65169 11.3916 7.52667 11.2667L4.90434 8.64467C4.77907 8.51966 4.70858 8.35001 4.7084 8.17304C4.70821 7.99607 4.77833 7.82627 4.90334 7.701C5.02834 7.57573 5.19799 7.50525 5.37496 7.50506C5.55194 7.50487 5.72173 7.575 5.847 7.7L7.33334 9.18633V3.28833C7.33334 3.11152 7.40358 2.94195 7.5286 2.81693C7.65362 2.6919 7.82319 2.62167 8 2.62167C8.17682 2.62167 8.34638 2.6919 8.47141 2.81693C8.59643 2.94195 8.66667 3.11152 8.66667 3.28833V9.18233L10.153 7.696C10.2787 7.57456 10.4471 7.50737 10.6219 7.50888C10.7967 7.5104 10.9639 7.58052 11.0876 7.70412C11.2112 7.82773 11.2813 7.99494 11.2828 8.16973C11.2843 8.34453 11.2171 8.51293 11.0957 8.63867Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1787_15419">
                            <rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
                        </clipPath>
                    </defs>
                </svg> Report </button>

        </div>
    </div>

    <div class="row">



        <div class="col-md-12">
            <div class="weight_reconcilation_bg" style="padding: 2rem"
                style="background: linear-gradient(93deg, rgba(17, 35, 165, 0.75) 0%, rgba(121, 57, 204, 0.52) 100%);">
                <form class="rate_form">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group w-100">
                                <input type="search" placeholder="Search by Paticulars" class="form-control "
                                    style="border-radius: 3px">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group w-100">
                                <input type="search" placeholder="Search by Invoice No." class="form-control "
                                    style="border-radius: 3px">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group w-100">
                                <input type="search" placeholder="Search by CN No." class="form-control "
                                    style="border-radius: 3px">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group w-100">
                                <select class="form-select form-control" style="border-radius: 3px" ;>
                                    <option selected="">All Dates</option>
                                    <option value="1">Today</option>
                                    <option value="2">1 week</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group w-100">
                                <select class="form-select form-control" style="border-radius: 3px" ;>
                                    <option selected="">All Dates</option>
                                    <option value="1">Today</option>
                                    <option value="2">Yesterday</option>
                                    <option value="3">Last 7 days</option>
                                    <option value="4">This Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Custom Range</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border-end"></div>
                            <div class="form-group">
                                <button class="btn btn-success btn-green-gradient w-100 lh-lg">Search
                                </button>
                            </div>
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
                                    <th> DATE</th>
                                    <th>CN NO</th>
                                    <th>PARTICULARS</th>
                                    <th>AMOUNT <i class="fa-solid fa-indian-rupee-sign"></i></th>
                                    <th>INVOICE NO <i class="fa-solid fa-indian-rupee-sign"></i></th>
                                    <th>ACTION</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fa-solid fa-calendar-days"></i> 19 Jan, 2024</td>
                                    <td>TC/2024-25/2239 </td>
                                    <td>689.00 </td>
                                    <td>00</td>
                                    <td>TC/2023-24/14094</td>
                                    <td><button class="btn btn-primary btn-dispute rounded-pill">CN <i
                                                class="fa-solid fa-eye"></i></button></td>



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



<?php include("./include/footer.php")?>