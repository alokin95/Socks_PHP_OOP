<div style="text-align:center">
    <span onclick="showAdminTable(1)" class='show-table'>User table</span>
    <span onclick="showAdminTable(3)" class='show-table'>Product table</span>
    <span onclick="showAdminTable(4)" class='show-table'>Image table</span>
    <span onclick="showAdminTable(5)" class='show-table'>Comment table</span>
    <span onclick="showAdminTable(2)" class='show-table'>Cart table</span>
  </div>

<?php

   
    require_once view('admin/user');
    require_once view('admin/cart');
    require_once view('admin/product');
    require_once view('admin/image');
    require_once view('admin/comment');

  