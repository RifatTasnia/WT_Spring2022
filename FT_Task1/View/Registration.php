<html>
    <body>
        <h1 align="center">Registration Form</h1>
            <hr>
                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td>First Name: </td>
                            <td><input type="text" name="fname"></td>
                        </tr>
                        <tr>
                            <td>Last Name: </td>
                            <td><input type="text" name="lname"></td>
                        </tr>

                        <tr>
                            <td>age: </td>
                            <td><input type="number" name="age"></td>
                        </tr>
                        <tr>
                            <td>Designation:</td>
                            <td><input type="radio" name="radio" value="Junior Programmer">Junior Programmer</td>
                            <td><input type="radio" name="radio" value="Senior Programmer">Senior Programmer</td>
                            <td><input type="radio" name="radio" value="Project Lead">Project Lead</td>
                        </tr>
                        <tr>
                            <td>Preferred language </td>
                            <td><input type="checkbox" name="JAVA" value="JAVA">JAVA</td>
                            <td><input type="checkbox" name="PHP" value="PHP">PHP</td>
                            <td><input type="checkbox" name="C++" value="C++">C++</td>
                        </tr>
                        <tr>
                            <td>E-mail: </td>
                            <td><input type="mail" name="E-mail"></td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td><input type="password" name="Password"></td>
                        </tr>
                        
                        <td>
                        <input type="submit" name="submit">
                        <input type="reset" value="Reset">
                        </td>
                    </table>
                </form>
                <?php
                    include ("../Control/Registrationcheck.php")
                ?>
            </hr>
    </body>
</html>