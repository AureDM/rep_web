<?php

namespace Container8fB9pWw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8d822 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8175 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties67243 = [
        
    ];

    public function getConnection()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getConnection', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getMetadataFactory', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getExpressionBuilder', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'beginTransaction', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getCache', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'transactional', array('func' => $func), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'commit', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->commit();
    }

    public function rollback()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'rollback', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getClassMetadata', array('className' => $className), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'createQuery', array('dql' => $dql), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'createNamedQuery', array('name' => $name), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'createQueryBuilder', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'flush', array('entity' => $entity), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'clear', array('entityName' => $entityName), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->clear($entityName);
    }

    public function close()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'close', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->close();
    }

    public function persist($entity)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'persist', array('entity' => $entity), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'remove', array('entity' => $entity), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'refresh', array('entity' => $entity), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'detach', array('entity' => $entity), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'merge', array('entity' => $entity), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'contains', array('entity' => $entity), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getEventManager', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getConfiguration', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'isOpen', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getUnitOfWork', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getProxyFactory', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'initializeObject', array('obj' => $obj), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'getFilters', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'isFiltersStateClean', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'hasFilters', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return $this->valueHolder8d822->hasFilters();
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

        $instance->initializera8175 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8d822) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8d822 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8d822->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, '__get', ['name' => $name], $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        if (isset(self::$publicProperties67243[$name])) {
            return $this->valueHolder8d822->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d822;

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

        $targetObject = $this->valueHolder8d822;
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
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d822;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8d822;
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
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, '__isset', array('name' => $name), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d822;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8d822;
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
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, '__unset', array('name' => $name), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d822;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8d822;
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
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, '__clone', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        $this->valueHolder8d822 = clone $this->valueHolder8d822;
    }

    public function __sleep()
    {
        $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, '__sleep', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;

        return array('valueHolder8d822');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8175 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8175;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8175 && ($this->initializera8175->__invoke($valueHolder8d822, $this, 'initializeProxy', array(), $this->initializera8175) || 1) && $this->valueHolder8d822 = $valueHolder8d822;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8d822;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8d822;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
