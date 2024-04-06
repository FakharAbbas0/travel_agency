<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalType extends Model
{
    use HasFactory;

    public function proposal_sub_types(){
        return $this->hasMany(ProposalSubType::class,'proposal_type_id','id');
    }
}
