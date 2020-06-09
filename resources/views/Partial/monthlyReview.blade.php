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
                        @foreach($properties as $property)
                            <tr>
                                <td>{{$property->name}}</td>
                                <td>{{\App\PropertyUnit::where('property_id',$property->id)->count()}}</td>
                                <td class="text-right">{{\App\MonthlyReport::where('property',$property->name)->where('status',0)->count()}}</td>
                                <td class="text-right">{{\App\MonthlyReport::where('property',$property->name)->where('status',1)->count()}}</td>
                                <td class="text-center">
                                    @if((\App\MonthlyReport::where('property',$property->name)->where('status',1)->count()==0))
                                    <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div><i>Completed</i>
                                    @else
                                        <div class="status-pill red" data-title="Incomplete" data-toggle="tooltip"></div><i>Completed</i>
                                    @endif

                                </td>
                                @if((\App\MonthlyReport::where('property',$property->name)->where('status',1)->count()==0))
                                <td class="row-actions"><a href="{{url('paidTenants')}}"><i class="os-icon os-icon-ui-49"></i>View</a>
                                    @else
                                    <td class="row-actions"><a href="{{url('unpaidTenants')}}"><i class="os-icon os-icon-ui-49"></i>View</a>
                                        @endif

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
