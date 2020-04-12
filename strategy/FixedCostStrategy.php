<?php
  namespace strategy;
  use strategy\interfaces\CostStrategy;

  class FixedCostStrategy implements CostStrategy
  {
    function cost($lesson = NULL)
    {
      return 30;
    }
    function chargeType()
    {
      return "Фиксированная оплата";
    }
  }
