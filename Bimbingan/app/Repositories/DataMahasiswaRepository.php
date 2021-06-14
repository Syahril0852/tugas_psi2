<?php

namespace App\Repositories;

use App\Models\DataMahasiswa;
use App\Repositories\BaseRepository;

/**
 * Class DataMahasiswaRepository
 * @package App\Repositories
 * @version June 11, 2021, 11:20 am UTC
*/

class DataMahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DataMahasiswa::class;
    }
}
