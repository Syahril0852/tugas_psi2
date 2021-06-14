<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataKonsultasi
 * @package App\Models
 * @version June 11, 2021, 11:25 am UTC
 *
 * @property string $nama
 * @property string $nim
 * @property string $tgk_konsultasi
 * @property string $hasil_konsultasi
 */
class DataKonsultasi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'konsultasi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'nim',
        'tgk_konsultasi',
        'hasil_konsultasi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'nim' => 'string',
        'tgk_konsultasi' => 'date',
        'hasil_konsultasi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required|string|max:50',
        'nim' => 'required|string|max:10',
        'tgk_konsultasi' => 'required',
        'hasil_konsultasi' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
