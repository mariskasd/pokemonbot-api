<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function register(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);

        $findData = User::query()->where('id', $request->id)->get()->first();

        if ($findData) {
            return $findData->update(["name" => $request->name]);
        } else {
            return User::create($request->all());
        }
    }

    function getUser()
    {
        $user = User::query()->get();

        return response()->json($user);

    }
}
?>