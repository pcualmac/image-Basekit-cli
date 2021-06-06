<p align="center">
    <img src="https://raw.githubusercontent.com/jeffochoa/amp-validator/master/docs/example.png" alt="AMP validation Example" height="300">
</p>


## Task:

You are required to write a small CLI app that handles image storage to be used as part of a wider application. You can assume actual capture of the image happens elsewhere in the wider application and the local path to an image can simply be passed as input to the CLI app.

 

The app should perform basic validation on the image and allow it’s storage, retrieval and deletion on the file system. Note whilst only file system storage is required in this test the module should be written in such a way that makes it easy to plug in future required storage methods eg S3, FTP etc using just a config change along with the new storage class.

 

The app should perform basic logging using a PS3 compliant logger.

 

## Installation

### Via Composer

```bash
composer global require jeffochoa/amp-validator
```

### Manually

First, download the binary using `wget`:

```bash
wget https://github.com/jeffochoa/amp-validator/blob/master/builds/amp-validator -O amp-validator
```

Change binary permissions:

```bash
sudo chmod ax amp-validator
```

Move to bin directory:

```bash
sudo mv amp-validator /usr/local/bin/amp-validator
```

## Usage

```bash
amp-validator
```

### Singe page validation

The given URL should be publicly accessible.

```bash
amp-validator validate http://website.test/valid-amp-link
```

### Validate a batch of links

You can use the generated CSV report by [Google Webmaster Tools](https://www.google.com/webmasters/tools/home) (GWT) as input to validate locally.

[![AMP online validation tool](https://raw.githubusercontent.com/jeffochoa/amp-validator/master/docs/csv-download.png)](https://www.google.com/webmasters/tools/accelerated-mobile-pages)

Go to [https://www.google.com/webmasters/tools/accelerated-mobile-pages](https://www.google.com/webmasters/tools/accelerated-mobile-pages)

Download the AMP report in `Search Appearance / Accelerate mobile pages`

Once you have the file downloaded locally:

```bash
amp-validator validate-batch path-to-file/downloaded.csv
```

This tool will read the CSV file generated on GWT to run the validation on each tests contained in the file, then you can select between the different types of output formats to export your report.

```text

    Please select an output format
    ----------------------------------------------------------------------------------

    ● Export to CSV file
    ○ In console (summarized)
    ○ In console (extended)
    ○ Cancel
```

#### Extra help to fix the errors in your page
The following example is the output generated using the "In console (extended)" option:

```text
-----------------------------------------------------------------------------------
| Key     | Value                                                                    |
-----------------------------------------------------------------------------------
| link    | https://you-given-url.test                                               |
| error   | The attribute 'target' in tag 'a' is set to the invalid value 'blank'.   |
| line    | 1221                                                                     |
| col     | 3                                                                        |
| code    | INVALID_ATTR_VALUE                                                       |
| help    | https://www.ampproject.org/docs/reference/spec#links                     |
| preview | https://search.google.com/test/amp?url=https://you-given-url.test        |
------------------------------------------------------------------------------------
```

If you click on the `preview` link, you'll be taken to the online google validation tool.

![AMP online validation tool](https://raw.githubusercontent.com/jeffochoa/amp-validator/master/docs/test-online.jpg)

## License

AMP Validator is an open-sourced software licensed under the [MIT license](LICENSE.md).
