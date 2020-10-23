<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ThumbnailCreateRequest;
use App\Http\Requests\ThumbnailUpdateRequest;
use App\Repositories\ThumbnailRepository;
use App\Validators\ThumbnailValidator;

/**
 * Class ThumbnailsController.
 *
 * @package namespace App\Http\Controllers;
 */
class ThumbnailsController extends Controller
{
    /**
     * @var ThumbnailRepository
     */
    protected $repository;

    /**
     * @var ThumbnailValidator
     */
    protected $validator;

    /**
     * ThumbnailsController constructor.
     *
     * @param ThumbnailRepository $repository
     * @param ThumbnailValidator $validator
     */
    public function __construct(ThumbnailRepository $repository, ThumbnailValidator $validator)
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
        $thumbnails = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $thumbnails,
            ]);
        }

        return view('thumbnails.index', compact('thumbnails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ThumbnailCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ThumbnailCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $data = $request->all();

            if( $request->hasFile('img') && $request->img->isValid()){
              $imagePath = $request->img->store('site/img/thumbnails');
              $data['img'] = $imagePath;
            }

            $thumbnail = $this->repository->create($data);

            $response = [
                'message' => 'Thumbnail created.',
                'data'    => $thumbnail->toArray(),
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
        $thumbnail = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $thumbnail,
            ]);
        }

        return view('thumbnails.show', compact('thumbnail'));
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
        $thumbnail = $this->repository->find($id);

        return view('thumbnails.edit', compact('thumbnail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ThumbnailUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ThumbnailUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $thumbnail = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Thumbnail updated.',
                'data'    => $thumbnail->toArray(),
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
                'message' => 'Thumbnail deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Thumbnail deleted.');
    }
}
