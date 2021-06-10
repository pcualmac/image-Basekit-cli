<p align="center">
    <img src="https://github.com/pcualmac/image-Basekit-cli/blob/master/Screenshot.png" alt="AMP validation Example" height="100">
</p>

<p align="center">

</p>

## Transfer Files :

Use a config file to set which mimetype is allowed to be transferred## Installation

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
- [ ] Add to packagist
