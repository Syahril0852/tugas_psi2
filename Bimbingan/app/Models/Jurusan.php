<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Jurusan
 * @package App\Models
 * @version June 14, 2021, 7:41 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $dataDosens
 * @property \Illuminate\Database\Eloquent\Collection $dataMahasiswas
 * @property \Illuminate\Database\Eloquent\Collection $prodis
 * @property string $jurusan
 */
class Jurusan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'jurusan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'jurusan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jurusan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jurusan' => 'required|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataDosens()
    {
        return $this->hasMany(\App\Models\DataDosen::class, 'jurusan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataMahasiswas()
    {
        return $this->hasMany(\App\Models\DataMahasiswa::class, 'jurusan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function prodis()
    {
        return $this->hasMany(\App\Models\Prodi::class, 'jurusan_id');
    }
}
