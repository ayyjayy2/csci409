<!-- Stored in resources/views/hotelform.blade.php  -->
<html>
  <head>
    <title>Hotel Form - @yield('title')</title>
  </head>
  <body>
    @section('sidebar')
      This is the master sidebar.
    @show

    <form method="POST" action="/hotels/store">

      <!-- tag below -->
      @csrf

      <label for="name">Name: </label>
      <input type="text" name="name"><br>

      <label for="address_1">Address 1: </label>
      <input type="text" name="address_1"><br>

      <label for="address_2">Address 2: </label>
      <input type="text" name="address_2"><br>

      <label for="city">City: </label>
      <input type="text" name="city"><br>

      <label for="state">State: </label>
      <input type="text" name="state"><br>

      <label for="Zip">Zip: </label>
      <input type="text" name="zip"><br>

      <label for="Description">Description: </label>
      <input type="text" name="description"><br>

      <label for="Image">Image: </label>
      <input type="text" name="image"><br>

      <input type="submit" name="submit">
    </form>

    <div class="container".
      @2yield('content')
    </div>
  </body>
