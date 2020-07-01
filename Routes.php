<?php
Route::set('index.php', function (){
    Index::CreateView('Index');
});

Route::set('form', function (){
    Form::CreateView('Form');
});
Route::set('action-page', function (){
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $sub_name = $_POST['sub_name'];
        ActionPage::Insert($sub_name);
    }
    else{
        Error1::CreateView('Error1');
    }
});

Route::set('about-us', function (){
    AboutUs::CreateView('AboutUs');
    AboutUs::Select();
});