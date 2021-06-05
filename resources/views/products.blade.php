
        @extends('product-layout')
        @section('menu')
            @include('includes/home-menu')
        @endsection


        @section('content')
        
        <h1>Products</h1>
        @foreach($products as $product)
        <article>
        <h1><a href="/products/{{ $product ->id }}">{{ $product['product_name'] }}</a></h1>
        <p>{!! $product['product_desc'] !!} </p>
        </article>
        @endforeach
        @endsection
         
        

    
