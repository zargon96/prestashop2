<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder12695 = null;
    private $initializere5fa7 = null;
    private static $publicProperties18220 = [
        
    ];
    public function getConnection()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getConnection', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getMetadataFactory', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getExpressionBuilder', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'beginTransaction', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->beginTransaction();
    }
    public function getCache()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getCache', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getCache();
    }
    public function transactional($func)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'transactional', array('func' => $func), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'wrapInTransaction', array('func' => $func), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'commit', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->commit();
    }
    public function rollback()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'rollback', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getClassMetadata', array('className' => $className), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'createQuery', array('dql' => $dql), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'createNamedQuery', array('name' => $name), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'createQueryBuilder', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'flush', array('entity' => $entity), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'clear', array('entityName' => $entityName), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->clear($entityName);
    }
    public function close()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'close', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->close();
    }
    public function persist($entity)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'persist', array('entity' => $entity), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'remove', array('entity' => $entity), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'refresh', array('entity' => $entity), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'detach', array('entity' => $entity), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'merge', array('entity' => $entity), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getRepository', array('entityName' => $entityName), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'contains', array('entity' => $entity), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getEventManager', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getConfiguration', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'isOpen', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getUnitOfWork', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getProxyFactory', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'initializeObject', array('obj' => $obj), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getFilters', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'isFiltersStateClean', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'hasFilters', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializere5fa7 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder12695) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder12695 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder12695->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__get', ['name' => $name], $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        if (isset(self::$publicProperties18220[$name])) {
            return $this->valueHolder12695->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12695;
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
        $targetObject = $this->valueHolder12695;
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
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12695;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder12695;
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
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__isset', array('name' => $name), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12695;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder12695;
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
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__unset', array('name' => $name), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12695;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder12695;
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
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__clone', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        $this->valueHolder12695 = clone $this->valueHolder12695;
    }
    public function __sleep()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__sleep', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return array('valueHolder12695');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere5fa7 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere5fa7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'initializeProxy', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder12695;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder12695;
    }
}
