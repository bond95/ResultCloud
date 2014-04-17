<?php

/**
 * TestCase short summary.
 *
 * TestCase description.
 *
 * @version 1.0
 * @author Filip
 */
class TestCaseTSE
{
    private $Id;
    private $Name;
    private $Results;
    
    /**
     * TestCase constructor
     */
    public function __construct($Name = "")   {
        $this->Name = $Name;
        $this->Results = array();
    }
    
    /**
     * Add result to TestCase
     * @param result
     */
    public function AddResult($result)  {
        $this->Results[] = $result;
    }
    
    /**
     * Get results
     * @return results
     */
    public function GetResults()  {
        return $this->Results;
    }
    
    /**
     * Get test case name
     * @return name
     */
    public function GetName()   {
        return $this->Name;
    }
    
    /**
     * Get test case as object to save to database
     * @param mixed $categoryId 
     */
    public function GetDbObject($categoryId)   {
        // Init object
        $testCase = new stdClass();
        // Assign values from base object
        $testCase->Name = $this->Name;
        // Set parent id (category)
        $testCase->Category = $categoryId;
        
        // Return test case
        return $testCase;
    }
    
    /**
     * Map database object into TS entity
     * @param mixed $dbCategory 
     */
    public function MapDbObject($dbCategory)    {
        // Map values
        $this->Id = $dbCategory->Id;
        $this->Name = $dbCategory->Name;
    }
    
    /**
     * Export object for serialization
     * @return mixed
     */
    public function ExportObject()  {
        // Init object
        $testCase = new stdClass();
        
        // Set values
        $testCase->Id = $this->Id;
        $testCase->Name = $this->Name;
        $testCase->Results = array();
        
        // Export each result
        foreach ($this->Results as $result) {
            $testCase->Results[] = $result->ExportObject();
        }
        
        // return result
        return $testCase;
    }
}