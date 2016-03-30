<?php

namespace TibiaMap\Contracts;


interface TibiaMap
{
    public function fillCities(array $cities);
    public function fillPlaces(array $places);
    public function setTitleToCities(array $names);
    public function setTitleToPlaces(array $names);
    public function fetchPlacesAndCities(array $coordinates);
    public function getIds();
    public function getMapRange();
    public function setFirstCity(array $city);
    public function shouldChoose(array $coordinates);
    public function setVerboses(array $verboses);
    public function setNeededElementsVerbose(array $elements);
    public function setCallbacksToVerboses(array $callbacks);
    public function getOptionsByVerbose(array $verbose , array $result);
}