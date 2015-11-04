<?php

namespace Stevenmaguire\Schemas;

/**
 * An event happening at a certain time and location, such as a concert, lecture,
 * or festival. Ticketing information may be added via the 'offers' property.
 * Repeated events may be structured as separate Event objects.
 *
 * @see http://schema.org/Event Documentation on Schema.org
 */
interface Event extends Thing
{

}
