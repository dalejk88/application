<?php

/**
 * Builds on the Applicant class by also holding the
 * jobs and verticals the Applicant selects
 * @Dale Kanikkeberg
 */

class Applicant_SubscribedToLists extends Applicant
{
    private array $_jobs = array();
    private array $_verticals = array();

    /**
     * getSelectionsJobs returns an array of the Applicant's selected jobs
     * @return array
     */
    public function getSelectionsJobs()
    {
        return $this->_jobs;
    }

    /**
     * setSelectionsJobs sets an array of the Applicant's selected jobs
     * @param array
     */
    public function setSelectionsJobs($jobs)
    {
        $this->_jobs = $jobs;
    }

    /**
     * getSelectionsVerticals returns an array of the Applicant's selected verticals
     * @return array
     */
    public function getSelectionsVerticals()
    {
        return $this->_verticals;
    }

    /**
     * setSelectionsJobs sets an array of the Applicant's selected verticals
     * @param array
     */
    public function setSelectionsVerticals($verticals)
    {
        $this->_verticals = $verticals;
    }
}
