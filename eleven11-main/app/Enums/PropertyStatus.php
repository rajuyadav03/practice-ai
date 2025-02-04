<?php 
namespace App\Enums;

class PropertyStatus implements EnumInterface
{
    //Property Status
    const NOT_AVAILABLE = 'Not Available';
    const PREPAIRING_SELLING = 'Prepairing Selling';
    const SELLING = 'Selling';
    const SOLD = 'Sold';
    const RENTING = 'Renting';
    const RENTED = 'Rented';
    const BUILDING = 'Building';

    //Property Moderation Status
    const PENDING = 'Pending';
    const APPROVED = 'Approved';
    const REJECTED = 'Rejected';

    public static function getPropertyStatus(): array
    {
        return [
            self::NOT_AVAILABLE,
            self::PREPAIRING_SELLING,
            self::SELLING,
            self::SOLD,
            self::RENTING,
            self::RENTED,
            self::BUILDING
        ];
    }

    public static function getPropertyModerationStatus(): array
    {
        return [
            self::PENDING,
            self::APPROVED,
            self::PENDING
        ];
    }

    public static function getProjectStatus(): array
    {
        return [
            self::NOT_AVAILABLE,
            self::PREPAIRING_SELLING,
            self::SELLING,
            self::SOLD,
            self::RENTING,
            self::RENTED,
            self::BUILDING
        ];
    }
}