<?php

namespace App\Repositories;

use App\Models\DataDosen;
use App\Repositories\BaseRepository;

/**
 * Class DataDosenRepository
 * @package App\Repositories
 * @version June 11, 2021, 11:21 am UTC
*/

class DataDosenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'jenis_kelamin',
        'agama',
        'prodi_id',
        'jurusan_id',
        'no_telp',
        'email',
        'status'
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
        return DataDosen::class;
    }
}
