<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style>
    .multiselect {
        width: 200px;
    }
    .selectBox {
        position: relative;
    }
    .selectBox select {
        width: 100%;
        font-weight: bold;
    }
    .overSelect {
        position: absolute;
        left: 0; right: 0; top: 0; bottom: 0;
    }
    #checkboxes {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes label {
        display: block;
    }
    #checkboxes label:hover {
        background-color: #1e90ff;
    }
</style>
</head>
<body>

<?php 
var_dump($_POST);
?>
<form  method="post" action="<?php $_SERVER['PHP_SELF']?>">
   <!--  <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes()">
            <select>
                <option>Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes">
            <label for="one"><input type="checkbox" id="one"/>First checkbox</label>
            <label for="two"><input type="checkbox" id="two"/>Second checkbox </label>
            <label for="three"><input type="checkbox" id="three"/>Third checkbox</label>
        </div>
    </div> -->

    <select id="chkveg" name="chkveg1[]"  size="1">

    <option value="cheese">Cheese</option>
    <option value="tomatoes">Tomatoes</option>
    <option value="mozarella">Mozzarella</option>
    <option value="mushrooms">Mushrooms</option>
    <option value="pepperoni">Pepperoni</option>
    <option value="onions">Onions</option>

</select>
    <input type="submit" id="sumbit" name="submit">
</form>

</body>
</html>

<script>
    var expanded = false;
    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>