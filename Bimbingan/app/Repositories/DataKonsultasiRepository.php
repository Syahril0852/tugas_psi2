<?php

namespace App\Repositories;

use App\Models\DataKonsultasi;
use App\Repositories\BaseRepository;

/**
 * Class DataKonsultasiRepository
 * @package App\Repositories
 * @version June 11, 2021, 11:25 am UTC
*/

class DataKonsultasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'nim',
        'tgk_konsultasi',
        'hasil_konsultasi'
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
        return DataKonsultasi::class;
    }
}
