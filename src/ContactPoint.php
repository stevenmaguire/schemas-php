<?php

namespace Stevenmaguire\Schemas;

/**
 * A contact point—for example, a Customer Complaints department.
 *
 * @see http://schema.org/ContactPoint Documentation on Schema.org
 */
interface ContactPoint extends StructuredValue
{
/*
areaServed  AdministrativeArea  The location served by this contact point (e.g., a phone number intended for Europeans vs. North Americans or only within the United States).
availableLanguage   Language    A language someone may use with the item.
contactOption   ContactPointOption  An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
contactType Text    A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
email   Text    Email address.
faxNumber   Text    The fax number.
hoursAvailable  OpeningHoursSpecification   The hours during which this contact point is available.
productSupported    Product  or Text    The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
telephone   Text    The telephone number.
*/
}
