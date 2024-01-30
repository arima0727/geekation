<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせ</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/contacts.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="../js/validation.js"></script>
</head>

<body>
<div class="p-4 container-field form-orange">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto col-md-8">
            <h2 class="mb-4">お問い合わせ</h2>
            <form action="/contacts/contact-complete"method='POST'>
                <div class="form-group">
                    <label>氏名</label>
                    <input type="text" class="form-control" name="name" value="{$post['name']|default:''}"readonly>
                </div>
                <div class="form-group">
                    <label>フリガナ</label>
                    <input type="text" class="form-control" name="kana" value="{$post['kana']|default:''}"readonly>
                </div>
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="text" class="form-control" name="email" value="{$post['email']|default:''}"readonly>
                </div>
                <div class="form-group">
                    <label>電話番号</label>
                    <input type="text" class="form-control" name="tel" value="{$post['tel']|default:''}"readonly>
                </div> 
                <div class="form-group">
                    <label>お問い合わせ内容</label>
                    <textarea rows="4" type="text" class="form-control" name="body" readonly>{$post['body']|default:''}</textarea>
                </div>
                
                <p> <class="label-text">上記の内容でよろしいですか。</p>   
                <input class="btn" type="button" onclick="history.back(-1)" value='キャンセル'>                   
                <input type="submit" class="btn bg-warning my-1" name="btn_submit" value="送信">
            </form>
        </div>
    </div>
</div>
    
</body>