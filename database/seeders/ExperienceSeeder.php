<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exp = [
            [
                'title'=> 'Full Stack dev (Junior Dev)',
                'companyName'=> 'Connect Marketting',
                'year'=> '2022',
                'projectName'=> 'GetSella',
                'url'=> 'www.getsella.com',
            ],
            [
                'title'=> 'Backend Dev',
                'companyName'=> 'Zuri Intership',
                'year'=> '2021',
                'projectName'=> 'Votrr',
                'url'=> 'votrrng.herokuapp.com',
            ],
        ];

        foreach ($exp as $key => $value) {
            $already_exist = Experience::where('projectName', $value['projectName'])->first(); 
            if ($already_exist == null) {
                $exp                          = new Experience();
                $exp->title                   = $value['title'];
                $exp->projectName             = $value['projectName'];
                $exp->companyName             = $value['companyName'];
                $exp->year                    = $value['year'];
                $exp->url                     = $value['url'];
                $exp->save();
            }
        }
    }
}
