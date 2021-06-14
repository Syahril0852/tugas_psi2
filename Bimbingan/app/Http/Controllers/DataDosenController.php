<?php

namespace App\Http\Controllers;

Use App\Models\Jurusan;
Use App\Models\Prodi;
Use App\Models\DataMahasiswa;
use App\Http\Requests\CreateDataDosenRequest;
use App\Http\Requests\UpdateDataDosenRequest;
use App\Repositories\DataDosenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DataDosenController extends AppBaseController
{
    /** @var  DataDosenRepository */
    private $dataDosenRepository;

    public function __construct(DataDosenRepository $dataDosenRepo)
    {
        $this->dataDosenRepository = $dataDosenRepo;
    }

    /**
     * Display a listing of the DataDosen.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dataDosens = $this->dataDosenRepository->all();

        return view('data_dosens.index')
            ->with('dataDosens', $dataDosens);
    }

    /**
     * Show the form for creating a new DataDosen.
     *
     * @return Response
     */
    public function create()
    {
        $Prodi=Prodi::pluck('nama_prodi','id');
        $Jurusan=Jurusan::pluck('jurusan','id');
        return view('data_dosens.create',compact(
            'Prodi',
            'Jurusan',
        ));
    }

    /**
     * Store a newly created DataDosen in storage.
     *
     * @param CreateDataDosenRequest $request
     *
     * @return Response
     */
    public function store(CreateDataDosenRequest $request)
    {
        $input = $request->all();

        $dataDosen = $this->dataDosenRepository->create($input);

        Flash::success('Data Dosen saved successfully.');

        return redirect(route('dataDosens.index'));
    }

    /**
     * Display the specified DataDosen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataDosen = $this->dataDosenRepository->find($id);

        if (empty($dataDosen)) {
            Flash::error('Data Dosen not found');

            return redirect(route('dataDosens.index'));
        }

        return view('data_dosens.show')->with('dataDosen', $dataDosen);
    }

    /**
     * Show the form for editing the specified DataDosen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataDosen = $this->dataDosenRepository->find($id);

        if (empty($dataDosen)) {
            Flash::error('Data Dosen not found');

            return redirect(route('dataDosens.index'));
        }
        $Jurusan = Jurusan::pluck('jurusan','id');
        $Prodi = Prodi::pluck('nama_prodi','id');
        return view('data_dosens.edit',compact(
            'Jurusan',
            'Prodi'
        ))->with('dataDosen', $dataDosen);
    }

    /**
     * Update the specified DataDosen in storage.
     *
     * @param int $id
     * @param UpdateDataDosenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataDosenRequest $request)
    {
        $dataDosen = $this->dataDosenRepository->find($id);

        if (empty($dataDosen)) {
            Flash::error('Data Dosen not found');

            return redirect(route('dataDosens.index'));
        }

        $dataDosen = $this->dataDosenRepository->update($request->all(), $id);

        Flash::success('Data Dosen updated successfully.');

        return redirect(route('dataDosens.index'));
    }

    /**
     * Remove the specified DataDosen from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataDosen = $this->dataDosenRepository->find($id);

        if (empty($dataDosen)) {
            Flash::error('Data Dosen not found');

            return redirect(route('dataDosens.index'));
        }

        $this->dataDosenRepository->delete($id);

        Flash::success('Data Dosen deleted successfully.');

        return redirect(route('dataDosens.index'));
    }
}
