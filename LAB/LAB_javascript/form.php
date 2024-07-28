<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <form id="myForm" action="form_action.php" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="fname">Name</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="form-group">
            <label for="idcard">ID Card</label>
            <input type="text" class="form-control" id="idcard" name="idcard">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        function validateForm() {
            var fname = document.getElementById('fname').value.trim();
            var idcard = document.getElementById('idcard').value.trim();

            if (fname === "" || idcard === "") {
                alert("Form must be filled");
                return false;
            }

            if (!/^[a-zA-Z ]+$/.test(fname)) {
                alert("Name must be filled in English");
                return false;
            }

            if (idcard === "") {
                alert("ID card must be filled");
                return false;
            }

            if (!/^\d+$/.test(idcard)) {
                alert("ID card must input number");
                return false;
            }

            if (idcard.length !== 13) {
                alert("ID card must have number of digits equal 13");
                return false;
            }

            alert("Input value is: " + fname + ", id card is: " + idcard);
            return true;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-bz3S1gMcN18JbTPufCPLyCE0wq3G9gIfFds7hd+2C2HcE2owKRxF+/Cs+Tc5iiKI" crossorigin="anonymous"></script>
</body>
</html>
