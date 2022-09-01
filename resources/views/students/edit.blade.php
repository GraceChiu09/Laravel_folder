<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
    <h4 class="display-4">Hello 你好嗎? 衷心感謝</h2>
        <a class="btn btn-primary" href="#" role="button">add</a>
        <br><br>
        <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="row">姓名</th>
            <th scope="col">中文</th>
            <th scope="col">英文</th>
            <th scope="col">數學</th>
            <th scope="col">音樂</th>
          </tr>
        </thead>
        <form action="{{route('students.store')}}" method="post">
          @csrf
          <tbody>
            <tr>
              <td>
                <input type="text" name="name" id="name">
              </td>
              <td>
                <input type="number" name="chinese" id="chinese">
              </td>
              <td>
                <input type="number" name="english" id="english">
              </td>
              <td>
                <input type="number" name="math" id="math">
              </td>
              <td>
                <input type="number" name="music" id="music">
              </td>
            </tr>
            <tr>
              <td colspan="4">
                <input type="submit" value="add submit">
              </td>
            </tr>
          </tbody>
        </form>
       
      </table>
</body>
</html>