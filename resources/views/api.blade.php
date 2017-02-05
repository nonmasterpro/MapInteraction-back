<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>API</title>
  <style media="screen">
  li {
    padding: 10px 0;
  }
  li > .head {
    font-weight: bold;
  }
  </style>
</head>
<body>
  <ul>
    <h3>USERS /api/users</h3>
    <li>
      <div class="head">
        GET /
      </div>
      list of users
    </li>
    <li>
      <div class="head">
        GET /:id
      </div>
      get user by id
    </li>
    <li>
      <div class="head">
        POST /
      </div>
      <div class="body">
        @body name, email, password, (roleId)
      </div>
      create user
    </li>
    <li>
      <div class="head">
        PUT /:id
      </div>
      <div class="body">
        @body name, email, password, (roleId)
      </div>
      edit user by id
    </li>
    <li>
      <div class="head">
        DELETE /:id
      </div>
      remove user by id
    </li>
  </ul>
</body>
</html>
