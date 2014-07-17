<?php

use Vat\Forms\LocalPurchase as validator;

class LocalPurchasesController extends \BaseController {

    private $localpurchaseValidator;

    public function __construct(validator $localpurchaseValidator)
    {
        $this->beforeFilter('auth');
        $this->localpurchaseValidator = $localpurchaseValidator;
    }


    /**
	 * Display a listing of the resource.
	 * GET /localpurchases
	 *
	 * @return Response
	 */
	public function index()
	{
        $localPurchases = LocalPurchase::where('user_id', Auth::user()->id )->get();
        

		return View::make('LocalPurchases.index', compact('localPurchases'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /localpurchases/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /localpurchases
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->localpurchaseValidator->validate(Input::all());

        LocalPurchase::create([
            'user_id' => Auth::user()->id,
            'seller_name' => Input::get('seller_name'),
            'seller_tin'=>Input::get('seller_tin'),
            'invoice_number'=>Input::get('invoice_number'),
            'invoice_date' => Input::get('invoice_date'),
            'net_value' => Input::get('net_value'),
            'tax_charged' =>Input::get('tax_charged'),
            'month' =>Input::get('month'),
            'year' =>Input::get('year'),
            'other_charges' => Input::get('other_charges')
        ]);

		return Redirect::to('/')->with('flash_message','Local Purchase Added Successfully');
	}

	/**
	 * Display the specified resource.
	 * GET /localpurchases/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$purchase = LocalPurchase::findOrFail($id);
		
		if(Auth::check()){
			if( ( Auth::user()->id) == $purchase->user_id ){
				return View::make('LocalPurchases.show',compact('purchase'));
			}else{
				return Redirect::back()->with('flash_message','You Dont have permission to view that !!');
			}
			
			}else{
				return Redirect::to('/login')->with('flash_message','Login to view that !!');
			}
		
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /localpurchases/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$purchase = LocalPurchase::findOrFail($id);
		
		if(Auth::check()){
			if( ( Auth::user()->id) == $purchase->user_id ){
				return View::make('LocalPurchases.edit',compact('purchase'));
			}else{
				return Redirect::back()->with('flash_message','You Dont have permission to Edit that !!');
			}
			
			}else{
				return Redirect::to('/login')->with('flash_message','Login to Edit that !!');
			}

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /localpurchases/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->localpurchaseValidator->validate(Input::all());
		
			$purchase = LocalPurchase::findOrFail($id);

           $purchase->user_id =  Auth::user()->id;
           $purchase->seller_name =  Input::get('seller_name');
           $purchase->seller_tin = Input::get('seller_tin');
           $purchase->invoice_number = Input::get('invoice_number');
           $purchase->invoice_date =  Input::get('invoice_date');
           $purchase->net_value =  Input::get('net_value');
           $purchase->tax_charged = Input::get('tax_charged');
           $purchase->month = Input::get('month');
           $purchase->year = Input::get('year');
           $purchase->other_charges =  Input::get('other_charges');
           
           $purchase->save();
				
		return Redirect::to('/LocalPurchases')->with('flash_message', 'Updated Successfully !!');

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /localpurchases/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Auth::check()){
			$purchase = LocalPurchase::findOrFail($id);

			if( ( Auth::user()->id) == $purchase->user_id ){
				
				LocalPurchase::destroy($id);
				
				return Redirect::to('/LocalPurchases')->with('flash_message', 'Deleted Successfully !!');
			}else{
				return Redirect::back()->with('flash_message','You Dont have permission to Delete that !!');
			}
			
			}else{
				return Redirect::to('/login')->with('flash_message','Login to Delete that !!');
			}
	}

}