<!-- DELETE -->
<div class='admin-table'>
  <h1>Product table</h1>
  <form action="product" method="POST">
    <table>
      <tr>
        <th colspan="8">Delete products</th>
      </tr>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>CategoryID</th>
        <th>GenderID</th>
        <th>ImageID</th>
        <th>Delete</th>
      </tr>
      <?php foreach ($product as $row) :?>
      <tr>
        <td>
          <?=$row->productid?>
        </td>
        <td>
          <?=$row->name?>
        </td>
        <td>
          <?=$row->description?>
        </td>
        <td>
          <?=$row->price?>
        </td>
        <td>
          <?=$row->categoryid?>
        </td>
        <td>
          <?=$row->imageid?>
        </td>
        <td>
          <?=$row->genderid?>
        </td>
        <td>
          <input type='checkbox' name='for-delete-product[]' value='<?=$row->productid?>'>
        </td>
      </tr>
      <?php endforeach;?>
      <tr>
        <td colspan='8'>
          <button type='submit' name='product-delete'>Delete</button>
        </td>
      </tr>
    </table>
  </form>

  <!-- EDIT -->
  <form action="product" method="POST">

    <table>
      <tr>
        <th colspan='8'>Edit products</th>
      </tr>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>CategoryID</th>
        <th>GenderID</th>
        <th>ImageID</th>
      </tr>
      <tr>
        <td>
          <select id='update-product' name='productid'>
            <option value='0'>Pick ProductID</option>
            <?php foreach ($product as $row):?>
            <option value='<?=$row->productid?>'>
              <?=$row->productid?>
            </option>
            <?php endforeach;?>
          </select>
        </td>
        <td>
          <input type='text' name='update-name' id='update-name' required>
        </td>
        <td>
          <input type='text' name='update-desc' id='update-desc' required>
        </td>
        <td>
          <input type='text' name='update-price' id='update-price' required>
        </td>
        <td>
          <input type='text' name='update-cat' id='update-cat' required>
        </td>
        <td>
          <input type='text' name='update-gender' id='update-gender' required>
        </td>
        <td>
          <input type='text' name='update-image' id='update-image' required>
        </td>
        <td>
          <button type='submit' name='product-update'>Update</button>
        </td>
      </tr>
    </table>

  </form>

  <!-- ADD -->
  <form action="product" method="POST">
    <table>
      <tr>
        <th colspan='8'>Add product</th>
      </tr>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>CategoryID</th>
        <th>GenderID</th>
        <th>ImageID</th>
      </tr>
      <tr>
        <td>
          <input type='text' name='product' required>
        </td>
        <td>
          <input type='text' name='desc' required>
        </td>
        <td>
          <input type='text' name='price' required>
        </td>
        <td>
          <input type='text' name='cat' required>
        </td>
        <td>
          <input type='text' name='gender' required>
        </td>
        <td>
          <input type='text' name='image' required>
        </td>
        <td>
          <button type='submit' name='product-insert'>Add</button>
        </td>
      </tr>
    </table>
  </form>
</div>