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
        <div class="element-wrapper">
            <h6 class="element-header"></h6>

            <div class="element-box">
                <h5 class="form-header">
                    <a class="btn btn-sm btn-secondary" id="createServiceBillButton" type="button" data-toggle="modal" data-target="#CreatePropertyHousesModal" href="#">Create </a>
                </h5>
                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                        <thead>
                        <tr>
                            <th>House No.</th>
                            <th>House Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>House No.</th>
                            <th>House Type</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($pUnits as $pUnit)
                        <tr>
                            <td>{{$pUnit->name}}</td>
                            <td>{{$pUnit->type}}</td>
                            <td><a href="{{url('propertyHouseServiceBill',$pUnit->id)}}"><button class="btn btn-secondary">View Service Bills</button></a> </td>
                        </tr>
                        <input type="hidden" id="propertyName" value="{{$pUnit->property->name}} Houses/Units">
                            <input type="hidden" id="propertyId" value="{{$pUnit->property->id}}">

                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
{{--Create property Houses Modal--}}
<div aria-hidden="true" class="onboarding-modal modal fade animated"
     id="CreatePropertyHousesModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                <span class="close-label">Close</span><span
                    class="os-icon os-icon-close"></span></button>
            <div class="onboarding-content with-gradient">
                <h4 class="onboarding-title"></h4>
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
                        <input type="hidden" id="getPropertyId" name="property_id" value="">
                        <button class="btn-outline-secondary btn-block">Submit</button>
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
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/editable-table/mindmup-editabletable.js')}}"></script>
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
<script>
    $propertyName = $('#propertyName').val();
    $('.element-header').append($propertyName);
    $('#createServiceBillButton').append($propertyName);
    $('.onboarding-title').append($propertyName);
    $('#getPropertyId').val($('#propertyId').val());
</script>
</body>
<!-- Mirrored from light.pinsupreme.com/tables_datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:58:12 GMT -->
</html>
