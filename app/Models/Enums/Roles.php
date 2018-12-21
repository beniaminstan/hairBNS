<?php
namespace App\Models\Enums;


class Roles extends Enum
{
    const ADMIN = 'admin';
    const CLIENT = 'client';
    const SALON_MANAGER = 'salon-manager';
    const SALON_HAIRDRESSER = 'salon-hairdresser';
}