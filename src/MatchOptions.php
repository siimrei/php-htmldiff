<?php

namespace HtmlDiff;

class MatchOptions {

    public $blockSize;
    public $repeatingWordsAccuracy;
    public $ignoreWhitespaceDifferences;

    function __construct($blockSize, $repeatingWordsAccuracy, $ignoreWhitespaceDifferences) {
        $this->blockSize = $blockSize;
        $this->repeatingWordsAccuracy = $repeatingWordsAccuracy;
        $this->ignoreWhitespaceDifferences = $ignoreWhitespaceDifferences;
    }

}