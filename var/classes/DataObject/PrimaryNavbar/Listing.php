<?php

namespace Pimcore\Model\DataObject\PrimaryNavbar;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\PrimaryNavbar|false current()
 * @method DataObject\PrimaryNavbar[] load()
 * @method DataObject\PrimaryNavbar[] getData()
 * @method DataObject\PrimaryNavbar[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "primaryNavbar";
protected $className = "primaryNavbar";


/**
* Filter by logo (Logo)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLogo ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("logo")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by heading (Heading)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByHeading ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("heading")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by rightNumber (Right Number)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByRightNumber ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("rightNumber")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by rightImage (Right Image)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByRightImage ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("rightImage")->addListingFilter($this, $data, $operator);
	return $this;
}



}
