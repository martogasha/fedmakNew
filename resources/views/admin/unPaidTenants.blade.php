@include('Partials.header')
<title>UnPaid Tenants</title>
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('reportView')}}">Report View</a></li>
    <li class="breadcrumb-item"><span>UnPaid Tenants</span></li>
</ul>
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper"><h6 class="element-header">REPORTS</h6>
            <div class="element-box"><h5 class="form-header">UnPaid Tenants</h5>
                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                        <thead>
                        <tr>
                            <th>Tenant Name</th>
                            <th>Property</th>
                            <th>House No.</th>
                            <th>House Type</th>
                            <th>Amount</th>
                            <th><b>Balance</b></th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Tenant Name</th>
                            <th>Property</th>
                            <th>House No.</th>
                            <th>House Type</th>
                            <th>Amount</th>
                            <th><b>Balance</b></th>
                            <th>Status</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($unpaidTenants as $unpaidTenant)
                        <tr>
                            <td>{{$unpaidTenant->tenant->name}}</td>
                            <td>{{$unpaidTenant->property}}</td>
                            <td>{{$unpaidTenant->house}}</td>
                            <td>{{$unpaidTenant->houseType}}</td>
                            <td>{{$unpaidTenant->amount}}</td>
                            <b><td>{{$unpaidTenant->balance}}</td></b>
                            <td class="text-center">
                                <div class="status-pill red" data-title="cancelled"
                                     data-toggle="tooltip"></div><i>UnPaid</i>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
<div class="display-type"></div>
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
<script src="js/dataTables.bootstrap4.min.js"></script>
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
<!-- Mirrored from light.pinsupreme.com/tables_datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:58:12 GMT -->
</html>
