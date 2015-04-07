<?php

/**
 * Table cell.
 *
 * @version 1.0
 * @author Filip
 */
class TableCell
{
    /**
     * Data of cell
     * @var mixed
     */
    public $Data;

    /**
     * CSS Style for cell
     * @var mixed
     */
    public $Style;

    /**
     * Constructor
     * @param mixed $data
     * @param mixed $style
     */
    public function __construct($data, $style = "")
    {
        $this->Data = $data;
        $this->Style = $style;
    }
}
