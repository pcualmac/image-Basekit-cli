<p align="center">
    <img src="https://github.com/pcualmac/image-Basekit-cli/blob/master/Screenshot.png" alt="AMP validation Example" height="100">
</p>

<p align="center">
  <a href="https://packagist.org/packages/jeffochoa/amp-validator"><img src="https://poser.pugx.org/jeffochoa/amp-validator/d/total.svg" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/jeffochoa/amp-validator"><img src="https://poser.pugx.org/jeffochoa/amp-validator/v/stable.svg" alt="Latest Version"></a>
  <a href="https://packagist.org/packages/jeffochoa/amp-validator"><img src="https://poser.pugx.org/jeffochoa/amp-validator/license.svg" alt="License"></a>
</p>

## Task:

Small CLI app that handles image storage to be used as part of a wider application. You can assume actual capture of the image happens elsewhere in the wider application and the local path to an image can simply be passed as input to the CLI app.

 

The app should perform basic validation on the image and allow it’s storage, retrieval and deletion on the file system. Note whilst only file system storage is required in this test the module should be written in such a way that makes it easy to plug in future required storage methods eg S3, FTP etc using just a config change along with the new storage class.

 

The app should perform basic logging using a PS3 compliant logger.


## Installation

```bash
git clone https://github.com/pcualmac/image-Basekit-cli.git
```
### Composer

```bash
composer install
```

## Usage

```bash
php image-Basekit-cli command:validation /var/www/vhosts/image-Basekit-cli/public/download.jpeg
```

```bash
php image-Basekit-cli command:delete /var/www/vhosts/image-Basekit-cli/public/download.jpeg
```

```bash
php image-Basekit-cli command:store /var/www/vhosts/image-Basekit-cli/public/download.jpeg
```

```bash
php image-Basekit-cli command:download /var/www/vhosts/image-Basekit-cli/public/download.jpeg
```

### List

- [x] Install Laravel-zero
- [x] Hello Word
- [x] Add Config file
- [x] Support Class
- [ ] Add Test
- [ ] Add queue. Transfer to s3 or ftp can be a slowly task
- [ ] Redfin command syntax. "more info from cliente is need."
```bash
php image-Basekit-cli command:download <source> <path> <destination> <path>
```
- [ ] Add Menu
- [ ] Excute Build 
