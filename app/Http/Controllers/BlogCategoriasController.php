<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\BlogCategoriaCreateRequest;
use App\Http\Requests\BlogCategoriaUpdateRequest;
use App\Repositories\BlogCategoriaRepository;
use App\Validators\BlogCategoriaValidator;

/**
 * Class BlogCategoriasController.
 *
 * @package namespace App\Http\Controllers;
 */
class BlogCategoriasController extends Controller
{
    /**
     * @var BlogCategoriaRepository
     */
    protected $repository;

    /**
     * @var BlogCategoriaValidator
     */
    protected $validator;

    /**
     * BlogCategoriasController constructor.
     *
     * @param BlogCategoriaRepository $repository
     * @param BlogCategoriaValidator $validator
     */
    public function __construct(BlogCategoriaRepository $repository, BlogCategoriaValidator $validator)
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
        $blogCategorias = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $blogCategorias,
            ]);
        }

        return view('blogCategorias.index', compact('blogCategorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BlogCategoriaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(BlogCategoriaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $blogCategorium = $this->repository->create($request->all());

            $response = [
                'message' => 'BlogCategoria created.',
                'data'    => $blogCategorium->toArray(),
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
        $blogCategorium = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $blogCategorium,
            ]);
        }

        return view('blogCategorias.show', compact('blogCategorium'));
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
        $blogCategorium = $this->repository->find($id);

        return view('blogCategorias.edit', compact('blogCategorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BlogCategoriaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(BlogCategoriaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $blogCategorium = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'BlogCategoria updated.',
                'data'    => $blogCategorium->toArray(),
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
                'message' => 'BlogCategoria deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'BlogCategoria deleted.');
    }
}
