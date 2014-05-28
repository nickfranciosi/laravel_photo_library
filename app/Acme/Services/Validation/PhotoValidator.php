<?php namespace Acme\Services\Validation;



class PhotoValidator extends Validator
{
     static $rules = [

        'title' => 'required',
        'artist_id' => 'required',

    ];
}