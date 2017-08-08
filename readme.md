### 开发Laravel扩展教程
用法
```
composer require szzmzb/hasher
```
或者在```composer.json```的require部分添加
```
"szzmzb/hasher": "~1.0"
```
下载完毕之后，直接配置```app/config.php```的providers
```
\Szzmzb\Hasher\MD5HasherProvider::class,
```