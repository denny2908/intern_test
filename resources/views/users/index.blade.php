@extends('theme.default')
@section('title', 'Akun')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="col-12 d-flex justify-content-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="text-left">
                                    <form id="search-form" action="{{ url('users') }}" method="GET" class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" id="search-input" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-info" type="submit" id="search-button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="ml-auto">
                                    <div class="">
                                        <a href="/users/create" class="btn btn-success"><i class="fa-solid fa-plus"></i>
                                            Tambah
                                            Akun</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div style="overflow-x: scroll">
                                    <table id="example1" class="table table-striped table-bordered table-hover text-center"
                                        style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                {{-- <th>Password</th> --}}
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    {{-- <td>
                                                        <input type="password" value="{{ $data->password }}" readonly
                                                            class="form-control-plaintext text-center"
                                                            style="border: none; background-color: transparent;" />
                                                    </td> --}}
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info">Action</button>
                                                            <button type="button"
                                                                class="btn btn-info dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item"
                                                                    href="/users/{{ $data->id_user }}/edit">Edit
                                                                </a>
                                                                <form action="/users/{{ $data->id_user }}" method="POST"
                                                                    class="d-inline">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="dropdown-item text-danger"
                                                                        id="btn-delete">Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <div class="card-header">
                                    <div class="text-right">
                                        <a href="generate-pdf" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" target="_blank">
                                            <i class="fas fa-download fa-sm text-white-50"></i> PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>

@endsection
