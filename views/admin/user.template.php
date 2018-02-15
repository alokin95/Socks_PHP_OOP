<!-- DELETE -->
<div class='admin-table'>
  <h1>User table</h1>
  <form action="user" method="POST">
    <table>
      <tr>
        <th colspan='7'>Delete users</th>
      </tr>
      <tr>
        <th>UserID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Password</th>
        <th>Email</th>
        <th>RoleID</th>
        <th>Delete</th>
      </tr>
      <?php foreach ($user as $row) :?>
      <tr>
        <td>
          <?=$row->userid?>
        </td>
        <td>
          <?=$row->first_name?>
        </td>
        <td>
          <?=$row->last_name?>
        </td>
        <td>
          <?=$row->password?>
        </td>
        <td>
          <?=$row->email?>
        </td>
        <td>
          <?=$row->roleid?>
        </td>
        <td>
          <input type='checkbox' name='for-delete-user[]' value='<?=$row->userid?>'>
        </td>
      </tr>
      <?php endforeach;?>
      <tr>
        <td colspan='8'>
          <button type='submit' name='user-delete'>Delete</button>
        </td>
      </tr>
    </table>
  </form>

  <!-- EDIT -->
  <form action="user" method="POST">

    <table>
      <tr>
        <th colspan='7'>Edit users</th>
      </tr>
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>E-mail</th>
        <th>Password</th>
        <th>RoleID</th>
      </tr>
      <tr>
        <td>
          <select id='update-user' name='userid'>
            <option value='0'>Pick UserID</option>
            <?php foreach ($user as $row):?>
            <option value='<?=$row->userid?>'>
              <?=$row->userid?>
            </option>
            <?php endforeach;?>
          </select>
        </td>
        <td>
          <input type='text' name='update-first' id='update-first' required>
        </td>
        <td>
          <input type='text' name='update-last' id='update-last' required>
        </td>
        <td>
          <input type='text' name='update-email' id='update-email' required>
        </td>
        <td>
          <input type='password' name='update-password' id='update-password' required>
        </td>
        <td>
          <input type='text' name='update-roleid' id='update-roleid' required>
        </td>
        <td>
          <button type='submit' name='user-update'>Update</button>
        </td>
      </tr>
    </table>

  </form>

  <!-- ADD -->
  <form action="user" method="POST">
    <table>
      <tr>
        <th colspan='6'>Add user</th>
      </tr>
      <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>E-mail</th>
        <th>Password</th>
        <th>RoleID</th>
      </tr>
      <tr>
        <td>
          <input type='text' name='firstname' required>
        </td>
        <td>
          <input type='text' name='lastname' required>
        </td>
        <td>
          <input type='text' name='email' required>
        </td>
        <td>
          <input type='password' name='password' required>
        </td>
        <td>
          <input type='text' name='roleid' required>
        </td>
        <td>
          <button type='submit' name='user-insert'>Add</button>
        </td>
      </tr>
    </table>
  </form>
</div>