<!DOCTYPE html>
<html>
  <head>
    <title>Simple Crud</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
table {
	width: 750px;
	border-collapse: collapse;
	margin:50px auto;
	}

th {
	background: #3498db;
	color: white;
	font-weight: bold;
	}

td, th {
	padding: 10px;
	border: 1px solid #ccc;
	text-align: left;
	font-size: 18px;
	}

.labels tr td {
	background-color: #2cc16a;
	font-weight: bold;
	color: #fff;
}

.label tr td label {
	display: block;
}


[data-toggle="toggle"] {
	display: none;
}
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
      <table>
      <tr>
      <th>Title</th>
      <th>Description</th>
      </tr>
      @foreach($reports as $report)
        <tr>
                <td>{{$report->title}}</td>
                <td>{{$report->description}}</td>
                <td><a href="{{ route('edits', ['id'=>$report->id])}}" title="Edit report {{ $report->title }}" >Edit</td>
                <td><a href="{{ route('exclude', ['id'=>$report->id])}}" title="Delete report {{ $report->title }}" >Delete</td>
      @endforeach
        <tr>
    </table>
    </div>
  </body>
</html>
