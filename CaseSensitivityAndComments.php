<?php 
    
    // PHP is a weakly-type programming language. No need to declare the "type" of the value of your variable
    // after putting 2 forward slash it becames comment
    # single line commented code
    /* multi line comment */
    
    $firstVariable = "Our first Variable\n"; //\n used for carriage return or new line
    $firstvariable = "Really is it our first\n"; //different variable name
    
    /*
        When declaring variables, make sure you properly
        declare variable name because declaring variables
        is case sensitve not unlike to classes and functions.
    */
    
    echo $firstVariable; //prints the value of $firstVariable
    echo $firstvariable; //prints the value of $firstvariable
    
    /*
        Example of calling the class and functions without
        case sensitivity
    */
    
    class Company{
        
    }
    
    $p1 = Company;
    $p2 = COMPANY;
    
    function website(){
        echo "http://pluralsight.com\n";
    }
    
    webSite();
    Website();
    WEBSITE();
