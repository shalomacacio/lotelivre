<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EmpreendimentoGaleriaCreateRequest;
use App\Http\Requests\EmpreendimentoGaleriaUpdateRequest;
use App\Repositories\EmpreendimentoGaleriaRepository;
use App\Validators\EmpreendimentoGaleriaValidator;

/**
 * Class EmpreendimentoGaleriasController.
 *
 * @package namespace App\Http\Controllers;
 */
class EmpreendimentoGaleriasController extends Controller
{
    /**
     * @var EmpreendimentoGaleriaRepository
     */
    protected $repository;

    /**
     * @var EmpreendimentoGaleriaValidator
     */
    protected $validator;

    /**
     * EmpreendimentoGaleriasController constructor.
     *
     * @param EmpreendimentoGaleriaRepository $repository
     * @param EmpreendimentoGaleriaValidator $validator
     */
    public function __construct(EmpreendimentoGaleriaRepository $repository, EmpreendimentoGaleriaValidator $validator)
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
        $empreendimentoGalerias = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoGalerias,
            ]);
        }

        return view('empreendimentoGalerias.index', compact('empreendimentoGalerias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmpreendimentoGaleriaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EmpreendimentoGaleriaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $data = $request->all();
            if( $request->hasFile('img') && $request->img->isValid()){
              $imagePath = $request->img->store('site/img/empreendimentos/'.$request->empreendimento_id.'/galeria/');
              $data['img'] = $imagePath;
            }
            $empreendimentoGalerium = $this->repository->create($data);

            $response = [
                'message' => 'EmpreendimentoGaleria created.',
                'data'    => $empreendimentoGalerium->toArray(),
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
        $empreendimentoGalerium = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoGalerium,
            ]);
        }

        return view('empreendimentoGalerias.show', compact('empreendimentoGalerium'));
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
        $empreendimentoGalerium = $this->repository->find($id);

        return view('empreendimentoGalerias.edit', compact('empreendimentoGalerium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmpreendimentoGaleriaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EmpreendimentoGaleriaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $empreendimentoGalerium = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'EmpreendimentoGaleria updated.',
                'data'    => $empreendimentoGalerium->toArray(),
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
                'message' => 'EmpreendimentoGaleria deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'EmpreendimentoGaleria deleted.');
    }
}
