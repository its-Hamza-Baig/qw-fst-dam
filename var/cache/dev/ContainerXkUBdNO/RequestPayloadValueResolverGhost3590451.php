<?php

namespace ContainerXkUBdNO;
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestPayloadValueResolver.php';

class RequestPayloadValueResolverGhost3590451 extends \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'serializer' => [parent::class, 'serializer', null, 530],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', null, 530],
        "\0".parent::class."\0".'validator' => [parent::class, 'validator', null, 530],
        'serializer' => [parent::class, 'serializer', null, 530],
        'translator' => [parent::class, 'translator', null, 530],
        'validator' => [parent::class, 'validator', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RequestPayloadValueResolverGhost3590451', false)) {
    \class_alias(__NAMESPACE__.'\\RequestPayloadValueResolverGhost3590451', 'RequestPayloadValueResolverGhost3590451', false);
}
