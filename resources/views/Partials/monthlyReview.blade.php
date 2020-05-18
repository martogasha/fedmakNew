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
