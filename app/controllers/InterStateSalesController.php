<?php

use Vat\Forms\InterStateSalesForm;

class InterStateSalesController extends \BaseController {

    protected $validator;

    function __construct(InterStateSalesForm $validator)
    {
        $this->validator = $validator;
    }


    /**
     * Display a listing of the resource.
     * GET /InterStateSales
     *
     * @return Response
     */
    public function index()
    {
        $interLocalSale = Auth::user()->InterStateSales;

        return View::make('InterStateSales.index',compact('interLocalSale'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /InterStateSales/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('InterStateSales.create')->with('year',\Carbon\Carbon::now()->year);

    }

    /**
     * Store a newly created resource in storage.
     * POST /InterStateSales
     *
     * @return Response
     */
    public function store()
    {
        $this->validator->validate(Input::all());

        if( Auth::user()->InterStateSales()->create(Input::except('_token','invoice_date_submit' )) ){

            return Redirect::route('InterStateSales.index')->with('flash_message','Inter State Purchases Added Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }

    }

    /**
     * Display the specified resource.
     * GET /InterStateSales/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $purchase = InterStateSale::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('InterStateSales.show',compact('purchase'));
            }else{
                return Redirect::route('InterStateSales.index')->with('flash_message','You Dont have permission to view that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to view that !!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     * GET /InterStateSales/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $purchase = InterStateSale::findOrFail($id);

        if(Auth::check()){
            if( ( Auth::user()->id) == $purchase->user_id ){
                return View::make('InterStateSales.edit',compact('purchase'));
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Edit that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Edit that !!');
        }
    }

    /**
     * Update the specified resource in storage.
     * PUT /InterStateSales/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $this->validator->validate(Input::all());

        if( Auth::user()->InterStateSales()->where('id',$id)->update(Input::except('_token','_method','invoice_date_submit' )) ){

            return Redirect::route('InterStateSales.index')->with('flash_message','Credit Note Updated Successfully');

        }else{
            return Redirect::back()->with('flash_message','Oops !! Something Went Wrong !! Try Again ');
        }
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /InterStateSales/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(Auth::check()){
            $purchase = InterStateSale::findOrFail($id);

            if( ( Auth::user()->id) == $purchase->user_id ){

                InterStateSale::destroy($id);

                return Redirect::route('InterStateSales.index')->with('flash_message', 'Deleted Successfully !!');
            }else{
                return Redirect::back()->with('flash_message','You Dont have permission to Delete that !!');
            }

        }else{
            return Redirect::to('/login')->with('flash_message','Login to Delete that !!');
        }
    }

}
