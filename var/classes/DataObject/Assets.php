<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - assetImage [image]
 * - assetTitle [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Assets\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Assets\Listing|\Pimcore\Model\DataObject\Assets|null getByAssetImage(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Assets\Listing|\Pimcore\Model\DataObject\Assets|null getByAssetTitle(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Assets extends Concrete
{
public const FIELD_ASSET_IMAGE = 'assetImage';
public const FIELD_ASSET_TITLE = 'assetTitle';

protected $classId = "assets";
protected $className = "assets";
protected $assetImage;
protected $assetTitle;


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
* Get assetImage - Asset Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getAssetImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("assetImage");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->assetImage;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set assetImage - Asset Image
* @param \Pimcore\Model\Asset\Image|null $assetImage
* @return $this
*/
public function setAssetImage(?\Pimcore\Model\Asset\Image $assetImage): static
{
	$this->markFieldDirty("assetImage", true);

	$this->assetImage = $assetImage;

	return $this;
}

/**
* Get assetTitle - Asset Title
* @return string|null
*/
public function getAssetTitle(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("assetTitle");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->assetTitle;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set assetTitle - Asset Title
* @param string|null $assetTitle
* @return $this
*/
public function setAssetTitle(?string $assetTitle): static
{
	$this->markFieldDirty("assetTitle", true);

	$this->assetTitle = $assetTitle;

	return $this;
}

}

