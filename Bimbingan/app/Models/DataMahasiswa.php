<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataMahasiswa
 * @package App\Models
 * @version June 11, 2021, 11:20 am UTC
 *
 * @property \App\Models\Prodi $prodi
 * @property \App\Models\Jurusan $jurusan
 * @property string $nama
 * @property string $nim
 * @property string $agama
 * @property string $jenis_kelamin
 * @property string $semester
 * @property integer $prodi_id
 * @property integer $jurusan_id
 * @property string $no_telp
 * @property string $email
 */
class DataMahasiswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'data_mahasiswa';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'nim',
        'agama',
        'jenis_kelamin',
        'semester',
        'prodi_id',
        'jurusan_id',
        'no_telp',
        'email'
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
        'agama' => 'string',
        'jenis_kelamin' => 'string',
        'semester' => 'string',
        'prodi_id' => 'integer',
        'jurusan_id' => 'integer',
        'no_telp' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required|string|max:50',
        'nim' => 'required|string|max:10',
        'agama' => 'required|string|max:30',
        'jenis_kelamin' => 'required|string|max:30',
        'semester' => 'required|string|max:2',
        'prodi_id' => 'required|integer',
        'jurusan_id' => 'required|integer',
        'no_telp' => 'required|string|max:15',
        'email' => 'required|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function prodi()
    {
        return $this->belongsTo(\App\Models\Prodi::class, 'prodi_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jurusan()
    {
        return $this->belongsTo(\App\Models\Jurusan::class, 'jurusan_id');
    }
}
