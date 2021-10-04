/**
 * @author YoTest-team
 * @version 1.0.0
 * @copyright 重庆艇镫科技有限公司
 * @description Go后端接口示例
 */

package main
import (
	"fmt"
	"strings"
	"net/http"
	"io/ioutil"
	"encoding/json"
)

func main() {
	data := make(map[string]interface{})
	data["token"] = "验证凭证，需要通过从前端请求参数中获取"
	data["accessId"] = "当前项目所属的accessId，可以在后台中进行获取及查看"
	data["accessKeys"] = "当前项目所属的accessKey，可以在后台中进行获取及查看"
	payload, _ := json.Marshal(data)

	url := "https://api.fastyotest.com/api/validate"
	req, _ := http.NewRequest("POST", url, strings.NewReader(string(payload)))
	req.Header.Add("content-type", "application/json")
	res, _ := http.DefaultClient.Do(req)

	defer res.Body.Close()
	body, _ := ioutil.ReadAll(res.Body)
	fmt.Println(string(body))
}