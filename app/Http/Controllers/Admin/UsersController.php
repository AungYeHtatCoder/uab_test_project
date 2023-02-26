<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
       // users data with order by id desc
        $users = User::orderBy('id', 'desc')->with('roles')->get();
        return response()->view('admin.users.index', compact('users'));
    
    }

    // get all users data with where status is pending
    public function pending(): Response
    {
        $users = User::where('status', 'pending')->orderBy('id', 'desc')->with('roles')->get();
        return response()->view('admin.users.user_pending_index', compact('users'));
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $roles = Role::all()->pluck('title', 'id');
        return response()->view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // assign role to user
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        $user_detail = User::where('id', $id)->with('roles')->first();
        //$user = User::find($id);
        // $roles = Role::all();
        // $permissions = Permission::all();
        return response()->view('admin.users.show', compact('user_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //$user_edit = User::where('id', $id)->with('roles')->first();
        $user_edit = User::find($id);
        $roles = Role::all()->pluck('title', 'id');
        return response()->view('admin.users.edit', compact('user_edit', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $user = User::find($id);
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('admin.users.index', $user->id)->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }
}