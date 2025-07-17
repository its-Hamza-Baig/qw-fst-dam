<?php

namespace Pimcore\Model\DataObject\Assets;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Assets|false current()
 * @method DataObject\Assets[] load()
 * @method DataObject\Assets[] getData()
 * @method DataObject\Assets[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "assets";
protected $className = "assets";


/**
* Filter by assetImage (Asset Image)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByAssetImage ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("assetImage")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by assetTitle (Asset Title)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByAssetTitle ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("assetTitle")->addListingFilter($this, $data, $operator);
	return $this;
}



}
