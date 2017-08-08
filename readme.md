### 开发Laravel扩展教程
**用法**
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

**单元测试**
1. 修改composer.json，加入以下配置
```
"require-dev": {
    "phpunit/phpunit": "5.5.*"
}
```
2. 单元测试目录名称```tests```
3. 使用```setUp()```初始化测试类，作用相当于```__construct()```
4. 测试方法必须以```test```开头，例如```testXXX()```
5. 使用```vendor/bin/phpunit tests/testClassName```命令执行测试
6. 也可创建```phpunit.xml```文件，配置文件以后可直接运行```phpunit```执行测试