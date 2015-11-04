<?php

namespace Stevenmaguire\Schemas;

use DateTime;

/**
 * A listing that describes a job opening in a certain organization.
 *
 * @see http://schema.org/JobPosting Documentation on Schema.org
 */
interface JobPosting extends Intangible
{
    /**
     * Sets baseSalary.
     *
     * @param float $baseSalary
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setBaseSalary($baseSalary);

    /**
     * Gets baseSalary.
     *
     * @return float
     */
    public function getBaseSalary();

    /**
     * Sets jobBenefits.
     *
     * @param string $jobBenefits
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setJobBenefits($jobBenefits);

    /**
     * Gets jobBenefits.
     *
     * @return string
     */
    public function getJobBenefits();

    /**
     * Sets datePosted.
     *
     * @param \DateTime $datePosted
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setDatePosted(DateTime $datePosted = null);

    /**
     * Gets datePosted.
     *
     * @return \DateTime
     */
    public function getDatePosted();

    /**
     * Sets educationRequirements.
     *
     * @param string $educationRequirements
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setEducationRequirements($educationRequirements);

    /**
     * Gets educationRequirements.
     *
     * @return string
     */
    public function getEducationRequirements();

    /**
     * Sets employmentType.
     *
     * @param string $employmentType
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setEmploymentType($employmentType);

    /**
     * Gets employmentType.
     *
     * @return string
     */
    public function getEmploymentType();

    /**
     * Sets experienceRequirements.
     *
     * @param string $experienceRequirements
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setExperienceRequirements($experienceRequirements);

    /**
     * Gets experienceRequirements.
     *
     * @return string
     */
    public function getExperienceRequirements();

    /**
     * Sets hiringOrganization.
     *
     * @param \Stevenmaguire\Schemas\Organization $hiringOrganization
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setHiringOrganization(Organization $hiringOrganization = null);

    /**
     * Gets hiringOrganization.
     *
     * @return \Stevenmaguire\Schemas\Organization
     */
    public function getHiringOrganization();

    /**
     * Sets incentiveCompensation.
     *
     * @param string $incentiveCompensation
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setIncentiveCompensation($incentiveCompensation);

    /**
     * Gets incentiveCompensation.
     *
     * @return string
     */
    public function getIncentiveCompensation();

    /**
     * Sets industry.
     *
     * @param string $industry
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setIndustry($industry);

    /**
     * Gets industry.
     *
     * @return string
     */
    public function getIndustry();

    /**
     * Sets jobLocation.
     *
     * @param \Stevenmaguire\Schemas\Place $jobLocation
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setJobLocation(Place $jobLocation = null);

    /**
     * Gets jobLocation.
     *
     * @return \Stevenmaguire\Schemas\Place
     */
    public function getJobLocation();

    /**
     * Sets occupationalCategory.
     *
     * @param string $occupationalCategory
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setOccupationalCategory($occupationalCategory);

    /**
     * Gets occupationalCategory.
     *
     * @return string
     */
    public function getOccupationalCategory();

    /**
     * Sets qualifications.
     *
     * @param string $qualifications
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setQualifications($qualifications);

    /**
     * Gets qualifications.
     *
     * @return string
     */
    public function getQualifications();
    /**
     * Sets responsibilities.
     *
     * @param string $responsibilities
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setResponsibilities($responsibilities);

    /**
     * Gets responsibilities.
     *
     * @return string
     */
    public function getResponsibilities();

    /**
     * Sets salaryCurrency.
     *
     * @param string $salaryCurrency
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setSalaryCurrency($salaryCurrency);

    /**
     * Gets salaryCurrency.
     *
     * @return string
     */
    public function getSalaryCurrency();

    /**
     * Sets skills.
     *
     * @param string $skills
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setSkills($skills);

    /**
     * Gets skills.
     *
     * @return string
     */
    public function getSkills();

    /**
     * Sets specialCommitments.
     *
     * @param string $specialCommitments
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setSpecialCommitments($specialCommitments);

    /**
     * Gets specialCommitments.
     *
     * @return string
     */
    public function getSpecialCommitments();

    /**
     * Sets title.
     *
     * @param string $title
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setTitle($title);

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Sets workHours.
     *
     * @param string $workHours
     *
     * @return \Stevenmaguire\Schemas\JobPosting
     */
    public function setWorkHours($workHours);

    /**
     * Gets workHours.
     *
     * @return string
     */
    public function getWorkHours();
}
