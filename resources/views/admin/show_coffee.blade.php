<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>View Coffee</h1>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Coffee Title</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->detail }}</td>
                            <td>Rp. {{ $data->price }}</td>
                            <td>
                                <img src="coffee_img/{{ $data->image }}" alt="Coffee Image" class="img-thumbnail" width="100">
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{ url('update_coffee', $data->id) }}">Update</a>
                                <a class="btn btn-danger" onclick="return confirm('Are u sure to detele this data?')" href="{{ url('delete_coffee', $data->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
