<?php

/**
 * Description of IndexModel
 *
 * @author dionbosschieter dekker7
 */
class IndexModel extends BaseModel
{
    public $template = "example.tpl";

    public function __construct($parameters)
    {
        //always call parent first
        parent::__construct($parameters);

        $this->sitetitle .= " << Home";
    }
}
