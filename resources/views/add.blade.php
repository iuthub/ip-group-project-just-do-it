<form action="/add" method="POST">
      category
      <input type="text" name="category">
      <br>
      name
      <input type="text" name="name">
      <br>
      price
      <input type="number" name="price">
      <br>
      @csrf
      <input type="submit">
</form>