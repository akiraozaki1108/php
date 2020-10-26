<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>tech.pjin.jp HTML5 Template</title>
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1><i class="fa fa-check-square"></i> PHP問題７２</h1>
            </div>
            <div class="jumbotron">
                <?= htmlspecialchars(@$_POST['fruit']) ?>が選択されました。
            </div>
 
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="form-group">
                        <label>好きな果物</label>
                        <select name="fruit" class="form-control">
                            <option value="1">リンゴ</option>
                            <option value="2">みかん</option>
                            <option value="3">バナナ</option>
                            <option value="4">パイナップル</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">送信</a>
                </div>
            </div>
            </form>
 
        </div>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
