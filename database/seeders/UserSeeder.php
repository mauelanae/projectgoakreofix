<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@goakreo.id',
            'password' => bcrypt('admin'),
            'level' => 'admin', 
        ]);

        //Puskesmas
        DB::table('users')->insert([
            'name' => 'Puskesmas Genuk',
            'email' => 'genuk@goakreo.id',
            'password' => bcrypt('puskesmasgenuk'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Mijen',
            'email' => 'mijen@goakreo.id',
            'password' => bcrypt('puskesmasmijen'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Karang Malang',
            'email' => 'karangmalang@goakreo.id',
            'password' => bcrypt('puskesmaskarangmalang'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Gunung Pati',
            'email' => 'gunungpati@goakreo.id',
            'password' => bcrypt('puskesmasgunungpati'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Sekaran',
            'email' => 'sekaran@goakreo.id',
            'password' => bcrypt('puskesmassekaran'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Srondol',
            'email' => 'srondol@goakreo.id',
            'password' => bcrypt('puskesmassrondol'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Ngesrep',
            'email' => 'ngesrep@goakreo.id',
            'password' => bcrypt('puskesmasngesrep'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Padang Sari',
            'email' => 'padangsari@goakreo.id',
            'password' => bcrypt('puskesmaspadangsari'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Pundak Payung',
            'email' => 'pundakpayung@goakreo.id',
            'password' => bcrypt('puskesmaspundakpayung'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Pegadan',
            'email' => 'pegadan@goakreo.id',
            'password' => bcrypt('puskesmaspegadan'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Pandanaran',
            'email' => 'pandanaran@goakreo.id',
            'password' => bcrypt('puskesmaspandanaran'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Lamper Tengah',
            'email' => 'lampertengah@goakreo.id',
            'password' => bcrypt('puskesmaslampertengah'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Candilama',
            'email' => 'candilama@goakreo.id',
            'password' => bcrypt('puskesmascandilama'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Kagok',
            'email' => 'kagok@goakreo.id',
            'password' => bcrypt('puskesmaskagok'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Kedung mundu',
            'email' => 'kedungmundu@goakreo.id',
            'password' => bcrypt('puskesmaskedungmundu'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Rowosari',
            'email' => 'rowosari@goakreo.id',
            'password' => bcrypt('puskesmasrowosari'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Telogosarisari kulon',
            'email' => 'telogosarikulon@goakreo.id',
            'password' => bcrypt('puskesmastelogosarikulon'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Telogosari Wetan',
            'email' => 'telogosariwetan@goakreo.id',
            'password' => bcrypt('puskesmastelogosariwetan'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Bangetayu',
            'email' => 'bangetayu@goakreo.id',
            'password' => bcrypt('puskesmasbangtayu'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Gayamsari',
            'email' => 'gayamsari@goakreo.id',
            'password' => bcrypt('puskesmasgayamsari'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Halmahera',
            'email' => 'halmahera@goakreo.id',
            'password' => bcrypt('puskesmashalmahera'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Karang Doro',
            'email' => 'karangdoro@goakreo.id',
            'password' => bcrypt('puskesmaskarangdoro'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Bugangan',
            'email' => 'bugangan@goakreo.id',
            'password' => bcrypt('puskesmasbugangan'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Bandaharjo',
            'email' => 'bandaharjo@goakreo.id',
            'password' => bcrypt('puskesmaskagok'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Bulu Lor',
            'email' => 'bululor@goakreo.id',
            'password' => bcrypt('puskesmasbululor'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Poncol',
            'email' => 'poncol@goakreo.id',
            'password' => bcrypt('puskesmasponcol'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Miroto',
            'email' => 'miroto@goakreo.id',
            'password' => bcrypt('puskesmasmiroto'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Karang Ayu',
            'email' => 'karangayu@goakreo.id',
            'password' => bcrypt('puskesmaskarangayu'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Lebdosari',
            'email' => 'lebdosari@goakreo.id',
            'password' => bcrypt('puskesmaslebdosari'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Manyaran',
            'email' => 'manyaran@goakreo.id',
            'password' => bcrypt('puskesmasmanyaran'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Krobokan',
            'email' => 'krobokan@goakreo.id',
            'password' => bcrypt('puskesmaskrobokan'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Ngemplak Simongan',
            'email' => 'ngemplaksimongan@goakreo.id',
            'password' => bcrypt('puskesmasngemplaksimongan'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Mangkang',
            'email' => 'mangkang@goakreo.id',
            'password' => bcrypt('puskesmasbululor'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Karang Anyar',
            'email' => 'karanganyar@goakreo.id',
            'password' => bcrypt('puskesmaskaranganyar'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Ngalian',
            'email' => 'ngalian@goakreo.id',
            'password' => bcrypt('puskesmasngalian'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Tambak Aji',
            'email' => 'tambakaji@goakreo.id',
            'password' => bcrypt('puskesmastambakaji'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Purwoyoso',
            'email' => 'purwoyoso@goakreo.id',
            'password' => bcrypt('puskesmaspurwoyoso'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'Puskesmas Plamongansari',
            'email' => 'plamongansari@goakreo.id',
            'password' => bcrypt('puskesmasplamongansari'),
            'level' => 'user',
        ]);

        //Rumahsakit
        DB::table('users')->insert([
            'name' => 'RSUP Dr. KARIADI',
            'email' => 'rsupdrkariadi@goakreo.id',
            'password' => bcrypt('rsupdrkariadi'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSUD TUGUREJO',
            'email' => 'rsudtugurejo@goakreo.id',
            'password' => bcrypt('rsudtugurejo'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSUD K.R.M.T WONGSONEGORO',
            'email' => 'rsudkrmtwongsonegoro@goakreo.id',
            'password' => bcrypt('rsudkrmtwongsonegoro'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS TELOGOREJO SEMARANG',
            'email' => 'rstelogorejosemarang@goakreo.id',
            'password' => bcrypt('rstelogorejosemarang'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS. ST. ELISABETH SEMARANG',
            'email' => 'rsstelisabethsemarang@goakreo.id',
            'password' => bcrypt('rsstelisabethsemarang'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSI SULTAN AGUNG SEMARANG',
            'email' => 'rsisultanagungsemarang@goakreo.id',
            'password' => bcrypt('rsisultanagungsemarangs'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS COLUMBIA ASIA SEMARANG',
            'email' => 'rscolumbiaasiasemarang@goakreo.id',
            'password' => bcrypt('rscolumbiaasiasemarang'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS ROEMANI MUHAMMADIYAH',
            'email' => 'rsroemanimuhammadiyah@goakreo.id',
            'password' => bcrypt('rsroemanimuhammadiyah'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS PANTI WILASA CITARUM',
            'email' => 'rspantiwilasacitarum@goakreo.id',
            'password' => bcrypt('rspantiwilasacitarum'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS PANTI WILASA DR. CIPTO',
            'email' => 'rspantiwilasadrcipto@goakreo.id',
            'password' => bcrypt('rspantiwilasadrcipto'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS BHAKTI  WIRA TAMTAMA',
            'email' => 'rsbhaktiwiratamtama@goakreo.id',
            'password' => bcrypt('rsbhaktiwiratamtama'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS BHAYANGKARA SEMARANG',
            'email' => 'rsbhayangkarasemarang@goakreo.id',
            'password' => bcrypt('rsbhayangkarasemarang'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS HERMINA PANDANARAN',
            'email' => 'rsherminapandanaran@goakreo.id',
            'password' => bcrypt('rsherminapandanaran'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS HERMINA BANYUMANIK',
            'email' => 'rsherminabanyumanik@goakreo.id',
            'password' => bcrypt('rsherminabanyumanik'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS PERMATA MEDIKA',
            'email' => 'rspermatamedika@goakreo.id',
            'password' => bcrypt('rspermatamedika'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS NASIONAL DIPONEGORO',
            'email' => 'rsnasionaldiponegoro@goakreo.id',
            'password' => bcrypt('rsnasionaldiponegoro'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSU  WILLIAM BOOTH',
            'email' => 'rsuwilliambooth@goakreo.id',
            'password' => bcrypt('rsuwilliambooth'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS BANYUMANIK',
            'email' => 'rsbanyumanik@goakreo.id',
            'password' => bcrypt('rsbanyumanik'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSU  BHAYANGKARA AKPOL',
            'email' => 'rsubhayangkaraakpol@goakreo.id',
            'password' => bcrypt('rsubhayangkaraakpol'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS SILOAM SEMARANG',
            'email' => 'rssiloam@goakreo.id',
            'password' => bcrypt('rssiloam'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS JIWA DAERAH Dr. AMINO GONDOHUTOMO',
            'email' => 'rsjddraminogondohutomo@goakreo.id',
            'password' => bcrypt('rsjddraminogondohutomo'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSIA PLAMONGAN INDAH',
            'email' => 'rsiaplamonganindah@goakreo.id',
            'password' => bcrypt('rsiaplamonganindah'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSIA GUNUNG SAWO',
            'email' => 'rsiagunungsawo@goakreo.id',
            'password' => bcrypt('rsiagunungsawo'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSIA KUSUMA PRADJA',
            'email' => 'rsiakusumapradja@goakreo.id',
            'password' => bcrypt('rsiakusumapradja'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSIA BUNDA',
            'email' => 'rsiabunda@goakreo.id',
            'password' => bcrypt('rsiabunda'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSIA ANANDA PASAR ACE',
            'email' => 'rsiaanandapasarace@goakreo.id',
            'password' => bcrypt('rsiaanandapasarace'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSIA ANUGERAH',
            'email' => 'rsiaanugerah@goakreo.id',
            'password' => bcrypt('rsiaanugerah'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RSI GIGI DAN MULUT SULTAN AGUNG',
            'email' => 'rsigigidanmulutsultanagung@goakreo.id',
            'password' => bcrypt('rsigigidanmulutsultanagung'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS GIGI DAN MULUT UNIMUS',
            'email' => 'rsgigidanmulutunimus@goakreo.id',
            'password' => bcrypt('rsgigidanmulutunimus'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS MATA JEC CANDI SEMARANG',
            'email' => 'rsmatajeccandisemarang@goakreo.id',
            'password' => bcrypt('rsmatajeccandisemarang'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS BANYUMANIK 2',
            'email' => 'rsbanyumanik2@goakreo.id',
            'password' => bcrypt('rsbanyumanik2'),
            'level' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'RS KELUARGA SEHAT III SEMARANG',
            'email' => 'rskeluargasehat3semarang@goakreo.id',
            'password' => bcrypt('rskeluargasehat3semarang'),
            'level' => 'user',
        ]);
    }
}
