<!-- DELETE -->
<div class='admin-table'>
  <h1>Cart table</h1>
  <div class='flex-row'>
  <form action="cart" method="POST">
    <table>
      <tr>
        <th colspan='3'>Delete cart</th>
      </tr>
      <tr>
        <th>CartID</th>
        <th>UserID</th>
        <th>Delete</th>
      </tr>
      <?php foreach ($cart as $row) :?>
      <tr>
        <td>
          <?=$row->cartid?>
        </td>
        <td>
          <?=$row->userid?>
        </td>
        <td>
          <input type='checkbox' name='for-delete-cart[]' value='<?=$row->cartid?>'>
        </td>
      </tr>
      <?php endforeach;?>
      <tr>
        <td colspan='3'>
          <button type='submit' name='user-delete'>Delete</button>
        </td>
      </tr>
    </table>
  </form>

  <!-- EDIT -->
  <form action="cart" method="POST">

    <table>
      <tr>
        <th colspan='3'>Edit cart</th>
      </tr>
      <tr>
        <th>ID</th>
        <th>CartID</th>
        <th>UserID</th>
      </tr>
      <tr>
        <td>
          <select id='update-cart' name='cartid'>
            <option value='0'>Pick CartID</option>
            <?php foreach ($cart as $row):?>
            <option value='<?=$row->cartid?>'>
              <?=$row->cartid?>
            </option>
            <?php endforeach;?>
          </select>
        </td>
        <td>
          <input type='text' name='update-cartid' id='update-cartid' required readonly>
        </td>
        <td>
          <input type='text' name='update-userid' id='update-userid' required>
        </td>
        <td>
          <button type='submit' name='cart-update'>Update</button>
        </td>
      </tr>
    </table>

  </form>

  <!-- ADD -->
  <form action="cart" method="POST">
    <table>
      <tr>
        <th colspan='2'>Add cart</th>
      </tr>
      <tr>
        <th>CartID</th>
        <th>UserID</th>
      </tr>
      <tr>
        <td>
          <input type='text' name='cartid' required>
        </td>
        <td>
          <input type='text' name='userid' required>
        </td>
        <td>
          <button type='submit' name='cart-insert'>Add</button>
        </td>
      </tr>
    </table>
  </form>
</div>
</div>