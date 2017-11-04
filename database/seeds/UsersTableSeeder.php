<?php

use Illuminate\Database\Seeder;

use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\User::truncate();

        $faker = Faker\Factory::create();
        $this->command->info("<info>start seeding 1000 fake users ...</info>");

        //red//$this->command->info("<error>it take a while,in this time we appreciate look at our site htt://www.megaweb.ir</error>");
        //green//$this->command->info("<info>it take a while,in this time we appreciate look at our site htt://www.megaweb.ir</info>");
        //yellow//$this->command->info("<comment>it take a while,in this time we appreciate look at our site htt://www.megaweb.ir</comment>");
        //blue//$this->command->info("<question>it take a while,in this time we appreciate look at our site htt://www.megaweb.ir</question>");
        $this->command->info("<comment>We appreciate all feedback we receive  </comment>");
        $this->command->info("<comment>And We will continuously improve our code based on your feedback </comment>");
        $this->command->info("<question>Please visit our website at   http://www.megaweb.ir   And let us know if you have any comments.</question>");



        $this->command->getOutput()->progressStart(1000);


            for($i = 0; $i < 1000; $i++) {

                //with while skip create while there is some same email before
                if(App\User::where('email','=',$faker->unique()->email)->count() == 0) {
                    App\User::create([
                        'name' => $faker->name,
                        'email' => $faker->unique()->email,
                        'password' => bcrypt('secret'),
                    ]);
                } ;


               $this->command->getOutput()->progressAdvance();

            }


        $this->command->getOutput()->progressFinish();


    }
}