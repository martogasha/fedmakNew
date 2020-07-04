<title>{{$getPropertyUnit->name}} Service Bills</title>
@include('Partials.header')
@include('flash-message')

<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('property')}}">Property</a></li>
    <li class="breadcrumb-item"><a href="{{url('property',$getPropertyUnit->property_id)}}">{{$getPropertyUnit->property->name}} Details</a></li>
    <li class="breadcrumb-item"><a href="{{url('propertyUnits',$getPropertyUnit->property_id)}}">{{$getPropertyUnit->property->name}} Houses</a></li>
    <li class="breadcrumb-item"><span>Property House/Units Service Bills</span></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <h5>{{$getPropertyUnit->property->name}}</h5>
            <h6 class="element-header">{{$getPropertyUnit->name}} Service Bill</h6>

            <div class="element-box">
                <h5 class="form-header">
                    <a class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#CreateTenantModal" href="#">Create {{$getPropertyUnit->name}} Service Bill</a></h5>
                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                        <thead>
                        <tr>
                            <th>Service Bill</th>
                            <th>Amount</th>
                            <th>Interval</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Service Bill</th>
                            <th>Amount</th>
                            <th>Interval</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($UServiceBills as $UServiceBill)
                        <tr>
                            <td>{{$UServiceBill->service->name}}</td>
                            <td>{{$UServiceBill->amount}}</td>
                            <td>{{$UServiceBill->interval}}</td>
                            <form action="{{route('propertyHouseServiceBill.edit',$UServiceBill->id)}}">
                            <td><button type="submit" class="btn btn-primary">Edit</button> </td>
                            </form>
                            <form action="{{url('propertyHouseServiceBill',$UServiceBill->id)}}" method="post">
                                @csrf
                                <td><button type="submit" class="btn btn-danger">Delete</button> </td>
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
                    {{$getPropertyUnit->name}} Service Bill Details</h4>
                <form action="{{route('propertyHouseServiceBill.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group"><label for="">Service Bill</label>
                                <select class="form-control" name="serviceBill_id">
                                    <option>Select Service Bill</option>
                                    @foreach($serviceBills as $serviceBill)
                                        <option value="{{$serviceBill->id}}">{{$serviceBill->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label for="">Amount</label>
                                <input class="form-control" name="amount" placeholder="Enter Amount..." value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label for="">Interval</label>
                                <input class="form-control" name="interval" placeholder="Enter Interval..." value="">
                            </div>
                        </div>
                        <input type="hidden" name="propertyUnit_id" value="{{$getPropertyUnit->id}}">
                        <button type="submit" class="btn-outline-secondary btn-block">Submit</button>

                    </div>

                </form>
        </div>
    </div>
    </div>
</div>

<div class="display-type"></div>
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
<script src="{{asset('js/main5739.js')}}?version=4.5.0"></script>>
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
