@extends('Admin_View.layouts.app')
@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="search" style="position:relative; top: 5px;">
        <div class="mx-auto" style="width:300px;">
            <form action="{{ url('admin/issuances') }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-1 mt-0">
                        <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-1" name="b_issuances" placeholder="Search..."
                        id="b_issuances">
                    <a href="{{ url('admin/issuances') }}" class=" mt-0">
                        <span class="input-group-btn">
                            <button class="btn btn-danger text-light" type="button" title="Refresh page">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </span>
                    </a>
                </div>
            </form>
        </div>

        <div class="d-flex justify-content-end mt-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn" style="background-color: #343a40; color:white;" data-toggle="modal"
                data-target="#exampleModal">
                <span class="fas fa-plus-circle"></span> Add
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #8c0509; color:white;">
                            <h5 class="modal-title" id="exampleModalLabel">Adding to Issuances</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('/add-issuances') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="container mx-auto">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="">Outcome Area/Program:</label>

                                            <select name="outcome_area" id="outcome_area" class="form-control"
                                                style="color:dimgray;" required>
                                                <option selected>Select ...</option>
                                                <option
                                                    value="ACCOUNTABLE, TRANSPARENT, PARTICIPATIVE, AND EFFECTIVE LOCAL GOVERNANCE">
                                                    ACCOUNTABLE, TRANSPARENT, PARTICIPATIVE, AND EFFECTIVE LOCAL GOVERNANCE
                                                </option>
                                                <option value="PEACEFUL, ORDERLY AND SAFE LGUS STRATEGIC PRIORITIES">
                                                    PEACEFUL,
                                                    ORDERLY AND SAFE LGUS STRATEGIC PRIORITIES</option>
                                                <option value="SOCIALLY PROTECTIVE LGUS">SOCIALLY PROTECTIVE LGUS</option>
                                                <option
                                                    value="ENVIRONMENT-PROTECTIVE, CLIMATE CHANGE ADAPTIVE AND DISASTER RESILIENT LGUS">
                                                    ENVIRONMENT-PROTECTIVE, CLIMATE CHANGE ADAPTIVE AND DISASTER RESILIENT
                                                    LGUS
                                                </option>
                                                <option value="BUSINESS-FRIENDLY AND COMPETITIVE LGUS">BUSINESS-FRIENDLY AND
                                                    COMPETITIVE LGUS</option>
                                                <option value="STRENGTHENING OF INTERNAL GOVERNANCE">STRENGTHENING OF
                                                    INTERNAL
                                                    GOVERNANCE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Date: </label>
                                                <input type="date" class="form-control" name="date">
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Category: </label>
                                                <input type="text" class="form-control" name="category">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Title:</label>
                                                <textarea id="" type="text" class="form-control" title="" rows="3" name="title"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Upload File:
                                                    (PDF Only)</label>
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Reference No:</label>
                                                <input type="text" class="form-control" name="reference_num" required>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"><span class="fas fa-save"></span>
                                Submit</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <div class="card mt-2">

            <div class="card-header d-flex justify-content-between">
                <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
                <h1 class="" style="font-size: 18px; font-weight: 450;"><span class="fas fa-file"
                        style="color:#8c0509;"></span> ISSUANCES </h1>

            </div>
            <div>

                <table class="table table-bordered text-center">
                    <thead class="text-center" style="background-color:#343a40; color:white;">
                        <tr>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Date</th>
                            <th scope="col">Outcome</th>
                            <th scope="col">Category</th>
                            <th scope="col">Title</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Ref Num.</th>
                            <th scope="col">View</th>
                            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">Delete</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($b_issuances as $issuances)
                            <tr>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">
                                    {{ $issuances->date }}</td>
                                <td>{{ $issuances->outcome_area }}</td>
                                <td>{{ $issuances->category }}</td>
                                <td>{{ $issuances->title }}</td>
                                <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">
                                    {{ $issuances->reference_num }}</td>

                                <td><a href="#" data-toggle="modal" id="issuances_edit_link" class="btn"
                                        data-target="#issuances_id{{ $issuances->id }}"><span
                                            class="text-white btn-success btn-sm">View</span></a></td>



                                <div class="modal fade" id="issuances_id{{ $issuances->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #8c0509; color:white;">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Issuance</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{ url('update-issuances/' . $issuances->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="container mx-auto">
                                                        <div class="form-group">
                                                            <label for="">Outcome Area/Program:</label>

                                                            <select name="outcome_area" id="outcome_area"
                                                                class="form-control" style="color:dimgray;" required>
                                                                <option selected>{{ $issuances->outcome_area }}</option>

                                                                <option
                                                                    value="ACCOUNTABLE, TRANSPARENT, PARTICIPATIVE, AND EFFECTIVE LOCAL GOVERNANCE">
                                                                    ACCOUNTABLE, TRANSPARENT, PARTICIPATIVE, AND EFFECTIVE
                                                                    LOCAL
                                                                    GOVERNANCE</option>
                                                                <option
                                                                    value="PEACEFUL, ORDERLY AND SAFE LGUS STRATEGIC PRIORITIES">
                                                                    PEACEFUL, ORDERLY AND SAFE LGUS STRATEGIC PRIORITIES
                                                                </option>
                                                                <option value="SOCIALLY PROTECTIVE LGUS">SOCIALLY
                                                                    PROTECTIVE
                                                                    LGUS</option>
                                                                <option
                                                                    value="ENVIRONMENT-PROTECTIVE, CLIMATE CHANGE ADAPTIVE AND DISASTER RESILIENT LGUS">
                                                                    ENVIRONMENT-PROTECTIVE, CLIMATE CHANGE ADAPTIVE AND
                                                                    DISASTER
                                                                    RESILIENT LGUS</option>
                                                                <option value="BUSINESS-FRIENDLY AND COMPETITIVE LGUS">
                                                                    BUSINESS-FRIENDLY AND COMPETITIVE LGUS</option>
                                                                <option value="STRENGTHENING OF INTERNAL GOVERNANCE">
                                                                    STRENGTHENING OF INTERNAL GOVERNANCE</option>
                                                            </select>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" style="color:dimgray">Date:
                                                                    </label>
                                                                    <input type="date" class="form-control"
                                                                        name="date" value="{{ $issuances->date }}">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" style="color:dimgray">Category:
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        name="category"
                                                                        value="{{ $issuances->category }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        style="color:dimgray">Title:</label>
                                                                    <textarea id="" type="text" class="form-control" title="" rows="3" name="title">{{ $issuances->title }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" style="color:dimgray">Upload
                                                                        File:
                                                                        (PDF Only)
                                                                    </label>
                                                                    <input type="file" class="form-control"
                                                                        name="file" value="{{ $issuances->file }}"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label for="" style="color:dimgray">Reference
                                                                        No:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="reference_num"
                                                                        value="{{ $issuances->reference_num }}" required>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success"><span
                                                        class="fas fa-save"></span> Save changes</button>
                                            </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
            </div>

            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center"><a
                    href="#" data-toggle="modal" id="issuances_delete_link" class="btn"
                    data-target="#delete_issuances_id{{ $issuances->id }}"><span
                        class="text-danger fas fa-trash-alt"></span></a>
            </td>

            <div class="modal fade" id="delete_issuances_id{{ $issuances->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><span
                                    class="fas fa-exclamation-circle text-danger" style="font-size: 30px;"></span> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('delete_issuances/' . $issuances->id) }}" method="GET"
                                enctype="multipart/form-data">
                                @csrf
                                @method('GET')

                                <div class="container mx-auto">
                                    Are you sure you want to delete this permanently?
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete Permanently</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-2">
        {{ $b_issuances->links() }}
    </div>
@endsection
