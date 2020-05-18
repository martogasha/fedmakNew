@include('Partials.header')
@include('flash-message')
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="index.html">Products</a></li>
    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper"><h6 class="element-header">BILL</h6>

            <div class="element-box"><h5 class="form-header"><a class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#CreateTenantModal" href="#">Bill Tenant</a>
                </h5>

                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                        <thead>
                        <tr>
                            <th>Tenant Name</th>
                            <th>Property</th>
                            <th>House No.</th>
                            <th>HouseType</th>
                            <th>Total Payable Amount</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Tenant Name</th>
                            <th>Property</th>
                            <th>House No.</th>
                            <th>House Type</th>
                            <th>Total Payable Amount</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($bills as $bill)

                            <tr>
                                <td>{{$bill->tenant->name}}</td>
                                <td>{{$bill->property}}</td>
                                <td>{{$bill->house}}</td>
                                <td>{{$bill->houseType}}</td>
                                <td>Ksh: {{$bill->amount}}/=</td>
                                <form action="{{url('deleteBill',$bill->id)}}" method="post">
                                    @csrf
                                    <td><button type="submit" class="btn btn-secondary">Delete</button></td>

                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
                    Bill Tenant</h4>
                <form action="{{route('bill.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group"><label for="">Full Name</label>
                                <select class="form-control" id="getTenant" name="tenant_id">
                                    <option>Select Tenant</option>
                                    @foreach($tenants as $tenant)
                                        <option value="{{$tenant->id}}">{{$tenant->name}}</option>
                                    @endforeach
                                </select></div>
                        </div>
                    <div class="row" id="getDet">

                    </div>
                        <button type="submit" class="btn btn-outline-secondary btn-block">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="display-type"></div>
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
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
<script src="{{asset('js/main5739.js')}}?version=4.5.0"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('#getTenant').on('change',function () {
        $value = $(this).val();
        $.ajax({
            type:"get",
            url:"{{url('ajax2')}}",
            data:{'tenant':$value},
            success:function (data) {
                $('#getDet').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        })

    });
</script>
</body>
<!-- Mirrored from light.pinsupreme.com/tables_datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:58:12 GMT -->
</html>
