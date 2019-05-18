<?php
use Illuminate\Database\Seeder;
use Curso\Role;
class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'descripcion' => 'Administrador'
        ]);
        Role::create([
            'descripcion' => 'Usuario'
        ]);
        // DB::table('roles')->insert([
        //     'descripcion' => 'Administrador'
        // ]);
        // DB::table('roles')->insert([
        //     'descripcion' => 'Usuario'
        // ]);
    }
}
