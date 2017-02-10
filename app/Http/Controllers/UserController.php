<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

  public function __construct(Request $request) {
    // $this->isAdmin($request->user());
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  /**
   * @api {get} /users 1. Get List of Users
   * @apiName GetUsers
   * @apiGroup User
   *
   * @apiSuccess {Number} id Users unique ID.
   * @apiSuccess {String} name Fullname of the User.
   * @apiSuccess {String} email  Email of the User.
   * @apiSuccess {String} roleName  Role name of the User.
   * @apiSuccess {String} created_at  Datetime of user created.
   * @apiSuccess {String} updated_at  Datetime of user updated.
   * @apiSuccessExample {json} Success-Response:
   *     HTTP/1.1 200 OK
   *     [{
   *       "id": 1,
   *       "name": "karj",
   *       "email": "karj@hotmail.com",
   *       "roleName": "Admin",
   *       "created_at": "2017-02-09 16:59:25",
   *       "updated_at": "2017-02-09 16:59:25"
   *     }, {
   *       "id": 2,
   *       "name": "keng",
   *       "email": "keng@hotmail.com",
   *       "roleName": "User",
   *       "created_at": "2017-02-09 16:59:25",
   *       "updated_at": "2017-02-09 16:59:25"
   *     },
   *      ....
   *     ]
   */
  public function index(Request $request)
  {
    $users = User::all();
    return response()->json($users);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  /**
   * @api {post} /users Store User information
   * @apiName PostUser
   * @apiGroup User
   *
   * @apiSuccess {Number} id Users unique ID.
   * @apiSuccess {String} name Fullname of the User.
   * @apiSuccess {String} email  Email of the User.
   * @apiSuccess {String} roleName  Role name of the User.
   * @apiSuccess {String} created_at  Datetime of user created.
   * @apiSuccess {String} updated_at  Datetime of user updated.
   */
  public function store(Request $request)
  {
    $input = $request->all();
    $user = new User();

    if ($user->validate($input)) {
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->roleName = $request->roleName;

      $user->save();

      return response()->json($user);
    } else {
      $errors = $user->errors();
      return response()->json($errors);
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  /**
   * @api {get} /users/:id Request User information
   * @apiName GetUser
   * @apiGroup User
   *
   * @apiParam {Number} id Users unique ID.
   *
   * @apiSuccess {Number} id Users unique ID.
   * @apiSuccess {String} name Fullname of the User.
   * @apiSuccess {String} email  Email of the User.
   * @apiSuccess {String} roleName  Role name of the User.
   * @apiSuccess {String} created_at  Datetime of user created.
   * @apiSuccess {String} updated_at  Datetime of user updated.
   */
  public function show($id)
  {
    $user = User::find($id);
    return response()->json($user);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  /**
   * @api {put} /users/:id Update User information
   * @apiName PutUser
   * @apiGroup User
   *
   * @apiParam {Number} id Users unique ID.
   *
   * @apiSuccess {Number} id Users unique ID.
   * @apiSuccess {String} name Fullname of the User.
   * @apiSuccess {String} email  Email of the User.
   * @apiSuccess {String} roleName  Role name of the User.
   * @apiSuccess {String} created_at  Datetime of user created.
   * @apiSuccess {String} updated_at  Datetime of user updated.
   */
  public function update(Request $request, $id)
  {
    $input = $request->all();
    $user = User::find($id);

    if ($user->validate($input)) {
      $user->name = $request->name;
      $user->email = $request->email;
      if(empty($request->password)) {
        $user->password = bcrypt($request->password);
      }
      $user->roleName = $request->roleName;

      $user->save();

      return response()->json($user);
    } else {
      $errors = $user->errors();
      return response()->json($errors);
    }
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  /**
   * @api {delete} /users/:id Delete User information
   * @apiName DeleteUser
   * @apiGroup User
   *
   * @apiParam {Number} id Users unique ID.
   *
   * @apiSuccess {Number} id Users unique ID.
   * @apiSuccess {String} name Fullname of the User.
   * @apiSuccess {String} email  Email of the User.
   * @apiSuccess {String} roleName  Role name of the User.
   * @apiSuccess {String} created_at  Datetime of user created.
   * @apiSuccess {String} updated_at  Datetime of user updated.
   */
  public function destroy($id)
  {
    $user = User::destroy($id);
    return response()->json($user);
  }

  private function isAdmin($user) {
    if($user['roleName'] != 'admin') {
      abort(404);
    }
  }

}
