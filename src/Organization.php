<?php

namespace Stevenmaguire\Schemas;

use DateTime;

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
     * Sets aggregateRating.
     *
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param \Stevenmaguire\Schemas\AggregateRating $aggregateRating
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setAggregateRating(AggregateRating $aggregateRating);

    /**
     * Gets aggregateRating.
     *
     * @return \Stevenmaguire\Schemas\AggregateRating
     */
    public function getAggregateRating();

    /**
     * Sets award.
     *
     * An award won by or for this item. Supersedes awards.
     *
     * @param string $award
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setAward($award);

    /**
     * Gets award.
     *
     * @return string
     */
    public function getAward();

    /**
     * Sets brand.
     *
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param \Stevenmaguire\Schemas\Brand|\Stevenmaguire\Schemas\Organization $brand
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setBrand($brand);

    /**
     * Gets brand.
     *
     * @return \Stevenmaguire\Schemas\Brand|\Stevenmaguire\Schemas\Organization
     */
    public function getBrand();

    /**
     * Sets contactPoint.
     *
     * A contact point for a person or organization. Supersedes contactPoints.
     *
     * @param \Stevenmaguire\Schemas\ContactPoint  $contactPoint
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setContactPoint(ContactPoint $contactPoint);

    /**
     * Gets contactPoint.
     *
     * @return \Stevenmaguire\Schemas\ContactPoint
     */
    public function getContactPoint();

    /**
     * Sets department.
     *
     * A relationship between an organization and a department of that organization,
     * also described as an organization (allowing different urls, logos, opening
     * hours). For example: a store with a pharmacy, or a bakery with a cafe.
     *
     * @param \Stevenmaguire\Schemas\Organization $department
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setDepartment(Organization $department);

    /**
     * Gets department.
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function getDepartment();

    /**
     * Sets dissolutionDate.
     *
     * The date that this organization was dissolved.
     *
     * @param DateTime $dissolutionDate
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function setDissolutionDate(DateTime $dissolutionDate);

    /**
     * Gets dissolutionDate.
     *
     * @return DateTime
     */
    public function getDissolutionDate();

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
