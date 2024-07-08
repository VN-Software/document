@extends('layout')

@section('title', 'Home Page')

@section('content')

    <div class="d-flex justify-content-between">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="{{ $product->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $product->name }}</p>
                        <div>quantity: {{ $product->quantity }}</div>
                    </div>
                    <div>price: {{ $product->price }}</div>
                </div>
                <button type="button" class="btn btn-primary" onclick="addToCart({{ $product->id }})">Add to card</button>
            </div>
        @endforeach
    </div>
    <script>
        function addToCart(idProduct) {
            console.log("idProduct", idProduct);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: "add-to-cart",
                data: {
                    "idProduct": idProduct,
                },
                success: (res)=>{
                    //chưa bắt được res
                    console.log("res",res.message)

                },
                error: (e) => {
                    console.log("err")
                }
            })

        }
    </script>
@endsection
