@include('Partials.header')
<title>Admin Dashboard</title>

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
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper"><h6 class="element-header">General Monthly Review</h6>
                    <div class="element-box-tp">
                        <div class="controls-above-table">
                            <div class="row">
                                <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download
                                        CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a
                                        class="btn btn-sm btn-danger" href="#">Delete</a></div>
                                <div class="col-sm-6">
                                    <form class="form-inline justify-content-sm-end"><input
                                            class="form-control form-control-sm rounded bright"
                                            placeholder="Search"><select
                                            class="form-control form-control-sm rounded bright">
                                            <option selected="selected" value="">Select Status</option>
                                            <option value="Pending">Completed</option>
                                            <option value="Active">Uncompleted</option>
                                        </select></form>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg table-v2 table-striped">
                                <thead>
                                <tr>
                                    <th>Property Name</th>
                                    <th>No. of Houses</th>
                                    <th>Paid Houses</th>
                                    <th>Houses with Balance</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Kikuyu Flats</td>
                                    <td>50</td>
                                    <td class="text-right">25</td>
                                    <td class="text-right">25</td>
                                    <td class="text-center">
                                        <div class="status-pill green" data-title="Complete"
                                             data-toggle="tooltip"></div><i>Completed</i>
                                    </td>
                                    <td class="row-actions"><a href="{{url('tables')}}"><i class="os-icon os-icon-ui-49"></i>View</a>
                                    </td>
                                </tr>
                                <tr15>
                                    <td>Limuru Flats</td>
                                    <td>1500</td>
                                    <td class="text-right">1000</td>
                                    <td class="text-right">500</td>
                                    <td class="text-center">
                                        <div class="status-pill red" data-title="Cancelled"
                                             data-toggle="tooltip"></div><i>Uncompleted</i>
                                    </td>
                                    <td class="row-actions"><a href="{{url('tables')}}"><i class="os-icon os-icon-ui-49"></i>View</a>
                                    </td>
                                </tr15>

                                </tbody>
                            </table>
                        </div>
                        <div class="controls-below-table">
                            <div class="table-records-info">Showing records 1 - 5</div>
                            <div class="table-records-pages">
                                <ul>
                                    <li><a href="#">Previous</a></li>
                                    <li><a class="current" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="content-panel">
        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
        <div class="element-wrapper"><h6 class="element-header">Quick Links</h6>
            <div class="element-box-tp">
                <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="#"><i
                            class="os-icon os-icon-delivery-box-2"></i><span>Create New Property</span></a><a
                        class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-window-content"></i><span>Recent Payments</span></a><a
                        class="btn btn-white btn-sm" href="#"><i
                            class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a></div>
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
    <div class="display-type"></div>

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
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:55:47 GMT -->
</html>
