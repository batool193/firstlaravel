<!DOCTYPE html>
<center>
<h1> Add New Product</h1>
<br>
<form method="post" action="{{ route('products.store') }}" >
    @csrf
<label for="name" > Name : </label>
<input type="text" id="name" name="name"></input>
<br><br>
<label for="price"> Price : </label>
<input type="number" id="price" name="price" min=1></input>
<br><br>
<button type="submit"> Add </input>
</form>
</center>
