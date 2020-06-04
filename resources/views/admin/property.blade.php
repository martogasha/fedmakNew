@include('Partials.header')
@include('flash-message')
<title>Properties</title>

<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
    <li class="breadcrumb-item"><span>Property</span></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper"><h6 class="element-header">Available Properties</h6>
            <div class="element-box-tp">
                <div class="controls-above-table">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-sm btn-secondary" type="button" data-toggle="modal" data-target="#onboardingSlideModal" href="#">Create New Property</a>
                        </div>
                        <div aria-hidden="true" class="onboarding-modal modal fade animated"
                             id="onboardingSlideModal" role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-centered" role="document">
                                <div class="modal-content text-center">
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                        <span class="close-label">Close</span><span
                                            class="os-icon os-icon-close"></span></button>
                                    <form action="{{route('property.store')}}" method="post">
                                        @csrf
                                        <div class="onboarding-slider-w">
                                            <div class="onboarding-slide">
                                                <div class="onboarding-content with-gradient"><h4
                                                        class="onboarding-title">Property Details</h4>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label for="">Property Name</label>
                                                                    <input class="form-control" name="pName" placeholder="Enter property name..." value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <div class="form-group"><label for="">Property Location</label>
                                                                        <input class="form-control" name="pLocation" placeholder="Enter property name..." value="" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="onboarding-slide">
                                                <div class="onboarding-content with-gradient">
                                                    <h4 class="onboarding-title">Owner's/Landlord's Details</h4>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label for="">Owner's Name</label>
                                                                <input class="form-control" name="lName" placeholder="Enter Owner name..." value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group"><label for="">Owner's Phone No</label>
                                                                    <input class="form-control" name="lPhone" placeholder="Enter Owner phone..." value="" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group"><label for="">Owner's Email</label>
                                                                    <input type="email" class="form-control" name="lEmail" placeholder="Enter Owner phone..." value="" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="onboarding-slide">
                                                <div class="content-i">
                                                    <div class="content-box">
                                                        <div class="element-wrapper"><h6 class="element-header">Photo Upload/(optional)</h6>
                                                            <input type="file" name="photo">
                                                            <button type="submit" class="btn btn-secondary">Submit Data</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <form class="form-inline justify-content-sm-end"><input
                                    class="form-control form-control-sm rounded bright"
                                    placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-lg table-v2 table-striped">
                        <thead>
                        <tr>
                            <th>Property Name</th>
                            <th>Owner's Name</th>
                            <th>Location</th>
                            <th>No. of Houses</th>
                            <th>Vacant Houses</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($properties as $property)
                        <tr>
                            <td>{{$property->name}}</td>
                            <td>{{$property->lName}}</td>
                            <td>{{$property->location}}</td>
                            <td class="text-right">{{\App\PropertyUnit::where('property_id',$property->id)->count()}}</td>
                            <td class="text-right"><button class="btn btn-secondary">{{\App\PropertyUnit::where('property_id',$property->id)->where('status',0)->count()}}</button></td>

                            <td class="row-actions"><a href="{{url('property',$property->id)}}"><i class="os-icon os-icon-ui-49"></i>View</a>
                            </td>
                        </tr>
                        @endforeach
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
            <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
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
            <script src="{{asset('js/main5739.js')}}?version=4.5.0"></script>
