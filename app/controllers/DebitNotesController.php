<?php

use Vat\Forms\DebitNotesForm;

class DebitNotesController extends \BaseController {

    protected $validator;

    function __construct(DebitNotesForm $validator)
    {
        $this->validator = $validator;
    }

    /**
	 * Display a listing of the resource.
	 * GET /debitnotes
	 *
	 * @return Response
	 */
	public function index()
	{
		$debitPurchases = Auth::user()->DebitNotes;

        return View::make('DebitNotes.index', compact('debitPurchases'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /debitnotes/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('DebitNotes.create')->with('year',\Carbon\Carbon::now()->year);

    }

	/**
	 * Store a newly created resource in storage.
	 * POST /debitnotes
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->validator->validate(Input::all());

        if( Auth::user()->DebitNotes()->create(Input::except('_token','debit_note_date_submit','original_invoice_date_submit')) ){

            return Redirect::route('DebitNotes.index')->with('flash_message','Debit Note Added Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }


	}

	/**
	 * Display the specified resource.
	 * GET /debitnotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $purchase = DebitNote::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('DebitNotes.show',compact('purchase'));
            }else{
                return Redirect::route('DebitNotes.index')->with('flash_message','You Dont have permission to view that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to view that !!');
        }
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /debitnotes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $purchase = DebitNote::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('DebitNotes.edit',compact('purchase'));
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Edit that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Edit that !!');
        }
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /debitnotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->validator->validate(Input::all());

        if( Auth::user()->DebitNotes()->where('id',$id)->update(Input::except('_token','_method','debit_note_date_submit','original_invoice_date_submit')) ){

            return Redirect::route('DebitNotes.index')->with('flash_message','Debit Note Updated Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /debitnotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        if(Auth::check()){
            $purchase = LocalPurchase::findOrFail($id);

            if( ( Auth::user()->id) == $purchase->user_id ){

                DebitNote::destroy($id);

                return Redirect::route('DebitNotes.index')->with('flash_message', 'Deleted Successfully !!');
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Delete that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Delete that !!');
        }
	}

}