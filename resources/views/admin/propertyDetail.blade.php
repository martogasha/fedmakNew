@include('Partials.header')
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="index.html">Products</a></li>
    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
        <div class="content-w">
            <a class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#CreatePropertyHousesModal" href="#">Create {{$property->name}} Houses/Units</a>
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="order-box">
                                <div class="order-details-box">
                                    <div class="order-main-info"><span><b>Property Name</b></span><strong>{{$property->name}}</strong></div>
                                    <div class="order-sub-info"><span><b>Located at</b></span><strong>{{$property->location}}</strong></div>
                                </div>
                                <hr>
                                <div class="order-details-box">
                                    <div class="order-main-info"><span><b>Number of Houses </b></span><strong>{{\App\PropertyUnit::where('property_id',$property->id)->count()}} <a href="{{url('propertyUnits',$property->id)}}"><button class="btn btn-outline-secondary">View</button></a></strong></div>
                                    <div class="order-sub-info"><span><b>Vacant</b></span><strong>5</strong></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ecommerce-customer-info">
                                <div class="ecommerce-customer-main-info">
                                    <div class="ecc-avatar" style="background-image: url({{asset('img/avatar1.jpg')}})"></div>
                                    <div class="ecc-name">{{$property->lName}}</div>
                                    <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="apps_full_chat.html">Owner</a></div>

                                </div>
                                <div class="ecommerce-customer-sub-info">
                                    <div class="ecc-sub-info-row">
                                        <div class="sub-info-label">Email</div>
                                        <div class="sub-info-value"><a href="#">{{$property->lEmail}}</a></div>
                                    </div>
                                    <div class="ecc-sub-info-row">
                                        <div class="sub-info-label">Phone</div>
                                        <div class="sub-info-value">{{$property->lPhone}}</div>
                                    </div>
                                </div>
                                <div class="os-tabs-controls">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_overview"> Payment</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="ecc-sub-info-row">
                                        <div class="sub-info-label">Payment Method</div>
                                        <div class="sub-info-value"><img alt="" src="img/mastercard.png"
                                                                         style="width: auto; height: 40px;"><span>ending 8374</span>
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
    <div class="display-type"></div>
</div>
{{--Create property Houses Modal--}}
<div aria-hidden="true" class="onboarding-modal modal fade animated"
     id="CreatePropertyHousesModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                <span class="close-label">Close</span><span
                    class="os-icon os-icon-close"></span></button>
            <div class="onboarding-content with-gradient"><h4 class="onboarding-title">
                    {{$property->name}} House/Unit Details</h4>
                <form action="{{route('propertyUnits.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group"><label for="">House No.</label>
                                <input class="form-control" name="houseNo" placeholder="Enter House No..." value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label for="">House Type</label>
                                <input class="form-control" name="type" placeholder="Enter House Type..." value="">
                            </div>
                        </div>
                        <input type="hidden" name="property_id" value="{{$property->id}}">
                        <button class="btn-outline-secondary btn-block" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('bower_components/moment/moment.js')}}"></script>
<script src="{{asset('bower_components/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
<script src="{{asset('bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('bower_components/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('bower_components/editable-table/mindmup-editabletable.js')}}"></script>
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('bower_components/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('bower_components/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/util.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/alert.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/button.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/carousel.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/collapse.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/modal.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/tab.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
<script src="{{asset('bower_components/bootstrap/js/dist/popover.js')}}"></script>
<script src="{{asset('js/demo_customizer5739.js')}}?version=4.5.0"></script>
<script src="{{asset('js/main5739.js')}}?version=4.5.0"></script>
<script>(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-42863888-9', 'auto');
    ga('send', 'pageview');</script>
</body>
<!-- Mirrored from light.pinsupreme.com/ecommerce_order_info.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:57:51 GMT -->
</html>
