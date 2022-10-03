<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model {
    use HasFactory;

    function companyData1() {
        // Code for One to One Relation
        return $this->hasOne( 'App\Models\Company' );
    }

    function companyData2() {
        // Code for One to Many Relation
        return $this->hasMany( 'App\Models\Company' );
    }
}
