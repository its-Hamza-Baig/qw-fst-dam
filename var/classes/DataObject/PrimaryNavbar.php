<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - logo [image]
 * - heading [input]
 * - rightNumber [input]
 * - rightImage [image]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\PrimaryNavbar\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\PrimaryNavbar\Listing|\Pimcore\Model\DataObject\PrimaryNavbar|null getByLogo(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\PrimaryNavbar\Listing|\Pimcore\Model\DataObject\PrimaryNavbar|null getByHeading(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\PrimaryNavbar\Listing|\Pimcore\Model\DataObject\PrimaryNavbar|null getByRightNumber(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\PrimaryNavbar\Listing|\Pimcore\Model\DataObject\PrimaryNavbar|null getByRightImage(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class PrimaryNavbar extends Concrete
{
public const FIELD_LOGO = 'logo';
public const FIELD_HEADING = 'heading';
public const FIELD_RIGHT_NUMBER = 'rightNumber';
public const FIELD_RIGHT_IMAGE = 'rightImage';

protected $classId = "primaryNavbar";
protected $className = "primaryNavbar";
protected $logo;
protected $heading;
protected $rightNumber;
protected $rightImage;


/**
* @param array $values
* @return static
*/
public static function create(array $values = []): static
{
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get logo - Logo
* @return \Pimcore\Model\Asset\Image|null
*/
public function getLogo(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("logo");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->logo;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set logo - Logo
* @param \Pimcore\Model\Asset\Image|null $logo
* @return $this
*/
public function setLogo(?\Pimcore\Model\Asset\Image $logo): static
{
	$this->markFieldDirty("logo", true);

	$this->logo = $logo;

	return $this;
}

/**
* Get heading - Heading
* @return string|null
*/
public function getHeading(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("heading");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->heading;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set heading - Heading
* @param string|null $heading
* @return $this
*/
public function setHeading(?string $heading): static
{
	$this->markFieldDirty("heading", true);

	$this->heading = $heading;

	return $this;
}

/**
* Get rightNumber - Right Number
* @return string|null
*/
public function getRightNumber(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("rightNumber");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->rightNumber;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set rightNumber - Right Number
* @param string|null $rightNumber
* @return $this
*/
public function setRightNumber(?string $rightNumber): static
{
	$this->markFieldDirty("rightNumber", true);

	$this->rightNumber = $rightNumber;

	return $this;
}

/**
* Get rightImage - Right Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getRightImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("rightImage");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->rightImage;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set rightImage - Right Image
* @param \Pimcore\Model\Asset\Image|null $rightImage
* @return $this
*/
public function setRightImage(?\Pimcore\Model\Asset\Image $rightImage): static
{
	$this->markFieldDirty("rightImage", true);

	$this->rightImage = $rightImage;

	return $this;
}

}

