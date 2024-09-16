<header class="header1 header-megamenu">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 hidden-xs">
                    <div class="newsfeed">
                        <span><i>On sale:</i></span>
                        <div class="news-carousel">
                            <div class="item"><a href="product.php?id=1">Nike - Patike</a></div>
                            <div class="item"><a href="product.php?id=1">Adidas - Patike</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pull-right account-options">
                        <!-- <a href="#" >Sign Up</a> -->
                        <span>|</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-header padding-vertical-10">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="{{ asset('images/logo.jpg') }}" class="img-responsive" alt="" />
            </a>
            <div class="ad-banner pull-right hidden-xs">
                <a href="index.php">
                    <img src="{{ asset('images/ads/728x90.jpg') }}" class="img-responsive" alt="" />
                </a>
            </div>
        </div>
    </div>

    @include('eshop.partials.navigation')
</header>
