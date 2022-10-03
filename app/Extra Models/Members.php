<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model {
    use HasFactory;
    public $timestamps = false;

    function companyData() {
        return $this -> hasOne( 'App\Models\Company' );
    }

    // Accessors Code
    // function getNameAttribute( $value )
    // {
    //     return ucfirst( $value );
    // }
    // function getAddressAttribute( $value )
    // {
    //     return ucfirst( $value );
    // }
    // function getAddressAttribute( $value )
    // {
    //     return $value.', KPK';
    // }

    // Mutators Code
    // public function setNameAttribute( $value )
    // {
    //     return $this -> attributes['name'] = 'Mr. '.$value;
    // }
    //     public function setAddressAttribute( $value )
    // {
    //     return $this -> attributes['address'] = $value.',KPK';
    // }
}