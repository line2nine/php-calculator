<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style>
        #content {
            width: 450px;
            margin-left: 350px;
            padding: 0 50px 50px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
</head>
<body>
<div id="content">
    <form method="post" action="result.php">
        <div id="data">
            <label>First Operand:</label>
            <input type="text" name="num1"/><br/>
            <label>Operator:</label>
            <select id="operator" name="cal">
                <option>+</option>
                <option>-</option>
                <option>x</option>
                <option>/</option>
            </select><br/>
            <label>Second Operand:</label>
            <input type="text" name="num2"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/>
        </div>
    </form>
</div>
</body>
</html>