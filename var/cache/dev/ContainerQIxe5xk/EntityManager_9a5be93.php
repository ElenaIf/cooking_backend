<?php

namespace ContainerQIxe5xk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb507f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer838f8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2a432 = [
        
    ];

    public function getConnection()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getConnection', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getMetadataFactory', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getExpressionBuilder', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'beginTransaction', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getCache', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'transactional', array('func' => $func), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->transactional($func);
    }

    public function commit()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'commit', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->commit();
    }

    public function rollback()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'rollback', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getClassMetadata', array('className' => $className), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'createQuery', array('dql' => $dql), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'createNamedQuery', array('name' => $name), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'createQueryBuilder', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'flush', array('entity' => $entity), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'clear', array('entityName' => $entityName), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->clear($entityName);
    }

    public function close()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'close', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->close();
    }

    public function persist($entity)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'persist', array('entity' => $entity), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'remove', array('entity' => $entity), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'refresh', array('entity' => $entity), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'detach', array('entity' => $entity), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'merge', array('entity' => $entity), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'contains', array('entity' => $entity), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getEventManager', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getConfiguration', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'isOpen', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getUnitOfWork', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getProxyFactory', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'initializeObject', array('obj' => $obj), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'getFilters', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'isFiltersStateClean', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'hasFilters', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return $this->valueHolderb507f->hasFilters();
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

        $instance->initializer838f8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb507f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb507f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb507f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, '__get', ['name' => $name], $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        if (isset(self::$publicProperties2a432[$name])) {
            return $this->valueHolderb507f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb507f;

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

        $targetObject = $this->valueHolderb507f;
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
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb507f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb507f;
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
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, '__isset', array('name' => $name), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb507f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb507f;
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
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, '__unset', array('name' => $name), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb507f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb507f;
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
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, '__clone', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        $this->valueHolderb507f = clone $this->valueHolderb507f;
    }

    public function __sleep()
    {
        $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, '__sleep', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;

        return array('valueHolderb507f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer838f8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer838f8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer838f8 && ($this->initializer838f8->__invoke($valueHolderb507f, $this, 'initializeProxy', array(), $this->initializer838f8) || 1) && $this->valueHolderb507f = $valueHolderb507f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb507f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb507f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
