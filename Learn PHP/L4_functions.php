<?php

function  helloWorld()
{
    return "Hello World";
}

echo helloWorld();

function greetings($name)
{
    return "<br> Hello $name";
}

echo greetings("Eric");
echo greetings("Vlad");
echo greetings("Alfred");