<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\NoticiaCreateRequest;
use App\Http\Requests\NoticiaUpdateRequest;
use App\Repositories\NoticiaRepository;
use App\Validators\NoticiaValidator;

/**
 * Class NoticiasController.
 *
 * @package namespace App\Http\Controllers;
 */
class NoticiasController extends Controller
{
    /**
     * @var NoticiaRepository
     */
    protected $repository;

    /**
     * @var NoticiaValidator
     */
    protected $validator;

    /**
     * NoticiasController constructor.
     *
     * @param NoticiaRepository $repository
     * @param NoticiaValidator $validator
     */
    public function __construct(NoticiaRepository $repository, NoticiaValidator $validator)
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
        $noticias = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $noticias,
            ]);
        }

        return view('noticias.index', compact('noticias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NoticiaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(NoticiaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $noticium = $this->repository->create($request->all());

            $response = [
                'message' => 'Noticia created.',
                'data'    => $noticium->toArray(),
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
        $noticium = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $noticium,
            ]);
        }

        return view('noticias.show', compact('noticium'));
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
        $noticium = $this->repository->find($id);

        return view('noticias.edit', compact('noticium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NoticiaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(NoticiaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $noticium = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Noticia updated.',
                'data'    => $noticium->toArray(),
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
                'message' => 'Noticia deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Noticia deleted.');
    }
}
