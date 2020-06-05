@include('Partials.header')
<title>Admin Dashboard</title>

<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                                <h6 class="element-header">Dashboard</h6>
                                <div class="element-content">
                                    <div class="row">
                                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('property')}}">
                                                <div class="label">Properties</div>
                                                <div class="value">{{\App\Property::count()}}</div>
                                            </a>
                                        </div>

                                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('tenantDetails')}}">
                                                <div class="label">Tenants</div>
                                                <div class="value">{{\App\User::where('role',2)->count()}}</div>
                                            </a>
                                        </div>

                                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('paymentBilling')}}">
                                                <div class="label">Billing</div>
                                                <i class="fa fa-dollar fa-3x" aria-hidden="true">
                                                </i>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('payments')}}">
                                                <div class="label">Payments</div>
                                                <i class="fa fa-dollar fa-3x" aria-hidden="true">
                                                </i>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('reportView')}}">
                                                <div class="label">Monthly Report</div>
                                                <i class="fa fa-dollar fa-3x" aria-hidden="true">
                                                </i>
                                            </a>
                                        </div>

                                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="#">
                                                <div class="label">Reports</div>
                                                <i class="fa fa-book fa-3x" aria-hidden="true">
                                                </i>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('message')}}">
                                                <div class="label">Messages</div>
                                                <i class="fa fa-envelope fa-3x" aria-hidden="true">
                                                    <div class="trending trending-up-basic"><span>New Message</span></div>
                                                </i>

                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@include('Partials.monthlyReview')
    </div>
    <div class="content-panel">
        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
        <div class="element-wrapper"><h6 class="element-header">Quick Links</h6>
            <div class="element-box-tp">
                <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="{{url('property')}}"><i
                            class="os-icon os-icon-delivery-box-2"></i><span>Create New Property</span></a><a
                        class="btn btn-white btn-sm" href="mpesaPayments"><i class="os-icon os-icon-window-content"></i><span>Mpesa Payments</span></a><a
                        class="btn btn-white btn-sm" href="{{url('reportView')}}"><i
                            class="os-icon os-icon-wallet-loaded"></i><span>Monthly Report</span></a></div>
            </div>
        </div>
        <div class="element-wrapper"><h6 class="element-header">Property Owners</h6>
            <div class="element-box-tp">
                @foreach($properties as $property)
                <div class="profile-tile"><a class="profile-tile-box" href="users_profile_small.html">
                        <div class="pt-avatar-w"><img alt="" src="img/defaultAvatar.png"></div>
                        <div class="pt-user-name">{{$property->lName}}</div>
                    </a>
                    <div class="profile-tile-meta">
                        <ul>
                            <li>Property:<strong>{{$property->name}}</strong></li>
                            <li>No. of Houses:<strong><a href="apps_support_index.html">{{\App\PropertyUnit::where('property_id',$property->id)->count()}}</a></strong></li>
                            <li>Location:<strong>{{$property->location}}</strong></li>
                        </ul>
                        <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="apps_full_chat.html">owner</a></div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="bower_components/dropzone/dist/dropzone.js"></script>
<script src="bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="bower_components/tether/dist/js/tether.min.js"></script>
<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bower_components/bootstrap/js/dist/util.js"></script>
<script src="bower_components/bootstrap/js/dist/alert.js"></script>
<script src="bower_components/bootstrap/js/dist/button.js"></script>
<script src="bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="bower_components/bootstrap/js/dist/modal.js"></script>
<script src="bower_components/bootstrap/js/dist/tab.js"></script>
<script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="bower_components/bootstrap/js/dist/popover.js"></script>
<script src="js/demo_customizer5739.js?version=4.5.0"></script>
<script src="js/main5739.js?version=4.5.0"></script>
<script>

</script>
</body>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:55:47 GMT -->
</html>
