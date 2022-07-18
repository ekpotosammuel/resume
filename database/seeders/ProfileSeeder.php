<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = [
            [
                'avatar'=>          null,
                'firstName'=>       'Samuel',
                'lastName'=>        'Ekpoto',
                'dob'=>             '1st October',
                'email'=>           'ekpotosammuel1@gmail.com',
                'country'=>         'Nigeria',
                'experience'=>      '2 Years',
                'schoolName'=>      'Cross River University Of Technology',
                'degree'=>          'B.Eng',
                'otherCert'=>       'Pirple',
            ]
        ];
            foreach ($profile as $key => $value) {
            $already_exist = Profile::where('firstName', $value['firstName'])->first(); 
            if ($already_exist == null) {
                $profile                            = new Profile();
                $profile->avatar                    = $value['avatar'];
                $profile->firstName                 = $value['firstName'];
                $profile->lastName                  = $value['lastName'];
                $profile->dob                       = $value['dob'];
                $profile->country                   = $value['country'];
                $profile->experience                = $value['experience'];
                $profile->email                     = $value['email'];
                $profile->schoolName                = $value['schoolName'];
                $profile->degree                    = $value['degree'];
                $profile->otherCert                 = $value['otherCert'];
                $profile->save();
            }
        }
    }
}
