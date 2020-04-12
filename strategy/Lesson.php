<?php
   namespace strategy;

    class Lesson
    {
      private $duration;
      private $costStrategy;
      private $lessonType;

      function __construct( $duration, $strategy, $lesson)
      {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
        $this->lessonType = $lesson;
      }

      function cost()
      {
        return $this->costStrategy->cost( $this );
      }
      function chargeType()
      {
        return $this->costStrategy->chargeType();
      }

      function getDuration()
      {
        return $this->duration;
      }

      function getLessonType()
      {
        return $this->lessonType;
      }
    }
