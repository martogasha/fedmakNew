@include('Partials.header')
@include('flash-message')
<title>Edit Service Bill Details</title>
    <div class="content-w">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item"><span>Edit Service Bill Details</span></li>
            </ul>
            <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
            <div class="content-i">
                <div class="content-box">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <div class="element-box">
                                    <form action="{{url('editServiceBill',$edit->id)}}" method="post">
                                        @csrf
                                        <div class="element-info">
                                            <div class="element-info-with-icon">
                                                <div class="element-info-icon">
                                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                                </div>
                                                <div class="element-info-text"><h5 class="element-inner-header">Edit Service Bill Details</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label for="">Service Bill</label>
                                            <select class="form-control"  name="service_id">
                                                    <option value="{{$edit->service_id}}">{{$edit->service->name}}</option>
                                                @foreach($services as $service)
                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group"><label for="">Amount</label><input
                                                class="form-control" data-error="Your Name is invalid"
                                                placeholder="{{$edit->amount}}" name="amount" required="required" type="text" value="{{$edit->amount}}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group"><label for="">Amount</label><input
                                                class="form-control" data-error="Your Name is invalid"
                                                placeholder="{{$edit->interval}}" name="interval" required="required" type="text" value="{{$edit->interval}}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <button type="submit" class="btn btn-secondary">Save Changes</button>

                                    </form>
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
<!-- Mirrored from light.pinsupreme.com/users_profile_small.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:55:48 GMT -->
</html>
