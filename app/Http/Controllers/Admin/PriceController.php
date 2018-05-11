<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePriceRequest;
use App\Http\Requests\Admin\UpdatePriceRequest;
use App\Repositories\Admin\PriceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PriceController extends AppBaseController
{
    /** @var  PriceRepository */
    private $priceRepository;

    public function __construct(PriceRepository $priceRepo)
    {
        $this->priceRepository = $priceRepo;
    }

    /**
     * Display a listing of the Price.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->priceRepository->pushCriteria(new RequestCriteria($request));
        $prices = $this->priceRepository->paginate(20);

        return view('admin.prices.index')
            ->with('prices', $prices);
    }

    /**
     * Show the form for creating a new Price.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.prices.create');
    }

    /**
     * Store a newly created Price in storage.
     *
     * @param CreatePriceRequest $request
     *
     * @return Response
     */
    public function store(CreatePriceRequest $request)
    {
        $input = $request->all();

        $price = $this->priceRepository->create($input);

        Flash::success('Price saved successfully.');

        return redirect(route('admin.prices.index'));
    }

    /**
     * Display the specified Price.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $price = $this->priceRepository->findWithoutFail($id);

        if (empty($price)) {
            Flash::error('Price not found');

            return redirect(route('admin.prices.index'));
        }

        return view('admin.prices.show')->with('price', $price);
    }

    /**
     * Show the form for editing the specified Price.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $price = $this->priceRepository->findWithoutFail($id);

        if (empty($price)) {
            Flash::error('Price not found');

            return redirect(route('admin.prices.index'));
        }

        return view('admin.prices.edit')->with('price', $price);
    }

    /**
     * Update the specified Price in storage.
     *
     * @param  int              $id
     * @param UpdatePriceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePriceRequest $request)
    {
        $price = $this->priceRepository->findWithoutFail($id);

        if (empty($price)) {
            Flash::error('Price not found');

            return redirect(route('admin.prices.index'));
        }

        $price = $this->priceRepository->update($request->all(), $id);

        Flash::success('Price updated successfully.');

        return redirect(route('admin.prices.index'));
    }

    /**
     * Remove the specified Price from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $price = $this->priceRepository->findWithoutFail($id);

        if (empty($price)) {
            Flash::error('Price not found');

            return redirect(route('admin.prices.index'));
        }

        $this->priceRepository->delete($id);

        Flash::success('Price deleted successfully.');

        return redirect(route('admin.prices.index'));
    }
}
