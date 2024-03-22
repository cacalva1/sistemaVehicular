<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //crear roles
        $tecnico = Role::create(['Tecnico4' => 'writer']);


        //crear permisos
        Permission::create(['name' => 'pertrecho.index',
    'descripcion'=>'Ver lista de pertrechos']);
    }
}
