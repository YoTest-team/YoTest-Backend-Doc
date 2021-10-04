/**
 * @author YoTest-team
 * @version 1.0.0
 * @copyright 重庆艇镫科技有限公司
 * @description .Net后端接口示例，请 dotnet add package RestSharp 安装相关依赖
 */

using System;
using System.Text;
using RestSharp;

namespace _net
{
  class Program
  {
    static void Main(string[] args)
    {
      var builder = new StringBuilder();
      builder.Append("{");
      builder.Append("\"token\":\"验证凭证，需要通过从前端请求参数中获取\",");
      builder.Append("\"accessId\":\"当前项目所属的accessId，可以在后台中进行获取及查看\",");
      builder.Append("\"accessKey\":\"当前项目所属的accessKey，可以在后台中进行获取及查看\"");
      builder.Append("}");

      var client = new RestClient("https://api.fastyotest.com/api/validate");
      var request = new RestRequest(Method.POST);
      request.AddHeader("Content-Type", "application/json");
      request.AddParameter("application/json", builder.ToString(), ParameterType.RequestBody);
      var response = client.Execute(request);
      Console.WriteLine(response.Content);
    }
  }
}
