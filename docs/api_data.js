define({ "api": [  {    "type": "delete",    "url": "/places/:id",    "title": "Delete Place Information",    "name": "DeletePlace",    "group": "Place",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Place unique ID.</p>"          }        ]      }    },    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Place unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Name of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "description",            "description": "<p>Description of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "x",            "description": "<p>Lat of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "y",            "description": "<p>Lng of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "contact",            "description": "<p>Contact of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "website",            "description": "<p>Website of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "type",            "description": "<p>Type of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of place created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of place updated.</p>"          }        ]      },      "examples": [        {          "title": "Success-Response:",          "content": "HTTP/1.1 200 OK\n{ ... }",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "app/Http/Controllers/PlaceController.php",    "groupTitle": "Place"  },  {    "type": "get",    "url": "/places/:id",    "title": "Get Place Information",    "name": "GetPlace",    "group": "Place",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Place unique ID.</p>"          }        ]      }    },    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Place unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Name of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "description",            "description": "<p>Description of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "x",            "description": "<p>Lat of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "y",            "description": "<p>Lng of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "contact",            "description": "<p>Contact of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "website",            "description": "<p>Website of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "type",            "description": "<p>Type of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of place created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of place updated.</p>"          }        ]      },      "examples": [        {          "title": "Success-Response:",          "content": "HTTP/1.1 200 OK\n{ ... }",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "app/Http/Controllers/PlaceController.php",    "groupTitle": "Place"  },  {    "type": "get",    "url": "/places",    "title": "1. Get List of Places",    "name": "GetPlaces",    "group": "Place",    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Place unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Name of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "description",            "description": "<p>Description of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "x",            "description": "<p>Lat of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "y",            "description": "<p>Lng of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "contact",            "description": "<p>Contact of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "website",            "description": "<p>Website of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "type",            "description": "<p>Type of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of place created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of place updated.</p>"          }        ]      },      "examples": [        {          "title": "Success-Response:",          "content": "HTTP/1.1 200 OK\n[\n   { ... },\n   ....\n]",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "app/Http/Controllers/PlaceController.php",    "groupTitle": "Place"  },  {    "type": "post",    "url": "/places",    "title": "Store Place Information",    "name": "PostPlace",    "group": "Place",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Name of the Place.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "description",            "description": "<p>Description of the Place.</p>"          },          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "x",            "description": "<p>Lat of the Place.</p>"          },          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "y",            "description": "<p>Lng of the Place.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "contact",            "description": "<p>Contact of the Place.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "website",            "description": "<p>Website of the Place.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "type",            "description": "<p>Type of the Place.</p>"          }        ]      }    },    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Place unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Name of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "description",            "description": "<p>Description of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "x",            "description": "<p>Lat of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "y",            "description": "<p>Lng of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "contact",            "description": "<p>Contact of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "website",            "description": "<p>Website of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "type",            "description": "<p>Type of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of place created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of place updated.</p>"          }        ]      },      "examples": [        {          "title": "Success-Response:",          "content": "HTTP/1.1 200 OK\n{ ... }",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "app/Http/Controllers/PlaceController.php",    "groupTitle": "Place"  },  {    "type": "put",    "url": "/places/:id",    "title": "Update Place Information",    "name": "PutPlace",    "group": "Place",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Place unique ID.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Name of the Place.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "description",            "description": "<p>Description of the Place.</p>"          },          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "x",            "description": "<p>Lat of the Place.</p>"          },          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "y",            "description": "<p>Lng of the Place.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "contact",            "description": "<p>Contact of the Place.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "website",            "description": "<p>Website of the Place.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "type",            "description": "<p>Type of the Place.</p>"          }        ]      }    },    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Place unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Name of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "description",            "description": "<p>Description of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "x",            "description": "<p>Lat of the Place.</p>"          },          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "y",            "description": "<p>Lng of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "contact",            "description": "<p>Contact of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "website",            "description": "<p>Website of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "type",            "description": "<p>Type of the Place.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of place created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of place updated.</p>"          }        ]      },      "examples": [        {          "title": "Success-Response:",          "content": "HTTP/1.1 200 OK\n{ ... }",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "app/Http/Controllers/PlaceController.php",    "groupTitle": "Place"  },  {    "type": "delete",    "url": "/users/:id",    "title": "Delete User information",    "name": "DeleteUser",    "group": "User",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Users unique ID.</p>"          }        ]      }    },    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Users unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Fullname of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "email",            "description": "<p>Email of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "roleName",            "description": "<p>Role name of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of user created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of user updated.</p>"          }        ]      }    },    "version": "0.0.0",    "filename": "app/Http/Controllers/UserController.php",    "groupTitle": "User"  },  {    "type": "get",    "url": "/users/:id",    "title": "Request User information",    "name": "GetUser",    "group": "User",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Users unique ID.</p>"          }        ]      }    },    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Users unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Fullname of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "email",            "description": "<p>Email of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "roleName",            "description": "<p>Role name of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of user created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of user updated.</p>"          }        ]      }    },    "version": "0.0.0",    "filename": "app/Http/Controllers/UserController.php",    "groupTitle": "User"  },  {    "type": "get",    "url": "/users",    "title": "1. Get List of Users",    "name": "GetUsers",    "group": "User",    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Users unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Fullname of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "email",            "description": "<p>Email of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "roleName",            "description": "<p>Role name of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of user created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of user updated.</p>"          }        ]      },      "examples": [        {          "title": "Success-Response:",          "content": "HTTP/1.1 200 OK\n[{\n  \"id\": 1,\n  \"name\": \"karj\",\n  \"email\": \"karj@hotmail.com\",\n  \"roleName\": \"Admin\",\n  \"created_at\": \"2017-02-09 16:59:25\",\n  \"updated_at\": \"2017-02-09 16:59:25\"\n}, {\n  \"id\": 2,\n  \"name\": \"keng\",\n  \"email\": \"keng@hotmail.com\",\n  \"roleName\": \"User\",\n  \"created_at\": \"2017-02-09 16:59:25\",\n  \"updated_at\": \"2017-02-09 16:59:25\"\n},\n ....\n]",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "app/Http/Controllers/UserController.php",    "groupTitle": "User"  },  {    "type": "post",    "url": "/users",    "title": "Store User information",    "name": "PostUser",    "group": "User",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Fullname of the User.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "email",            "description": "<p>Email of the User.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "roleName",            "description": "<p>Role name of the User.</p>"          }        ]      }    },    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Users unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Fullname of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "email",            "description": "<p>Email of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "roleName",            "description": "<p>Role name of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of user created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of user updated.</p>"          }        ]      }    },    "version": "0.0.0",    "filename": "app/Http/Controllers/UserController.php",    "groupTitle": "User"  },  {    "type": "put",    "url": "/users/:id",    "title": "Update User information",    "name": "PutUser",    "group": "User",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Users unique ID.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Fullname of the User.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "email",            "description": "<p>Email of the User.</p>"          },          {            "group": "Parameter",            "type": "String",            "optional": false,            "field": "roleName",            "description": "<p>Role name of the User.</p>"          }        ]      }    },    "success": {      "fields": {        "Success 200": [          {            "group": "Success 200",            "type": "Number",            "optional": false,            "field": "id",            "description": "<p>Users unique ID.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "name",            "description": "<p>Fullname of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "email",            "description": "<p>Email of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "roleName",            "description": "<p>Role name of the User.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "created_at",            "description": "<p>Datetime of user created.</p>"          },          {            "group": "Success 200",            "type": "String",            "optional": false,            "field": "updated_at",            "description": "<p>Datetime of user updated.</p>"          }        ]      }    },    "version": "0.0.0",    "filename": "app/Http/Controllers/UserController.php",    "groupTitle": "User"  }] });
