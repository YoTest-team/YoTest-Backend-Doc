/**
 * @author YoTest-team
 * @version 1.0.0
 * @copyright 重庆艇镫科技有限公司
 * @description Node.js后端接口示例，请 npm i request 安装必要依赖
 */

const request = require("request");
const options = {
  method: "POST",
  json: true,
  url: "https://api.fastyotest.com/api/validate",
  headers: { "Content-Type": "application/json" },
  body: {
    token: "验证凭证，需要通过从前端请求参数中获取",
    accessId: "当前项目所属的accessId，可以在后台中进行获取及查看",
    accessKey: "当前项目所属的accessKey，可以在后台中进行获取及查看",
  },
};

request(options, function (error, response, body) {
  if (error) throw new Error(error);
  console.log(body);
});
