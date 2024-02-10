<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casteria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/contacts.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="../js/validation.js"></script>
</head>
<body>
    <div class="p-4 container-field form-orange">
        <div class="row justify-content-center">
            <div class="col-lg-6 mx-auto col-md-8">
                <h2 class="mb-4">更新画面</h2>
                
                <form action="/contacts/update" method="post" id='my-action' class="bg-white p-3 rounded mb-5">
                    <div class="form-group">
                        <label for="name">名前</label><span>必須</span>
                        <input type="text" class="form-control" name="name" id="name" placeholder="テスト太郎" value="{$rowData->name}">
                        <p class="error-text">{$errors['name']|default:''}</p>
                    </div>
                    <div class="form-group">
                        <label for="kana">フリガナ</label><span>必須</span>
                        <input type="text" class="form-control" name="kana" id="kana" placeholder="テストタロウ" value="{$rowData->kana}">
                        <p class="error-text">{$errors['kana']|default:''}</p>
                    </div>
                    <div class="form-group">
                        <label for="email">メールアドレス</label><span>必須</span>
                        <input type="email" class="form-control" name="email" id="email" placeholder="exemple@cin-group.co.jp" value="{$rowData->email}">
                        <p class="error-text">{$errors['email']|default:''}</p>
                    </div>
                    <div class="form-group">
                        <label for="tel">電話番号</label>
                        <input type="tel" class="form-control" name="tel" id="tel" placeholder="00000000000" value="{$rowData->tel}">
                        <p class="error-text">{$errors['tel']|default:''}</p>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" id="id" placeholder="00000000000" value="{$rowData->id}">
                    </div>
                    <div class="form-group">
                        <label for="text">お問い合わせ内容</label><span>必須</span>
                        <textarea rows='4' class="form-control" name="body" id="body"  placeholder="お問い合わせ" value="{$rowData->body}">{$rowData->body}</textarea>
                        <p class="error-text">{$errors['body']|default:''}</p>
                    </div>
                    <p> <class="label-text">上記の内容でよろしいですか。</p>  
                    <a type="submit" name="btn_back" href="/contacts/contactform" value="キャンセル">キャンセル</a>  
                    <input type="submit" class="btn bg-warning my-1" name="btnSubmit" id="btnSubmit" value='更新'>
                </form>
                <div class="m-1">
                    <a href="/">トップページへ</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
