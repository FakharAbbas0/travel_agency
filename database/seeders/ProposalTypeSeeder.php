<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProposalType;

class ProposalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proposal_types = [
            ['type'=>'Flight (ONLY)','input_type'=>'radio'],
            ['type'=>'Accommodation (ONLY)','input_type'=>'select'],
            ['type'=>'Itinerary (ONLY)','input_type'=>'select'],
            ['type'=>'Cruise (ONLY)','input_type'=>'radio'],
            ['type'=>'Package: Flight & Accommodation (ONLY)','input_type'=>'radio'],
            ['type'=>'Package: Flight, Accommodation & Transfers (ONLY)','input_type'=>'radio'],
            ['type'=>'Package: Flight & Cruise (ONLY)','input_type'=>'radio'],
            ['type'=>'Package: Flight, Accommodation & Cruise (ONLY)','input_type'=>'radio'],
            ['type'=>'Package: Flight, Accommodation, Transfers & Cruise (ONLY)','input_type'=>'radio']
        ];

        foreach($proposal_types as $typerow){
            $type = $typerow['type'];
            $input_type = $typerow['input_type'];
            $proposalType = new ProposalType;
            $proposalType->type = $type;
            $proposalType->input_type = $input_type;
            $proposalType->save();
        }
    }
}
