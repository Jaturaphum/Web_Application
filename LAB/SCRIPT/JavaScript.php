<html>
<head>
    <title>Javasript</title>
    <script type="text/javascript">
        document.write("Hello World. <br/>")
            function write_hello() {

            }
    </script>
    <script>
        var myInt = 20;
        var myString = "hello there"
        var stringQuote = 'the "string"'
        stringQuote = 'Tom\'s house'
        sum = myInt + 2
        document.write(stringQuote + myInt + sum)
    </script>
    <script>
        y = 3
        x = y - 2; console.log(x);
        x = y + 2; console.log(x);
        x = y * 2; console.log(x);
        x = y / 2; console.log(x);
        x = y % 2; console.log(x);
        x = ++y; console.log(x);
        x = --y; console.log(x);
    </script>
    <script>
        var firstName = "Covid"
        var lastName = "Delta"
        var nameCombine = firstName + "" + lastName
        var hello = "hello" + 7
        console.log(nameCombine)
        console.log(hello)
    </script>
    <script>
        var x = 5
        console.log(x == 8)
        console.log(x == 5)
        console.log(x === 5)
        console.log(x != 8)
        console.log(x !== 5)
        console.log(x > 8)
        console.log(X < 8)
        console.log(x >= 8)
        console.log(x <= 8)
    </script>
    <script>
        var x = 6, y = 3
        console.log(x > 10 && y > 1)
        console.log(x != 5 || y == 5)
        console.log(!(x == y))
    </script>
    <script>
        var car = ""
        console.log(car == null || car == "")
        console.log(car != null || car != "")
        console.log(car != null && car != "")
    </script>
    <script>
        var time = new Data().getHours 
        if (time < 10) {
            x = "good morning"
            console.log(x)
        }
        else if (time < 20){
            x = "good afternoon"
            console.log(x)
        } else {
            x = "good evening"
            console.log(x)
        }
    </script>
</head>
<body>
    <br>
    </br>
    <a href="index.html">index</a>
</body>
</html>