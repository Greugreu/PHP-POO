<?php

function classautoloader($classname)
{
    require_once "./classes/" . $classname . ".php";
}