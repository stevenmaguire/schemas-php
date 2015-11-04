<?php

namespace Stevenmaguire\Schemas;

/**
 * Entities that have a somewhat fixed, physical extension.
 *
 * @see http://schema.org/Place Documentation on Schema.org
 */
interface Place extends Thing
{
    /**
     * Sets address.
     *
     * Physical address of the item.
     *
     * @param \Stevenmaguire\Schemas\PostalAddress $address
     *
     * @return \Stevenmaguire\Schemas\Place
     */
    public function setAddress(PostalAddress $address = null);

    /**
     * Gets address.
     *
     * @return \Stevenmaguire\Schemas\PostalAddress
     */
    public function getAddress();

    /**
     * Sets telephone.
     *
     * The telephone number.
     *
     * @param string $telephone
     *
     * @return \Stevenmaguire\Schemas\Place
     */
    public function setTelephone($telephone);

    /**
     * Gets telephone.
     *
     * @return string
     */
    public function getTelephone();
}
