<?php

use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recom = new \App\Model\Occupation();
        $recom->name = 'CEO of the leading Hospital';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Head of Government Hospital';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'President/Secretary of Medical Association';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Senior Officers from Health Ministry';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Senior Officers from Health Insurance Company';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Medical Travel Facilitator';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Medical Directors';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Medical Officers';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Paramedical Officers';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Medical Trade Journalist';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Medical Devices & Technology Dealer/Importer';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Healthcare Enterprenures & Investors';
        $recom->save();

        $recom = new \App\Model\Occupation();
        $recom->name = 'Others';
        $recom->save();

    }
}
