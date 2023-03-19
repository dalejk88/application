<?php

/**
 * Builds on the Applicant class by also holding the
 * jobs and verticals the Applicant selects
 * @Dale Kanikkeberg
 */

class Applicant_SubscribedToLists extends Applicant
{
    private $_selectionsJobs = array();
    private $_selectionsVerticals = array();

    /**
     * getSelectionsJobs returns an array of the Applicant's selected jobs
     * @return array
     */
    public function getSelectionsJobs()
    {
        return $this->_selectionsJobs;
    }

    /**
     * setSelectionsJobs sets an array of the Applicant's selected jobs
     * @param array
     */
    public function setSelectionsJobs($selectionsJobs)
    {
        $this->_selectionsJobs = $selectionsJobs;
    }

    /**
     * getSelectionsVerticals returns an array of the Applicant's selected verticals
     * @return array
     */
    public function getSelectionsVerticals()
    {
        return $this->_selectionsVerticals;
    }

    /**
     * setSelectionsJobs sets an array of the Applicant's selected verticals
     * @param array
     */
    public function setSelectionsVerticals($selectionsVerticals)
    {
        $this->_selectionsJobs = $selectionsVerticals;
    }
}
