<!DOCTYPE html>

<head>
        <title>
                Calculator App in PHP
        </title>
</head>
<?php
        $first= $_POST['first'];
        $second= $_POST['second'];
        $operator = $_POST['operator'];
        $result = '';
        if (is_numeric($first) && is_numeric($second)) {
                switch ($operator) {
                        case "+":
                        $result = $first + $second;
                                break;
                        case "-":
                        $result = $first - $second;
                                break;
                        case "*":
                                $result = $first * $second;
                                break;
                        case "/":
                                $result = $first / $second;
                }
        }

?>

<body>
        <div id="page-wrap">
                <h1>Calculator in PHP</h1>
                <form action=""
                        method="post"
                        id="calculator">
                        <p>
                                <input type="number"
                                        name="first"
                                        id="first"
                                        required="required"
                                        value="<?php echo $first; ?>" />
                                        <b>Enter First Value</b>
                        </p>
                        <p>
                                <input type="number"
                                        name="second"
                                        id="second"
                                        required="required"
                                        value="<?php echo $second; ?>" />
                                        <b>Enter Second Value</b>
                        </p>
                        <p>
                                <input readonly="readonly"
                                        name="result"
                                        value="<?php echo $result; ?>">
                                        <b>Result</b>
                        </p>
                                <input type="submit"
                                        name="operator"
                                        value="+" />
                                <input type="submit"
                                        name="operator"
                                        value="-" />
                                <input type="submit"
                                        name="operator"
                                        value="*" />
                                <input type="submit"
                                        name="operator"
                                        value="/" />
                </form>
        </div>
</body>
</html>
