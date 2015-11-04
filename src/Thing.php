<?php

namespace Stevenmaguire\Schemas;

/**
 * The most generic type of item.
 *
 * @see http://schema.org/Thing Documentation on Schema.org
 */
interface Thing
{
    /**
     * Sets additionalType.
     *
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in.
     * In RDFa syntax, it is better to use the native RDFa syntax - the
     * 'typeof' attribute - for multiple types. Schema.org tools may have
     * only weaker understanding of extra types, in particular those defined
     * externally.
     *
     * @param string $additionalType
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setAdditionalType($additionalType);

    /**
     * Gets additionalType.
     *
     * @return string
     */
    public function getAdditionalType();

    /**
     * Sets alternateName.
     *
     * An alias for the item.
     *
     * @param string $alternateName
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setAlternateName($alternateName);

    /**
     * Gets alternateName.
     *
     * @return string
     */
    public function getAlternateName();

    /**
     * Sets description.
     *
     * A short description of the item.
     *
     * @param string $description
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setDescription($description);

    /**
     * Gets description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Sets image.
     *
     * An image of the item. This can be a URL or a fully described ImageObject.
     *
     * @param \Stevenmaguire\Schemas\ImageObject|string $image
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setImage($image);

    /**
     * Gets image.
     *
     * @return \Stevenmaguire\Schemas\ImageObject|string
     */
    public function getImage();

    /**
     * Sets mainEntityOfPage.
     *
     * Indicates a page (or other CreativeWork) for which this thing is the
     * main entity being described.
     *
     * @param \Stevenmaguire\Schemas\CreativeWork|string $mainEntityOfPage
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setMainEntityOfPage($mainEntityOfPage);

    /**
     * Gets mainEntityOfPage.
     *
     * @return \Stevenmaguire\Schemas\CreativeWork|string
     */
    public function getMainEntityOfPage();

    /**
     * Sets name.
     *
     * The name of the item.
     *
     * @param string $name
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setName($name);

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets potentialAction.
     *
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Stevenmaguire\Schemas\Action $potentialAction
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setPotentialAction(Action $potentialAction);

    /**
     * Gets potentialAction.
     *
     * @return \Stevenmaguire\Schemas\Action
     */
    public function getPotentialAction();

    /**
     * Sets sameAs.
     *
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Freebase page, or
     * official website.
     *
     * @param string $sameAs
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setSameAs($sameAs);

    /**
     * Gets sameAs.
     *
     * @return string
     */
    public function getSameAs();

    /**
     * Sets url.
     *
     * URL of the item.
     *
     * @param string $url
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function setUrl($url);

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl();
}
