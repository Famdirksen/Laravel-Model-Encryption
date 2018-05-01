<?php

namespace Tests\Framework;

use Famdirksen\LaravelModelEncryption\ModelEncryption;
use Illuminate\Database\Eloquent\Model;

class CustomEncryptionModel extends Model
{
    use ModelEncryption;

    protected $encryptable = [
        'secret'
    ];

    protected $fillable = [
        'secret'
    ];

    protected $table = 'encryptable_models';


    /**
     * @param $value
     *
     * @return string
     */
    protected function encryptAttribute($value)
    {
        return "encrypted";
    }


    /**
     * @param $value
     *
     * @return string
     */
    protected function decryptAttribute($value)
    {
        return "decrypted";
    }
}
