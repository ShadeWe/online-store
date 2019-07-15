<h2 style="margin-top: 30px;">All the products</h2>
<div style="width: 500px; position: absolute; right: 20px; text-align: right; top: 80px;">
    <label class="btn btn-danger" onclick="deleteProducts()">Delete</label>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th></th>
        <th>ID</th>
        <th>Product name</th>
        <th>Product category</th>
        <th>Product price</th>
        <th>Short description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td><input type="checkbox" style="margin-left: 20px;" class="selected-items" id="{{ $product->id }}"></td>
        <td >{{ $product->id }}</td>
        <td>{{ $product->{'product-name'} }}</td>
        <td>{{ $product->{'product-category'} }}</td>
        <td>{{ $product->{'product-price'} }} ₽</td>
        <td>{{ $product->short_desc }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script src="/js/delete-products.js"></script>
