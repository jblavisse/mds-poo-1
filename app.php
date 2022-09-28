<?php

class MyTime {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour, $minute, $second) {
        $this->setHour($hour);
        $this->setMinute($minute);
        $this->setSecond($second);
    }

    public function getHour() {
        return sprintf("%02d",$this->hour);
    }

    public function setHour($hour) {
        if($hour>=0 && $hour<24) {
            $this->hour = $hour;
        }
    }

    public function getMinute() {
        return sprintf("%02d",$this->minute);
    }

    public function setMinute($minute) {
        if($minute>=0 && $minute<60) {
            $this->minute = $minute;
        }
    }

    public function getSecond() {
        return sprintf("%02d",$this->second);
    }

    public function setSecond($second) {
        if($second>=0 && $second<60) {
            $this->second = $second;
        }
    }

    public function show() {
        echo "{$this->getHour()}h {$this->getMinute()}min et {$this->getSecond()}s".PHP_EOL;
    }


    public function nextSecond() {
        $this->second++;
        if($this->second >= 60) {
            $this->second = 0;
            $this->nextMinut();
        }
    }

    private function nextMinut() {
        $this->minute++;
        if($this->minute >= 60) {
            $this->minute = 0;
            $this->nextHour();
        }
    }

    private function nextHour() {
        $this->hour++;
        if($this->hour >= 24) {
            $this->hour = 0;
            $this->minute = 0;
            $this->second = 0;
        }
    }
}

$currentTime = new MyTime(24,59,59);

var_dump($currentTime);
$currentTime->show();

$currentTime->nextSecond();
$currentTime->show();