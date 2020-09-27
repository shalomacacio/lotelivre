<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\BannerVideoCreateRequest;
use App\Http\Requests\BannerVideoUpdateRequest;
use App\Repositories\BannerVideoRepository;
use App\Validators\BannerVideoValidator;

/**
 * Class BannerVideosController.
 *
 * @package namespace App\Http\Controllers;
 */
class BannerVideosController extends Controller
{
    /**
     * @var BannerVideoRepository
     */
    protected $repository;

    /**
     * @var BannerVideoValidator
     */
    protected $validator;

    /**
     * BannerVideosController constructor.
     *
     * @param BannerVideoRepository $repository
     * @param BannerVideoValidator $validator
     */
    public function __construct(BannerVideoRepository $repository, BannerVideoValidator $validator)
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
        $bannerVideos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $bannerVideos,
            ]);
        }

        return view('bannerVideos.index', compact('bannerVideos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BannerVideoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(BannerVideoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $bannerVideo = $this->repository->create($request->all());

            $response = [
                'message' => 'BannerVideo created.',
                'data'    => $bannerVideo->toArray(),
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
        $bannerVideo = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $bannerVideo,
            ]);
        }

        return view('bannerVideos.show', compact('bannerVideo'));
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
        $bannerVideo = $this->repository->find($id);

        return view('bannerVideos.edit', compact('bannerVideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BannerVideoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(BannerVideoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $bannerVideo = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'BannerVideo updated.',
                'data'    => $bannerVideo->toArray(),
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
                'message' => 'BannerVideo deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'BannerVideo deleted.');
    }
}
