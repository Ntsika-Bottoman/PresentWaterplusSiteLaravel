@extends('main')

@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $item)

                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ isset($item['poster']) ? $item['poster'] : 'N/A' }}" class="card-img-top"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $item['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">R{{ $item['price'] }}</td>

                    <td data-th="Subtotal" class="text-center">R{{ $item['price'] * $item['quantity'] }}</td>
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-item">Delete</a>
                    </td>
                </tr>

                @php $total += $item['price'] * $item['quantity'] @endphp
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/movies-list') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button id="checkout" class="btn btn-danger" data-total="{{ $total }}">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
    // Delete item from cart
    $(".delete-item").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if (confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.item') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

    // Checkout process
    $("#checkout").click(function (e) {
        e.preventDefault();

        var totalPrice = $(this).data("total") * 100;

        $.ajax({
            url: "{{ route('checkout') }}", // Define the checkout route
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                amount: totalPrice
            },
            success: function (response) {
                if (response.redirectUrl) {
                    // Redirect the user to the checkout page
                    window.location.href = response.redirectUrl;
                } else {
                    alert('Failed to process checkout. Please try again.');
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                alert('Checkout failed. Please try again.');
            }
        });
    });
</script>
@endsection
