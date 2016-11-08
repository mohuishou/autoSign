# 沃贝自动签到

> 用于联通沃贝相关活动的自动签到

## 优选在沃自动签到

### 文件
    YxzwSign.php

### 使用方法

> 由于优选在沃登录使用了图形验证码，所以这里使用了我的另外一个验证码识别的包，验证码识别需要先建立特征库，详细请点击[image-ocr](https://github.com/mohuishou/ImageOCR)

#### 安装
```
composer require mohuishou/auto-sign
```

#### 引入
```php
require_once "vendor/autoload.php"
```

#### 使用

只有一个主方法,index("优选在沃手机号","优选在沃密码");
```php
 try{
     $yxzw_sign=new \Mohuishou\Lib\YxzwSign();
     $auto_sign=$yxzw_sign->index("优选在沃手机号","优选在沃密码");
 }catch (Exception $e){
    echo $e->getMessage();
 }
```

#### 返回值

## Features
- [ ] 沃贝四川自动签到