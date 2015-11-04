<?php

namespace Stevenmaguire\Schemas;

/**
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @see http://schema.org/Organization Documentation on Schema.org
 */
interface Organization extends Thing
{
    /**
     * Sets address.
     *
     * Physical address of the item.
     *
     * @param \Stevenmaguire\Schemas\PostalAddress $address
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setAddress(PostalAddress $address = null);

    /**
     * Gets address.
     *
     * @return \Stevenmaguire\Schemas\PostalAddress
     */
    public function getAddress();

    /**
     * Sets email.
     *
     * Email address.
     *
     * @param string $email
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setEmail($email);

    /**
     * Gets email.
     *
     * @return string
     */
    public function getEmail();

    /**
     * Sets logo.
     *
     * An associated logo.
     *
     * @param \Stevenmaguire\Schemas\ImageObject|string $logo
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setLogo($logo);

    /**
     * Gets logo.
     *
     * @return \Stevenmaguire\Schemas\ImageObject|string
     */
    public function getLogo();

    /**
     * Sets telephone.
     *
     * The telephone number.
     *
     * @param string $telephone
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setTelephone($telephone);

    /**
     * Gets telephone.
     *
     * @return string
     */
    public function getTelephone();
}
