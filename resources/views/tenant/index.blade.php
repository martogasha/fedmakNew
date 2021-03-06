@include('Partial.header')
<title>Tenant Dashboard</title>

<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        @if(isset($bal))
        @if($bal->balance >0)
        <button class="btn btn-secondary">Balance: {{$bal->balance}}</button>
        @else
            <button class="btn btn-success">Balance: {{$bal->balance}}</button>

        @endif


        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">Dashboard</h6>
                    <div class="element-content">
                        <div class="row">
                            <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="{{url('tenant/payments')}}">
                                    <div class="label">Payments</div>
                                    <i class="fa fa-dollar fa-3x" aria-hidden="true">
                                    </i>
                                </a>
                            </div>

                            <div class="col-sm-4 col-xxxl-3"><a class="element-box el-tablo" href="#">
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
    </div>
    <div class="content-panel">
        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
        <div class="element-wrapper"><h6 class="element-header">Quick Links</h6>
            <div class="element-box-tp">
                <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="#"><i
                            class="os-icon os-icon-delivery-box-2"></i><span>Send Complaint</span></a><a
                        class="btn btn-white btn-sm"  href="{{url('tenant/payments')}}"><i class="os-icon os-icon-window-content"></i><span>Lipa na Mpesa</span></a>
            </div>
        </div>
    </div>
</div>
{{--Create Tenant Modal--}}
<div aria-hidden="true" class="onboarding-modal modal fade animated"
     id="CreateTenantModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                <span class="close-label">Close</span><span
                    class="os-icon os-icon-close"></span></button>
            <div class="onboarding-content with-gradient"><h4 class="onboarding-title">
                    Mpesa Payment</h4>
                <form action="{{url('lipa')}}" method="get">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group"><label for="">Full Name</label>
                                <input class="form-control" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><label for="">Property</label>
                                <input class="form-control" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->property->name}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><label for="">House No</label>
                                <input class="form-control" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->house->name}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><label for="">House Type</label>
                                <input class="form-control" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->house->type}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><label for="">Amount</label>
                                <input class="form-control" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->amount}}">
                            </div>
                        </div>
                        <div class="row" id="getDet">

                        </div>
                        <button type="submit" class="btn btn-outline-secondary btn-block">Pay Via Mpesa</button>

                </form>
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
