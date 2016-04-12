<?php
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Library.utility.php');

// Include files
Library::using(Library::CORLY_DAO_EXTENTION);
Library::using(Library::CORLY_DAO_IMPLEMENTATION_BASE);

/**
 * AnalyzerDao short summary.
 *
 * AnalyzerDao description.
 *
 * @version 1.0
 * @author Bohdan Iakymets
 */
class AnalyzerDao extends Database
{
    // Parent constructor
    public function __construct()
    {
        parent::__construct(new Analyzer());
    }
}
