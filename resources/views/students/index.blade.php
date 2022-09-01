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
        <a class="btn btn-primary" href="{{route('students.create')}}" role="button">add</a>
        <br><br>
        <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="row">姓名</th>
            <th scope="col">中文</th>
            <th scope="col">英文</th>
            <th scope="col">數學</th>
            <th scope="col">音樂</th>
            <th scope="col">新增或刪除</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $key => $value)
              <tr>
                <td>
                    {{$value['name']}}
                </td>
                <td>
                    {{$value['chinese']}}
                </td>
                <td>
                    {{$value['english']}}
                </td>
                <td>
                    {{$value['math']}}
                </td>
                <td>
                    {{$value['music']}}
                </td>
                <td>
                  <a href="{{route('students.edit', ['students' -> $data -> id])}}"><button class="btn btn-warning" type="submit">新增</button></a>
                  <a href="{{route('students.create')}}"><button class="btn btn-danger" type="submit">刪除</button></a>
                </td>
                  
              </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>