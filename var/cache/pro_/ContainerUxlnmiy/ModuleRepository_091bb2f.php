<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2c4cd = null;
    private $initializerba06f = null;
    private static $publicPropertiesc0e60 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getList', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getInstalledModules', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getMustBeConfiguredModules', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getUpgradableModules', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'setActionUrls', array('collection' => $collection), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerba06f = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder2c4cd) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder2c4cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder2c4cd->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__get', ['name' => $name], $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        if (isset(self::$publicPropertiesc0e60[$name])) {
            return $this->valueHolder2c4cd->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c4cd;
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
        $targetObject = $this->valueHolder2c4cd;
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
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c4cd;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2c4cd;
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
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__isset', array('name' => $name), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c4cd;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2c4cd;
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
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__unset', array('name' => $name), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c4cd;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2c4cd;
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
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__clone', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        $this->valueHolder2c4cd = clone $this->valueHolder2c4cd;
    }
    public function __sleep()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__sleep', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return array('valueHolder2c4cd');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba06f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba06f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'initializeProxy', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c4cd;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c4cd;
    }
}
