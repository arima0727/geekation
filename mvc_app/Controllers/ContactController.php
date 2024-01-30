<?php
require_once ROOT_PATH.'Controllers/Controller.php';
require_once ROOT_PATH.'Models/Contact.php';

class ContactController extends Controller
{
    public function contactformvalidation(){
        $name = $_POST['name'];
        $kana = $_POST['kana'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $body = $_POST['body'];

        $_SESSION = $_POST;
        
        $errors = array();
        // 氏名のバリデーション
        if (empty($name)) {
            $errors['name'] = '氏名を入力してください。';
        } elseif (mb_strlen($name, 'UTF-8') > 10) {
            $errors['name'] = '氏名は10文字以内で入力してください。';
        }
        $_SESSION['name']   = htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8');
        
        // フリガナのバリデーション
        if (empty($kana)) {
            $errors['kana'] = 'フリガナを入力してください。';
        } elseif (mb_strlen($kana, 'UTF-8') > 10) {
            $errors['kana'] = 'フリガナは10文字以内で入力してください。';
        }
        $_SESSION['kana']   = htmlspecialchars($_POST['kana'], ENT_QUOTES,'UTF-8');
        
        // 電話番号のバリデーション 
        if (!empty($tel) && !preg_match('/^[0-9]+$/', $tel)) {
            $errors['tel'] = '電話番号は数字のみで入力してください。';
        }
        $_SESSION['tel']   = htmlspecialchars($_POST['tel'], ENT_QUOTES,'UTF-8');

        // メールアドレスのバリデーション
        if (empty($email)) {
            $errors['email'] = 'メールアドレスを入力してください。';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = '有効なメールアドレスを入力してください。';
        }
        $_SESSION['email']   = htmlspecialchars($_POST['email'], ENT_QUOTES,'UTF-8');
        
        // お問い合わせ内容のバリデーション
        if (empty($body)) {
            $errors['body'] = 'お問い合わせ内容を入力してください。';
        }
        $_SESSION['body']   = htmlspecialchars($_POST['body'], ENT_QUOTES,'UTF-8','UTF-8');
        
        if (!empty($errors)) {
            $Contact = new Contact;
            $record = $Contact->index();
            $record = $this->escapeFormData($record);
            $this->view('contacts/contactform',['post' => $_POST, 'posts' => $record, 'errors' => $errors]);

        } else {           
            $this->view('contacts/contact-confirmation',['post' => $_POST]);
        }   
    }

    public function contactform(){
            $_SESSION['rowData'] = $_POST;
            $Contact = new Contact;
            $record = $Contact->index();
            $_SESSION['Data'] = $_POST;

        if (!empty($_SESSION['post'])){
            $post = $_SESSION['post'];
            $post = $this->escapeFormData($post);
            $record = $this->escapeFormData($record);
            $this->view('contacts/contactform',['post' => $post,'posts' => $record]);

        }else{
            $this->view('contacts/contactform',['posts' => $record]);
        }
    }
    
    private function escapeFormData($data){
        if (is_array($data)) {
            return array_map([$this, 'escapeFormData'], $data);

        } else {
            return htmlspecialchars($data, ENT_QUOTES,'UTF-8');
        }
    }

    public function complete(){
        $referer = @$_SERVER['HTTP_REFERER'];
        if (empty($referer)) {
            die('このページへの直接アクセスは禁止されています。');
            header('Location: /contacts/contactform');

        }else{
            $Data = $_SESSION;
                    $Contact = new Contact;
                    $result = $Contact->create(
                        $Data['name'],
                        $Data['kana'],
                        $Data['email'],
                        $Data['tel'],
                        $Data['body']
                    );
                $this->view('contacts/contact-complete');
        }
    }

    public function update(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $url = $_SERVER['REQUEST_URI'];
            $params = explode('/', $url);
            $id = end($params);
            $contactId = preg_replace('/[^0-9]/', '', $id);
            $contact = new Contact;
            $rowData = $contact->getContactData($contactId);
            $this->view('contacts/update', ['rowData' => $rowData]);
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $contactId = $_POST['id'];
                $name = $_POST['name'];
                $kana = $_POST['kana'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $body = $_POST['body'];
                $errors = array();
    
                // 氏名のバリデーション
                if (empty($name)) {
                    $errors['name'] = '氏名を入力してください。';
                } elseif (mb_strlen($name, 'UTF-8') > 10) {
                    $errors['name'] = '氏名は10文字以内で入力してください。';
                }
                $_SESSION['name']   = htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8');
                
                // フリガナのバリデーション
                if (empty($kana)) {
                    $errors['kana'] = 'フリガナを入力してください。';
                } elseif (mb_strlen($kana, 'UTF-8') > 10) {
                    $errors['kana'] = 'フリガナは10文字以内で入力してください。';
                }
                $_SESSION['kana']   = htmlspecialchars($_POST['kana'], ENT_QUOTES,'UTF-8');
                
                // 電話番号のバリデーション (数字かどうかをチェック)
                if (!empty($tel) && !preg_match('/^[0-9]+$/', $tel)) {
                    $errors['tel'] = '電話番号は数字のみで入力してください。';
                }
                $_SESSION['tel']   = htmlspecialchars($_POST['tel'], ENT_QUOTES,'UTF-8');

                // メールアドレスのバリデーション
                if (empty($email)) {
                    $errors['email'] = 'メールアドレスを入力してください。';
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = '有効なメールアドレスを入力してください。';
                }
                $_SESSION['email']   = htmlspecialchars($_POST['email'], ENT_QUOTES,'UTF-8');
                
                // お問い合わせ内容のバリデーション
                if (empty($body)) {
                    $errors['body'] = 'お問い合わせ内容を入力してください。';
                }
                $_SESSION['body']   = htmlspecialchars($_POST['body'], ENT_QUOTES,'UTF-8');
                
                // エラーがある場合はエラーメッセージを表示して処理を中断
                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        $_SESSION['rowData'] = $_POST;
                        $contact = new Contact;
                        $rowData = $contact->getContactData($contactId);
                        $this->view('contacts/update', ['rowData' => $rowData,'errors'=>$errors]);
                        $_SESSION['errorMessages'] = $errors;
                    }
                }
            
                else{
                    $contact = new Contact;
                    $result = $contact->update($contactId, $name, $kana, $email, $tel, $body);
                    header('Location: /contacts/contactform');
                exit;
                }
        }
    }

    public function delete(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $contactId = $_GET['id'];
            $contact = new Contact;
            $result = $contact->deleteContact($contactId);
            header('Location: /contacts/contactform');
            exit;
        }
    }
}
    ?>