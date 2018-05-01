<?php

namespace Tests\Framework;

use Famdirksen\LaravelModelEncryption\ModelEncryption;
use Illuminate\Database\Eloquent\Model;

class ModelEncryptionModel extends Model
{
    use ModelEncryption;

    protected $fillable = [
        'secret'
    ];

    protected $encryptable = [
        'secret'
    ];
}
