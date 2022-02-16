<!DOCTYPE html>
<html>
<body>
<h1>Registration Form</h1>
<form action="process.php" method="POST">
<table>
    <tr>
        <td>First Name: </td>
        <td><input type="text" name="FirstName"></td>
    </tr>
    <tr>

        <td>Last Name: </td>
        <td><input type="text" name="LastName"> </td>
    </tr>
    <tr>
        <td>Age: </td>
        <td><input type="number" name="age"></td>
    </tr>
    <tr>
        <td>Designation:
        <td><input type="radio" name="Designation">Junior Programmer</td>
        <td><input type="radio" name="Designation">Senior Programmer</td>
        <td><input type="radio" name="Designation">Project Lead</td>
    </tr>
    <tr>
        <td>Preferred language </td>
        <td><input type="checkbox">JAVA</td>
        <td><input type="checkbox">PHP</td>
        <td><input type="checkbox">C++</td>
    </tr>
    <tr>
        <td>E-mail: </td>
        <td><input type="mail" name="E-mail"></td>
    </tr>

    <tr>
        <td>Password: </td>
        <td><input type="password" name="Password"></td>
    <tr>
        <td> Please choose a file </td>
        <td> <input type="text" placeholder="Choose file" name=""></td>
        <td> No file chosen </td>
    </tr>
<td>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>


</table>
</form>
</body>
</html>