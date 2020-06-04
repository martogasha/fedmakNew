@include('Partials.header')
<title>Payments</title>
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
    <li class="breadcrumb-item"><span>Payments</span></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">Payments</h6>
                    <div class="element-content">
                        <div class="row">
                            <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('cashPayments')}}">
                                    <div class="label">Cash</div>
                                    <i class="fa fa-dollar fa-3x" aria-hidden="true">
                                    </i>
                                </a>
                            </div>

                            <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('mpesaPayments')}}">
                                    <div class="label">Mpesa</div>
                                    <div class="value"></div>
                                </a>
                            </div>
                            <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="#">
                                    <div class="label">Bank</div>
                                    <div class="value"></div>
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
                                <tr>
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
                                </tr>

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

