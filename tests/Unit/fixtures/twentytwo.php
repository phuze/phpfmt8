<?php

#[\AllowDynamicProperties]
#[Setup]
class foo
{
    #[JsonSerialize('call it Jackson')]
    public string $myValue;

    public function a()
    {
    }
}