<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Prodi
 * @package App\Models
 * @version June 14, 2021, 7:42 am UTC
 *
 * @property \App\Models\Jurusan $jurusan
 * @property \Illuminate\Database\Eloquent\Collection $dataDosens
 * @property \Illuminate\Database\Eloquent\Collection $dataMahasiswas
 * @property string $nama_prodi
 * @property integer $jurusan_id
 */
class Prodi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'prodi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_prodi',
        'jurusan_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_prodi' => 'string',
        'jurusan_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_prodi' => 'required|string|max:100',
        'jurusan_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jurusan()
    {
        return $this->belongsTo(\App\Models\Jurusan::class, 'jurusan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataDosens()
    {
        return $this->hasMany(\App\Models\DataDosen::class, 'prodi_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataMahasiswas()
    {
        return $this->hasMany(\App\Models\DataMahasiswa::class, 'prodi_id');
    }
}
