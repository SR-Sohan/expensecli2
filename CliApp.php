<?php 

class CliApp 
{

    private const ADD_INCOME = 1;
    private const ADD_EXPENSE = 2;
    private const VIEW_INCOME = 3;
    private const VIEW_EXPENSE = 4;
    private const VIEW_SAVINGS = 5;
    private const VIEW_CATEGORIES = 6;
    private const EXIT_APP = 7;


    private array $options = 
    [
        self::ADD_INCOME => 'Add income',
        self::ADD_EXPENSE => 'Add expense',
        self::VIEW_INCOME => 'View income',
        self::VIEW_EXPENSE => 'View expense',
        self::VIEW_SAVINGS => 'View savings',
        self::VIEW_CATEGORIES => 'View categories',
        self::EXIT_APP => 'Exit app'
    ];

    public function run(): void
    {

       while(true)
       {

        foreach ($this->options as $option => $label) {
           printf("%d. %s\n",$option,$label);
        }

        $chosseOption = intval(readline("Enter your option: "));


        switch($chosseOption)
        {
            case self::ADD_INCOME;
            echo "\n\n=====================\n\n";
            echo "income";
            echo "\n\n=====================\n\n";
            break;

            case self::ADD_EXPENSE;
            echo "\n\n=====================\n\n";
            echo "add expense\n";
            echo "\n\n=====================\n\n";
            break;

            case self::VIEW_INCOME;
            echo "\n\n=====================\n\n";
            echo "view income\n";
            echo "\n\n=====================\n\n";
            break;

            case self::VIEW_EXPENSE;
            echo "\n\n=====================\n\n";
            echo "view expense\n";
            echo "\n\n=====================\n\n";
            break;

            case self::VIEW_SAVINGS;
            echo "\n\n=====================\n\n";
            echo "views savings\n";
            echo "\n\n=====================\n\n";
            break;

            case self::VIEW_CATEGORIES;
            echo "\n\n=====================\n\n";
            echo "view categories\n";
            echo "\n\n=====================\n\n";
            break;

            case self::EXIT_APP;
            echo "\n\n=====================\n\n";
            echo "exit app\n";
            echo "\n\n=====================\n\n";
            break;
            
            default:
             echo "Invalid option \n";
        }

       }
    }

}