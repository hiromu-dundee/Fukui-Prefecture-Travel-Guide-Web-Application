<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" charset="utf-8">

<head>
    <meta http-equiv="content-type" charset="utf-8">

    <style type="text/css">
        body {
            text-align: center;
            background-color: #f5deb3;
        }

        #data {
            display: inline-block;
            text-align: left;
            margin: 0 auto;
        }

        a {
            color: #000;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            color: #000;
            text-align: center;
        }

        .bg_pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #ffe9a7;
            opacity: 0.4;
            z-index: -1;
        }

        .Lines_v4 {
            background-size: 40px 40px;
            background-image: repeating-linear-gradient(to right, #ffc107, #ffc107 2px, #ffe9a7 2px, #ffe9a7);
        }

        .space {
            height: 50px;
        }

        th,
        td {
            border: 1px solid #ff6347;
            padding: 8px;
            text-align: left;
            background-color: #afeeee;
        }

        th {
            text-align: center;
            background-color: #f2f2f2;
        }

        tr {
            background-color: #7fffd4;
        }

        .search {
            display: inline-block;
            vertical-align: middle;
        }

        .btn {
            background-color: #0f0;
            font-size: 30px;
            width: 400px;
            height: 80px;
            border-radius: 30px;
            background-image: linear-gradient(to right, #00ffff 0%, #00ff00 100%);
            color: #000;
            border: none;
        }

        .btn:hover {
            transform: scale(1.1);
            transition-duration: 0.5s;
        }

        .left {
            float: left;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }

        .btn-group {
            position: relative;
            left: 6%;
        }
    </style>

    <header>
        <a href="index.html" class="exit">ホーム</a>
        <title>観光地検索ページ：地図</title>
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <!--ここからメニュー-->
            <div class="menu-content">
                <ul>
                    <li>
                        <a href="index.html">ホームに戻る</a>
                    </li>
                    <li>
                        <a href="test25.php">グルメを検索</a>
                    </li>
                    <li>
                        <a href="detail.php">宿泊施設を検索</a>
                    </li>
                    <li>
                        <a href="map.php">観光地を検索</a>
                    </li>
                </ul>
            </div>
            <!--ここまでメニュー-->
        </div>
    </header>
    <link rel="stylesheet" href="map_php.css" />
</head>

<body>
    <div class="bg_pattern Lines_v4"></div>
    <div class="pagetop">ページトップへ</div>
    <div class="space"></div>
    <div class="data">
        <div class="search">

            <h1>観光地検索ページ</h1>

            <!-- フォームの method を post に変更 -->
            <form action="map.php" method="post">
                <h3>
                    検索したいキーワードやカテゴリを決めてください<br>
                    その後、下の地図から検索したい市・町を選んでください<br>
                    検索結果は下に表示されます
                </h3>
                <div class="inputWithIcon">
                    キーワード : <input type="text" placeholder="観光地のキーワード" id="name" name="name">
                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <center>
                    <div class="box">
                        <div class="left">
                            <div class="txt">観光地点大分類を選択</div>
                            <label class="selectbox-002">
                                <select name="daibunrui" id="daibunrui" name="daibunrui" class="check">
                                    <option value="">すべて</option>
                                    <option value="観光地点">観光地点</option>
                                    <option value="行祭事・イベント">行祭事・イベント</option>
                                </select>
                            </label>
                        </div>

                        <div class="left">
                            <div class="txt">観光地点中分類を選択</div>
                            <label class="selectbox-002">
                                <select name="tyuubunrui" id="tyuubunrui" name="tyuubunrui" class="check">
                                    <option value="">すべて</option>
                                    <option value="歴史・文化">歴史・文化</option>
                                    <option value="自然（行祭事・イベント）">自然（行祭事・イベント）</option>
                                    <option value="温泉・健康">温泉・健康</option>
                                    <option value="ｽﾎﾟｰﾂ･ﾚｸﾘｴｰｼｮﾝ">スポーツ・レクリエーション</option>
                                    <option value="都市型観光 買物 食">都市型観光 買物 食</option>
                                    <option value="その他">その他</option>
                                </select>
                            </label>
                        </div>

                        <div class="left">
                            <div class="txt">観光地点小分類を選択</div>
                            <label class="selectbox-002">
                                <select name="syoubunrui" id="syoubunrui" name="syoubunrui" class="check">
                                    <option value="">すべて</option>
                                    <option value="キャンプ場">キャンプ場</option>
                                    <option value="スキー場">スキー場</option>
                                    <option value="スポーツ・レクリエーション施設">スポーツ・レクリエーション施設</option>
                                    <option value="スポーツ観戦">スポーツ観戦</option>
                                    <option value="テーマパークテーマパーク">テーマパーク</option>
                                    <option value="レジャーランド・遊園地">レジャーランド・遊園地</option>
                                    <option value="公園">公園</option>
                                    <option value="動・植物園">動・植物園</option>
                                    <option value="博物館">博物館</option>
                                    <option value="史跡">史跡</option>
                                    <option value="地区・商店街">地区・商店街</option>
                                    <option value="城">城</option>
                                    <option value="山岳">山岳</option>
                                    <option value="庭園">庭園</option>
                                    <option value="歴史的まち並み、旧街道">歴史的まち並み、旧街道</option>
                                    <option value="歴史的建造物">歴史的建造物</option>
                                    <option value="水族館">水族館</option>
                                    <option value="河川">河川</option>
                                    <option value="海岸">海岸</option>
                                    <option value="海水浴場">海水浴場</option>
                                    <option value="温泉地">温泉地</option>
                                    <option value="湖沼">湖沼</option>
                                    <option value="産業観光">産業観光</option>
                                    <option value="神社・仏閣">神社・仏閣</option>
                                    <option value="美術館">美術館</option>
                                    <option value="花火大会">花火大会</option>
                                    <option value="花見">花見</option>
                                    <option value="行・祭事">行・祭事</option>
                                    <option value="記念・資料館">記念・資料館</option>
                                    <option value="郷土芸能">郷土芸能</option>
                                    <option value="釣り場">釣り場</option>
                                    <option value="食・グルメ">食・グルメ</option>
                                    <option value="高原">高原</option>
                                    <option value="その他温泉・健康">その他温泉・健康</option>
                                    <option value="その他自然">その他自然</option>
                                    <option value="その他都市型観光－買物・食等">その他都市型観光－買物・食等</option>
                                    <option value="他に分類されない行祭事・イベント">他に分類されない行祭事・イベント</option>
                                    <option value="他に分類されない観光地点">他に分類されない観光地点</option>
                                </select>
                            </label>
                        </div>
                    </div>

                </center>

                <img src="fukui.png" alt="" width=95% height=95%>

                <input class="all pref" type="submit" name="city" id="city" value="" />
                <input class="fukui pref" type="submit" name="city" id="city" value="福井市" />
                <input class="tsuruga pref" type="submit" name="city" id="city" value="敦賀市" />
                <input class="obama pref" type="submit" name="city" id="city" value="小浜市" />
                <input class="oono pref" type="submit" name="city" id="city" value="大野市" />
                <input class="katsuyama pref" type="submit" name="city" id="city" value="勝山市" />
                <input class="sabae pref" type="submit" name="city" id="city" value="鯖江市" />
                <input class="awara pref" type="submit" name="city" id="city" value="あわら市" />
                <input class="etizen pref" type="submit" name="city" id="city" value="越前市" />
                <input class="sakai pref" type="submit" name="city" id="city" value="坂井市" />
                <input class="eiheiji pref" type="submit" name="city" id="city" value="永平寺町" />
                <input class="ikeda pref" type="submit" name="city" id="city" value="池田町" />
                <input class="etizenc pref" type="submit" name="city" id="city" value="越前町" />
                <input class="minamietizen pref" type="submit" name="city" id="city" value="南越前町" />
                <input class="mihama pref" type="submit" name="city" id="city" value="美浜町" />
                <input class="takahama pref" type="submit" name="city" id="city" value="高浜町" />
                <input class="ooi pref" type="submit" name="city" id="city" value="おおい町" />
                <input class="wakasa pref" type="submit" name="city" id="city" value="若狭町" />
            </form>
        </div>
    </div>

    <div class="space-half"></div>
    <?php

    $host = 'localhost';
    $uname = 'root';
    $pass = 'Mikkir.2003';
    $dname = 'sample';
    $connect = mysqli_connect($host, $uname, $pass, $dname);
    /*
    $host = 'localhost';
    $uname = 'exp33_23_15';
    $pass = 'exp231';
    $dname = 'exp33_23_15';
    $connect = mysqli_connect($host, $uname, $pass, $dname);*/


    // 接続チェック
    if (!$connect) {
        die('データベースの接続に失敗しました。');
    }
    mysqli_set_charset($connect, "utf8");

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $nm = isset($_POST['name']) ? $_POST['name'] : '';

    $daibunrui = isset($_POST['daibunrui']) ? $_POST['daibunrui'] : '';
    $dai = isset($_POST['daibunrui']) ? $_POST['daibunrui'] : '';

    $tyuubunrui = isset($_POST['tyuubunrui']) ? $_POST['tyuubunrui'] : '';
    $tyuu = isset($_POST['tyuubunrui']) ? $_POST['tyuubunrui'] : '';

    $syoubunrui = isset($_POST['syoubunrui']) ? $_POST['syoubunrui'] : '';
    $syou = isset($_POST['syoubunrui']) ? $_POST['syoubunrui'] : '';


    $sea_city = isset($_POST['city']) ? $_POST['city'] : '';

    if (strcmp($sea_city, "") == 0 && strcmp($name, "") == 0 && strcmp($daibunrui, "") == 0 && strcmp($tyuubunrui, "") == 0 && strcmp($syoubunrui, "") == 0) {
        echo "<h1>市・町を指定して検索してください</h1>";
    } else {

        if (strcmp($sea_city, "市・町を指定しない") == 0) {
            $sea_c = "すべての市・町";
        } else if (strcmp($sea_city, "") == 0) {
            $sea_c = "すべての市・町";
        } else {
            $sea_c = $_POST['city'];
        }

        if (strcmp($tyuu, "ｽﾎﾟｰﾂ･ﾚｸﾘｴｰｼｮﾝ") == 0)
            $tyuu = "スポーツ・レクリエーション";

        echo "<h1>観光地の検索結果\n";

        echo "<h2>検索条件 : {$sea_c}";
        if (strcmp($dai, "") != 0)
            echo ", {$dai}";
        if (strcmp($tyuu, "") != 0)
            echo ", {$tyuu}";
        if (strcmp($syou, "") != 0)
            echo ", {$syou}";

        echo "</h2>\n";

        if (strcmp($nm, "") == 0) {
            $nm = "指定なし";
        }

        echo "<h2>キーワード検索条件 : {$nm}</h2>";


        // HTMLからPOSTされたデータを取得
        if (isset($_POST['city'])) {
            $count = 0;

            if (strcmp($sea_city, "越前町") == 0) {
                $sea_city = "丹生郡";
            }

            // SQLクエリを生成
    
            //修正後のSQL文            
            $query = 'SELECT kankouti.name, kankouti.loc, 
                kankouti.ido, kankouti.keido, 
                kankouti.daibunrui, kankouti.tyuubunrui, 
                kankouti.syoubunrui, RYOKAN1.名称,
                (6378.137 * ACOS(
                    SIN(RADIANS(kankouti.ido)) * SIN(RADIANS(RYOKAN1.緯度)) + 
                    COS(RADIANS(kankouti.ido)) * COS(RADIANS(RYOKAN1.緯度)) * 
                    COS(RADIANS(RYOKAN1.経度 - kankouti.keido))
                )) AS distance
            FROM RYOKAN1, kankouti
            WHERE kankouti.loc LIKE "%' . $sea_city . '%" 
                AND kankouti.daibunrui LIKE "%' . $daibunrui . '%" 
                AND kankouti.tyuubunrui LIKE "%' . $tyuubunrui . '%" 
                AND kankouti.syoubunrui LIKE "%' . $syoubunrui . '%"
                AND kankouti.name LIKE "%' . $name . '%"
                AND RYOKAN1.所在地 = (
                    SELECT RYOKAN1.所在地
                    FROM RYOKAN1
                    ORDER BY
                        (6378.137 * ACOS(
                            SIN(RADIANS(kankouti.ido)) * SIN(RADIANS(RYOKAN1.緯度)) + 
                            COS(RADIANS(kankouti.ido)) * COS(RADIANS(RYOKAN1.緯度)) * 
                            COS(RADIANS(RYOKAN1.経度 - kankouti.keido))
                        ))
                    LIMIT 1
                )
            ORDER BY kankouti.loc';

            $result = mysqli_query($connect, $query) or die('失敗');
            $row = mysqli_fetch_array($result);

            if (!$row) {
                echo "<br><h1>データが取得できませんでした。</h1><br>
                      <h1>他の検索条件をお試しください。</h1>\n";
            } else {

                $table = '
				<table border=1>
					<tr>
						<th> 観光地点等名 </th>
						<th> 所在地 </th>
						<th> 観光地点等大分類 </th>
						<th> 観光地点等中分類 </th>
						<th> 観光地点等小分類 </th>
						<th> 最寄りの宿泊施設(直線距離) </th>
                        <th> 最寄りの宿泊施設との距離(km) </th>
					</tr>
			    ';

                /*
                <th> 最寄りの宿泊施設との距離(km) </th>
                <td>' . $format . '</td>
                */

                $count = 0;
                do {

                    $format = number_format($row[8], 2);

                    $table .= '
					<tr>
						<td><a href="https://www.google.com/search?q=' . $row[0] . '">' . $row[0] . '</a></td>
						<td>' . $row[1] . '</td>
						<td>' . $row[4] . '</td>
						<td>' . $row[5] . '</td>
						<td>' . $row[6] . '</td>
						<td>' . $row[7] . '</td>
                        <td>' . $format . '</td>
					</tr>';

                    $count++;
                } while ($row = mysqli_fetch_array($result));
                $table .= '</table>';

                echo $table;
                echo "<h2>合計 {$count}件\n</h2>";
            }
        }
    }

    mysqli_close($connect);

    ?>
    </div>
    <script src="sample.js"></script>
    <link rel="stylesheet" href="check.css" />
    <link rel="stylesheet" href="name.css" />
    <div class="space"></div>
</body>

</html>