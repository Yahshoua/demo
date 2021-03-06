<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'abonneNewsletter', '' . "\0" . 'App\\Entity\\User' . "\0" . 'civilite', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastLogin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'registrationDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userContactInfos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'confirmationToken', '' . "\0" . 'App\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'App\\Entity\\User' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userRoles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'resetPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'cguAccepted', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastActivityAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isConnected', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adSubscriptions', '' . "\0" . 'App\\Entity\\User' . "\0" . 'typeAccount', '' . "\0" . 'App\\Entity\\User' . "\0" . 'recaptchaToken', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adsFavoris', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ads', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isAdAuthor', '' . "\0" . 'App\\Entity\\User' . "\0" . 'BlockedCandidature'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'abonneNewsletter', '' . "\0" . 'App\\Entity\\User' . "\0" . 'civilite', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastLogin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'registrationDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userContactInfos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'confirmationToken', '' . "\0" . 'App\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'App\\Entity\\User' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userRoles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'resetPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'cguAccepted', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastActivityAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isConnected', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adSubscriptions', '' . "\0" . 'App\\Entity\\User' . "\0" . 'typeAccount', '' . "\0" . 'App\\Entity\\User' . "\0" . 'recaptchaToken', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adsFavoris', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ads', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isAdAuthor', '' . "\0" . 'App\\Entity\\User' . "\0" . 'BlockedCandidature'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function initializeSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initializeSlug', []);

        return parent::initializeSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initializeDate', []);

        return parent::initializeDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function setUsername(string $username): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($plainPassword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$plainPassword]);

        return parent::setPlainPassword($plainPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbonneNewsletter(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbonneNewsletter', []);

        return parent::getAbonneNewsletter();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbonneNewsletter(?bool $abonneNewsletter): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbonneNewsletter', [$abonneNewsletter]);

        return parent::setAbonneNewsletter($abonneNewsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function getCivilite(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCivilite', []);

        return parent::getCivilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setCivilite(string $civilite): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCivilite', [$civilite]);

        return parent::setCivilite($civilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTimeInterface $lastLogin): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$lastLogin]);

        return parent::setLastLogin($lastLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistrationDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistrationDate', []);

        return parent::getRegistrationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistrationDate(\DateTimeInterface $registrationDate): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistrationDate', [$registrationDate]);

        return parent::setRegistrationDate($registrationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken(?string $confirmationToken): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$confirmationToken]);

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled(?bool $enabled): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
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
    public function setSlug(string $slug): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getResetPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResetPassword', []);

        return parent::getResetPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setResetPassword(?string $resetPassword): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResetPassword', [$resetPassword]);

        return parent::setResetPassword($resetPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getCguAccepted(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCguAccepted', []);

        return parent::getCguAccepted();
    }

    /**
     * {@inheritDoc}
     */
    public function setCguAccepted(bool $cguAccepted): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCguAccepted', [$cguAccepted]);

        return parent::setCguAccepted($cguAccepted);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastActivityAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastActivityAt', []);

        return parent::getLastActivityAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastActivityAt(?\DateTimeInterface $lastActivityAt): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastActivityAt', [$lastActivityAt]);

        return parent::setLastActivityAt($lastActivityAt);
    }

    /**
     * {@inheritDoc}
     */
    public function isActiveNow()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isActiveNow', []);

        return parent::isActiveNow();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsConnected(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsConnected', []);

        return parent::getIsConnected();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsConnected(?bool $isConnected): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsConnected', [$isConnected]);

        return parent::setIsConnected($isConnected);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserContactInfos(): ?\App\Entity\UserContactInfos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserContactInfos', []);

        return parent::getUserContactInfos();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserContactInfos(?\App\Entity\UserContactInfos $userContactInfos): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserContactInfos', [$userContactInfos]);

        return parent::setUserContactInfos($userContactInfos);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRoles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRoles', []);

        return parent::getUserRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function addUserRole(\App\Entity\Role $userRole): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserRole', [$userRole]);

        return parent::addUserRole($userRole);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserRole(\App\Entity\Role $userRole): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserRole', [$userRole]);

        return parent::removeUserRole($userRole);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdSubscriptions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdSubscriptions', []);

        return parent::getAdSubscriptions();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdSubscription(\App\Entity\AdSubscription $adSubscription): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdSubscription', [$adSubscription]);

        return parent::addAdSubscription($adSubscription);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdSubscription(\App\Entity\AdSubscription $adSubscription): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdSubscription', [$adSubscription]);

        return parent::removeAdSubscription($adSubscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeAccount(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeAccount', []);

        return parent::getTypeAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeAccount(string $typeAccount): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeAccount', [$typeAccount]);

        return parent::setTypeAccount($typeAccount);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecaptchaToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecaptchaToken', []);

        return parent::getRecaptchaToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecaptchaToken($recaptchaToken): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecaptchaToken', [$recaptchaToken]);

        return parent::setRecaptchaToken($recaptchaToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdsFavoris(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdsFavoris', []);

        return parent::getAdsFavoris();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdsFavori(\App\Entity\Ad $adsFavori): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdsFavori', [$adsFavori]);

        return parent::addAdsFavori($adsFavori);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdsFavori(\App\Entity\Ad $adsFavori): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdsFavori', [$adsFavori]);

        return parent::removeAdsFavori($adsFavori);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockedCandidature(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockedCandidature', []);

        return parent::getBlockedCandidature();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockedCandidature(bool $BlockedCandidature): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockedCandidature', [$BlockedCandidature]);

        return parent::setBlockedCandidature($BlockedCandidature);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsAdAuthor(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsAdAuthor', []);

        return parent::getIsAdAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAdAuthor(?bool $isAdAuthor): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAdAuthor', [$isAdAuthor]);

        return parent::setIsAdAuthor($isAdAuthor);
    }

}
