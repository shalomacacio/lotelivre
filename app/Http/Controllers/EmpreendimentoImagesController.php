<?php

namespace App\Http\Controllers;

use App\Entities\EmpreendimentoImage;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EmpreendimentoImageCreateRequest;
use App\Http\Requests\EmpreendimentoImageUpdateRequest;
use App\Repositories\EmpreendimentoImageRepository;
use App\Validators\EmpreendimentoImageValidator;

/**
 * Class EmpreendimentoImagesController.
 *
 * @package namespace App\Http\Controllers;
 */
class EmpreendimentoImagesController extends Controller
{
    /**
     * @var EmpreendimentoImageRepository
     */
    protected $repository;

    /**
     * @var EmpreendimentoImageValidator
     */
    protected $validator;

    /**
     * EmpreendimentoImagesController constructor.
     *
     * @param EmpreendimentoImageRepository $repository
     * @param EmpreendimentoImageValidator $validator
     */
    public function __construct(EmpreendimentoImageRepository $repository, EmpreendimentoImageValidator $validator)
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
        $empreendimentoImages = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoImages,
            ]);
        }

        return view('empreendimentoImages.index', compact('empreendimentoImages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmpreendimentoImageCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EmpreendimentoImageCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
            // return dd($request->allFiles());

            $data = $request->all();


            for($i = 0; $i <= count($request->allFiles()); $i++){

              $file = $request->allFiles()['imgs'][$i];

              // return dd($file);


              $empreendimentoImage = new EmpreendimentoImage();
              $empreendimentoImage->empreendimento_id = $data['empreendimento_id'];
              $empreendimentoImage->img = $file->store('site/img/empreendimentos/'.$data['empreendimento_id']);



            }

            // if( $request->hasFile('img') && $request->img->isValid()){

            //   $data['img'] = $imagePath;
            // }

            $empreendimentoImage = $this->repository->create($data);

            $response = [
                'message' => 'EmpreendimentoImage created.',
                'data'    => $empreendimentoImage->toArray(),
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
        $empreendimentoImage = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $empreendimentoImage,
            ]);
        }

        return view('empreendimentoImages.show', compact('empreendimentoImage'));
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
        $empreendimentoImage = $this->repository->find($id);

        return view('empreendimentoImages.edit', compact('empreendimentoImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmpreendimentoImageUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EmpreendimentoImageUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $empreendimentoImage = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'EmpreendimentoImage updated.',
                'data'    => $empreendimentoImage->toArray(),
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
                'message' => 'EmpreendimentoImage deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'EmpreendimentoImage deleted.');
    }
}
