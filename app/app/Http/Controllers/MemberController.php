<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MemberRepository;
use Illuminate\Http\Request;
use Flash;

class MemberController extends AppBaseController
{
    /** @var MemberRepository $memberRepository*/
    private $memberRepository;

    public function __construct(MemberRepository $memberRepo)
    {
        $this->memberRepository = $memberRepo;
    }

    /**
     * Display a listing of the Member.
     */
    public function index(Request $request)
    {
        
        $query = $request->input('query');
        $members = $this->memberRepository->paginate($query);
       
        if ($request->ajax()) {
            return view('members.table')
                ->with('members', $members);
        }

        return view('members.index')
            ->with('members', $members);
    }

    /**
     * Show the form for creating a new Member.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created Member in storage.
     */
    public function store(CreateMemberRequest $request)
    {
        $input = $request->all();

        $member = $this->memberRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/members.singular')]));

        return redirect(route('members.index'));
    }

    /**
     * Display the specified Member.
     */
    public function show($id)
    {
        $member = $this->memberRepository->find($id);

        if (empty($member)) {
            Flash::error(__('models/members.singular').' '.__('messages.not_found'));

            return redirect(route('members.index'));
        }

        return view('members.show')->with('member', $member);
    }

    /**
     * Show the form for editing the specified Member.
     */
    public function edit($id)
    {
        $member = $this->memberRepository->find($id);

        if (empty($member)) {
            Flash::error(__('models/members.singular').' '.__('messages.not_found'));

            return redirect(route('members.index'));
        }

        return view('members.edit')->with('member', $member);
    }

    /**
     * Update the specified Member in storage.
     */
    public function update($id, UpdateMemberRequest $request)
    {
        $member = $this->memberRepository->find($id);

        if (empty($member)) {
            Flash::error(__('models/members.singular').' '.__('messages.not_found'));

            return redirect(route('members.index'));
        }

        $member = $this->memberRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/members.singular')]));

        return redirect(route('members.index'));
    }

    /**
     * Remove the specified Member from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $member = $this->memberRepository->find($id);

        if (empty($member)) {
            Flash::error(__('models/members.singular').' '.__('messages.not_found'));

            return redirect(route('members.index'));
        }

        $this->memberRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/members.singular')]));

        return redirect(route('members.index'));
    }
}
