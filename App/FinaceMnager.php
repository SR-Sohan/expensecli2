<?php
namespace App;

class FinaceMnager{

  private $categories = [
    "SALARY" => "INCOME",
    "LOAN" => "INCOME",
    "RENT" => "EXPENSE",
    "FAMILY" => "EXPENSE"
  ];



  public function addIncome($income,$category){
    echo "\n";

    $contents = $income.",".$category.",INCOME\n";
    if(file_put_contents('data.txt',$contents,FILE_APPEND)){
      echo "Income Added Successfuly \n";
    }else{
      echo "Something in wroning";
    }

    echo "\n";
  }

  public function showIncome() {
    echo "\n";
    $filePath = 'data.txt'; 
    if (!file_exists($filePath)) {
        echo "No income data found.\n";
        return;
    }

    $file = file($filePath); 

    $incomeEntries = array_filter($file, function($line) {
        return strpos($line, 'INCOME') !== false;
    });

    if (empty($incomeEntries)) {
        echo "No income entries found.\n";
    } else {
        foreach ($incomeEntries as $entry) {
            $values = explode(',', $entry);
            echo trim($values[0]) . "\n"; 
        }
    }

    echo "\n";
}






  public function showCategories(){
    echo "\n";
     foreach ($this->categories as $key => $value) {
        echo "Name: ".$key." Type: ".$value."\n";
     }
     echo "\n";
  }

  
}