@include('Partials.header')
@include('flash-message')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper"><h6 class="element-header">Service Bills</h6>
            <div class="element-box">
                <h5 class="form-header">
                    <a class="btn btn-sm btn-secondary" id="createServiceBillButton" type="button" data-toggle="modal" data-target="#CreateServiceBillModal" href="#">Create Service Bills</a>
                </h5>
                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                        <thead>
                        <tr>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($serviceBills as $serviceBill)
                            <tr>
                            <td>{{$serviceBill->name}}</td>
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
{{--Create Service Bill Modal--}}
<div aria-hidden="true" class="onboarding-modal modal fade animated"
     id="CreateServiceBillModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                <span class="close-label">Close</span><span
                    class="os-icon os-icon-close"></span></button>
            <div class="onboarding-content with-gradient"><h4 class="onboarding-title">
                    Property House Details</h4>
                <form action="{{route('serviceBill.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group"><label for="">Service Bill</label>
                                <input class="form-control" name="name" placeholder="Enter Service Bill Name...">
                            </div>
                        </div>
                        <button class="btn-outline-secondary btn-block">Submit</button>
                    </div>

                </form>
            </div>
        </div>
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
