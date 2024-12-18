<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Update Coffee</h1>
                <form action="{{ url('edit_coffee', $coffee->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Coffee Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $coffee->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="details" class="form-label">Coffee Details</label>
                        <textarea class="form-control" id="details" name="details" cols="30" rows="10" required>{{ $coffee->detail }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $coffee->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Current Image</label>
                        @if($coffee->image)
                            <img src="coffee_img/{{ $coffee->image }}" alt="Coffee Image" class="img-thumbnail my-3 mx-5" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Change Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div>
                        <input class="btn btn-warning" type="submit" value="Update Coffee">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
