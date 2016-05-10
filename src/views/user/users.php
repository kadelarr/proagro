<div class="content-users">
  <nav>
    <a href="<?php echo $routeServer . $urls['routing'] . "?url=createUser"; ?>">Create User</a>
  </nav>
  <div class="list-users">
    <table>
      <thead>
        <tr>
          <th>User</th>
          <th>Name</th>
          <th>Type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
        include_once   $urls['userController'];
        $users = new UserController();
        echo $users->getAllUser($routeServer . $urls['routing']);
      ?>
    </tbody>
  </table>
  </div>
</div>
