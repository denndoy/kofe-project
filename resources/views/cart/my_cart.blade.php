<br><br><br><br>

<div id="gallery" class="container-fluid text-center bg-dark text-light py-5 wow fadeIn">
    <div class="table-responsive">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Food Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Image</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php $total_price = 0; ?>
                @foreach($data as $data)
                <tr>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->quantity }}</td>
                    <td>
                        <img width="150" src="coffee_img/{{ $data->image }}" alt="">
                    </td>
                    <td>
                        <a onclick="return confirm('Are you sure to remove this ?')" class="btn btn-danger" href="{{ url('remove_cart', $data->id) }}">Remove</a>
                    </td>
                </tr>
                <?php $total_price = $total_price + $data->price; ?>
                @endforeach
            </tbody>
        </table>
    </div>
    <h3>Total Price for the Cart {{ $total_price }}</h3>
</div>

<div class="container div_center">
    <form action="{{ url('confirm_order') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ Auth()->user()->name }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ Auth()->user()->email }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{ Auth()->user()->phone }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ Auth()->user()->address }}">
        </div>

        <div class="mb-3">
            <input class="btn btn-info" type="submit" value="Confirm Order">
        </div>
    </form>
</div>
