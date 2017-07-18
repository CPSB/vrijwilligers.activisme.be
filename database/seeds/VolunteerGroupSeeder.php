<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolunteerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // ['image_path' => '', 'name' => '', 'short description' => ''],
            ['image_path' => 'img/groups/developer.jpg', 'name' => 'Ploeg informatica', 'short_description' => 'Ploeg informatie staat mee met de kern verantwoordelijke in voor het onderhoud en uitbreiding van onze informatica systemen en webplatformen tevens ook voor de communicatie intern.'],
            ['image_path' => 'img/groups/grafisch.png', 'name' => 'Ploeg grafische', 'short_description' => 'Ploeg grafische staat in voor al het drukwerk afkomstig van Activisme_BE. Als ook bepaal je mee het online landschap en uitzicht van de organistaie en haar bijhorende acties.'],
            ['image_path' => 'img/groups/volunteer.jpg', 'name' => 'Losse vrijwilligers', 'short_description' => 'Losse vrijwilligers zijn mensen die wel engagement hebben. Maar rustig willen beginnen of niet altijd kunnen helpen waar nodig. Maar dat is niet nodig. Je bent niet minder belangrijker dan de rest.'],
            ['image_path' => 'img/groups/welfare.jpg', 'name' => 'Ploeg Armoedebestrijding', 'short_description' => 'Deze ploeg staat in voor de bedeel caravan. Een project waarmee Activisme_BE door vlaanderen wilt rijden als mobiele voedsel en spullen bank. Je helpt hiermee de armen en kansarmen'],
            ['image_path' => 'img/groups/writer.jpg', 'name' => 'Ploeg Autheurs', 'short_description' => 'Geen enkele actie en of platform staat recht zonder tekst. Daarom hebben we mensen nodig in deze ploeg. Je verzorgd mee de teksten die we gebruiken in platformen en acties die we voeren.'],
            ['image_path' => 'img/groups/activist.png', 'name' => 'Ploeg activisten', 'short_description' => 'We komen ook op straat waar we ludieke acties plannen. Maar voor de uitvoering hebben we activisten nodig. Deze ploeg bepaald het overkomen en beeld van de organisatie op straat.'],
        ];

        $table = DB::table('volunteer_groups');
        $table->delete();
        $table->insert($data);
    }
}
