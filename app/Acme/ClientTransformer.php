<?php 
namespace Acme\Transformers;

use App\Models\Branch;

class ClientTransformer extends Transformer{


	/**
	* @param $ClientTransformer array
	* @return array
	**/
	public function transform($client){

	return $client;

	}

	
	/**
	* @param $ClientTransformer array
	* @return array
	**/public function transformLong($item){

	$company_details = Branch::find($item['branch_id'])->company()->select('id AS company_id','company_name','description','facebook')->get();
	return [
		'client_id'=>$item['id'],
		'client_name'=>$item['name'],
		'branch_id' => $item['branch_id'],
		'company_details' => $company_details
	 ];
	}
}