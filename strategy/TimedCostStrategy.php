<?php
  namespace strategy;
  use strategy\interfaces\CostStrategy;

  class TimedCostStrategy implements CostStrategy
  {
    function cost( Lesson $lesson)
    {
      // return $lesson->getDuration() * 5;
    }
    function chargeType()
    {
      return "Почасовая оплата";
    }
  }
