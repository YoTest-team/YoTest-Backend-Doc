=begin
@author YoTest-team
@version 1.0.0
@copyright 重庆艇镫科技有限公司
@description Ruby后端接口示例
=end

require 'uri'
require "json"
require 'net/http'

url = URI("https://api.fastyotest.com/api/validate")
payload = {
  :token => "验证凭证，需要通过从前端请求参数中获取",
  :accessId => "当前项目所属的accessId，可以在后台中进行获取及查看",
  :accessKey => "当前项目所属的accessKey，可以在后台中进行获取及查看"
}

request = Net::HTTP::Post.new(url)
request["Content-Type"] = 'application/json'
request.body = payload.to_json

http = Net::HTTP.new(url.host, url.port)
http.use_ssl = true
http.verify_mode = OpenSSL::SSL::VERIFY_NONE

response = http.request(request)
puts response.read_body