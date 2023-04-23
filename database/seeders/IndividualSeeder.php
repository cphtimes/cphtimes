<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndividualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\Individual::factory()->create([
        'first_name' => 'Sucharit',
        'last_name' => 'Bhakdi',
        'short_description' => 'Germany\'s most cited microbiologist',
        'description' => 'Germany\'s most cited microbiologist',
        'avatar_url' => 'https://www.chelseagreen.com/wp-content/uploads/Sucharit-Bhakdi-300x443.jpeg'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Dolores',
        'last_name' => 'Cahill',
        'short_description' => 'A professor at University College Dublin',
        'description' => 'A professor at University College Dublin',
        'avatar_url' => 'https://biotech-atelier.com/wp-content/uploads/2020/07/dcahill.jpg'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Dr. Mike',
        'last_name' => 'Yeadon',
        'short_description' => 'Former VP of Pfizer Pharmaceuticals',
        'description' => 'Former VP of Pfizer Pharmaceuticals',
        'avatar_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpcrclaims.co.uk%2Fimg%2Fpeople%2FDr-Mike-Yeadon.jpg&f=1&nofb=1'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Wolfgang',
        'last_name' => 'Wodarg',
        'short_description' => 'A German physician and politician',
        'description' => 'A German physician and politician',
        'avatar_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.spd-geschichtswerkstatt.de%2Fimages%2Fthumb%2F2%2F27%2FWolfgang_Wodarg.jpg%2F952px-Wolfgang_Wodarg.jpg&f=1&nofb=1'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Dr. Simone',
        'last_name' => 'Gold',
        'short_description' => 'American Frontline Doctors',
        'description' => 'American Frontline Doctors',
        'avatar_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.walikali.com%2Fwp-content%2Fuploads%2F2020%2F07%2FDr.-Simone-Gold-3.jpg&f=1&nofb=1'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Geert Vanden',
        'last_name' => 'Bossche',
        'short_description' => 'DVM and PhD in Virology',
        'description' => 'Geert Vanden Bossche received his DVM from the University of Ghent, Belgium, and his PhD degree in Virology from the University of Hohenheim, Germany. He held adjunct faculty appointments at universities in Belgium and Germany. After his career in Academia, Geert joined several vaccine companies (GSK Biologicals, Novartis Vaccines, Solvay Biologicals) to serve various roles in vaccine R&D as well as in late vaccine development. Geert then moved on to join the Bill & Melinda Gates Foundation’s Global Health Discovery team in Seattle (USA) as Senior Program Officer; he then worked with the Global Alliance for Vaccines and Immunization (GAVI) in Geneva as Senior Ebola Program Manager. At GAVI he tracked efforts to develop an Ebola vaccine. He also represented GAVI in fora with other partners, including WHO, to review progress on the fight against Ebola and to build plans for global pandemic preparedness. Back in 2015, Geert scrutinized and questioned the safety of the Ebola vaccine that was used in ring vaccination trials conducted by WHO in Guinea. His critical scientific analysis and report on the data published by WHO in the Lancet in 2015 was sent to all international health and regulatory authorities involved in the Ebola vaccination program. After working for GAVI, Geert joined the German Center for Infection Research in Cologne as Head of the Vaccine Development Office. He is at present primarily serving as a Biotech/ Vaccine consultant while also conducting his own research on Natural Killer cell-based vaccines.',
        'avatar_url' => 'https://static.wixstatic.com/media/28d8fe_84369ed1c006490d999a84f25c8491d8~mv2.jpg/v1/fill/w_576,h_515,al_c,lg_1,q_80/28d8fe_84369ed1c006490d999a84f25c8491d8~mv2.webp'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Robert F.',
        'last_name' => 'Kennedy Jr.',
        'short_description' => 'An attorney',
        'description' => 'An attorney',
        'avatar_url' => 'https://storage.googleapis.com/afs-prod/media/4a3c4bb9d7514199be28d05f457207b5/3000.jpeg'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Catherine Austin',
        'last_name' => 'Fitts',
        'short_description' => 'An American investment banker',
        'description' => 'An American investment banker',
        'avatar_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fdissident.one%2Fwp-content%2Fuploads%2F2021%2F01%2Fmaxresdefault.jpg&f=1&nofb=1'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Robert W',
        'last_name' => 'Malone',
        'short_description' => 'Inventor of mRNA vaccines and RNA as a drug',
        'description' => 'Inventor of mRNA vaccines and RNA as a drug',
        'avatar_url' => 'https://pbs.twimg.com/profile_images/1396449966009298946/w0dvY7mp_400x400.jpg'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Reiner',
        'last_name' => 'Fuellmich',
        'short_description' => 'Global Fraud Attorney',
        'description' => 'Global Fraud Attorney',
        'avatar_url' => 'https://planetlockdownfilm.com/wp-content/uploads/2021/01/Reiner-Fuellmich.jpg'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Astrid',
        'last_name' => 'Stuckelberger',
        'short_description' => 'WHO Whistleblower',
        'description' => 'WHO Whistleblower',
        'avatar_url' => 'https://planetlockdownfilm.com/wp-content/uploads/2021/06/Astrid-1024x576.jpg'
      ]);

      \App\Models\Individual::factory()->create([
        'first_name' => 'Karen',
        'last_name' => 'Kingston',
        'short_description' => 'Former Phizer employee',
        'description' => 'Former Phizer employee',
        'avatar_url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.-Kj_3uZPLyfS9FE8wWAeVAAAAA%26pid%3DApi&f=1'
      ]);
    }
}
