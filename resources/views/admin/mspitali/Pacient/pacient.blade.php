@extends('admin.adminpanel.dashboard') 
@section('content')

<style>
    body {
        color: #17a2b8;
        background: #f5f5f5;
        font-family: "Roboto", sans-serif;
    }
    .table-responsive {
        margin: 30px 0;
    }
    .table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
    .search-box input:focus {
        border-color: #3fbae4;
    }
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
    table.table td a.view {
        color: #03a9f4;
    }
    table.table td a.edit {
        color: #ffc107;
    }
    table.table td a.delete {
        color: #e34724;
    }
    table.table td i {
        font-size: 19px;
    }

    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb homebar">
            <li><i class="fa fa-home"></i> Home / </li>
            <li><i class="fa fa-user-md"></i> Pacient</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="dash-widget">
            <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
            <div class="dash-widget-info text-right">
                <h3>{{$pacient->count()}}</h3>

                <span class="widget-title1"> Total Pacient<i class="fa fa-check" aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
</div>
<br />
@php $i=1; @endphp
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Pacient <b>Table</b></h2>
                </div>

                <div class="col-sm-4">
                    <form method="get">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" name="q" class="form-control" placeholder="Search&hellip;" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if (count($pacient) > 0)

        <button id="print-btn" class="btn btn-white pull-right"><i class="fa fa-print mr5"></i> Print</button>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th class="text-center">History</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacient as $pa)
                <tr>
                    <td>@php echo $i++; @endphp</td>
                    <th><img class="avatar" src="{{asset('image/'.$pa->image)}}" /></th>
                    <td>{{ $pa->fullname }}</td>
                    <td>{{ $pa->birthday }}</td>
                    <td class="text-center"><i class="fa fa-history"></i></td>
                    <td>@if($pa->gender = 1) Male @else Female @endif</td>
                    <td>{{ $pa->address }}</td>
                    <td>{{ $pa->email }}</td>
                    <td>{{ $pa->phone }}</td>

                    <td>
                        <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        @else
        <div class="well">No result !</div>
        @endif
    </div>
</div>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection
