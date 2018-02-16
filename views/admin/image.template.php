<!-- DELETE -->
<div class='admin-table'>
  <h1>Image table</h1>
  <div>
    <form action="image" method="POST">
      <table>
        <tr>
          <th colspan="3">Delete image</th>
        </tr>
        <tr>
          <th>ID</th>
          <th>Source</th>
          <th>Alt</th>
        </tr>
        <?php foreach ($image as $row) :?>
        <tr>
          <td>
            <?=$row->imageid?>
          </td>
          <td>
            <a href='<?=$row->src?>' target="_blank">
              <img src='<?=$row->src?>' alt='<?=$row->alt?>'>
            </a>
          </td>
          <td>
            <?=$row->alt?>
          </td>
          <td>
            <input type='checkbox' name='for-delete-image[]' value='<?=$row->imageid?>'>
          </td>
        </tr>
        <?php endforeach;?>
        <tr>
          <td colspan='3'>
            <button type='submit' name='image-delete'>Delete</button>
          </td>
        </tr>
      </table>
    </form>

    <!-- EDIT -->
    <form action="image" method="POST">

      <table>
        <tr>
          <th colspan='3'>Edit images</th>
        </tr>
        <tr>
          <th>ID</th>
          <th>Src</th>
          <th>Alt</th>
        </tr>
        <tr>
          <td>
            <select id='update-images' name='imageid'>
              <option value='0'>Pick ImageID</option>
              <?php foreach ($image as $row):?>
              <option value='<?=$row->imageid?>'>
                <?=$row->imageid?>
              </option>
              <?php endforeach;?>
            </select>
          </td>
          <td>
            <input type='text' name='update-src' id='update-src' required>
          </td>
          <td>
            <input type='text' name='update-alt' id='update-alt' required>
          </td>
          <td>
            <button type='submit' name='image-update'>Update</button>
          </td>
        </tr>
      </table>

    </form>

    <!-- ADD -->
    <form action="image" method="POST" enctype="multipart/form-data">
      <table>
        <tr>
          <th colspan='2'>Add image</th>
        </tr>
        <tr>
          <th>Src</th>
          <th>Alt</th>
        </tr>
        <tr>
          <td>
            <input type='file' name='src' required>
          </td>
          <td>
            <input type='text' name='alt' required>
          </td>
          <td>
            <button type='submit' name='image-insert'>Add</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>