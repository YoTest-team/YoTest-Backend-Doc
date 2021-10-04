/**
 * @author YoTest-team
 * @version 1.0.0
 * @copyright 重庆艇镫科技有限公司
 * @description Java后端接口示例，请使用Maven安装Gson及OkHttp3的相关依赖
 */

import com.google.gson.Gson;
import okhttp3.*;

import java.util.HashMap;

public class Main {
  public static void main(String[] args) {
    HashMap<String, String> data = new HashMap<>();
    data.put("token", "验证凭证，需要通过从前端请求参数中获取");
    data.put("accessId", "当前项目所属的accessId，可以在后台中进行获取及查看");
    data.put("accessKey", "当前项目所属的accessKey，可以在后台中进行获取及查看");

    Gson gson = new Gson();
    MediaType mediaType = MediaType.parse("application/json");
    RequestBody body = RequestBody.create(mediaType, gson.toJson(data));

    Request request = new Request.Builder()
            .url("https://api.fastyotest.com/api/validate")
            .post(body)
            .addHeader("Content-Type", "application/json")
            .build();

    try {
      OkHttpClient client = new OkHttpClient();
      Response response = client.newCall(request).execute();
      System.out.println(response.body().string());
    } catch (Exception e) {
      // nothing to do...
    }
  }
}
