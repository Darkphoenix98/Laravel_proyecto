<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //Tabla rol
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //tabla post
            'ver-post',
            'crear-post',
            'editar-post',
            'borrar-post',

            //tabla category
            'ver-category',
            'crear-category',
            'editar-category',
            'borrar-category',

            //tabla usuarios admin

            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'borrar-usuario',


        ];
        foreach($permisos as $permiso){ 
        Permission::create(['name'=> $permiso]);
    }
    }
}
