<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/09/2016
 * Time: 20:59
 */

namespace PhpSchool\phpGenerators\Exercise;


use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;

class Range extends AbstractExercise implements ExerciseInterface, CliExercise
{
    
    /**
     * @return string
     */
    public function getName()
    {
        
        return 'Range';
        
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        
        return 'Create a range of numbers';
        
    }
    
    
    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
    
    /**
     * This method should return an array of strings which will be passed to the student's solution
     * as command line arguments.
     *
     * @return string[] An array of string arguments.
     */
    public function getArgs()
    {
        // TODO: Implement getArgs() method.
    }
}