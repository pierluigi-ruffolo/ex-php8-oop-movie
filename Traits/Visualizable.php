<?php

trait Visualizable
{

    protected $isNew = false;

    public function GetIsNew()
    {
        return $this->isNew === true
            ? "<span class='badge bg-success'>Novità</span>"
            : "<span class='badge bg-secondary'>Classico</span>";
    }
}
