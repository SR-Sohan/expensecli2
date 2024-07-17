<?php 

namespace App;


class CliApp 
{
    public FinaceMnager $finacemanager;
    private const ADD_INCOME = 1;
    private const ADD_EXPENSE = 2;
    private const VIEW_INCOME = 3;
    private const VIEW_EXPENSE = 4;
    private const VIEW_SAVINGS = 5;
    private const VIEW_CATEGORIES = 6;
    private const EXIT_APP = 7;

    public function __construct()
    {
        $this->finacemanager = new FinaceMnager();
    }


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
            $income =  intval(readline("Enter your income: "));
            $category =  trim(readline("Enter your income category: "));
            $this->finacemanager->addIncome($income,$category);      
            break;

            case self::ADD_EXPENSE;
            $expense =  intval(readline("Enter your expense: "));
            $category =  trim(readline("Enter your expense category: "));
            $this->finacemanager->addExpense($expense,$category);
            break;

            case self::VIEW_INCOME;            
            $this->finacemanager->showIncome();
            break;

            case self::VIEW_EXPENSE;
            $this->finacemanager->showExpense();
            break;

            case self::VIEW_SAVINGS;
            $this->finacemanager->showSavings();
            break;

            case self::VIEW_CATEGORIES;
            $this->finacemanager->showCategories();
            break;

            case self::EXIT_APP;
            return;
            break;
            
            default:
             echo "Invalid option \n";
        }

       }
    }

}