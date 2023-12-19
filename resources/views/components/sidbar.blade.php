<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Dashboard</span></a>

                </li>

                <li class="has-sub-menu"><a href="#"><i class="ti-shopping-cart"></i> <span>E-commerce</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('productAdd') }}"><span>Add Product</span></a></li>
                        <li><a href="{{ route('productEdit') }}"><span>Edit Product</span></a></li>
                        <li><a href="{{ route('invoice') }}"><span>Invoice List</span></a></li>
                        {{-- <li><a href="invoice-details.html"><span>Invoice Details</span></a></li> --}}
                        <li><a href="{{ route('orderlist') }}"><span>Order List</span></a></li>
                        {{-- <li><a href="order-details.html"><span>Order Details</span></a></li> --}}
                        <li><a href="{{ route('manageProduct') }}"><span>Manage Products</span></a></li>
                    </ul>
                </li>

                <li class="has-sub-menu"><a href="#"><i class="ti-lock"></i> <span>Authentication</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="login.html"><span>login</span></a></li>
                        <li><a href="register.html"><span>register</span></a></li>
                        <li><a href="author-profile.html"><span>Profile</span></a></li>
                    </ul>
                </li>


            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div><!-- Side Header End -->
