<?php
require_once('/var/simplesamlphp/lib/_autoload.php');

use SimpleSAML\Auth\Simple;

$as = new Simple('default-sp');
$as->requireAuth();
$name = $as->getAuthData("saml:sp:NameID");
$attributes = $as->getAttributes();
print_r($attributes);
echo($attributes["uid"][0]);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>99fed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1>こんにちは <?php echo($attributes["uid"][0]); ?></h1>
<pre>
    <?php print_r($attributes); ?>
</pre>
<a href="https://fed.example.org/simplesaml/module.php/core/authenticate.php?as=default-sp&logout">logout</a>

<form>
    <div class="container">
        <?php
        $interest = array(
            'interest' => array(
                ''
            ),
            'query' => array(
                'subject' => 'i_num',
                'query' => '12345678'
            ),
            'certificate' => "",
            'callback' => "https://fed.example.org",
            'createReq' => "",
        );
        $interest_json = json_encode($interest);
        ?>
        <div class="form-group">
            <form method="POST" action="./result.php">
                <label for="selectIdp2">認証機関を選択</label>
                <select id="selectIdp2" class="form-control form-control-lg">
                    <option>クレジットカード</option>
                </select>
                <label for="id2">IDを入力:</label>
                <input id="id2" type="text" name="id2">
                <button type="submit" class="btn btn-primary">決定</button>
            </form>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>
