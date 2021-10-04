# -*- coding: utf-8 -*-
'''
@author YoTest-team
@version 1.0.0
@copyright 重庆艇镫科技有限公司
@description Python后端接口示例，请 python -m pip install -U requests 安装相关依赖
'''

import json
import requests

url = "https://api.fastyotest.com/api/validate"
payload = json.dumps({
    'token': "验证凭证，需要通过从前端请求参数中获取",
    'accessId': "当前项目所属的accessId，可以在后台中进行获取及查看",
    'accessKey': "当前项目所属的accessKey，可以在后台中进行获取及查看",
})

headers = { 'Content-Type': "application/json" }
response = requests.request("POST", url, data=payload, headers=headers)
print(response.text)
