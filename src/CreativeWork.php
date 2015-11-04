<?php

namespace Stevenmaguire\Schemas;

use \DateTime

/**
 * The most generic kind of creative work, including books, movies, photographs,
 * software programs, etc.
 *
 * @see http://schema.org/CreativeWork Documentation on Schema.org
 */
interface CreativeWork extends Thing
{
    /**
     * Sets about.
     *
     * The subject matter of the content.
     *
     * @param \Stevenmaguire\Schemas\Thing $$about
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAbout(Thing $about);

    /**
     * Gets about.
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function getAbout();

    /**
     * Sets accessibilityAPI.
     *
     * Indicates that the resource is compatible with the referenced
     * accessibility API (WebSchemas wiki lists possible values).
     *
     * @param string $accessibilityAPI
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAccessibilityAPI($accessibilityAPI);

    /**
     * Gets accessibilityAPI.
     *
     * @return string
     */
    public function getAccessibilityAPI();

    /**
     * Sets accessibilityControl.
     *
     * Identifies input methods that are sufficient to fully control the
     * described resource (WebSchemas wiki lists possible values).
     *
     * @param string $accessibilityControl
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAccessibilityControl($accessibilityControl);

    /**
     * Gets accessibilityControl.
     *
     * @return string
     */
    public function getAccessibilityControl();

    /**
     * Sets accessibilityFeature.
     *
     * Content features of the resource, such as accessible media,
     * alternatives and supported enhancements for accessibility (WebSchemas
     * wiki lists possible values).
     *
     * @param string $accessibilityFeature
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAccessibilityFeature($accessibilityFeature);

    /**
     * Gets accessibilityFeature.
     *
     * @return string
     */
    public function getAccessibilityFeature();

    /**
     * Sets accessibilityHazard.
     *
     * A characteristic of the described resource that is physiologically
     * dangerous to some users. Related to WCAG 2.0 guideline 2.3 (WebSchemas
     * wiki lists possible values).
     *
     * @param string $accessibilityHazard
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAccessibilityHazard($accessibilityHazard);

    /**
     * Gets accessibilityHazard.
     *
     * @return string
     */
    public function getAccessibilityHazard();

    /**
     * Sets accountablePerson.
     *
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @param \Stevenmaguire\Schemas\Person $accountablePerson
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAccountablePerson(Person $accountablePerson);

    /**
     * Gets accountablePerson.
     *
     * @return \Stevenmaguire\Schemas\Person
     */
    public function getAccountablePerson();

    /**
     * Sets aggregateRating.
     *
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param \Stevenmaguire\Schemas\AggregateRating $aggregateRating
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAggregateRating(AggregateRating $aggregateRating);

    /**
     * Gets aggregateRating.
     *
     * @return \Stevenmaguire\Schemas\AggregateRating
     */
    public function getAggregateRating();

    /**
     * Sets alternativeHeadline.
     *
     * A secondary title of the CreativeWork.
     *
     * @param string $alternativeHeadline
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAlternativeHeadline($alternativeHeadline);

    /**
     * Gets alternativeHeadline.
     *
     * @return string
     */
    public function getAlternativeHeadline();

    /**
     * Sets associatedMedia.
     *
     * A media object that encodes this CreativeWork. This property is a synonym
     * for encoding.
     *
     * @param \Stevenmaguire\Schemas\MediaObject $associatedMedia
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAssociatedMedia(MediaObject $associatedMedia);

    /**
     * Gets associatedMedia.
     *
     * @return \Stevenmaguire\Schemas\MediaObject
     */
    public function getAssociatedMedia();

    /**
     * Sets audience.
     *
     * An intended audience, i.e. a group for whom something was created.
     * Supersedes serviceAudience.
     *
     * @param \Stevenmaguire\Schemas\Audience $audience
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAudience(Audience $audience);

    /**
     * Gets audience.
     *
     * @return \Stevenmaguire\Schemas\Audience
     */
    public function getAudience();

    /**
     * Sets audio.
     *
     * An embedded audio object.
     *
     * @param \Stevenmaguire\Schemas\AudioObject $audio
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAudio(AudioObject $audio);

    /**
     * Gets audio.
     *
     * @return \Stevenmaguire\Schemas\AudioObject
     */
    public function getAudio();

    /**
     * Sets author.
     *
     * The author of this content. Please note that author is special in that
     * HTML 5 provides a special mechanism for indicating authorship via the
     * rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @param \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization $author
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAuthor($author);

    /**
     * Gets author.
     *
     * @return \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization
     */
    public function getAuthor();

    /**
     * Sets award.
     *
     * An award won by or for this item. Supersedes awards.
     *
     * @param string $award
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setAward($award);

    /**
     * Gets award.
     *
     * @return string
     */
    public function getAward();

    /**
     * Sets character.
     *
     * Fictional person connected with a creative work.
     *
     * @param \Stevenmaguire\Schemas\Person $character
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setCharacter(Person $character);

    /**
     * Gets character.
     *
     * @return \Stevenmaguire\Schemas\Person
     */
    public function getCharacter();

    /**
     * Sets citation.
     *
     * or Text    A citation or reference to another creative work, such as
     * another publication, web page, scholarly article, etc.
     *
     * @param \Stevenmaguire\Schemas\CreativeWork $citation
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setCitation(CreativeWork $citation);

    /**
     * Gets citation.
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function getCitation();

    /**
     * Sets comment.
     *
     * Comments, typically from users.
     *
     * @param \Stevenmaguire\Schemas\Comment $comment
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setComment(Comment $comment);

    /**
     * Gets comment.
     *
     * @return \Stevenmaguire\Schemas\Comment
     */
    public function getComment();

    /**
     * Sets commentCount.
     *
     * The number of comments this CreativeWork ($e.g. Article, Question or
     * Answer) has received. This is most applicable to works published in Web
     * sites with commenting system; additional comments may exist elsewhere.
     *
     * @param integer $commentCount
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setCommentCount($commentCount);

    /**
     * Gets commentCount.
     *
     * @return integer
     */
    public function getCommentCount();

    /**
     * Sets contentLocation.
     *
     * The location depicted or described in the content. For example, the
     * location in a photograph or painting.
     *
     * @param \Stevenmaguire\Schemas\Place $contentLocation
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setContentLocation(Place $contentLocation);

    /**
     * Gets contentLocation.
     *
     * @return \Stevenmaguire\Schemas\Place
     */
    public function getContentLocation();

    /**
     * Sets contentRating.
     *
     * Official rating of a piece of content—for example,'MPAA PG-13'.
     *
     * @param string $contentRating
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setContentRating($contentRating);

    /**
     * Gets contentRating.
     *
     * @return string
     */
    public function getContentRating();

    /**
     * Sets contributor.
     *
     * A secondary contributor to the CreativeWork.
     *
     * @param \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization $contributor
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setContributor($contributor);

    /**
     * Gets contributor.
     *
     * @return \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization
     */
    public function getContributor();

    /**
     * Sets copyrightHolder.
     *
     * The party holding the legal copyright to the CreativeWork.
     *
     * @param \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization $copyrightHolder
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setCopyrightHolder($copyrightHolder);

    /**
     * Gets copyrightHolder.
     *
     * @return \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization
     */
    public function getCopyrightHolder();

    /**
     * Sets copyrightYear.
     *
     * The year during which the claimed copyright for the CreativeWork was
     * first asserted.
     *
     * @param integer|float $copyrightYear
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setCopyrightYear($copyrightYear);

    /**
     * Gets copyrightYear.
     *
     * @return integer|float
     */
    public function getCopyrightYear();

    /**
     * Sets creator.
     *
     * The creator/author of this CreativeWork. This is the same as the Author
     * property for CreativeWork.
     *
     * @param \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization $creator
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setCreator($creator);

    /**
     * Gets creator.
     *
     * @return \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization
     */
    public function getCreator();

    /**
     * Sets dateCreated.
     *
     * The date on which the CreativeWork was created.
     *
     * @param \DateTime $dateCreated
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setDateCreated(DateTime $dateCreated);

    /**
     * Gets dateModified.
     *
     * @return \DateTime
     */
    public function getDateCreated();

    /**
     * Sets dateModified.
     *
     * The date on which the CreativeWork was most recently modified.
     *
     * @param \DateTime $dateModified
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setDateModified(DateTime $dateModified);

    /**
     * Gets dateModified.
     *
     * @return \DateTime
     */
    public function getDateModified();

    /**
     * Sets datePublished.
     *
     * Date of first broadcast/publication.
     *
     * @param \DateTime $datePublished
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setDatePublished(DateTime $datePublished);

    /**
     * Gets datePublished.
     *
     * @return \DateTime
     */
    public function getDatePublished();

    /**
     * Sets discussionUrl.
     *
     * A link to the page containing the comments of the CreativeWork.
     *
     * @param string $discussionUrl
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setDiscussionUrl($discussionUrl);

    /**
     * Gets discussionUrl.
     *
     * @return string
     */
    public function getDiscussionUrl();

    /**
     * Sets editor.
     *
     * Specifies the Person who edited the CreativeWork.
     *
     * @param \Stevenmaguire\Schemas\Person $editor
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setEditor(Person $editor);

    /**
     * Gets editor.
     *
     * @return \Stevenmaguire\Schemas\Person
     */
    public function getEditor();

    /**
     * Sets educationalAlignment.
     *
     * An alignment to an established educational framework.
     *
     * @param \Stevenmaguire\Schemas\AlignmentObject $educationalAlignment
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setEducationalAlignment(AlignmentObject $educationalAlignment);

    /**
     * Gets educationalAlignment.
     *
     * @return \Stevenmaguire\Schemas\AlignmentObject
     */
    public function getEducationalAlignment();

    /**
     * Sets educationalUse.
     *
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     *
     * @param string $educationalUse
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setEducationalUse($educationalUse);

    /**
     * Gets educationalUse.
     *
     * @return string
     */
    public function getEducationalUse();

    /**
     * Sets encoding.
     *
     * A media object that encodes this CreativeWork. This property is a synonym
     * for associatedMedia. Supersedes encodings.
     *
     * @param \Stevenmaguire\Schemas\MediaObject $encoding
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setEncoding(MediaObject $encoding);

    /**
     * Gets encoding.
     *
     * @return \Stevenmaguire\Schemas\MediaObject
     */
    public function getEncoding();

    /**
     * Sets exampleOfWork.
     *
     * A creative work that this work is an example/instance/realization/derivation of.
     *
     * @param \Stevenmaguire\Schemas\CreativeWork $exampleOfWork
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setExampleOfWork(CreativeWork $exampleOfWork);

    /**
     * Gets exampleOfWork.
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function getExampleOfWork();

    /**
     * Sets genre.
     *
     * or Text    Genre of the creative work or group.
     *
     * @param string $genre
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setGenre($genre);

    /**
     * Gets genre.
     *
     * @return string
     */
    public function getGenre();

    /**
     * Sets hasPart.
     *
     * Indicates a CreativeWork that is ($in some sense) a part of this CreativeWork.
     *
     * @param \Stevenmaguire\Schemas\CreativeWork $hasPart
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setHasPart(CreativeWork $hasPart);

    /**
     * Gets hasPart.
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function getHasPart();

    /**
     * Sets headline.
     *
     * Headline of the article.
     *
     * @param string $headline
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setHeadline($headline);

    /**
     * Gets headline.
     *
     * @return string
     */
    public function getHeadline();

    /**
     * Sets inLanguage.
     *
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the IETF BCP 47 standard. Supersedes
     * language.
     *
     * @param \Stevenmaguire\Schemas\Language|string $inLanguage
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setInLanguage($inLanguage);

    /**
     * Gets inLanguage.
     *
     * @return \Stevenmaguire\Schemas\Language|string
     */
    public function getInLanguage();

    /**
     * Sets interactionStatistic.
     *
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used. Supersedes interactionCount.
     *
     * @param \Stevenmaguire\Schemas\InteractionCounter $interactionStatistic
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setInteractionStatistic(InteractionCounter $interactionStatistic);

    /**
     * Gets interactionStatistic.
     *
     * @return \Stevenmaguire\Schemas\InteractionCounter
     */
    public function getInteractionStatistic();

    /**
     * Sets interactivityType.
     *
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @param string $interactivityType
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setInteractivityType($interactivityType);

    /**
     * Gets interactivityType.
     *
     * @return string
     */
    public function getInteractivityType();

    /**
     * Sets isBasedOnUrl.
     *
     * A resource that was used in the creation of this resource. This term can
     * be repeated for multiple sources.
     * For example, http://example.com/great-multiplication-intro.html.
     *
     * @param string $isBasedOnUrl
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setIsBasedOnUrl($isBasedOnUrl);

    /**
     * Gets isBasedOnUrl.
     *
     * @return string
     */
    public function getIsBasedOnUrl();

    /**
     * Sets isFamilyFriendly.
     *
     * Indicates whether this content is family friendly.
     *
     * @param boolean $isFamilyFriendly
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setIsFamilyFriendly($isFamilyFriendly);

    /**
     * Gets isFamilyFriendly.
     *
     * @return boolean
     */
    public function getIsFamilyFriendly();

    /**
     * Sets isPartOf.
     *
     * Indicates a CreativeWork that this CreativeWork is ($in some sense) part of.
     *
     * @param \Stevenmaguire\Schemas\CreativeWork $isPartOf
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setIsPartOf(CreativeWork $isPartOf);

    /**
     * Gets isPartOf.
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function getIsPartOf();

    /**
     * Sets keywords.
     *
     * Keywords or tags used to describe this content. Multiple entries in a
     * keywords list are typically delimited by commas.
     *
     * @param string $keywords
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setKeywords($keywords);

    /**
     * Gets keywords.
     *
     * @return string
     */
    public function getKeywords();

    /**
     * Sets learningResourceType.
     *
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     *
     * @param string $learningResourceType
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setLearningResourceType($learningResourceType);

    /**
     * Gets learningResourceType.
     *
     * @return string
     */
    public function getLearningResourceType();

    /**
     * Sets license.
     *
     * or URL     A license document that applies to this content, typically
     * indicated by URL.
     *
     * @param \Stevenmaguire\Schemas\CreativeWork $license
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setLicense(CreativeWork $license);

    /**
     * Gets license.
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function getLicense();

    /**
     * Sets mainEntity.
     *
     * Indicates the primary entity described in some page or other CreativeWork.
     *
     * @param \Stevenmaguire\Schemas\Thing $mainEntity
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setMainEntity(Thing $mainEntity);

    /**
     * Gets mainEntity.
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function getMainEntity();

    /**
     * Sets mentions.
     *
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     *
     * @param \Stevenmaguire\Schemas\Thing $mentions
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setMentions(Thing $mentions);

    /**
     * Gets mentions.
     *
     * @return \Stevenmaguire\Schemas\Thing
     */
    public function getMentions();

    /**
     * Sets offers.
     *
     * An offer to provide this item—for example, an offer to sell a product,
     * rent the DVD of a movie, or give away tickets to an event.
     *
     * @param \Stevenmaguire\Schemas\Offer $offers
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setOffers(Offer $offers);

    /**
     * Gets offers.
     *
     * @return \Stevenmaguire\Schemas\Offer
     */
    public function getOffers();

    /**
     * Sets position.
     *
     * The position of an item in a series or sequence of items.
     *
     * @param integer|string $position
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setPosition($position);

    /**
     * Gets position.
     *
     * @return integer|string
     */
    public function getPosition();

    /**
     * Sets producer.
     *
     * The person or organization who produced the work ($e.g. music album,
     * movie, tv/radio series etc.).
     *
     * @param \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization $producer
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setProducer($producer);

    /**
     * Gets producer.
     *
     * @return \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization
     */
    public function getProducer();

    /**
     * Sets provider.
     *
     * The service provider, service operator, or service performer; the goods
     * producer. Another party ($a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     * Supersedes carrier.
     *
     * @param \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization $provider
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setProvider($provider);

    /**
     * Gets provider.
     *
     * @return \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization
     */
    public function getProvider();

    /**
     * Sets publication.
     *
     * A publication event associated with the item.
     *
     * @param \Stevenmaguire\Schemas\PublicationEvent $publication
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setPublication(PublicationEvent $publication);

    /**
     * Gets publication.
     *
     * @return \Stevenmaguire\Schemas\PublicationEvent
     */
    public function getPublication();

    /**
     * Sets publisher.
     *
     * The publisher of the creative work.
     *
     * @param \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization $publisher
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setPublisher($publisher);

    /**
     * Gets publisher.
     *
     * @return \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization
     */
    public function getPublisher();

    /**
     * Sets publishingPrinciples.
     *
     * Link to page describing the editorial principles of the organization
     * primarily responsible for the creation of the CreativeWork.
     *
     * @param string $publishingPrinciples
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setPublishingPrinciples($publishingPrinciples);

    /**
     * Gets publishingPrinciples.
     *
     * @return string
     */
    public function getPublishingPrinciples();

    /**
     * Sets recordedAt.
     *
     * The Event where the CreativeWork was recorded. The CreativeWork may
     * capture all or part of the event.
     *
     * @param \Stevenmaguire\Schemas\Event $recordedAt
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setRecordedAt(Event $recordedAt);

    /**
     * Gets recordedAt.
     *
     * @return \Stevenmaguire\Schemas\Event
     */
    public function getRecordedAt();

    /**
     * Sets releasedEvent.
     *
     * The place and time the release was issued, expressed as a PublicationEvent.
     *
     * @param \Stevenmaguire\Schemas\PublicationEvent $releasedEvent
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setReleasedEvent(PublicationEvent $releasedEvent);

    /**
     * Gets releasedEvent.
     *
     * @return \Stevenmaguire\Schemas\PublicationEvent
     */
    public function getReleasedEvent();

    /**
     * Sets review.
     *
     * A review of the item. Supersedes reviews.
     *
     * @param \Stevenmaguire\Schemas\Review $review
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setReview(Review $review);

    /**
     * Gets review.
     *
     * @return \Stevenmaguire\Schemas\Review
     */
    public function getReview();

    /**
     * Sets schemaVersion.
     *
     * or  Text    Indicates ($by URL or string) a particular version of a
     * schema used in some CreativeWork. For example, a document could declare a
     * schemaVersion using a URL such as http://schema.org/version/2.0/ if precise
     * indication of schema version was required by some application.
     *
     * @param string $schemaVersion
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setSchemaVersion($schemaVersion);

    /**
     * Gets schemaVersion.
     *
     * @return string
     */
    public function getSchemaVersion();

    /**
     * Sets sourceOrganization.
     *
     * The Organization on whose behalf the creator was working.
     *
     * @param \Stevenmaguire\Schemas\Organization $sourceOrganization
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setSourceOrganization(Organization $sourceOrganization);

    /**
     * Gets sourceOrganization.
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function getSourceOrganization();

    /**
     * Sets text.
     *
     * The textual content of this CreativeWork.
     *
     * @param string $text
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setText($text);

    /**
     * Gets text.
     *
     * @return string
     */
    public function getText();

    /**
     * Sets thumbnailUrl.
     *
     * A thumbnail image relevant to the \Stevenmaguire\Schemas\Thing.
     *
     * @param string $thumbnailUrl
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setThumbnailUrl($thumbnailUrl);

    /**
     * Gets thumbnailUrl.
     *
     * @return string
     */
    public function getThumbnailUrl();

    /**
     * Sets timeRequired.
     *
     * Approximate or typical time it takes to work with or through this learning
     * resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
     *
     * @param \Stevenmaguire\Schemas\Duration $timeRequired
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setTimeRequired(Duration $timeRequired);

    /**
     * Gets timeRequired.
     *
     * @return \Stevenmaguire\Schemas\Duration
     */
    public function getTimeRequired();

    /**
     * Sets translator.
     *
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market.
     *
     * @param \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization $translator
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setTranslator($translator);

    /**
     * Gets translator.
     *
     * @return \Stevenmaguire\Schemas\Person|\Stevenmaguire\Schemas\Organization
     */
    public function getTranslator();

    /**
     * Sets typicalAgeRange.
     *
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param string $typicalAgeRange
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setTypicalAgeRange($typicalAgeRange);

    /**
     * Gets typicalAgeRange.
     *
     * @return string
     */
    public function getTypicalAgeRange();

    /**
     * Sets version.
     *
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @param integer|float $version
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setVersion($version);

    /**
     * Gets version.
     *
     * @return integer|float
     */
    public function getVersion();

    /**
     * Sets video.
     *
     * An embedded video object.
     *
     * @param \Stevenmaguire\Schemas\VideoObject $video
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setVideo(VideoObject $video);

    /**
     * Gets video.
     *
     * @return \Stevenmaguire\Schemas\VideoObject
     */
    public function getVideo();

    /**
     * Sets workExample.
     *
     * Example/instance/realization/derivation of the concept of this creative
     * work. eg. The paperback edition, first edition, or eBook.
     *
     * @param \Stevenmaguire\Schemas\CreativeWork $workExample
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function setWorkExample(CreativeWork $workExample);

    /**
     * Gets workExample.
     *
     * @return \Stevenmaguire\Schemas\CreativeWork
     */
    public function getWorkExample();
}
