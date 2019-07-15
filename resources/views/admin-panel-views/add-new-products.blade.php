<form class="" action="/admin-panel/new-product" method="POST" style="margin-top: 30px;" id="add-product-form">
   <div class="form-group">
      Product name
      <input name="product-name" id="product-name" type="text" class="form-control" style="width: 500px;">
      Preference
      <select name="product-category" class="custom-select" id="inlineFormCustomSelectPref" style="margin-bottom: 10px; width: 500px; display: block;">
         <option value="" selected disabled hidden>Выберите категорию</option>
         <option>Ноутбуки и компьютерная техника</option>
         <option>Техника для кухни</option>
         <option>Бытовая техника для дома</option>
         <option>Автотехника</option>
         <option>Телефоны и планшеты</option>
         <option>Фотоаппараты</option>
         <option>Товары для спорта, дачи и отдыха</option>
         <option>Аксессуары</option>
      </select>
      Product price
      <input name="product-price" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" style="width: 200px; display: inline-block; margin-right: 20px; margin-left: 10px;">
      Currency
      <select name="currency" class="custom-select" id="product-price" style="width: 112px; display: inline-block; margin-right: 20px; margin-left: 10px;">
         <option>EUR €</option>
         <option>RUB ₽</option>
         <option>USD $</option>
      </select>
   </div>
   <p>Product short description</p>
   <textarea name="short_desc" form="add-product-form" style="width: 500px;"></textarea>
   <div style="width: 500px; position: relative;">
      <button onclick="submit" class="btn btn-primary" style="display: block; position: absolute; right: 0; margin-top: 10px;">Add new product</button>
   </div>
   @method('put')
   @csrf
</form>
