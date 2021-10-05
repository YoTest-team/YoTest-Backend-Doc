YoTest 后端接口及示例
----

> 基于虚拟机保护、设备特征识别和操作行为识别的新一代智能验证码，具备智能评分、抗Headless、模拟伪装、针对恶意设备自动提升验证难度等多项安全措施，帮助开发者减少恶意攻击导致的数字资产损失，强力护航业务安全。

* [示例项目](https://github.com/YoTest-team/YoTest-Backend-Doc#%E7%A4%BA%E4%BE%8B%E9%A1%B9%E7%9B%AE)
* [仓库入口](https://github.com/YoTest-team/YoTest-Backend-Doc#%E4%BB%93%E5%BA%93%E5%85%A5%E5%8F%A3)
* [HTTP约定](https://github.com/YoTest-team/YoTest-Backend-Doc#http%E7%BA%A6%E5%AE%9A)

### 示例项目

* [Node.js](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/nodejs)
* [PHP](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/php)
* [Python](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/python)
* [Java](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/java)
* [Go](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/go)
* [Ruby](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/ruby)
* [.Net](https://github.com/YoTest-team/YoTest-Backend-Doc/tree/master/dotnet)

### 仓库入口：
<a href="https://gitee.com/yo-test-team/yo-test-backend-doc"><img src="./images/gitee2.png" width="30px"/></a>&nbsp;&nbsp;
<a href="https://github.com/YoTest-team/YoTest-Backend-Doc"><img src="./images/GitHub.png" width="32px"/></a>

### HTTP约定

```javascript
POST /api/validate HTTP/1.1
Host: api.fastyotest.com
Content-Type: application/json
```

请求入参描述如下：

|      参数名称         |    参数类型   |    描述    |
| ------------- | ---------- | ---------- |
| token      | String | 验证凭证，需要通过从前端获取 |
| accessId      | String | 当前项目所属的accessId，可以在后台中进行获取及查看 |
| accessKey      | String | 当前项目所属的accessKey，可以在后台中进行获取及查看 |

请求出参描述如下

|      参数名称         |    参数类型   |    描述    |
| ------------- | ---------- | ---------- |
| code      | Int | 接口响应码，请参考下方错误码描述 |
| msg      | Int | 接口响应码对应的信息，请参考下方错误码描述 |
| data      | Object 或 Null | 具体的请求数据，请参考下方Data字段描述 |

Data字段描述如下所示：

|      参数名称         |    参数类型   |    描述    |
| ------------- | ---------- | ---------- |
| status      | Int | 验证状态，0: 未进行验证，1：已验证 |
| score      | Double | 风险分数，取值为0-100的区间，分数越低则验证风险越高 |
| visitorId      | String | 访客设备指纹ID，可作为短时间内的用户标识，具有小时级别的时效性，请勿作为用户唯一标识 |
| platform      | String | 平台标识，可为：web、miniprogram、android、ios |
| ipInfo      | Object 或 Null | IP风险信息，具体内容请参考下方IP风险信息描述 |
| mobileInfo      | Object 或 Null | 手机黑号风险信息，在用户进行了短信上行验证后可得，具体内容请参考下方Mobile风险描述 |

IP风险信息描述如下所示：

|      参数名称         |    参数类型   |    描述    |
| ------------- | ---------- | ---------- |
| ip      | String | 访问者来源IP |
| province      | String | IP所在省市信息 |
| city      | String | IP所在城市信息 |
| isp      | String | IP所对应的运营商信息 |

Mobile风险信息描述如下所示：

|      参数名称         |    参数类型   |    描述    |
| ------------- | ---------- | ---------- |
| mobile      | String | 短信上行验证对应的手机号 |
| score      | String | 手机号对应的风险分数，取值为0-100的区间，分数越低则风险越高 |
| tags      | String | 手机号对应的场景信息，包括：营销号，广告号，高风险号等，此字段仅供参考 |

错误码及信息如下所示

|      错误码         |    错误信息   |     描述    |
| ------------- | ---------- | ---------- |
| 200      | success | 请求成功 |
| 7000      | accessId not exists | 请求参数缺少accessId参数 |
| 7001      | accessKey not exists | 请求参数缺少accessKey参数 |
| 7002      | accessId incorrect | accessId不正确，请登录后台检查是否完整及正确 |
| 7003      | access info not matched | accessId和accessKey不匹配，请登录后台检查是否完整及正确 |
| 7004      | unknown error | 未知错误，一般为系统报错，请进行需要多次重试 |