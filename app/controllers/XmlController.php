<?php

class XmlController extends \BaseController {

	public function __construct()
	{
		
		$this->beforeFilter('auth');
	}

	public function process()
	{
	
		extract(Input::all());
		
		$items = LocalPurchase::whereRaw("user_id = ".Auth::user()->id." AND year = '$year' AND month = '$month' ")->get();
		
		if(($items->count()) < 1){
			
			return Redirect::back()->with('flash_message','No Records found for Selected Period !!');
		}
		
		//return $items;
		$tin_number = Auth::user()->tin_number;
		$xmlFile = '<?xml version="1.0"?>
		<PurchaseDetails>
				<Version>13.11</Version>
				<TinNo>$tin_number</TinNo>
				<RetPerdEnd>$year</RetPerdEnd>
				<FilingType>M</FilingType>
				<Period>$month</Period>';
		foreach($items as $item){
		$total = ( ($item->net_value) + ($item->tax_charged) + ($item->other_charges) );
		
			$xmlFile .= "
			
			<PurchaseInvoiceDetails>
				<SelTin>$item->seller_tin</SelTin>
				<SelName>$item->seller_name</SelName>
				<InvNo>$item->invoice_number</InvNo>
				<InvDate>$item->invoice_date</InvDate>
				<NetVal>$item->net_value</NetVal>
				<TaxCh>$item->tax_charged</TaxCh>
				<OthCh>$item->other_charges</OthCh>
				<TotCh>$total</TotCh>
			</PurchaseInvoiceDetails>
		
		";
		
			
		}
		
		$xmlFile .= '</PurchaseDetails>';
		
		$fileName = md5(\Carbon\Carbon::now().Auth::user()->name).'.xml';
		
		$filePath = public_path().'/xml/'.$fileName;
		
		File::put($filePath, $xmlFile);
		
		$fileNewName = Auth::user()->email.'-'.$month.'-'.$year.'.xml' ;
		
		
		return Response::download($filePath, $fileNewName);
		
		
		
	}

}

