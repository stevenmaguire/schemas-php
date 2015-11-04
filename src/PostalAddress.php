<?php

namespace Stevenmaguire\Schemas;

/**
 * The mailing address.
 *
 * @see http://schema.org/PostalAddress Documentation on Schema.org
 */
interface PostalAddress extends ContactPoint
{
    /**
     * Sets addressCountry.
     *
     * The country. For example, USA. You can also provide the two-letter
     * ISO 3166-1 alpha-2 country code.
     * @see http://en.wikipedia.org/wiki/ISO_3166-1 ISO 3166-1 alpha-2 country code
     *
     * @param string $addressCountry
     *
     * @return \Stevenmaguire\Schemas\PostalAddress
     */
    public function setAddressCountry($addressCountry);

    /**
     * Gets addressCountry.
     *
     * @return string
     */
    public function getAddressCountry();

    /**
     * Sets addressLocality.
     *
     * The locality. For example, Mountain View.
     *
     * @param string $addressLocality
     *
     * @return \Stevenmaguire\Schemas\PostalAddress
     */
    public function setAddressLocality($addressLocality);

    /**
     * Gets addressLocality.
     *
     * @return string
     */
    public function getAddressLocality();

    /**
     * Sets addressRegion.
     *
     * The region. For example, CA.
     *
     * @param string $addressRegion
     *
     * @return \Stevenmaguire\Schemas\PostalAddress
     */
    public function setAddressRegion($addressRegion);

    /**
     * Gets addressRegion.
     *
     * @return string
     */
    public function getAddressRegion();

    /**
     * Sets postalCode.
     *
     * The postal code. For example, 94043.
     *
     * @param string $postalCode
     *
     * @return \Stevenmaguire\Schemas\PostalAddress
     */
    public function setPostalCode($postalCode);

    /**
     * Gets postalCode.
     *
     * @return string
     */
    public function getPostalCode();

    /**
     * Sets postOfficeBoxNumber.
     *
     * The post office box number for PO box addresses.
     *
     * @param string $postOfficeBoxNumber
     *
     * @return \Stevenmaguire\Schemas\PostalAddress
     */
    public function setPostOfficeBoxNumber($postOfficeBoxNumber);

    /**
     * Gets postOfficeBoxNumber.
     *
     * @return string
     */
    public function getPostOfficeBoxNumber();

    /**
     * Sets streetAddress.
     *
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @param string $streetAddress
     *
     * @return \Stevenmaguire\Schemas\PostalAddress
     */
    public function setStreetAddress($streetAddress);

    /**
     * Gets streetAddress.
     *
     * @return string
     */
    public function getStreetAddress();
}
