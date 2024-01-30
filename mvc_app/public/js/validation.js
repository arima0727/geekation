window.onload = function(){
    /*各画面オブジェクト*/
    const btnSubmit = document.getElementById('btnSubmit');
    const name = document.getElementById('name');
    const kana = document.getElementById('kana');
    const tel= document.getElementById('tel');
    const email = document.getElementById('email');
    const body = document.getElementById('body');
    const reg = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$/;

    btnSubmit.addEventListener('click', function(event) {
        const form = document.getElementById('my-action');
            event.preventDefault();
        
        let message = [];
        /*入力値チェック*/
        if (name.value === "") {
            message.push("氏名は必須項目です。");
        } else if (name.value.length > 10) {
            message.push("氏名は10文字以内で入力してください。");
        }
        if (kana.value === "") {
            message.push("フリガナは必須項目です。");
        } else if (kana.value.length > 10) {
            message.push("10文字以内で入力してください。");
        }
        if(email.value==""){
            message.push("メールアドレスは必須項目です。");
        }else if(!reg.test(email.value)){
            message.push("メールアドレスの形式が不正です。");
        }
        var phoneNumber = tel.value.replace(/-/g, ''); // ハイフンを除去して数字のみにする
        if (!/^\d+$/.test(phoneNumber) && !tel.value=="") {
            message.push("電話番号は数字のみで入力してください。");
        }
        if(body.value==""){
            message.push("お問い合わせ内容は必須項目です。");
        }
        
        if(message.length > 0){
            form.submit();
            alert(message);
			return;
        }else{
            alert('入力チェックOK');
            form.submit();
        }
    });
};

