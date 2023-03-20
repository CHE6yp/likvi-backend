<?php

declare(strict_types=1);

namespace App\Entity;

// use App\Component\Car\Entity\Offer\Source;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\ApiProperty;
use Doctrine\ORM\Mapping as ORM;
use DateTimeImmutable;
use Symfony\Component\Uid\Uuid;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Event\PrePersistEventArgs;

#[ApiResource]
#[ORM\Entity]
#[ORM\HasLifecycleCallbacks]
class Offer
{

    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    #[ApiProperty(identifier: false)]
    private ?int $id = null;

    // [ORM\Column(type: 'uuid', unique: true)]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ApiProperty(identifier: true)]
    private ?Uuid $uuid = null;

    
    #[ORM\Column(nullable: true)]
    private ?string $innerId = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $address = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $bodyType = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $chatOnly = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $city = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $color = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $equipment = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $condition = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $configuration = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $contactPerson = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $custom = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $damaged = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $description = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $displacement = null;
    
    #[ORM\Column(nullable: true)]
    private ?array $districts = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $doorsCount = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $driveType = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $engineType = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $exchange = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $generation = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $horsePower = null;
    
    #[ORM\Column(nullable: true)]
    private ?array $imagesList = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $inStock = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $isRedirectPhone = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $mileage = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $mark = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $underground = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $model = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $noAccidents = null;
    
    #[ORM\Column(nullable: true)]
    private ?array $options = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $ownersCount = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $phone = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepBodyType = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepColor = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepCondition = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepCustom = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepDriveType = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepEngineType = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepPhone = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepPts = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepSellerType = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepTransmission = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $prepWheel = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $price = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $pts = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $region = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $section = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $seller = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $sellerType = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $shop = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $stateNotBeaten = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $title = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $totalViews = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $transmission = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $url = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $vin = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $warranty = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $wheel = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $year = null;
    
    #[ORM\Column]
    private Source $source;
    
    #[ORM\Column(nullable: true)]
    private ?DateTimeImmutable $createdAt = null;

    #[ORM\PrePersist]
    public function generateUuid(PrePersistEventArgs $eventArgs)
    {
        $this->uuid = Uuid::v7();
    }

    public function getUuid(): ?Uuid
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): Offer
    {

        $this->uuid = Uuid::fromString($uuid);
        return $this;
    }

    public function getInnerId(): ?string
    {
        return $this->innerId;
    }

    public function setInnerId(?string $innerId): Offer
    {
        $this->innerId = $innerId;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): Offer
    {
        $this->address = $address;
        return $this;
    }

    public function getBodyType(): ?string
    {
        return $this->bodyType;
    }

    public function setBodyType(?string $bodyType): Offer
    {
        $this->bodyType = $bodyType;
        return $this;
    }

    public function getChatOnly(): ?bool
    {
        return $this->chatOnly;
    }

    public function setChatOnly(?bool $chatOnly): Offer
    {
        $this->chatOnly = $chatOnly;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Offer
    {
        $this->city = $city;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): Offer
    {
        $this->color = $color;
        return $this;
    }

    public function getEquipment(): ?string
    {
        return $this->equipment;
    }

    public function setEquipment(?string $equipment): Offer
    {
        $this->equipment = $equipment;
        return $this;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition(?string $condition): Offer
    {
        $this->condition = $condition;
        return $this;
    }

    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(?string $configuration): Offer
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    public function setContactPerson(?string $contactPerson): Offer
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    public function getCustom(): ?string
    {
        return $this->custom;
    }

    public function setCustom(?string $custom): Offer
    {
        $this->custom = $custom;
        return $this;
    }

    public function getDamaged(): ?bool
    {
        return $this->damaged;
    }

    public function setDamaged(?bool $damaged): Offer
    {
        $this->damaged = $damaged;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Offer
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplacement(): ?string
    {
        return $this->displacement;
    }

    public function setDisplacement(?string $displacement): Offer
    {
        $this->displacement = $displacement;
        return $this;
    }

    public function getDistricts(): ?array
    {
        return $this->districts;
    }

    public function setDistricts(?array $districts): Offer
    {
        $this->districts = $districts;
        return $this;
    }

    public function getDoorsCount(): ?string
    {
        return $this->doorsCount;
    }

    public function setDoorsCount(?string $doorsCount): Offer
    {
        $this->doorsCount = $doorsCount;
        return $this;
    }

    public function getDriveType(): ?string
    {
        return $this->driveType;
    }

    public function setDriveType(?string $driveType): Offer
    {
        $this->driveType = $driveType;
        return $this;
    }

    public function getEngineType(): ?string
    {
        return $this->engineType;
    }

    public function setEngineType(?string $engineType): Offer
    {
        $this->engineType = $engineType;
        return $this;
    }

    public function getExchange(): ?bool
    {
        return $this->exchange;
    }

    public function setExchange(?bool $exchange): Offer
    {
        $this->exchange = $exchange;
        return $this;
    }

    public function getGeneration(): ?string
    {
        return $this->generation;
    }

    public function setGeneration(?string $generation): Offer
    {
        $this->generation = $generation;
        return $this;
    }

    public function getHorsePower(): ?string
    {
        return $this->horsePower;
    }

    public function setHorsePower(?string $horsePower): Offer
    {
        $this->horsePower = $horsePower;
        return $this;
    }

    public function getImagesList(): ?array
    {
        return $this->imagesList;
    }

    public function setImagesList(?array $imagesList): Offer
    {
        $this->imagesList = $imagesList;
        return $this;
    }

    public function getInStock(): ?string
    {
        return $this->inStock;
    }

    public function setInStock(?string $inStock): Offer
    {
        $this->inStock = $inStock;
        return $this;
    }

    public function getIsRedirectPhone(): ?bool
    {
        return $this->isRedirectPhone;
    }

    public function setIsRedirectPhone(?bool $isRedirectPhone): Offer
    {
        $this->isRedirectPhone = $isRedirectPhone;
        return $this;
    }

    public function getMileage(): ?string
    {
        return $this->mileage;
    }

    public function setMileage(?string $mileage): Offer
    {
        $this->mileage = $mileage;
        return $this;
    }

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(?string $mark): Offer
    {
        $this->mark = $mark;
        return $this;
    }

    public function getUnderground(): ?string
    {
        return $this->underground;
    }

    public function setUnderground(?string $underground): Offer
    {
        $this->underground = $underground;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): Offer
    {
        $this->model = $model;
        return $this;
    }

    public function getNoAccidents(): ?bool
    {
        return $this->noAccidents;
    }

    public function setNoAccidents(?bool $noAccidents): Offer
    {
        $this->noAccidents = $noAccidents;
        return $this;
    }

    public function getOptions(): ?array
    {
        return $this->options;
    }

    public function setOptions(?array $options): Offer
    {
        $this->options = $options;
        return $this;
    }

    public function getOwnersCount(): ?string
    {
        return $this->ownersCount;
    }

    public function setOwnersCount(?string $ownersCount): Offer
    {
        $this->ownersCount = $ownersCount;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): Offer
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPrepBodyType(): ?string
    {
        return $this->prepBodyType;
    }

    public function setPrepBodyType(?string $prepBodyType): Offer
    {
        $this->prepBodyType = $prepBodyType;
        return $this;
    }

    public function getPrepColor(): ?string
    {
        return $this->prepColor;
    }

    public function setPrepColor(?string $prepColor): Offer
    {
        $this->prepColor = $prepColor;
        return $this;
    }

    public function getPrepCondition(): ?string
    {
        return $this->prepCondition;
    }

    public function setPrepCondition(?string $prepCondition): Offer
    {
        $this->prepCondition = $prepCondition;
        return $this;
    }

    public function getPrepCustom(): ?string
    {
        return $this->prepCustom;
    }

    public function setPrepCustom(?string $prepCustom): Offer
    {
        $this->prepCustom = $prepCustom;
        return $this;
    }

    public function getPrepDriveType(): ?string
    {
        return $this->prepDriveType;
    }

    public function setPrepDriveType(?string $prepDriveType): Offer
    {
        $this->prepDriveType = $prepDriveType;
        return $this;
    }

    public function getPrepEngineType(): ?string
    {
        return $this->prepEngineType;
    }

    public function setPrepEngineType(?string $prepEngineType): Offer
    {
        $this->prepEngineType = $prepEngineType;
        return $this;
    }

    public function getPrepPhone(): ?string
    {
        return $this->prepPhone;
    }

    public function setPrepPhone(?string $prepPhone): Offer
    {
        $this->prepPhone = $prepPhone;
        return $this;
    }

    public function getPrepPts(): ?string
    {
        return $this->prepPts;
    }

    public function setPrepPts(?string $prepPts): Offer
    {
        $this->prepPts = $prepPts;
        return $this;
    }

    public function getPrepSellerType(): ?string
    {
        return $this->prepSellerType;
    }

    public function setPrepSellerType(?string $prepSellerType): Offer
    {
        $this->prepSellerType = $prepSellerType;
        return $this;
    }

    public function getPrepTransmission(): ?string
    {
        return $this->prepTransmission;
    }

    public function setPrepTransmission(?string $prepTransmission): Offer
    {
        $this->prepTransmission = $prepTransmission;
        return $this;
    }

    public function getPrepWheel(): ?string
    {
        return $this->prepWheel;
    }

    public function setPrepWheel(?string $prepWheel): Offer
    {
        $this->prepWheel = $prepWheel;
        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): Offer
    {
        $this->price = $price;
        return $this;
    }

    public function getPts(): ?string
    {
        return $this->pts;
    }

    public function setPts(?string $pts): Offer
    {
        $this->pts = $pts;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): Offer
    {
        $this->region = $region;
        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(?string $section): Offer
    {
        $this->section = $section;
        return $this;
    }

    public function getSeller(): ?string
    {
        return $this->seller;
    }

    public function setSeller(?string $seller): Offer
    {
        $this->seller = $seller;
        return $this;
    }

    public function getSellerType(): ?string
    {
        return $this->sellerType;
    }

    public function setSellerType(?string $sellerType): Offer
    {
        $this->sellerType = $sellerType;
        return $this;
    }

    public function getShop(): ?bool
    {
        return $this->shop;
    }

    public function setShop(?bool $shop): Offer
    {
        $this->shop = $shop;
        return $this;
    }

    public function getStateNotBeaten(): ?bool
    {
        return $this->stateNotBeaten;
    }

    public function setStateNotBeaten(?bool $stateNotBeaten): Offer
    {
        $this->stateNotBeaten = $stateNotBeaten;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): Offer
    {
        $this->title = $title;
        return $this;
    }

    public function getTotalViews(): ?string
    {
        return $this->totalViews;
    }

    public function setTotalViews(?string $totalViews): Offer
    {
        $this->totalViews = $totalViews;
        return $this;
    }

    public function getTransmission(): ?string
    {
        return $this->transmission;
    }

    public function setTransmission(?string $transmission): Offer
    {
        $this->transmission = $transmission;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Offer
    {
        $this->url = $url;
        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): Offer
    {
        $this->vin = $vin;
        return $this;
    }

    public function getWarranty(): ?bool
    {
        return $this->warranty;
    }

    public function setWarranty(?bool $warranty): Offer
    {
        $this->warranty = $warranty;
        return $this;
    }

    public function getWheel(): ?string
    {
        return $this->wheel;
    }

    public function setWheel(?string $wheel): Offer
    {
        $this->wheel = $wheel;
        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(?string $year): Offer
    {
        $this->year = $year;
        return $this;
    }

    public function getSource(): Source
    {
        return $this->source;
    }

    public function setSource(Source $source): Offer
    {
        $this->source = $source;
        return $this;
    }

    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): Offer
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}

enum Source: int
{
    final public const DROMRU_ALIAS = 'drom';
    final public const AUTORU_ALIAS = 'autoru';
    final public const AVITORU_ALIAS = 'avito';

    case DROMRU = 1;
    case AVITORU = 2;
    case AUTORU = 3;

    public static function fromAlias(string $alias): self
    {
        return match ($alias) {
            self::DROMRU_ALIAS => self::DROMRU,
            self::AUTORU_ALIAS => self::AUTORU,
            self::AVITORU_ALIAS => self::AVITORU,
            default => throw new InvalidArgumentException(),
        };
    }

    public function alias(): string
    {
        return match ($this) {
            self::DROMRU => self::DROMRU_ALIAS,
            self::AUTORU => self::AUTORU_ALIAS,
            self::AVITORU => self::AVITORU_ALIAS,
        };
    }
}