<?php

namespace ContainerVuM8Txx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercab34 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeref01c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd7ed4 = [
        
    ];

    public function getConnection()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getConnection', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getMetadataFactory', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getExpressionBuilder', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'beginTransaction', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getCache', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getCache();
    }

    public function transactional($func)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'transactional', array('func' => $func), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->transactional($func);
    }

    public function commit()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'commit', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->commit();
    }

    public function rollback()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'rollback', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getClassMetadata', array('className' => $className), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'createQuery', array('dql' => $dql), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'createNamedQuery', array('name' => $name), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'createQueryBuilder', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'flush', array('entity' => $entity), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'clear', array('entityName' => $entityName), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->clear($entityName);
    }

    public function close()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'close', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->close();
    }

    public function persist($entity)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'persist', array('entity' => $entity), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'remove', array('entity' => $entity), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'refresh', array('entity' => $entity), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'detach', array('entity' => $entity), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'merge', array('entity' => $entity), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getRepository', array('entityName' => $entityName), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'contains', array('entity' => $entity), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getEventManager', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getConfiguration', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'isOpen', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getUnitOfWork', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getProxyFactory', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'initializeObject', array('obj' => $obj), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'getFilters', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'isFiltersStateClean', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'hasFilters', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return $this->valueHoldercab34->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializeref01c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercab34) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercab34 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercab34->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, '__get', ['name' => $name], $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        if (isset(self::$publicPropertiesd7ed4[$name])) {
            return $this->valueHoldercab34->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercab34;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercab34;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercab34;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercab34;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, '__isset', array('name' => $name), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercab34;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercab34;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, '__unset', array('name' => $name), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercab34;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercab34;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, '__clone', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        $this->valueHoldercab34 = clone $this->valueHoldercab34;
    }

    public function __sleep()
    {
        $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, '__sleep', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;

        return array('valueHoldercab34');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeref01c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeref01c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeref01c && ($this->initializeref01c->__invoke($valueHoldercab34, $this, 'initializeProxy', array(), $this->initializeref01c) || 1) && $this->valueHoldercab34 = $valueHoldercab34;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercab34;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercab34;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
