<?php

use Illuminate\Database\Seeder;

class RecommendedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recom = new \App\Model\Recommended();
        $recom->name = 'Nepalese Mission in Your Country';
        $recom->save();

        $recom = new \App\Model\Recommended();
        $recom->name = 'Your Country Mission in Nepal';
        $recom->save();

        $recom = new \App\Model\Recommended();
        $recom->name = 'Others (Please Specify)';
        $recom->save();

        $recom = new \App\Model\Recommended();
        $recom->name = 'None';
        $recom->save();

    }
}
