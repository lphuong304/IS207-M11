<!DOCTYPE HTML>

<html lang="vi">

<head>

	<meta charset="UTF-8">

	<title>IS207.M11 - Nguyễn Ngọc Lan Phương - 19520227 - Bài tập thực hành 1</title>

	<link rel="shortcut icon" href="https://en.uit.edu.vn/sites/vi/files/favicon.ico" type="image/vnd.microsoft.icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta content="IS207.M11 - Nguyễn Ngọc Lan Phương - 19520227 - Bài tập thực hành 1" name="description">

	<meta content="Nguyen Ngoc Lan Phuong" name="author">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style>

		h1, h2, h3 {

			text-align: center;

		}

	</style>

</head>

<body>

	<div class="container">

		<h1>IS207.M11 - Phát triển ứng dụng web</h1>

		<h2>Bài tập thực hành 1</h2>

		<h3>Author: Nguyễn Ngọc Lan Phương - 19520227</h3>            

		<table class="table table-hover">

			<thead>

			  <tr>

				<th>STT</th>

				<th>Tên bài</th>

				<th>URL</th>

			  </tr>

			</thead>

			<tbody>

				<?php //$out = array();

					$url_root = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

					$k = 1;
					$arr_filename = array();

					foreach (glob('*.html',GLOB_NOSORT) as $filename) {
						
                        
						echo '<tr><td>'.$k.'</td>';

						echo '<td>Câu '.$k.'</td>';
                        

						echo '<td><a href="'.$url_root.$filename.'">'.$filename.'</a></td></tr>';

						$k++;

					}

				?>

			</tbody>

		</table>

	</div>

</body>

</html>
