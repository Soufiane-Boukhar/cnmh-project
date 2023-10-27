<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRendezVousRequest;
use App\Http\Requests\UpdateRendezVousRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RendezVousRepository;
use Illuminate\Http\Request;
use Flash;

class RendezVousController extends AppBaseController
{
    /** @var RendezVousRepository $rendezVousRepository*/
    private $rendezVousRepository;

    public function __construct(RendezVousRepository $rendezVousRepo)
    {
        $this->rendezVousRepository = $rendezVousRepo;
    }

    /**
     * Display a listing of the RendezVous.
     */
    public function index(Request $request)
    {
        
        $query = $request->input('query');
        $rendezVouses = $this->rendezVousRepository->paginate($query);
       
        if ($request->ajax()) {
            return view('rendez_vouses.table')
                ->with('rendezVouses', $rendezVouses);
        }

        return view('rendez_vouses.index')
            ->with('rendezVouses', $rendezVouses);
    }

    /**
     * Show the form for creating a new RendezVous.
     */
    public function create()
    {
        return view('rendez_vouses.create');
    }

    /**
     * Store a newly created RendezVous in storage.
     */
    public function store(CreateRendezVousRequest $request)
    {
        $input = $request->all();

        $rendezVous = $this->rendezVousRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/rendezVouses.singular')]));

        return redirect(route('rendezVouses.index'));
    }

    /**
     * Display the specified RendezVous.
     */
    public function show($id)
    {
        $rendezVous = $this->rendezVousRepository->find($id);

        if (empty($rendezVous)) {
            Flash::error(__('models/rendezVouses.singular').' '.__('messages.not_found'));

            return redirect(route('rendezVouses.index'));
        }

        return view('rendez_vouses.show')->with('rendezVous', $rendezVous);
    }

    /**
     * Show the form for editing the specified RendezVous.
     */
    public function edit($id)
    {
        $rendezVous = $this->rendezVousRepository->find($id);

        if (empty($rendezVous)) {
            Flash::error(__('models/rendezVouses.singular').' '.__('messages.not_found'));

            return redirect(route('rendezVouses.index'));
        }

        return view('rendez_vouses.edit')->with('rendezVous', $rendezVous);
    }

    /**
     * Update the specified RendezVous in storage.
     */
    public function update($id, UpdateRendezVousRequest $request)
    {
        $rendezVous = $this->rendezVousRepository->find($id);

        if (empty($rendezVous)) {
            Flash::error(__('models/rendezVouses.singular').' '.__('messages.not_found'));

            return redirect(route('rendezVouses.index'));
        }

        $rendezVous = $this->rendezVousRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/rendezVouses.singular')]));

        return redirect(route('rendezVouses.index'));
    }

    /**
     * Remove the specified RendezVous from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rendezVous = $this->rendezVousRepository->find($id);

        if (empty($rendezVous)) {
            Flash::error(__('models/rendezVouses.singular').' '.__('messages.not_found'));

            return redirect(route('rendezVouses.index'));
        }

        $this->rendezVousRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/rendezVouses.singular')]));

        return redirect(route('rendezVouses.index'));
    }
}
