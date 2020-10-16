<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EmpreendimentoDepoimentoCreateRequest;
use App\Http\Requests\EmpreendimentoDepoimentoUpdateRequest;
use App\Repositories\EmpreendimentoDepoimentoRepository;
use App\Validators\EmpreendimentoDepoimentoValidator;

/**
 * Class EmpreendimentoDepoimentosController.
 *
 * @package namespace App\Http\Controllers;
 */
class EmpreendimentoDepoimentosController extends Controller
{
    /**
     * @var EmpreendimentoDepoimentoRepository
     */
    protected $repository;

    /**
     * @var EmpreendimentoDepoimentoValidator
     */
    protected $validator;

    /**
     * EmpreendimentoDepoimentosController constructor.
     *
     * @param EmpreendimentoDepoimentoRepository $repository
     * @param EmpreendimentoDepoimentoValidator $validator
     */
    public function __construct(EmpreendimentoDepoimentoRepository $repository, EmpreendimentoDepoimentoValidator $validator)
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
        $empreendimentoDepoimentos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoDepoimentos,
            ]);
        }

        return view('empreendimentoDepoimentos.index', compact('empreendimentoDepoimentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmpreendimentoDepoimentoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EmpreendimentoDepoimentoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $empreendimentoDepoimento = $this->repository->create($request->all());

            $response = [
                'message' => 'EmpreendimentoDepoimento created.',
                'data'    => $empreendimentoDepoimento->toArray(),
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
        $empreendimentoDepoimento = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoDepoimento,
            ]);
        }

        return view('empreendimentoDepoimentos.show', compact('empreendimentoDepoimento'));
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
        $empreendimentoDepoimento = $this->repository->find($id);

        return view('empreendimentoDepoimentos.edit', compact('empreendimentoDepoimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmpreendimentoDepoimentoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EmpreendimentoDepoimentoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $empreendimentoDepoimento = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'EmpreendimentoDepoimento updated.',
                'data'    => $empreendimentoDepoimento->toArray(),
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
                'message' => 'EmpreendimentoDepoimento deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'EmpreendimentoDepoimento deleted.');
    }
}
