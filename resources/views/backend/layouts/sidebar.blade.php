 <!-- Side Navigation Bar -->
 <div class="col-lg-2 sidebar">

     <div id="navbar" class="collapse navbar-collapse">
         <div class="col-lg-12 logo-placeholder" style="margin-bottom: 10px; margin-top: 10px;">
             <!-- <img class="img-responsive logo" src="{{asset('public/backend')}}/img/logo.png"> -->
             <img class="img-responsive logo" src="{{asset('public/backend')}}/img/AFL.png">
             <!-- <img class="img-responsive logo" src="{{asset('public/backend')}}/img/QFL-Logo_inner.png"> -->
         </div>

         <div id='cssmenu' class="col-lg-12">
             <ul>
            @if(Auth::user()->usertype=='Super Admin')
                 <li class='active has-sub'><a href='#'><span>HR Dept</span></a>
                     <ul>
                         <li class='active has-sub'><a href='#'><span>User Manage </span></a>
                             <ul>
                                 <li><a href="{{route('users.view')}}"><span>View User</span></a></li>

                             </ul>
                         </li>

                         <li class='active has-sub'><a href='#'><span>Profile Manage</span></a>
                             <ul>

                                 <li><a href="{{route('profile.view')}}"><span>User Profile</span></a></li>

                             </ul>
                         </li>

                     </ul>
                 </li>
                
                    <li class='active has-sub'><a href='#'><span>Accounts Dept</span></a>
                     <ul>
                         <li class='active has-sub'><a href='#'><span>Requisition</span></a>
                             <ul>
                                 <li><a href="{{asset('public/backend')}}/requisition"><span>Requisition</span></a></li>


                                 <li><a href="{{asset('public/backend')}}/viewapprovedlist"><span>Requisition Approved List</span></a></li>

                             </ul>
                         </li>


                         <li class='active has-sub'><a href='#'><span>Purchase Order</span></a>
                             <ul>

                                 <li><a href="{{asset('public/backend')}}/purchase_order"><span>Purchase Order</span></a></li>


                                 <li><a href="{{asset('public/backend')}}/purchase_order_approved_list"><span>Order Approved List</span></a></li>

                             </ul>
                         </li>

                     </ul>
                 </li>
                  <li class='active has-sub'><a href='#'><span>Purchase Dept</span></a>
                     <ul>
                         <li class='active has-sub'><a href='#'><span>Requisition</span></a>
                             <ul>
                                 <li><a href="{{asset('public/backend')}}/requisition"><span>Requisition</span></a></li>


                                 <li><a href="{{asset('public/backend')}}/viewapprovedlist"><span>Requisition Approved List</span></a></li>

                             </ul>
                         </li>


                         <li class='active has-sub'><a href='#'><span>Purchase Order</span></a>
                             <ul>

                                 <li><a href="{{asset('public/backend')}}/purchase_order"><span>Purchase Order</span></a></li>


                                 <li><a href="{{asset('public/backend')}}/purchase_order_approved_list"><span>Order Approved List</span></a></li>

                             </ul>
                         </li>

                     </ul>
                 </li>
                  <li class='active has-sub'><a href='#'><span>Sales Dept</span></a>
                     <ul>
                         <li class='active has-sub'><a href='#'><span>Requisition</span></a>
                             <ul>
                                 <li><a href="{{asset('public/backend')}}/requisition"><span>Requisition</span></a></li>


                                 <li><a href="{{asset('public/backend')}}/viewapprovedlist"><span>Requisition Approved List</span></a></li>

                             </ul>
                         </li>


                         <li class='active has-sub'><a href='#'><span>Purchase Order</span></a>
                             <ul>

                                 <li><a href="{{asset('public/backend')}}/purchase_order"><span>Purchase Order</span></a></li>


                                 <li><a href="{{asset('public/backend')}}/purchase_order_approved_list"><span>Order Approved List</span></a></li>

                             </ul>
                         </li>

                     </ul>
                 </li>
                  
                @endif
                 
                 <li class='active has-sub'><a href='#'><span>Inventory</span></a>
                     <ul>

                         <li class='active has-sub'><a href='#'><span>Inventory Receive</span></a>
                             <ul>

                                 <li><a href="{{asset('public/backend')}}/inventoryreceive"><span>Stock Receive</span></a></li>

                                 <li><a href="{{asset('public/backend')}}/opening_inventoryreceive"><span>Opening Stock Receive</span></a></li>

                                 <li><a href="{{asset('public/backend')}}/inventoryopeningentry"><span>Opening Inventory (Raw)</span></a></li>

                                 <li><a href="{{asset('public/backend')}}/inv_rec_from_supplier"><span>Inventory Receive From Supplier</span></a></li>

                                 <li><a href="{{asset('public/backend')}}/inv_grn"><span>MRR List</span></a></li>



                             </ul>
                         </li>


                         <li class='active has-sub'><a href='#'><span>Warehouse</span></a>
                             <ul>


                                 <li class='active has-sub'><a href='#'><span>Raw Materials Transfer</span></a>
                                     <ul>
                                         <li><a href="{{asset('public/backend')}}/raw_goods_transfer_list"> <span>Inventory Transfer</span></a></li>
                                         <li><a href="{{asset('public/backend')}}/raw_transfer_receive"> <span>Inventory Received From Branch</span></a></li>
                                     </ul>
                                 </li>

                                 <li><a href="{{asset('public/backend')}}/inventory_disburse"><span>Inventory Disburse</span></a></li>
                                 <li><a href="{{asset('public/backend')}}/inventory_adjustment"><span>Inventory Adjustment</span></a></li>
                                 <li><a href="{{asset('public/backend')}}/inventory_balance"><span>Inventory Balance</span></a></li>

                             </ul>
                         </li>

                         <li class='active has-sub'><a href='#'><span>Purchase Return</span></a>
                             <ul>
                                 <li><a href="{{asset('public/backend')}}/purchase_return"><span>Purchase Return to Supplier</span></a></li>
                             </ul>
                         </li>

                         <li class='active has-sub'><a href='#'><span>Direct Sales (Purchase)</span></a>
                             <ul>
                                 <li><a href="{{asset('public/backend')}}/direct_sales"><span>Direct Sales</span></a></li>
                             </ul>
                         </li>

                         <li class='active has-sub'><a href='#'><span>Materials Loan</span></a>
                             <ul>
                                 <li><a href="{{asset('public/backend')}}/materials_loan"><span>Materials Loan</span></a></li>
                             </ul>
                         </li>

                     </ul>
                 </li>



                 <li><a href="{{asset('public/backend')}}/report" title="Show All Reports"><span>Report</span></a></li>


                 <li class='active has-sub'><a href='#'><span>Setup</span></a>
                     <ul>
                         <li class='active has-sub'><a href='#'><span>Master Setup Purchase</span></a>
                             <ul>
                                 <li> <a href="{{asset('public/backend')}}/project"> <span>Project Information</span></a></li>
                                 <li> <a href="{{asset('public/backend')}}/project_budget"> <span>Project Budget</span></a></li>
                                 <li> <a href="{{asset('public/backend')}}/generalproduct"> <span>General Item Information</span></a></li>
                                 <li> <a href="{{asset('public/backend')}}/supplier"> <span>Supplier/Vendor</span></a></li>
                                 <li class='active has-sub'><a href='#'><span>Lab Information</span></a>
                                     <ul>
                                         <li> <a href="{{asset('public/backend')}}/labitemconfiguration"> <span>Lab Item Configuration</span></a></li>
                                         <li> <a href="{{asset('public/backend')}}/labitemrecord"> <span>Lab Item Required Value</span></a></li>
                                     </ul>
                                 </li>

                             </ul>
                         </li>



                         <li class='last'></li>
                     </ul>
                 </li>
               


                 <!-- <li><a href="/contacts" title="Contacts"><span>Contact Us</span></a></li> -->
                 <li><a href="{{route('profile.password.view')}}" title="Account Settings"><span>Change Password</span></a></li>
                 <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" title="Sign-Out">
                         <span>Logout</span></a></li>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                   
             </ul>

         </div>


     </div>
 </div><!-- .sidebar -->
 <!-- End Side Navigation Bar -->