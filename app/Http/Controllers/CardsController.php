<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CardCreateRequest;
use App\Http\Requests\CardUpdateRequest;
use App\Repositories\CardRepository;
use App\Validators\CardValidator;

/**
 * Class CardsController.
 *
 * @package namespace App\Http\Controllers;
 */
class CardsController extends Controller
{
    /**
     * @var CardRepository
     */
    protected $repository;

    /**
     * @var CardValidator
     */
    protected $validator;

    /**
     * CardsController constructor.
     *
     * @param CardRepository $repository
     * @param CardValidator $validator
     */
    public function __construct(CardRepository $repository, CardValidator $validator)
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
        $cards = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $cards,
            ]);
        }

        return view('admin.cards.index', compact('cards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CardCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CardCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $data = $request->all();

            if( $request->hasFile('img') && $request->img->isValid()){
              $imagePath = $request->img->store('site/img/cards');
              $data['img'] = $imagePath;
            }

            $card = $this->repository->create($data);

            $response = [
                'message' => 'Card created.',
                'data'    => $card->toArray(),
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
        $card = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $card,
            ]);
        }

        return view('admin.cards.show', compact('card'));
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
        $card = $this->repository->find($id);

        return view('admin.cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CardUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CardUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $card = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Card updated.',
                'data'    => $card->toArray(),
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
                'message' => 'Card deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Card deleted.');
    }
}
