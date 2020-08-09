<?php
$str = <<<EOF
   <h3>docker环境</h3>
   <p>apline+php7+nginx</p>
   <h3>nginx配置</h3>
   <p>nginx配置文件：/etc/nginx*</p>
   <p>网站访问入口：/usr/share/nginx/html/public/web</p>
   <h3>创建容器</h3>
   <p>docker run -d -p 80:80 镜像id</p>
   <h3>进入容器</h3>
   <p>docker exec -it 容器id /bin/sh</p>
   <a href='phpinfo.php'>PHP版本信息</a>
EOF;

echo $str;