<head>
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="multiple-select-master/multiple-select.css" rel="stylesheet"/>
   
    
   
</head>
<body>
    <select multiple="multiple">
        <option value="1">January</option>
        <option value="12">December</option>
    </select>
    <script src="multiple-select-master/jquery.multiple.select.js"></script>
    <script>
        $("select").multipleSelect({
            placeholder: "Here is the placeholder"
        });
    </script>
</body>