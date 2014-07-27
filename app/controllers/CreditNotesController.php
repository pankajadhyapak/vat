<?php

use Vat\Forms\CreditNotesForm;

class CreditNotesController extends \BaseController {

    protected $validator;

    function __construct(CreditNotesForm $validator)
    {
        $this->validator = $validator;
    }

    /**
	 * Display a listing of the resource.
	 * GET /creditnotes
	 *
	 * @return Response
	 */
	public function index()
	{
		$creditPurchases = Auth::user()->CreditNotes;

        	return View::make('creditNotes.index',compact('creditPurchases'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /creditnotes/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('creditNotes.create')->with('year',\Carbon\Carbon::now()->year);

    }

	/**
	 * Store a newly created resource in storage.
	 * POST /creditnotes
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->validator->validate(Input::all());

        if( Auth::user()->CreditNotes()->create(Input::except('_token','credit_note_date_submit','original_invoice_date_submit' )) ){

            return Redirect::route('creditNotes.index')->with('flash_message','Credit Note Added Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }

    }

	/**
	 * Display the specified resource.
	 * GET /creditnotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $purchase = CreditNote::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('creditNotes.show',compact('purchase'));
            }else{
                return Redirect::route('creditNotes.index')->with('flash_message','You Dont have permission to view that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to view that !!');
        }
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /creditnotes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $purchase = CreditNote::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('creditNotes.edit',compact('purchase'));
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Edit that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Edit that !!');
        }
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /creditnotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->validator->validateUpdate(Input::all());

        if( Auth::user()->CreditNotes()->where('id',$id)->update(Input::except('_token','_method','credit_note_date_submit','original_invoice_date_submit' )) ){

            return Redirect::route('creditNotes.index')->with('flash_message','Credit Note Updated Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /creditnotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        if(Auth::check()){
            $purchase = CreditNote::findOrFail($id);

            if( ( Auth::user()->id) == $purchase->user_id ){

                CreditNote::destroy($id);

                return Redirect::route('creditNotes.index')->with('flash_message', 'Deleted Successfully !!');
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Delete that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Delete that !!');
        }
	}

}
