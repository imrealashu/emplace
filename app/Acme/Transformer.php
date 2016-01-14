<?php
namespace Acme\Transformers;
abstract class Transformer{
/**
* @param array $items
* @return array
*/
public function transformCollection(array $items){
return array_map([$this,"transform"],$items);
}
public abstract function transform($item);
public abstract function transformLong($item);
}