<?php

namespace App\Http\Controllers;

use App\Entities\Empreendimento;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EmpreendimentoDestaqueCreateRequest;
use App\Http\Requests\EmpreendimentoDestaqueUpdateRequest;
use App\Repositories\EmpreendimentoDestaqueRepository;
use App\Validators\EmpreendimentoDestaqueValidator;

/**
 * Class EmpreendimentoDestaquesController.
 *
 * @package namespace App\Http\Controllers;
 */
class EmpreendimentoDestaquesController extends Controller
{
    /**
     * @var EmpreendimentoDestaqueRepository
     */
    protected $repository;

    /**
     * @var EmpreendimentoDestaqueValidator
     */
    protected $validator;

    /**
     * EmpreendimentoDestaquesController constructor.
     *
     * @param EmpreendimentoDestaqueRepository $repository
     * @param EmpreendimentoDestaqueValidator $validator
     */
    public function __construct(EmpreendimentoDestaqueRepository $repository, EmpreendimentoDestaqueValidator $validator)
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
        $empreendimentos = Empreendimento::all();
        $empreendimentoDestaques = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoDestaques,
            ]);
        }

        return view('admin.empreendimentoDestaques.index', compact('empreendimentoDestaques', 'empreendimentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmpreendimentoDestaqueCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EmpreendimentoDestaqueCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $data = $request->all();

            if( $request->hasFile('img') && $request->img->isValid()){
              $imagePath = $request->img->store('site/img/banners/destaque');
              $data['img'] = $imagePath;
            }

            $empreendimentoDestaque = $this->repository->create($data);

            $response = [
                'message' => 'EmpreendimentoDestaque created.',
                'data'    => $empreendimentoDestaque->toArray(),
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
        $empreendimentoDestaque = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoDestaque,
            ]);
        }

        return view('admin.empreendimentoDestaques.show', compact('empreendimentoDestaque'));
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
        $empreendimentoDestaque = $this->repository->find($id);

        return view('admin.empreendimentoDestaques.edit', compact('empreendimentoDestaque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmpreendimentoDestaqueUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EmpreendimentoDestaqueUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $empreendimentoDestaque = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'EmpreendimentoDestaque updated.',
                'data'    => $empreendimentoDestaque->toArray(),
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
                'message' => 'EmpreendimentoDestaque deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'EmpreendimentoDestaque deleted.');
    }
}
