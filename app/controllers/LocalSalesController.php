<?php

use Vat\Forms\LocalSalesForm;

class LocalSalesController extends \BaseController {

    protected $validator;

    function __construct(LocalSalesForm $validator)
    {
        $this->validator = $validator;
    }

    /**
	 * Display a listing of the resource.
	 * GET /localsales
	 *
	 * @return Response
	 */
	public function index()
	{
        $localSales = Auth::user()->LocalSales;

        return View::make('LocalSales.index', compact('localSales'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /localsales/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('LocalSales.create')->with('year',\Carbon\Carbon::now()->year);

    }

	/**
	 * Store a newly created resource in storage.
	 * POST /localsales
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->validator->validate(Input::all());

        if( Auth::user()->LocalSales()->create(Input::except('_token','invoice_date_submit','total_charges')) ){

            return Redirect::route('LocalSales.index')->with('flash_message','Local Sales Added Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /localsales/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $purchase = LocalSale::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('LocalSales.show',compact('purchase'));
            }else{
                return Redirect::route('LocalSales.index')->with('flash_message','You Dont have permission to view that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to view that !!');
        }
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /localsales/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $purchase = LocalSale::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('LocalSales.edit',compact('purchase'));
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Edit that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Edit that !!');
        }
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /localsales/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->validator->validate(Input::all());

        if( Auth::user()->LocalSales()->where('id',$id)->update(Input::except('_token','_method','invoice_date_submit','total_charges')) ){

            return Redirect::route('LocalSales.index')->with('flash_message','Local Sale Updated Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /localsales/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        if(Auth::check()){
            $purchase = LocalSale::findOrFail($id);

            if( ( Auth::user()->id) == $purchase->user_id ){

                LocalSale::destroy($id);

                return Redirect::route('LocalSales.index')->with('flash_message', 'Deleted Successfully !!');
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Delete that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Delete that !!');
        }
	}

}