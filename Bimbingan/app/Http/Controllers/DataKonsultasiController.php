<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataKonsultasiRequest;
use App\Http\Requests\UpdateDataKonsultasiRequest;
use App\Repositories\DataKonsultasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DataKonsultasiController extends AppBaseController
{
    /** @var  DataKonsultasiRepository */
    private $dataKonsultasiRepository;

    public function __construct(DataKonsultasiRepository $dataKonsultasiRepo)
    {
        $this->dataKonsultasiRepository = $dataKonsultasiRepo;
    }

    /**
     * Display a listing of the DataKonsultasi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dataKonsultasis = $this->dataKonsultasiRepository->all();

        return view('data_konsultasis.index')
            ->with('dataKonsultasis', $dataKonsultasis);
    }

    /**
     * Show the form for creating a new DataKonsultasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_konsultasis.create');
    }

    /**
     * Store a newly created DataKonsultasi in storage.
     *
     * @param CreateDataKonsultasiRequest $request
     *
     * @return Response
     */
    public function store(CreateDataKonsultasiRequest $request)
    {
        $input = $request->all();

        $dataKonsultasi = $this->dataKonsultasiRepository->create($input);

        Flash::success('Data Konsultasi saved successfully.');

        return redirect(route('dataKonsultasis.index'));
    }

    /**
     * Display the specified DataKonsultasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataKonsultasi = $this->dataKonsultasiRepository->find($id);

        if (empty($dataKonsultasi)) {
            Flash::error('Data Konsultasi not found');

            return redirect(route('dataKonsultasis.index'));
        }

        return view('data_konsultasis.show')->with('dataKonsultasi', $dataKonsultasi);
    }

    /**
     * Show the form for editing the specified DataKonsultasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataKonsultasi = $this->dataKonsultasiRepository->find($id);

        if (empty($dataKonsultasi)) {
            Flash::error('Data Konsultasi not found');

            return redirect(route('dataKonsultasis.index'));
        }

        return view('data_konsultasis.edit')->with('dataKonsultasi', $dataKonsultasi);
    }

    /**
     * Update the specified DataKonsultasi in storage.
     *
     * @param int $id
     * @param UpdateDataKonsultasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataKonsultasiRequest $request)
    {
        $dataKonsultasi = $this->dataKonsultasiRepository->find($id);

        if (empty($dataKonsultasi)) {
            Flash::error('Data Konsultasi not found');

            return redirect(route('dataKonsultasis.index'));
        }

        $dataKonsultasi = $this->dataKonsultasiRepository->update($request->all(), $id);

        Flash::success('Data Konsultasi updated successfully.');

        return redirect(route('dataKonsultasis.index'));
    }

    /**
     * Remove the specified DataKonsultasi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataKonsultasi = $this->dataKonsultasiRepository->find($id);

        if (empty($dataKonsultasi)) {
            Flash::error('Data Konsultasi not found');

            return redirect(route('dataKonsultasis.index'));
        }

        $this->dataKonsultasiRepository->delete($id);

        Flash::success('Data Konsultasi deleted successfully.');

        return redirect(route('dataKonsultasis.index'));
    }
}
