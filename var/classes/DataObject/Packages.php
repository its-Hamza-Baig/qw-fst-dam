<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - packageImage [image]
 * - packageTitle [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Packages\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Packages\Listing|\Pimcore\Model\DataObject\Packages|null getByPackageImage(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Packages\Listing|\Pimcore\Model\DataObject\Packages|null getByPackageTitle(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Packages extends Concrete
{
public const FIELD_PACKAGE_IMAGE = 'packageImage';
public const FIELD_PACKAGE_TITLE = 'packageTitle';

protected $classId = "packages";
protected $className = "packages";
protected $packageImage;
protected $packageTitle;


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
* Get packageImage - Package Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getPackageImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("packageImage");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->packageImage;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set packageImage - Package Image
* @param \Pimcore\Model\Asset\Image|null $packageImage
* @return $this
*/
public function setPackageImage(?\Pimcore\Model\Asset\Image $packageImage): static
{
	$this->markFieldDirty("packageImage", true);

	$this->packageImage = $packageImage;

	return $this;
}

/**
* Get packageTitle - Package Title
* @return string|null
*/
public function getPackageTitle(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("packageTitle");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->packageTitle;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set packageTitle - Package Title
* @param string|null $packageTitle
* @return $this
*/
public function setPackageTitle(?string $packageTitle): static
{
	$this->markFieldDirty("packageTitle", true);

	$this->packageTitle = $packageTitle;

	return $this;
}

}

