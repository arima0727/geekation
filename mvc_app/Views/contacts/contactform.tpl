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
            <form action="/contacts/contactform" id='my-action' method="post" class="bg-white p-3 rounded mb-5">
                <div class="form-group">
                    <label form="name">名前</label><span>必須</span>
                    <input type="text" class="form-control" name="name" id="name" placeholder="テスト太郎" value="{$post['name']|default:''}">
                    <p id="nameMessage" class="error-text">{$errors['name']|default:''}</p>
                </div>
                <div class="form-group">
                    <label form="kana">フリガナ</label><span>必須</span>
                    <input type="text" class="form-control" name="kana" id="kana" placeholder="テストタロウ" value="{$post['kana']|default:''}">
                    <p id="kanaMessage" class="error-text">{$errors['kana']|default:''}</p>
                </div>
                <div class="form-group">
                    <label form="email">メールアドレス</label><span>必須</span>
                    <input type="email" class="form-control" name="email" id="email" placeholder="example@cin-group.co.jp" value="{$post['email']|default:''}">
                    <p id="emailMessage" class="error-text">{$errors['email']|default:''}</p>
                </div>
                <div class="form-group">
                    <label form="tel">電話番号</label>
                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="0000000000" value="{$post['tel']|default:''}">
                    <p id="telMessage" class="error-text">{$errors['tel']|default:''}</p>
               </div>
                <div class="form-group">
                    <label form="contact">お問い合わせ内容</label><span>必須</span>
                    <textarea rows='4' type="text" class="form-control" name="body" id="body" placeholder="お問い合わせ内容">{$post['body']|default:''}</textarea>
                    <p id="bodyMessage" class="error-text">{$errors['body']|default:''}</p>
                </div>

                <div action='UserController.php' method="post">
                    <button type='submit' class='submit btn bg-warning my-1' id="btnSubmit">内容確認</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center wrap my-5">
        <div class="title w-10">名前</div>
        <div class="title w-15">フリガナ</div>
        <div class="title w-15">電話番号</div>
        <div class="title w-20">メールアドレス</div>
        <div class="title w-25">お問い合わせ内容</div>
        <div class="title w-5"></div>
        <div class="title w-5"></div>
    {foreach from=$posts item=data}
        <div class="w-10">{$data.name}</div>
        <div class="w-15">{$data.kana}</div>
        <div class="w-15">{$data.tel}</div>
        <div class="w-20">{$data.email}</div>
        <div class="w-25">{$data.body}</div>
        <div class="w-5"><a href="/contacts/update?id={$data.id}" class="button" name='update'>編集</a></div>
        <div class="w-5"><a href="/contacts/delete?id={$data.id}" class="button" name='delete' onclick="return confirm('本当に削除しますか?')">削除</a></div>
    {/foreach}
    </div>

    <div>
        <div class="row justify-content-md-center text-center">
            <div class="col-lg-6 mx-auto col-md-8">
                <div class="bg-white p-3 rounded mb-5">
                    <div class="m-1">
                        <a href="/">トップページへ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>