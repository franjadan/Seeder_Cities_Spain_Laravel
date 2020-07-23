<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        DB::insert("INSERT INTO provincias (id, nombre) VALUES
        (1, 'Araba/Álava'),
        (2, 'Albacete'),
        (3, 'Alicante/Alacant'),
        (4, 'Almerí­a'),
        (5, 'Ávila'),
        (6, 'Badajoz'),
        (7, 'Balears, Illes'),
        (8, 'Barcelona'),
        (9, 'Burgos'),
        (10, 'Cáceres'),
        (11, 'Cádiz'),
        (12, 'Castellón/Castellà'),
        (13, 'Ciudad Real'),
        (14, 'Córdoba'),
        (15, 'Coruña, A'),
        (16, 'Cuenca'),
        (17, 'Girona'),
        (18, 'Granada'),
        (19, 'Guadalajara'),
        (20, 'Gipuzkoa'),
        (21, 'Huelva'),
        (22, 'Huesca'),
        (23, 'Jaén'),
        (24, 'León'),
        (25, 'Lleida'),
        (26, 'Rioja, La'),
        (27, 'Lugo'),
        (28, 'Madrid'),
        (29, 'Málaga'),
        (30, 'Murcia'),
        (31, 'Navarra'),
        (32, 'Ourense'),
        (33, 'Asturias'),
        (34, 'Palencia'),
        (35, 'Palmas, Las'),
        (36, 'Pontevedra'),
        (37, 'Salamanca'),
        (38, 'Santa Cruz de Tenerife'),
        (39, 'Cantabria'),
        (40, 'Segovia'),
        (41, 'Sevilla'),
        (42, 'Soria'),
        (43, 'Tarragona'),
        (44, 'Teruel'),
        (45, 'Toledo'),
        (46, 'Valencia/València'),
        (47, 'Valladolid'),
        (48, 'Bizkaia'),
        (49, 'Zamora'),
        (50, 'Zaragoza'),
        (51, 'Ceuta'),
        (52, 'Melilla')");
    }
}
        