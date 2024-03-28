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
        'Flight (ONLY)',
        'Accommodation (ONLY)',
        'Itinerary (ONLY)',
        'Cruise (ONLY)',
        'Package: Flight & Accommodation (ONLY)',
        'Package: Flight, Accommodation & Transfers (ONLY)',
        'Package: Flight & Cruise (ONLY)',
        'Package: Flight, Accommodation & Cruise (ONLY)',
        'Package: Flight, Accommodation, Transfers & Cruise (ONLY)'];

        foreach($proposal_types as $type){
            $proposalType = new ProposalType;
            $proposalType->type = $type;
            $proposalType->save();
        }
    }
}
