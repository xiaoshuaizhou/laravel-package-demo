### Laravel 扩展之 加密包（md5）
[![Build Status](https://travis-ci.org/xiaoshuaizhou/laravel-package-demo.svg?branch=master)](https://travis-ci.org/xiaoshuaizhou/laravel-package-demo)
#### 用法：
```php
composer require zhouxiaoshuai/hasher
```
或者在你的 `composer.json` 的 `require` 部分中添加
```php
"zhouxiaoshuai/hasher":"~1.0"
```
下载完毕后，直接配置 `app/config.php` 的 `providers`:
```php
\Zhouxiaoshuai\Hasher\MD5HasherProvider::class,
```