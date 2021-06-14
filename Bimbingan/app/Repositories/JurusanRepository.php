<?php

namespace App\Repositories;

use App\Models\Jurusan;
use App\Repositories\BaseRepository;

/**
 * Class JurusanRepository
 * @package App\Repositories
 * @version June 14, 2021, 7:41 am UTC
*/

class JurusanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jurusan'
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
        return Jurusan::class;
    }
}
