<?php

namespace Stevenmaguire\Schemas;

/**
 * Quantities such as distance, time, mass, weight, etc. Particular instances
 * of say Mass are entities like '3 Kg' or '4 milligrams'.
 *
 * @see http://schema.org/Quantity Documentation on Schema.org
 */
interface Quantity extends Intangible
{

}
