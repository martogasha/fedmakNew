@include('Partials.header')
@include('flash-message')
<title>Edit Tenant Details</title>
    <div class="content-w">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item"><span>Tenant Details</span></li>
            </ul>
            <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
            <div class="content-i">
                <div class="content-box">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <div class="element-box">
                                    <form action="{{url('tenant',$edit->id)}}" method="post">
                                        @csrf
                                        <div class="element-info">
                                            <div class="element-info-with-icon">
                                                <div class="element-info-icon">
                                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                                </div>
                                                <div class="element-info-text"><h5 class="element-inner-header">Edit Tenant Details</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tenants">
                                            <div class="form-group"><label for="">Name</label><input
                                                    class="form-control" data-error="Your Name is invalid"
                                                    placeholder="{{$edit->name}}" name="name" required="required" type="text" value="{{$edit->name}}">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                            <div class="form-group"><label for="">Id No</label><input
                                                    class="form-control" data-error="Your Id No is invalid"
                                                    placeholder="{{$edit->idno}}" name="idno" required="required" type="text" value="{{$edit->idno}}">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                            <div class="form-group"><label for="">Phone No</label><input
                                                    class="form-control" data-error="Your Phone No is invalid"
                                                    placeholder="{{$edit->phone}}" name="phone" required="required" type="text" value="{{$edit->phone}}">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                            <div class="form-group"><label for="">Property</label>
                                                <select class="form-control" id="getProperty" name="property">
                                                    @foreach($properties as $property)
                                                        <option value="{{$property->name}}">{{$property->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group"><label for="">Houses</label>
                                                <select class="form-control" id="getHouses" name="houseName">

                                                </select>
                                            </div>
                                            <div id="houseType">

                                            </div>
                                            <div id="alt">
                                                <div class="form-group"><label for="">House Type</label><input
                                                        class="form-control" data-error="Your Phone No is invalid"
                                                        placeholder="House Type" name="houseType1" type="text">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                                <div class="form-group"><label for="">Amount</label><input
                                                        class="form-control" data-error="Amount is invalid"
                                                        placeholder="Amount" name="amount1"type="text">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit"> Submit</button>
                                        </div>
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
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('bower_components/moment/moment.js')}}"></script>
<script src="{{asset('bower_components/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
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
    $(document).ready(function () {
        $value = $('#getProperty').val();
        $.ajax({
            type: "get",
            url: "{{url('ajax4')}}",
            data: {'property': $value},
            success: function (data) {
                $('#getHouses').html(data);
            },
            error: function (error) {
                console.log(error)
                alert('error')

            }

        });
    });

    $('#getProperty').on('change', function (){
        $value = $('#getProperty').val();
        $.ajax({
            type: "get",
            url: "{{url('ajax4')}}",
            data: {'property': $value},
            success: function (data) {
                $('#getHouses').html(data);
            },
            error: function (error) {
                console.log(error)
                alert('error')

            }

        });
    });

    $('#getHouses').on('change',function () {
        $('#alt').hide();
        $value = $('#getHouses').val();
        $.ajax({
            type: "get",
            url: "{{url('ajax5')}}",
            data: {'house': $value},
            success: function (data) {
                $('#houseType').html(data);
            },
            error: function (error) {
                console.log(error)
                alert('error')

            }

        });
    });

</script>
</body>
<!-- Mirrored from light.pinsupreme.com/users_profile_small.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:55:48 GMT -->
</html>
