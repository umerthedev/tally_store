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

            {{-- add category --}}
            <main>
                <div class="container-fluid px-4">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <p class="mb-0">{{ session()->get('message') }}!!!</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close">X</button>

                        </div>
                    @endif


                    <br>
                    <span style="padding-left: 20px; padding-top: 20px;">Layouts>users</span>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Shop Category Table
                        </div>
                        <div class="card-header">
                            <form action="{{ url('/save_category') }}" method="POST">
                                @csrf
                                <div>
                                    <input type="text" id="inputcat" class="form-control text-dark"
                                        style="background-color: aliceblue" placeholder="Add categorys" name="category">
                                </div>
                                <div id="sub" style="text-align: right">
                                    <button type="submit" class="btn btn-danger text-dark mt-3 ">Add</button>
                                </div>
                            </form>
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($category as $data)
                                        <tr>

                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->category_name }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{ url('edit_user', $data->id) }}">
                                                        <button type="button" class="btn btn-sm btn-alt-secondary"
                                                            data-bs-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </button></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="{{ url('delete_user', $data->id) }}"
                                                        onclick="return confirm('Are You Sure Want To Delete This???')">
                                                        <button type="button" class="btn btn-sm btn-alt-secondary"
                                                            data-bs-toggle="tooltip" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button></a>
                                                </div>
                                            </td>


                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="5" class="text-center">No User found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div>
                                {!! $category->links() !!}
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
