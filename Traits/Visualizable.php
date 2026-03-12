<?php

trait Visualizable
{

    protected $isNew = false;

    public function GetIsNew()
    {
        return $this->isNew === true
            ? "<span class='badge rounded-pill bg-info-subtle text-info border border-info-subtle bg-success'>Novità</span>"
            : "<span class='badge rounded-pill bg-info-subtle text-info border border-info-subtle  bg-secondary'>Classico</span>";
    }
}
