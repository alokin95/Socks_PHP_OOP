<!-- DELETE -->
<div class='admin-table'>
  <h1>Coment table</h1>
  <form action="comment" method="POST">
    <table>
      <tr>
        <th colspan='7'>Delete comments</th>
      </tr>
      <tr>
        <th>ID</th>
        <th>Head</th>
        <th>Content</th>
        <th>Date</th>
        <th>UserID</th>
        <th>ProductID</th>
        <th>Delete</th>
      </tr>
      <?php foreach ($comments as $row) :?>
      <tr>
        <td>
          <?=$row->commentid?>
        </td>
        <td>
          <?=$row->heading?>
        </td>
        <td>
          <?=$row->content?>
        </td>
        <td>
          <?=$row->date_created?>
        </td>
        <td>
          <?=$row->userid?>
        </td>
        <td>
          <?=$row->productid?>
        </td>
        <td>
          <input type='checkbox' name='for-delete-comment[]' value='<?=$row->commentid?>'>
        </td>
      </tr>
      <?php endforeach;?>
      <tr>
        <td colspan='8'>
          <button type='submit' name='comment-delete'>Delete</button>
        </td>
      </tr>
    </table>
  </form>

  <!-- EDIT -->
  <form action="comment" method="POST">

    <table>
      <tr>
        <th colspan='7'>Edit comment</th>
      </tr>
      <tr>
        <th>ID</th>
        <th>Head</th>
        <th>Content</th>
        <th>Date</th>
        <th>UserID</th>
        <th>ProductID</th>
      </tr>
      <tr>
        <td>
          <select id='update-comment' name='commentid'>
            <option value='0'>Pick CommentID</option>
            <?php foreach ($comments as $row):?>
            <option value='<?=$row->commentid?>'>
              <?=$row->commentid?>
            </option>
            <?php endforeach;?>
          </select>
        </td>
        <td>
          <input type='text' name='update-heading' id='update-heading' required>
        </td>
        <td>
          <input type='text' name='update-content' id='update-content' required>
        </td>
        <td>
          <input type='text' name='update-date' id='update-date' required>
        </td>
        <td>
          <input type='text' name='update-c-userid' id='update-c-userid' required>
        </td>
        <td>
          <input type='text' name='update-c-productid' id='update-c-productid' required>
        </td>
        <td>
          <button type='submit' name='comment-update'>Update</button>
        </td>
      </tr>
    </table>

  </form>

  <!-- ADD -->
  <form action="comment" method="POST">
    <table>
      <tr>
        <th colspan='8'>Add comment</th>
      </tr>
      <tr>
        <th>Head</th>
        <th>Content</th>
        <th>UserID</th>
        <th>ProductID</th>
      </tr>
      <tr>
        <td>
          <input type='text' name='heading' required>
        </td>
        <td>
          <input type='text' name='content' required>
        </td>
        <td>
          <input type='text' name='comment-userid' required>
        </td>
        <td>
          <input type='text' name='comment-productid' required>
        </td>
        <td>
          <button type='submit' name='comment-insert'>Add</button>
        </td>
      </tr>
    </table>
  </form>
</div>