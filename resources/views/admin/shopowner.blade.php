<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="sb-nav-fixed">

    @include('admin.navbar')


    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            @include('admin.sidebar')

        </div>
        <div id="layoutSidenav_content">


            <span style="padding-left: 20px; padding-top: 20px;">Layouts>users</span>



            <main>
                <div class="container-fluid px-4">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <p class="mb-0">{{ session()->get('message') }}!!!</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close">X</button>

                        </div>
                    @endif

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Users Table
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Action</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    @forelse ($data as $shopowner)
                                        <tr>
                                            @if ($shopowner->usertype == 2)
                                                <td>{{ $shopowner->name }}</td>
                                                <td>{{ $shopowner->email }}</td>
                                                <td>{{ $shopowner->phone }}</td>
                                                <td>{{ $shopowner->address }}</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ url('delete_shopowner', $shopowner->id) }}"
                                                            onclick="return confirm('Are You Sure Want To Delete This???')">
                                                            <button type="button" class="btn btn-sm btn-alt-secondary"
                                                                data-bs-toggle="tooltip" title="Delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button></a>
                                                    </div>
                                                </td>

                                        </tr>
                                    @endif
                                @empty

                                    <tr>
                                        <td colspan="5" class="text-center">No User found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div>
                                {!! $data->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </main>










            @include('admin.footer')

        </div>
    </div>
    @include('admin.script')
</body>

</html>
