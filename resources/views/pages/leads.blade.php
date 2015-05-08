@extends('common')

@section('content')
    
    <div class="controls form-group visible-xs visible-sm">
        <form class="form-inline">
            <select class="selectpicker show-tick col-xs-12 col-md-10 col-md-offset-2" id="FilterSelect" data-live-search="true" data-size="8">
                <option value=""><strong>
                        <h5>
                            Filter Apps
                        </h5>
                    </strong></option>
                <option value="all">All</option>
                <option value=".real-estate">Real Estate</option>
                <option value=".commercial">Commercial</option>
                <option value=".luxury">Luxury</option>
                <option value=".franchise">Franchise</option>
                <option value=".referrals">Referrals</option>
                <option value=".websites">Websites</option>
                <option value=".social">Social</option>
            </select>
        </form>
    </div>
    <div class="page-header"><h3>My Leads</h3></div>
    <div class="container-fluid controls hidden-xs hidden-sm visible-med">
        <div class="row">
            <div class="text-center col-md-12">
                <button class="filter" data-filter="all">All</button>
                <button class="filter" data-filter=".real-estate">Real Estate</button>
                <button class="filter" data-filter=".commercial">Commercial</button>
                <button class="filter" data-filter=".luxury">Luxury</button>
                <button class="filter" data-filter=".franchise">Franchise</button>
                <button class="filter" data-filter=".referrals">Referrals</button>
                <button class="filter" data-filter=".websites">Websites</button>
                <button class="filter" data-filter=".social">Social</button>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="mix real-estate">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="https://www.remax.net/Pages/default.aspx"><img class="activator" src="{{ asset('images/REMAX-Mainstreet-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">Mainstreet <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">Mainstreet <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="">Open App</a> </div>
            </div>
        </div>
        <div class="mix commercial">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="https://workforcenow.adp.com/public/index.htm"><img class="activator" src="{{ asset('images/ADP-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">ADP <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">ADP <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="https://workforcenow.adp.com/public/index.htm">Open App</a> </div>
            </div>
        </div>
        <div class="mix social">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://www.remax.net/learn/Pages/MyRU.aspx"><img class="activator" src="{{ asset('images/REMAXU-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">RE/MAX University <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">RE/MAX University  <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://www.remax.net/learn/Pages/MyRU.aspx">Open App</a> </div>
            </div>
        </div>
        <div class="mix marketing">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i><a href="http://abovemag.remax.com/"> <img class="activator" src="{{ asset('images/ABOVE-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">ABOVE Magazine <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">ABOVE Magazine   <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://abovemag.remax.com/">Open App</a> </div>
            </div>
        </div>
        <div class="mix leads">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://shop.remax.net/"><img class="activator" src="{{ asset('images/shop-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">Shop RE/MAX <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">Shop RE/MAX <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://shop.remax.net/">Open App</a> </div>
            </div>
        </div>
        <div class="mix luxury ">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://home.remaxcommercial.com/"><img class="activator" src="{{ asset('images/commercial-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">RE/MAX Commercial <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">RE/MAX Commercial <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://home.remaxcommercial.com/">Open App</a> </div>
            </div>
        </div>
        <div class="mix franchise ">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://shop.remax.net/"><img class="activator" src="{{ asset('images/TRMC-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">RE/MAX Luxury<i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">RE/MAX Luxury <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://shop.remax.net/">Open App</a> </div>
            </div>
        </div>
        <div class="mix referrals ">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://www.remax-franchise.com/"><img class="activator" src="{{ asset('images/franchise-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">RE/MAX Franchise<i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">RE/MAX Franchise <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://www.remax-franchise.com/">Open App</a> </div>
            </div>
        </div>
        <div class="mix websites ">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://www.remax.net/recruit/Pages/DestinationRemax.aspx"><img class="activator" src="{{ asset('images/destination-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">Destination RE/MAX<i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">Destination RE/MAX<i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://www.remax.net/recruit/Pages/DestinationRemax.aspx">Open App</a> </div>
            </div>
        </div>
        <div class="mix real-estate ">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://www.remax.net/events/conventions/Pages/conventions.aspx"><img class="activator" src="{{ asset('images/r4-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">R4 Convention<i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">R4 Convention<i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://www.remax.net/events/conventions/Pages/conventions.aspx">Open App</a> </div>
            </div>
        </div>
        <div class="mix commercial ">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i><a href="http://www.edrtravel.com/"> <img class="activator" src="{{ asset('images/edr-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">EDR Travel<i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">EDR Travel<i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://www.edrtravel.com/">Open App</a> </div>
            </div>
        </div>
        <div class="mix social ">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://www.remaxesp.com/comp_int/?Token=6NnV3ui2OnvLyHDOGOxcE5wMikRA5ABMDUZL5YDwoSM%3d"><img class="activator" src="{{ asset('images/ci-logo-300x150.png') }}"> </a></div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">Competitive Intel<i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">Competitive Intel<i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://www.remaxesp.com/comp_int/?Token=6NnV3ui2OnvLyHDOGOxcE5wMikRA5ABMDUZL5YDwoSM%3d">Open App</a> </div>
            </div>
        </div>
        <div class="mix real-estate">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="https://www.remax.net/Pages/default.aspx"><img class="activator" src="{{ asset('images/REMAX-Mainstreet-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">Mainstreet <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">Mainstreet <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="">Open App</a> </div>
            </div>
        </div>
        <div class="mix commercial">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="https://workforcenow.adp.com/public/index.htm"><img class="activator" src="{{ asset('images/ADP-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">ADP <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">ADP <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="https://workforcenow.adp.com/public/index.htm">Open App</a> </div>
            </div>
        </div>
        <div class="mix social">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://www.remax.net/learn/Pages/MyRU.aspx"><img class="activator" src="{{ asset('images/REMAXU-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">RE/MAX University <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">RE/MAX University  <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://www.remax.net/learn/Pages/MyRU.aspx">Open App</a> </div>
            </div>
        </div>
        <div class="mix marketing">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i><a href="http://abovemag.remax.com/"> <img class="activator" src="{{ asset('images/ABOVE-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">ABOVE Magazine <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">ABOVE Magazine   <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://abovemag.remax.com/">Open App</a> </div>
            </div>
        </div>
        <div class="mix leads">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://shop.remax.net/"><img class="activator" src="{{ asset('images/shop-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">Shop RE/MAX <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">Shop RE/MAX <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://shop.remax.net/">Open App</a> </div>
            </div>
        </div>
        <div class="mix luxury">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light"> <i class="fav-icon fa fa-heart fa-lg"></i> <a href="http://home.remaxcommercial.com/"><img class="activator" src="{{ asset('images/commercial-logo-300x150.png') }}"></a> </div>
                <div class="card-content"><span class="card-title activator grey-text text-darken-4">RE/MAX Commercial <i class="mdi-navigation-more-vert right"></i></span></div>
                <div class="card-reveal"><span class="card-title grey-text text-darken-4">RE/MAX Commercial <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <a class="btn btn-block btn-default" href="http://home.remaxcommercial.com/">Open App</a> </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@stop