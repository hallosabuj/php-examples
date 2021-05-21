<html>

<head>
    <title>Calculator</title>
    <style>
        th{
            text-align: center;
            font-size: larger;
            background-color: #572940;
            color: #d4c9ce;
        }
        td{
            height: 50px;
            text-align: center;
            background-color: aqua;
        }
        button{
            width: 120px;
            height: 48px;
            text-align: center;
            background-color: yellowgreen;
            border-radius: 12px;
            font-size: large;
        }
        .input{
            width: 244px;
            height: 48px;
            background-color: #bbf0ee;
            border: 0px;
            font-size: large;
        }
        .output{
            height: 48px;
            width: 120px;
            font-size: large;
        }
        .button-td{
            background-color: #2c7a3d;
        }
    </style>
    <script>
        function calculate(url){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("result").value =
                        this.responseText;
                }
            };
            xhttp.open("GET", url, true);
            xhttp.send();
        }
        function handleClick(operation) {
            num1 = document.getElementById("number1").value;
            num2 = document.getElementById("number2").value;
            console.log(num1)
            url="backend.php?num1="+num1+"&num2="+num2+"&op="+operation
            calculate(url)
        }
        function clearBoxes(){
            document.getElementById("number1").value="";
            document.getElementById("number2").value="";
            document.getElementById("result").value="";
        }
    </script>
</head>

<body>
    <div class="calculator" align="center">
        <table border="2px">
            <tr>
                <th colspan="5">Calculator</th>
            </tr>
            <tr>
                <td colspan="2"><input class="input" placeholder="First Number" type="text" id="number1"></td>
                <td colspan="2"><input class="input" placeholder="Second Number" type="text" id="number2"></td>
                <td ><input class="output" placeholder="Result" disabled type="text" id="result"></td>
            </tr>
            <tr>
                <td class="button-td"><button onclick="handleClick('add')">Addition</button></td>
                <td class="button-td"><button onclick="handleClick('sub')">Subtraction</button></td>
                <td class="button-td"><button onclick="handleClick('div')">Division</button></td>
                <td class="button-td"><button onclick="handleClick('mult')">Multiplication</button></td>
                <td class="button-td"><button onclick="clearBoxes()">Clear</button></td>
            </tr>
        </table>
    </div>
</body>

</html>