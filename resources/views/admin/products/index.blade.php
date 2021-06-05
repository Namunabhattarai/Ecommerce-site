<x-admin.layout>
<div class="az-content az-content-dashboard">
    <div class="container">
          <div class="az-content-body">
    <a href="/Admin/products/create">Create Product</a>
    <table width="900" align="center">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Action</td>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{substr($product->product_desc, 0,50)}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a href="/Admin/products/edit/{{$product->id}}">Edit</a>
                <a href="/Admin/products/destroy/{{$product->id}}">Delete</a>
                

            </td>
        </tr>
        @endforeach

    </table>
        </div>
    </div>
</div>
</x-admin.layout>
