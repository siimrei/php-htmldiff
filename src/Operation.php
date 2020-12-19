<?php

namespace HtmlDiff;

class Operation {

    public $action;
    public $startInOld;
    public $endInOld;
    public $startInNew;
    public $endInNew;

    function __construct($action, $startInOld, $endInOld, $startInNew, $endInNew) {
        $this->action = $action;
        $this->startInOld = $startInOld;
        $this->endInOld = $endInOld;
        $this->startInNew = $startInNew;
        $this->endInNew = $endInNew;
    }
}