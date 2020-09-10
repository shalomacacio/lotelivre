<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\BannerPromocionalCreateRequest;
use App\Http\Requests\BannerPromocionalUpdateRequest;
use App\Repositories\BannerPromocionalRepository;
use App\Validators\BannerPromocionalValidator;

/**
 * Class BannerPromocionalsController.
 *
 * @package namespace App\Http\Controllers;
 */
class BannerPromocionalsController extends Controller
{
    /**
     * @var BannerPromocionalRepository
     */
    protected $repository;

    /**
     * @var BannerPromocionalValidator
     */
    protected $validator;

    /**
     * BannerPromocionalsController constructor.
     *
     * @param BannerPromocionalRepository $repository
     * @param BannerPromocionalValidator $validator
     */
    public function __construct(BannerPromocionalRepository $repository, BannerPromocionalValidator $validator)
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
        $bannerPromocionals = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $bannerPromocionals,
            ]);
        }

        return view('admin.bannerPromocionals.index', compact('bannerPromocionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BannerPromocionalCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(BannerPromocionalCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $data = $request->all();

            if( $request->hasFile('img') && $request->img->isValid()){
              $imagePath = $request->img->store('site/img/banners/promocional');
              $data['img'] = $imagePath;
            }

            $bannerPromocional = $this->repository->create($data);

            $response = [
                'message' => 'BannerPromocional created.',
                'data'    => $bannerPromocional->toArray(),
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
        $bannerPromocional = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $bannerPromocional,
            ]);
        }

        return view('bannerPromocionals.show', compact('bannerPromocional'));
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
        $bannerPromocional = $this->repository->find($id);

        return view('admin.bannerPromocionals.edit', compact('bannerPromocional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BannerPromocionalUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(BannerPromocionalUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $bannerPromocional = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'BannerPromocional updated.',
                'data'    => $bannerPromocional->toArray(),
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
                'message' => 'BannerPromocional deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'BannerPromocional deleted.');
    }
}
