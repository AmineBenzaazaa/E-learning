@include('layouts.app')
<section class="menu-area">
                <div class="container-xl">
                    <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <ul class="mobile-header-buttons">
                            <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
                            <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
                        </ul>

                        <a href="{{ url('/home') }}" class="navbar-brand"><img src="http://pn-learning-management-system-online.test/uploads/system/logo-dark.png" alt="" height="35"></a>

                        <div class="main-nav-wrap">
                <div class="mobile-overlay"></div>

                <ul class="mobile-main-nav">
                    <div class="mobile-menu-helper-top"></div>

                    <li class="has-children">
                    <a href="">
                        <i class="fas fa-th d-inline"></i>
                        <span>Courses</span>
                        <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                    </a>

                    <ul class="category corner-triangle top-left is-hidden">
                        <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>

                            <li class="has-children">
                        <a href="#">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span>Math</span>
                        <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                        </a>
                        <ul class="sub-category is-hidden">
                        <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
                        <li class="go-back"><a href="">
                            <i class="fas fa-angle-left"></i>
                            <span class="icon"><i class="fas fa-plus"></i></span>
                            Math          </a></li>
                                    <li><a href="{{ url('home/courses?category=algebre') }}">Algebre</a></li>
                            </ul>
                    </li>
                    <li class="all-category-devided">
                    <a href="{{ url('home/courses') }}">
                    <span class="icon"><i class="fa fa-align-justify"></i></span>
                    <span>All Courses</span>
                    </a>
                </li>
                </ul>
                </li>

                <div class="mobile-menu-helper-bottom"></div>
                </ul>
                </div>
                        <form class="inline-form" action="{{ url('home/search') }}" method="get" style="width: 100%;">
                            <div class="input-group search-box mobile-search">
                            <input type="text" name="query" class="form-control" placeholder="Search For Courses">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            </div>
                        </form>
                        <div class="cart-box menu-icon-box" id="cart_items">
                            <div class="icon">
                    <a href="javascript::" onclick="showCartPage()"><i class="fas fa-shopping-cart"></i></a>
                    <span class="number">0</span>
                </div>

                <!-- Cart Dropdown goes here -->
                <div class="dropdown course-list-dropdown corner-triangle top-right" style="display: none;"> <!-- Just remove the display none from the css to make it work -->
                    <div class="list-wrapper">
                        <div class="item-list">
                            <ul>
                            </ul>
                        </div>
                        <div class="dropdown-footer">
                            <div class="cart-total-price clearfix">
                                <span>Total:</span>
                                <div class="float-right">
                                    <span class="current-price"></span>
                                    <!-- <span class="original-price">$94.99</span> -->
                                </div>
                            </div>
                            <a href="{{ url('shopping_cart') }}">Go To Cart</a>
                        </div>
                    </div>
                    <div class="empty-box text-center d-none">
                        <p>Your Cart Is Empty.</p>
                        <a href="">Keep Shopping</a>
                    </div>
                </div>

                <script type="text/javascript">
                function showCartPage() {
                    window.location.replace("{{ url('shopping_cart') }}");
                }
                </script>
                        </div>
                        <span class="signin-box-move-desktop-helper"></span>
                        @if (Route::has('login'))
                        <div class="sign-in-box btn-group">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-sign-in">Log In</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-sign-up">Sign Up</a>
                        @endif
                        </div>
                        @endauth
                        <!--  sign-in-box end -->
                        @endif
                        </nav>
                    </div>
                    </div>
            </div>
</section>