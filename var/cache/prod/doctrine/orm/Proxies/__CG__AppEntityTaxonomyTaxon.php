<?php

namespace Proxies\__CG__\App\Entity\Taxonomy;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Taxon extends \App\Entity\Taxonomy\Taxon implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'images', 'id', 'code', 'root', 'parent', 'children', 'left', 'right', 'level', 'position', 'translations', 'translationsCache', 'currentLocale', 'currentTranslation', 'fallbackLocale', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', 'images', 'id', 'code', 'root', 'parent', 'children', 'left', 'right', 'level', 'position', 'translations', 'translationsCache', 'currentLocale', 'currentTranslation', 'fallbackLocale', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Taxon $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getImages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function getImagesByType(string $type): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagesByType', [$type]);

        return parent::getImagesByType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function hasImages(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasImages', []);

        return parent::hasImages();
    }

    /**
     * {@inheritDoc}
     */
    public function hasImage(\Sylius\Component\Core\Model\ImageInterface $image): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasImage', [$image]);

        return parent::hasImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\Sylius\Component\Core\Model\ImageInterface $image): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\Sylius\Component\Core\Model\ImageInterface $image): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function compareTo($other): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'compareTo', [$other]);

        return parent::compareTo($other);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(?string $code): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function isRoot(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRoot', []);

        return parent::isRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoot(): ?\Sylius\Component\Taxonomy\Model\TaxonInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoot', []);

        return parent::getRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?\Sylius\Component\Taxonomy\Model\TaxonInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(?\Sylius\Component\Taxonomy\Model\TaxonInterface $parent): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getAncestors(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAncestors', []);

        return parent::getAncestors();
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function hasChild(\Sylius\Component\Taxonomy\Model\TaxonInterface $taxon): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasChild', [$taxon]);

        return parent::hasChild($taxon);
    }

    /**
     * {@inheritDoc}
     */
    public function hasChildren(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasChildren', []);

        return parent::hasChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\Sylius\Component\Taxonomy\Model\TaxonInterface $taxon): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', [$taxon]);

        parent::addChild($taxon);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChild(\Sylius\Component\Taxonomy\Model\TaxonInterface $taxon): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChild', [$taxon]);

        parent::removeChild($taxon);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullname(string $pathDelimiter = ' / '): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullname', [$pathDelimiter]);

        return parent::getFullname($pathDelimiter);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(?string $slug): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeft(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeft', []);

        return parent::getLeft();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeft(?int $left): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeft', [$left]);

        parent::setLeft($left);
    }

    /**
     * {@inheritDoc}
     */
    public function getRight(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRight', []);

        return parent::getRight();
    }

    /**
     * {@inheritDoc}
     */
    public function setRight(?int $right): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRight', [$right]);

        parent::setRight($right);
    }

    /**
     * {@inheritDoc}
     */
    public function getLevel(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevel', []);

        return parent::getLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLevel(?int $level): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLevel', [$level]);

        parent::setLevel($level);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition(?int $position): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslation(string $locale = NULL): \Sylius\Component\Resource\Model\TranslationInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslation', [$locale]);

        return parent::getTranslation($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function hasTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTranslation', [$translation]);

        return parent::hasTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translation]);

        parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentLocale(string $currentLocale): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentLocale', [$currentLocale]);

        parent::setCurrentLocale($currentLocale);
    }

    /**
     * {@inheritDoc}
     */
    public function setFallbackLocale(string $fallbackLocale): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFallbackLocale', [$fallbackLocale]);

        parent::setFallbackLocale($fallbackLocale);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        parent::setUpdatedAt($updatedAt);
    }

}
