<?php
    include 'includes/autoload.php';
    use strategy\StrategyPattern;
    
    $test = new StrategyPattern();
    $test->execute();
    // // Реализация сопосбов оплаты в зависимости от того какая стратегия была выбрана
    // abstract class Lesson
    // {
    //   private $duration;
    //   private $costStrategy;
    //   private $lessonType;
    //
    //   function __construct( $duration, CostStrategy $strategy, $lesson)
    //   {
    //     $this->duration = $duration;
    //     $this->costStrategy = $strategy;
    //     $this->lessonType = $lesson;
    //   }
    //
    //   function cost()
    //   {
    //     return $this->costStrategy->cost( $this );
    //   }
    //   function chargeType()
    //   {
    //     return $this->costStrategy->chargeType();
    //   }
    //
    //   function getDuration()
    //   {
    //     return $this->duration;
    //   }
    //
    //   function getLessonType()
    //   {
    //     return $this->lessonType;
    //   }
    // }
    //
    // // стратегия по применению способа оплаты
    // interface CostStrategy
    // {
    //   function cost( Lesson $lesson);
    //   function chargeType();
    // }
    //
    //   // способ оплаты 1
    // class TimedCostStrategy implements CostStrategy
    // {
    //   function cost( Lesson $lesson )
    //   {
    //     return $lesson->getDuration() * 5;
    //   }
    //   function chargeType()
    //   {
    //     return "Почасовая оплата";
    //   }
    // }
    // // способ оплаты 2
    // class FixedCostStrategy implements CostStrategy
    // {
    //   function cost( Lesson $lesson)
    //   {
    //     return 30;
    //   }
    //   function chargeType()
    //   {
    //     return "Фиксированная оплата";
    //   }
    // }
    //
    //
    // //сущность 1
    // class Lecture extends Lesson
    // {
    //   // function __construct()
    //   // {
    //   //   print "Лекция";
    //   // }
    // }
    //
    // //сущность 2
    // class Seminar extends Lesson
    // {
    // }
    //
    // // execute
    //
    // $lesson[] = new Lecture(5, new TimedCostStrategy(), 'Лекция');
    // $lesson[] = new Seminar(5, new FixedCostStrategy(), 'Семинар');
    //
    // foreach ($lesson as $key => $value) {
    //   print "{$value->getLessonType()} Плата за занятие {$value->cost()}.";
    //   print "{$value->getLessonType()} Тип оплаты {$value->chargeType()}<br>";
    // }
    // // print $lesson->cost();
