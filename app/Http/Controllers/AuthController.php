<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function register(Request $request){
        $validator = Validator::make($request->all(),  [
            'name' => 'required|string|max:50',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'required|min:8|max:16',
            'confirm_password' => 'required_with:password|min:8|same:password',

        ]);

        if ($validator->fails()) return $this->FailResponse(404,$validator, true,404);


        $data = [];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = app('hash')->make($request->password);
        $data['status'] = 1;
        $user = User::create($data);

     }

     public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        if ($validator->fails()){
            return $this->FailResponse(404, $validator, true, 404);
        }

        try {
            $currentPass = User::where('email',$request->email)->first()->password;
            if($currentPass && !(Hash::check($request->password, $currentPass))){
                return $this->FailResponse(404, ['Invalid Password'], false, 404);
            }
            $credentials = $request->only(['mobile', 'password','status']);
            if (!$token = Auth::attempt($credentials)) {
                return $this->FailResponse(401, ['Unauthorized']);
            }
            $data = [
                'token' => $token,
                'token_type' => 'bearer',
                'expires_in' => Auth::factory()->getTTL() * ($_SERVER['HTTP_HOST'] == 'localhost:8000' ? 6000 : 60)
            ];
            $user = User::where('id', Auth::user()->id)->first();
            $user->fcm_token= $request->fcm_token;
            $user->device_os = $request->device_os;
            $user->save();
            if ($user->status == 0) {
                auth()->logout();
                return $this->FailResponse(401, ['Inactive user!']);
            }
            $data['user'] = new UserResource($user);
            // $data['user']['roles'] = Auth::user()->getRoleNames() ?? [];
            return $this->SuccessResponse(200, $data, ["Successfully logged in"], 200, 'success');
        } catch (\Exception $exception) {
            return $this->FailResponse(500, [$exception->getMessage()], false, 500);
        }
    }
   
}
