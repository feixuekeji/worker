> ### 关于flysocket

flysocket是一款基于GatewayWorker开发的的支持双向通信长连接websocketMVC开发框架，适用于前后端通过长连接进行通讯的web项目,游戏服务器，同时也适用于开发tcp长连接应用如即时通信、物联网、消息推送、智能家居等。
>
开发初衷是为了实现客户端（包括浏览器web，APP，小程序，物联网设备）与服务端通信使用统一的socket长连接接口,开发一套接口用于多种客户端，服务器与客户端保持长连接，解决传统http模式每次连接都要初始化浪费系统资源的问题。

框架是一个通过websocket协议的MVC框架，前后端数据以json格式传输，框架多处参考thinkPHP，用法也尽量保持了跟tp方法一致，跟传统http项目一样容易上手。

>
由于个人能力有限，开发时间短，系统各种不足之处欢迎各位指正
>


## 主要模块：

*   自动加载
*   路由分发
*   控制器
*   模型使用ThinkOrm集成
*   日志类
*   缓存类
*   静态调用
*   验证器

##项目文档请移步
*   [开发文档](https://www.kancloud.cn/xiongfeifei/ver1)