<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Category
            'View Category',
            'Create Category',
            'Update Category',
            'Delete Category',
            // Comment
            'View Comment',
            'Create Comment',
            'Update Comment',
            'Delete Comment',
            // Permission
            'View Permission',
            'Create Permission',
            'Update Permission',
            'Delete Permission',
            // Post
            'View Post',
            'Create Post',
            'Update Post',
            'Delete Post',
            // Role
            'View Role',
            'Create Role',
            'Update Role',
            'Delete Role',
            // User
            'View User',
            'Create User',
            'Update User',
            'Delete User',
        ];
        foreach($permissions as $permission)
        {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }
    }
}
