<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $roles = Role::all();
        return response()->view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $permissions = Permission::all()->pluck('title', 'id');
        return response()->view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|unique:roles,title'
        ]);
         $role = Role::create($request->all());
        $role->permissions()->sync($request->input('permissions', []));
        // redirect
        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        $role_detail = Role::find($id);
        $permissions = Permission::all();
        return response()->view('admin.roles.show', compact('role_detail', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        $role = Role::find($id);
        $permissions = Permission::all()->pluck('title', 'id');
        return response()->view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required|unique:roles,title,' . $id
        ]);
        // update
        $role = Role::find($id);
        $role->update($request->all());
        $role->permissions()->sync($request->input('permissions', []));
        // redirect
        return redirect()->route('admin.roles.index')->with('success', 'Role updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse 
    {
        // delete
        $role = Role::find($id);
        $role->delete();
        // redirect
        return redirect()->route('admin.roles.index')->with('success', 'Role deleted successfully.');
    }
}