<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\BannerRotativoCreateRequest;
use App\Http\Requests\BannerRotativoUpdateRequest;
use App\Repositories\BannerRotativoRepository;
use App\Validators\BannerRotativoValidator;

/**
 * Class BannerRotativosController.
 *
 * @package namespace App\Http\Controllers;
 */
class BannerRotativosController extends Controller
{
    /**
     * @var BannerRotativoRepository
     */
    protected $repository;

    /**
     * @var BannerRotativoValidator
     */
    protected $validator;

    /**
     * BannerRotativosController constructor.
     *
     * @param BannerRotativoRepository $repository
     * @param BannerRotativoValidator $validator
     */
    public function __construct(BannerRotativoRepository $repository, BannerRotativoValidator $validator)
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
        $bannerRotativos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $bannerRotativos,
            ]);
        }

        return view('admin.bannerRotativos.index', compact('bannerRotativos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BannerRotativoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(BannerRotativoCreateRequest $request)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
            $data = $request->all();

            if( $request->hasFile('img') && $request->img->isValid()){
              $imagePath = $request->img->store('site/img/banners');
              $data['img'] = $imagePath;
            }

            // $bannerRotativo = $this->repository->create($request->all());
            $bannerRotativo = $this->repository->create($data);

            $response = [
                'message' => 'BannerRotativo created.',
                'data'    => $bannerRotativo->toArray(),
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
        $bannerRotativo = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $bannerRotativo,
            ]);
        }

        return view('admin.bannerRotativos.show', compact('bannerRotativo'));
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
        $bannerRotativo = $this->repository->find($id);

        return view('admin.bannerRotativos.edit', compact('bannerRotativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BannerRotativoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(BannerRotativoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $bannerRotativo = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'BannerRotativo updated.',
                'data'    => $bannerRotativo->toArray(),
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
                'message' => 'BannerRotativo deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'BannerRotativo deleted.');
    }
}
