YoTest 后端接口及示例
----

> 基于虚拟机保护、设备特征识别和操作行为识别的新一代智能验证码，具备智能评分、抗Headless、模拟伪装、针对恶意设备自动提升验证难度等多项安全措施，帮助开发者减少恶意攻击导致的数字资产损失，强力护航业务安全。

* [HTTP约定](https://github.com/YoTest-team/YoTest-Backend-Doc#http%E7%BA%A6%E5%AE%9A)
* [仓库入口](https://github.com/YoTest-team/YoTest-Backend-Doc#%E4%BB%93%E5%BA%93%E5%85%A5%E5%8F%A3)
* [示例项目](https://github.com/YoTest-team/YoTest-Backend-Doc#%E7%A4%BA%E4%BE%8B%E9%A1%B9%E7%9B%AE)


### HTTP约定

```javascript
POST /api/validate HTTP/1.1
Host: api.fastyotest.com
Content-Type: application/json

{
    "token":"验证凭证，需要通过从前端获取",
    "accessId": "当前项目所属的accessId，可以在后台中进行获取及查看",
    "accessKey": "当前项目所属的accessKey，可以在后台中进行获取及查看"
}
```

### 仓库入口：
<a href="https://gitee.com/yo-test-team/yo-test-backend-doc"><img src="./images/gitee2.png" width="30px"/></a>&nbsp;&nbsp;
<a href="https://github.com/YoTest-team/YoTest-Backend-Doc"><img src="./images/GitHub.png" width="32px"/></a>

### 示例项目

* [Node.js](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/nodejs)
* [PHP](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/php)
* [Python](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/python)
* [Java](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/java)
* [Go](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/go)
* [Ruby](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/ruby)
* [.Net](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/dotnet)
