<?php

class CodeBracketChecker {
    private $expression;

    public function __construct($expression) {
        $this->expression = $expression;
    }

    public function hasBalancedBrackets() {
        $bracketStack = []; 
        for ($i = 0; $i < strlen($this->expression); $i++) {
            $currentChar = $this->expression[$i];
            if ($currentChar === '{') {
                array_push($bracketStack, $currentChar);
            }
            elseif ($currentChar === '}') {
                if (empty($bracketStack)) {
                    return false;
                }
                array_pop($bracketStack);
            }
        }
        return empty($bracketStack);
    }
}



$firstExpression = "{{lajkdhf{adfa}{}adfasdfadf{}}}";
$secondExpression = "{{lajkdhf{adfa";

$firstChecker = new CodeBracketChecker($firstExpression);
$secondChecker = new CodeBracketChecker($secondExpression);

echo $firstExpression;
echo $firstChecker->hasBalancedBrackets() ? " - корректный код" : " - некорректный код";  
echo "<br/>";
echo $secondExpression;
echo $secondChecker->hasBalancedBrackets() ? " - корректный код" : " - некорректный код";  

?>
