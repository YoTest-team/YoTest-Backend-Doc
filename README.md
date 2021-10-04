YoTest 后端接口及示例项目
----

> 基于虚拟机保护、设备特征识别和操作行为识别的新一代智能验证码，具备智能评分、抗Headless、模拟伪装、针对恶意设备自动提升验证难度等多项安全措施，帮助开发者减少恶意攻击导致的数字资产损失，强力护航业务安全。

* [HTTP约定](https://github.com/YoTest-team/YoTest-Web-SDK#%E4%BB%93%E5%BA%93%E5%85%A5%E5%8F%A3)
* [仓库入口](https://github.com/YoTest-team/YoTest-Web-SDK#%E5%85%BC%E5%AE%B9%E6%80%A7)
* [示例项目](https://github.com/YoTest-team/YoTest-Web-SDK#%E5%AE%89%E8%A3%85)


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
<a href="https://gitee.com/yo-test-team/yo-test-web-sdk"><img src="./images/gitee2.png" width="30px"/></a>&nbsp;&nbsp;
<a href="https://github.com/YoTest-team/YoTest-Web-SDK"><img src="./images/GitHub.png" width="32px"/></a>

### 示例项目

* [Node.js](https://github.com/YoTest-team/YoTest-Web-SDK#%E4%BB%93%E5%BA%93%E5%85%A5%E5%8F%A3)
* [PHP](https://github.com/YoTest-team/YoTest-Web-SDK#%E5%85%BC%E5%AE%B9%E6%80%A7)
* [Python](https://github.com/YoTest-team/YoTest-Web-SDK#%E5%AE%89%E8%A3%85)
* [Java](https://github.com/YoTest-team/YoTest-Web-SDK#%E5%BF%AB%E9%80%9F%E5%BC%80%E5%A7%8B)
* [Go](https://github.com/YoTest-team/YoTest-Web-SDK#%E9%AA%8C%E8%AF%81%E6%A8%A1%E5%BC%8F)
* [Ruby](https://github.com/YoTest-team/YoTest-Web-SDK#api)
* [.Net](https://github.com/YoTest-team/YoTest-Web-SDK#api)
