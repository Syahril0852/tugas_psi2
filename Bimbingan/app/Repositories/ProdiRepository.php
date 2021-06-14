<?php

namespace App\Repositories;

use App\Models\Prodi;
use App\Repositories\BaseRepository;

/**
 * Class ProdiRepository
 * @package App\Repositories
 * @version June 14, 2021, 7:42 am UTC
*/

class ProdiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_prodi',
        'jurusan_id'
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
        return Prodi::class;
    }
}
