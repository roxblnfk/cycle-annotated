<?php

declare(strict_types=1);

namespace Cycle\Annotated\Tests\Fixtures\Fixtures18;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Relation\BelongsTo;
use Cycle\Annotated\Annotation\Relation\HasMany;

#[Entity(
    role: 'booking_reservation',
    table: 'FlightReservation'
)]
class Reservation
{
    #[Column(type: 'primary', name: 'id_reservation')]
    protected ?int $rid = null;

    // #[BelongsTo(target: Booking::class, innerKey: 'id', outerKey: 'FlightRezervationId', fkCreate: false)]
    // private ?Booking $booking = null;

    #[HasMany(target: Segment::class)]
    private array $segments = [];
}
