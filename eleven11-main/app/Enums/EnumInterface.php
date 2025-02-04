<?php
namespace App\Enums;

interface EnumInterface{
    public static function getPropertyStatus(): array;
    public static function getPropertyModerationStatus(): array;
    public static function getProjectStatus(): array;
}