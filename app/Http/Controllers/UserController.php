<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function register(Request $request)
    {
        $findData = User::query()->where('id', $request->id)->get()->first();

        if ($findData) {
            $findData->update(["name" => $request->name]);
        } else {
            User::query()->create($request->all());
        }

        return response()->json(["message" => "success"],200);
    }

    function getUser()
    {
        $user = User::query()->get();

        return response()->json($user);

    }
}
?>