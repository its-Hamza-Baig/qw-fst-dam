<?php

namespace Pimcore\Model\DataObject\Packages;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Packages|false current()
 * @method DataObject\Packages[] load()
 * @method DataObject\Packages[] getData()
 * @method DataObject\Packages[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "packages";
protected $className = "packages";


/**
* Filter by packageImage (Package Image)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByPackageImage ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("packageImage")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by packageTitle (Package Title)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByPackageTitle ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("packageTitle")->addListingFilter($this, $data, $operator);
	return $this;
}



}
