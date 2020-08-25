<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\LoteCreateRequest;
use App\Http\Requests\LoteUpdateRequest;
use App\Repositories\LoteRepository;
use App\Validators\LoteValidator;

/**
 * Class LotesController.
 *
 * @package namespace App\Http\Controllers;
 */
class LotesController extends Controller
{
    /**
     * @var LoteRepository
     */
    protected $repository;

    /**
     * @var LoteValidator
     */
    protected $validator;

    /**
     * LotesController constructor.
     *
     * @param LoteRepository $repository
     * @param LoteValidator $validator
     */
    public function __construct(LoteRepository $repository, LoteValidator $validator)
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
        $lotes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $lotes,
            ]);
        }

        return view('lotes.index', compact('lotes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  LoteCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(LoteCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $lote = $this->repository->create($request->all());

            $response = [
                'message' => 'Lote created.',
                'data'    => $lote->toArray(),
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
        $lote = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $lote,
            ]);
        }

        return view('lotes.show', compact('lote'));
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
        $lote = $this->repository->find($id);

        return view('lotes.edit', compact('lote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  LoteUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(LoteUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $lote = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Lote updated.',
                'data'    => $lote->toArray(),
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
                'message' => 'Lote deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Lote deleted.');
    }
}
