<input class="form-control" type="text" placeholder="Search" aria-label="Search" style="margin-top: 100px; margin-bottom: 5px;">
<button class="btn btn-info" name="button" style="margin: 7px 0 7px 5px; font-size: 13px;" onclick="advancedSearch();">Расширенный поиск</button>
<div id="advanced-search" class="bg-light" shown="false" style="height: 0px; overflow: hidden; transition-duration: 0.3s;">

  <div class="input-group mb-2">
    <input type="text" class="form-control" style="height: 30px;">
    <div class="input-group-append">
      <span class="input-group-text" style="height: 30px;">PRODUCT ID</span>
    </div>
  </div>

  <div class="input-group mb-2">
    <input type="text" class="form-control" style="height: 30px;">
    <div class="input-group-append">
      <span class="input-group-text" style="height: 30px;">PRODUCT NAME</span>
    </div>
  </div>

  <div class="input-group mb-2">
    <input type="text" class="form-control" style="height: 30px;">
    <div class="input-group-append">
      <span class="input-group-text" style="height: 30px;">PRODUCT CATEGORY</span>
    </div>
  </div>

  <div class="input-group mb-2">
    <input type="text" class="form-control" style="height: 30px;">
    <div class="input-group-append">
      <span class="input-group-text" style="height: 30px;">PRODUCT PRICE</span>
    </div>
  </div>

  <div class="input-group mb-2">
    <input type="text" class="form-control" style="height: 30px;">
    <div class="input-group-append">
      <span class="input-group-text" style="height: 30px;">DESCRIPTION</span>
    </div>
  </div>

  <button class="btn btn-info" name="button" style="margin: 7px 0 7px 5px; font-size: 13px;">Поиск</button>

</div>
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
        <td>{{ $product->id }}</td>
        <td>{{ $product->{'product-name'} }}</td>
        <td>{{ $product->{'product-category'} }}</td>
        <td>{{ $product->{'product-price'} }} ₽</td>
        <td>{{ $product->short_desc }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<style media="screen">
::-webkit-scrollbar {
  display: none;
}
</style>
<script src="/js/delete-products.js"></script>
