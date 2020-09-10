<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EmpreendimentoItensCreateRequest;
use App\Http\Requests\EmpreendimentoItensUpdateRequest;
use App\Repositories\EmpreendimentoItensRepository;
use App\Validators\EmpreendimentoItensValidator;

/**
 * Class EmpreendimentoItensController.
 *
 * @package namespace App\Http\Controllers;
 */
class EmpreendimentoItensController extends Controller
{
    /**
     * @var EmpreendimentoItensRepository
     */
    protected $repository;

    /**
     * @var EmpreendimentoItensValidator
     */
    protected $validator;

    /**
     * EmpreendimentoItensController constructor.
     *
     * @param EmpreendimentoItensRepository $repository
     * @param EmpreendimentoItensValidator $validator
     */
    public function __construct(EmpreendimentoItensRepository $repository, EmpreendimentoItensValidator $validator)
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
        $empreendimentoItens = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoItens,
            ]);
        }

        return view('empreendimentoItens.index', compact('empreendimentoItens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmpreendimentoItensCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EmpreendimentoItensCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $empreendimentoIten = $this->repository->create($request->all());

            $response = [
                'message' => 'EmpreendimentoItens created.',
                'data'    => $empreendimentoIten->toArray(),
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
        $empreendimentoIten = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoIten,
            ]);
        }

        return view('empreendimentoItens.show', compact('empreendimentoIten'));
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
        $empreendimentoIten = $this->repository->find($id);

        return view('empreendimentoItens.edit', compact('empreendimentoIten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmpreendimentoItensUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EmpreendimentoItensUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $empreendimentoIten = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'EmpreendimentoItens updated.',
                'data'    => $empreendimentoIten->toArray(),
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
                'message' => 'EmpreendimentoItens deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'EmpreendimentoItens deleted.');
    }
}
