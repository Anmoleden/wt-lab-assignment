## Geting started with xaamp
XAMPP is one of the widely used cross-platform web servers, which helps developers to create and test their programs on a local webserver. It was developed by the **Apache Friends**, and its native source code can be revised or modified by the audience. It consists of **Apache HTTP Server, MariaDB, and interpreter** for the different programming languages like PHP and Perl. It is available in 11 languages and supported by different platforms such as the IA-32 package of Windows & x64 package of macOS and Linux.

### What is Apache server used for?

As a Web server, Apache is responsible for  **accepting directory (HTTP) requests from Internet users and sending them their desired information in the form of files and Web pages**. Much of the Web's software and code is designed to work along with Apache's features.

### What is virtual host? 

The concept of virtual hosts  **allows more than one Web site on one system or Web server**. The servers are differentiated by their host name. Visitors to the Web site are routed by host name or IP address to the correct virtual host. Virtual hosting allows companies sharing one server to each have their own domain names.

#### ##  Step of creating a Virtual Hosts:
### Update XAMP Virtual Host File

Find path to xaamp and  `C:\xampp\apache\conf\extra`  and open filename  `httpd-vhosts.conf`  and Change DocumentRoot and ServerName accordingly

```
<VirtualHost *:80>
   DocumentRoot "C:\xampp\htdocs\web\Wt-assignment\Assignments\Assignment 7\project1
"
   ServerName project1.local
</VirtualHost>
<VirtualHost *:80>
   DocumentRoot "C:\xampp\htdocs\web\wt-assignment\Assignments\Assignment 7\project2
"
   ServerName project2.local
</VirtualHost>


```

Correctly enter the document root because the typos can create problems .Give a unique name for the specific project you are working on it can be any thing like paypal.local .... ... and Append the code as per your projects .

###  Step of creating   XAMP Virtual Host File:

==Note : Make sure to duplicate the host file in any seperate location :==

Go to path  `C:\Windows\System32\drivers\etc`  to edit  `host`  file

==note : Your system cannot allow yo to edit directly there so make sure that you copy it to different location and have an extra original copy in any case==

Lets edit : Here put the dummy alias you entered previously next to ip  `127.0.01`  and append accordingly adding your next projects

```
# localhost name resolution is handled within DNS itself.
# 127.0.0.1       localhost
# ::1             localhost

# lets resolve ip to localhost first
 127.0.0.1       localhost
 # And then the ip's to our costom domain
  127.0.0.1       project1.local
  127.0.0.1       project2.local




```

Now the previous project url wont work and type the new url you config to At me i have two urls  `project1.local`  &  `project2.local`  Working


