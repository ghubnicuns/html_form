<html>
    <head>
        <title></title>
    </head>
    <body>
      <form action="action_page.php" method='POST'>
        <table>
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name = "fname"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name="country">
                        <option value="PH">PH</option>
                        <option value="AUS">AUS</option>
                        <option value="US">US</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
      </form>
    </body>
</html> 