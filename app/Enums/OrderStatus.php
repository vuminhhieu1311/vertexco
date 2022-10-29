<?php

namespace App\Enums;

final class OrderStatus
{
    public const PENDING = 'pending';
    public const APPROVED = 'approved';
    public const REJECTED = 'rejected';
    public const DELIVERED = 'delivered';
    public const PAID = 'paid';
    public const CANCELED = 'canceled';
}
