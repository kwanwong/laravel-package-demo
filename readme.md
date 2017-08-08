###开发Laravel扩展教程
用法
```
composer require szzmzb/hasher
```
或者在composer.json的require部分添加
```
"szzmzb/hasher": "~1.0"
```
下载完毕之后，直接配置app/config.php的providers
```
\Szzmzb\Hasher\MD5HasherProvider::class,
```