<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>

    <body>

        <form action="/book" method="POST">
            @csrf
            <label for="name">Enter full name:</label>
            <input type="text" name="name" required >
            <br>
            <select id="table" name="table" required multiple>
                <option value="1">Table 1</option>
                <option value="2">Table 2</option>
                <option value="3">Table 3</option>
                <option value="4">Table 4</option>
                <option value="5">Table 5</option>
                <option value="6">Table 6</option>
                <option value="7">Table 7</option>
                <option value="8">Table 8</option>
                <option value="9">Table 9</option>
                <option value="10">Table 10</option>
            </select>
            <br>
            <label for="date">Enter Date:</label>
            <input type="date" name="date" required>
            <br>
            <label for="time">Enter time:</label>
            <input type="time" name="time" required>
            <br>
            <label for="tel">Enter telephone number</label>
            <input type="tel" name="tel" value="+998" maxlength="13" required>
            <br>
            <label for="email">Enter email</label>
            <input type="email" name="email" required>
            <br>

            <input type="reset">
            <br>
            <button type="submit">Submit</button>
        </form>

    </body>
</html>