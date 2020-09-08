<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EmpreendimentoCreateRequest;
use App\Http\Requests\EmpreendimentoUpdateRequest;
use App\Repositories\EmpreendimentoRepository;
use App\Validators\EmpreendimentoValidator;

/**
 * Class EmpreendimentosController.
 *
 * @package namespace App\Http\Controllers;
 */
class EmpreendimentosController extends Controller
{
    /**
     * @var EmpreendimentoRepository
     */
    protected $repository;

    /**
     * @var EmpreendimentoValidator
     */
    protected $validator;

    /**
     * EmpreendimentosController constructor.
     *
     * @param EmpreendimentoRepository $repository
     * @param EmpreendimentoValidator $validator
     */
    public function __construct(EmpreendimentoRepository $repository, EmpreendimentoValidator $validator)
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
        $empreendimentos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentos,
            ]);
        }

        return view('admin.empreendimentos.index', compact('empreendimentos'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.empreendimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmpreendimentoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EmpreendimentoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $empreendimento = $this->repository->create($request->all());

            $response = [
                'message' => 'Empreendimento created.',
                'data'    => $empreendimento->toArray(),
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
        $empreendimento = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimento,
            ]);
        }

        return view('admin.empreendimentos.show', compact('empreendimento'));
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
        $empreendimento = $this->repository->find($id);

        return view('admin.empreendimentos.edit', compact('empreendimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmpreendimentoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EmpreendimentoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $empreendimento = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Empreendimento updated.',
                'data'    => $empreendimento->toArray(),
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
                'message' => 'Empreendimento deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Empreendimento deleted.');
    }
}
