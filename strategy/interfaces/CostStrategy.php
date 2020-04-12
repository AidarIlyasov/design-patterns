<?php
  namespace strategy\interfaces;
  use strategy\Lesson;
  /**
   *
   */
  interface CostStrategy
  {
    public function cost( Lesson $lesson);
    public function chargeType();
  }
