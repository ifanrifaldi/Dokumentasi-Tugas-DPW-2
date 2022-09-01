<?php

namespace App\Models\Traits\Relations;

use App\Models\User;

trait ProdukRelations {

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }
    
}