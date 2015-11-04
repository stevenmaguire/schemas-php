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
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @param \Stevenmaguire\Schemas\PriceSpecification|integer|float $baseSalary
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
     * Sets datePosted.
     *
     * Publication date for the job posting.
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
     * Educational background needed for the position.
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
     * Type of employment (e.g. full-time, part-time, contract, temporary,
     * seasonal, internship).
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
     * Description of skills and experience needed for the position.
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
     * Organization offering the job position.
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
     * Description of bonus and commission compensation aspects of the job.
     * Supersedes incentives.
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
     * The industry associated with the job position.
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
     * Sets jobBenefits.
     *
     * Description of benefits associated with the job. Supersedes benefits.
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
     * Sets jobLocation.
     *
     * A (typically single) geographic location associated with the job position.
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
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy.
     * Ideally includes textual label and formal code, with the property
     * repeated for each applicable value.
     *
     * @see http://www.onetcenter.org/taxonomy.html BLS O*NET-SOC taxonomy
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
     * Specific qualifications required for this role.
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
     * Responsibilities associated with this role.
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
     * The currency (coded using ISO 4217) used for the main salary information
     * in this job posting or for this employee.
     *
     * @see  http://en.wikipedia.org/wiki/ISO_4217 ISO 4217
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
     * Skills required to fulfill this role.
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
     * Any special commitments associated with this job posting. Valid entries
     * include VeteranCommit, MilitarySpouseCommit, etc.
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
     * The title of the job.
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
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
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
