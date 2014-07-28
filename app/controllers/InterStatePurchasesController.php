<?php

use Vat\Forms\InterStatePurchasesForm;

class InterStatePurchasesController extends \BaseController {

    protected $validator;

    function __construct(InterStatePurchasesForm $validator)
    {
        $this->validator = $validator;
    }


    /**
     * Display a listing of the resource.
     * GET /InterStatePurchases
     *
     * @return Response
     */
    public function index()
    {
        $interLocalPurchase = Auth::user()->InterStatePurchases;

        return View::make('InterStatePurchases.index',compact('interLocalPurchase'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /InterStatePurchases/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('InterStatePurchases.create')->with('year',\Carbon\Carbon::now()->year);

    }

    /**
     * Store a newly created resource in storage.
     * POST /InterStatePurchases
     *
     * @return Response
     */
    public function store()
    {
        $this->validator->validate(Input::all());

        if( Auth::user()->InterStatePurchases()->create(Input::except('_token','invoice_date_submit','total_charges' )) ){

            return Redirect::route('InterStatePurchases.index')->with('flash_message','Inter State Purchases Added Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }

    }

    /**
     * Display the specified resource.
     * GET /InterStatePurchases/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $purchase = InterStatePurchase::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('InterStatePurchases.show',compact('purchase'));
            }else{
                return Redirect::route('InterStatePurchases.index')->with('flash_message','You Dont have permission to view that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to view that !!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     * GET /InterStatePurchases/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $purchase = InterStatePurchase::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('InterStatePurchases.edit',compact('purchase'));
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Edit that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Edit that !!');
        }
    }

    /**
     * Update the specified resource in storage.
     * PUT /InterStatePurchases/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $this->validator->validate(Input::all());

        if( Auth::user()->InterStatePurchases()->where('id',$id)->update(Input::except('_token','_method','invoice_date_submit','total_charges')) ){

            return Redirect::route('InterStatePurchases.index')->with('flash_message','Credit Note Updated Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /InterStatePurchases/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(Auth::check()){
            $purchase = InterStatePurchase::findOrFail($id);

            if( ( Auth::user()->id) == $purchase->user_id ){

                InterStatePurchase::destroy($id);

                return Redirect::route('InterStatePurchases.index')->with('flash_message', 'Deleted Successfully !!');
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Delete that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Delete that !!');
        }
    }

}
