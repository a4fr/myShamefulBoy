**myShamefulBoy** is a simple and useful php app for extract html source code of URLs that limited in your ISP or country or see error 403 because of your location. You can  put this file on your host or server (placed in another country or use another ISP), enter the URL and see html source code.

On your host
---------------
* Login to your host account
* Create a subdomain (src.**YourDomain**.com).
* Upload the php file and rename it to `index.php`.
* Now your website is ready. Type http://src.yourdomain.com in your browser and Enter the URL.

Technical notice
--------------------
**myShamefulBoy** get `url` with `POST` method. For example if you have a robot for parsing a website, you can send URL address with `POST` method to your new website http://src.yourdomain.com with name of `url` . 

**Sample code in python 3 for using your new website:**

```python
import urllib.request
import urllib.parse

app = 'http://src.ali-najafi.ir/'
url = 'http://www.bbc.co.uk/'
data = urllib.parse.urlencode({'url': url})
data = data.encode('utf-8')
request = urllib.request.Request(app)
src = urllib.request.urlopen(request, data).read().decode('utf8')
print(src)
```
