
        @extends('product-layout')
        @section('menu')
            @include('includes/menu')
        @endsection

        @section('content')
        
        
        <article>
        <h1>{{ $product -> product_name }}</h1>
        <p>{!! $product -> product_desc !!}</p>
        </article>
        <a href="/">Return home</a>
        
        @endsection
         
        

    

