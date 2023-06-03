<html>
    <center>
    <h1> Products</h1>
    @foreach($products as $product) 
        Name: {{ $product->name }}
        Price: {{ $product->price}}
        <br><br>
    @endforeach
    <br><br>
<a href="newproduct/"> Add New Product </a>
    </center>
  
 
  
</html>