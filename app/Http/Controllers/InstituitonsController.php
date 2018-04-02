<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\InstituitonCreateRequest;
use App\Http\Requests\InstituitonUpdateRequest;
use App\Repositories\InstituitonRepository;
use App\Validators\InstituitonValidator;

/**
 * Class InstituitonsController.
 *
 * @package namespace App\Http\Controllers;
 */
class InstitutonsController extends Controller
{
    /**
     * @var InstitutonRepository
     */
    protected $repository;

    /**
     * @var InstitutonValidator
     */
    protected $validator;

    /**
     * InstituitonsController constructor.
     *
     * @param InstitutonRepository $repository
     * @param InstitutonValidator $validator
     */
    public function __construct(InstitutonRepository $repository, InstitutonValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $institutons = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $institutons,
            ]);
        }

        return view('instituitons.index', compact('instituitions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  InstituitonCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(InstituitionCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $instituiton = $this->repository->create($request->all());

            $response = [
                'message' => 'Instituiton created.',
                'data'    => $instituition->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instituition = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $instituition,
            ]);
        }

        return view('instituitions.show', compact('instituition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instituiton = $this->repository->find($id);

        return view('instituitions.edit', compact('instituition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  InstituitonUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(InstituitionUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $instituition = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Instituition updated.',
                'data'    => $instituition->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Instituition deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Instituition deleted.');
    }
}
