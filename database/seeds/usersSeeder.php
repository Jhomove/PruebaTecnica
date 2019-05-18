<?php

use Curso\User;
use Curso\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $roles = DB::select('SELECT id FROM role WHERE descripcion = ?',['Administrador']);

        // $roles = DB::table('role')
        //                 ->select('id')
        //                 ->where(['descripcion' => 'Administrador'])
        //                 ->first();

        // $roleId = DB::table('role')
        //                 ->select('id')
        //                 ->where('descripcion', 'Administrador')
        //                 ->value('id');
        // $roleId = DB::table('roles')
        //                 ->select('id')
        //                 ->whereDescripcion('Administrador')
        //                 ->value('id');

        $roleId = Role::where('descripcion','Administrador')->value('id');

        User::create([
            'name' => 'Jhonatan Moreno Velásquez',
            'documento' => 'Jhonatanmoreno1994@hotmail.com',
            'email' => '1121909223',
            'password' => bcrypt('administrador'),
            'role_id' => $roleId
        ]);
    }
}
