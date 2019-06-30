# site-wireframe-docs

This is a ProcessWire site profile based on the documentation site of the wireframe output framework,
mainly intended as an example of how one might use wireframe on a real website. Code and modules are
identical to the real docs site, but page content has been replaced with lorem ipsum placeholders.

* For more details about the wireframe output framework, visit https://wireframe-framework.com.
* For more details regarding the ProcessWire CMS/CMF itself, visit https://processwire.com.

Need help, found a bug, or have a question regarding this site profile? Feel free to submit an issue
to this repository. If your problem or question is related to the wireframe framework, please submit
an issue to the [wireframe repository](https://github.com/teppokoivula/wireframe). Thanks!

## Requirements

- ProcessWire 3.0.112 or newer
- PHP 7.1 or newer
- Composer

*Other requirements, such as ProcessWire modules, are installed with Composer.*

### Note about composer.json require order

In case you're wondering why we have two ProcessWire Composer installers required – hari/pw-module
and wireframe-framework/processwire-composer-installer – there's actually a good reason for this,
even if it's a bit of a hack. First of all, here's how Composer install order works:

* Composer doesn't let us define package install order, but it prioritizes Composer installers.
* If multiple installers compete for one package, the installer installed or loaded later wins.

Since this project depends on the ability of wireframe-framework/processwire-composer-installer to
install packages via the site directory, we're telling Composer it that we need both installers –
and because the one we actually need gets installed later, it overrides the first one, even for
packages that define that one as a dependency.

*Note: if you remove or alter the installer requirements, you may not be able to install modules
from the site directory anymore.*

## How to install

1. Obtain a fresh copy of ProcessWire 3.0.112 or newer and upload/unzip it on your server.

2. Download or clone the contents of this repository into /site-wireframe-docs/ directory
   within the directory you uploaded/unzipped ProcessWire to. You will see other site
   directories already there, like /site-default/, which is included with the PW core.
   You can leave them for now.

3. Go to the /site-wireframe-docs/ directory and run `composer install`.

4. Now install ProcessWire by accessing the URL it lives in from your web browser. When
   the installer asks you to choose a site profile, choose the "Wireframe Docs Site Profile".

## License

This project is licensed under the Mozilla Public License Version 2.0.