<?php
  namespace strategy;
  use strategy\Lecture;
  use strategy\Seminar;
  use strategy\TimedCostStrategy;
  use strategy\FixedCostStrategy;

  class StrategyPattern
  {
    public function execute()
    {
      $lesson[] = new Lecture(5, new TimedCostStrategy(), 'Лекция');
      $lesson[] = new Seminar(5, new FixedCostStrategy(), 'Семинар');

      foreach ($lesson as $key => $value) {
        print "{$value->getLessonType()} Плата за занятие {$value->cost()}.";
        print "{$value->getLessonType()} Тип оплаты {$value->chargeType()}<br>";
      }
    }
  }
