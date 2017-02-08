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
    <h3>AUTH /api/auth</h3>
    <li>
      <div class="head">
        POST /
      </div>
      login
    </li>
    <li>
      <div class="head">
        GET /me
      </div>
      get me
    </li>
  </ul>
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
        @body name, email, password, roleName
      </div>
      create user
    </li>
    <li>
      <div class="head">
        PUT /:id
      </div>
      <div class="body">
        @body name, email, password, roleName
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
  <ul>
    <h3>PLACES /api/places</h3>
    <li>
      <div class="head">
        GET /
      </div>
      list of places
    </li>
    <li>
      <div class="head">
        GET /:id
      </div>
      get place by id
    </li>
    <li>
      <div class="head">
        POST /
      </div>
      <div class="body">
        @body name, description, x, y, contact, website, type
      </div>
      create place
    </li>
    <li>
      <div class="head">
        PUT /:id
      </div>
      <div class="body">
        @body name, description, x, y, contact, website, type
      </div>
      edit place by id
    </li>
    <li>
      <div class="head">
        DELETE /:id
      </div>
      remove place by id
    </li>
  </ul>
</body>
</html>
