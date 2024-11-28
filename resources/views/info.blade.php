<!doctype html>
<html lang="ja" >
  <head>
    <title>サークルサイト</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

@include('navbar');

		<main role="main" class="container" style="padding:60px 15px 0">
			<div>
				<!-- ここから「本文」-->

    		<h1>お知らせ</h1>
        @php
          //お知らせデータの配列格納
          $filePath = public_path('infodata/info.txt'); // public_pathを使用してパスを取得
          $line = array();
          $fp = fopen($filePath, "r");
          if ($fp)
          {
            while(!feof($fp))
            {
              $line[] = fgets($fp);
            }
            fclose($fp);
          }
          //お知らせの有無判定
          if (count($line) == 0)
          {
            echo "お知らせはありません。<br />";
          }
          if (count($line) >= 1)
          {
            $body = "";
            foreach ($line as $i => $text)
            {
              if ($i == 0)
              {
                echo '<h2>'.$text.'</h2>';
              }
              else
              {
                $body .= $text."<br />";
              }
            }
            echo "<p>".$body."</p>";
          }
        @endphp
				<!-- 本文ここまで -->
		  </div>
		</main>
	</body>
</html>
