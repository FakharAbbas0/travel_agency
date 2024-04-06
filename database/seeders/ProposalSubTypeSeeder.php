<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProposalSubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
                'proposal_type_id'=>1, // flight
                'option'=>'Outbound (ONLY)',
            ],
            [
                'proposal_type_id'=>1, // flight
                'option'=>'Return',
            ],
            [
                'proposal_type_id'=>2, // Accommodation (ONLY)
                'option'=>'Accommodation (ONLY)',
            ],
            [
                'proposal_type_id'=>3, // Itinerary (ONLY)
                'option'=>'Itinerary (ONLY)',
            ],
            [
                'proposal_type_id'=>4, // Outbound (ONLY)
                'option'=>'Outbound (ONLY)',
            ],
            [
                'proposal_type_id'=>4, // Return
                'option'=>'Return',
            ],

            [
                'proposal_type_id'=>5, // Outbound (ONLY)
                'option'=>'Outbound (ONLY)',
            ],
            [
                'proposal_type_id'=>5, // Return
                'option'=>'Return',
            ],

            [
                'proposal_type_id'=>6, // Outbound (ONLY)
                'option'=>'Outbound (ONLY)',
            ],
            [
                'proposal_type_id'=>6, // Return
                'option'=>'Return',
            ],

            [
                'proposal_type_id'=>7, // Outbound (ONLY)
                'option'=>'Outbound (ONLY)',
            ],
            [
                'proposal_type_id'=>7, // Return
                'option'=>'Return',
            ],

            [
                'proposal_type_id'=>8, // Outbound (ONLY)
                'option'=>'Outbound (ONLY)',
            ],
            [
                'proposal_type_id'=>8, // Return
                'option'=>'Return',
            ],

            [
                'proposal_type_id'=>9, // Outbound (ONLY)
                'option'=>'Outbound (ONLY)',
            ],
            [
                'proposal_type_id'=>9, // Return
                'option'=>'Return',
            ],

        );

        DB::table('proposal_sub_types')->insert($data);
    }
}
