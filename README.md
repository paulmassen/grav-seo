# Grav Seo Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of this plugin.**

The **Grav Seo** Plugin is for [Grav CMS](http://github.com/getgrav/grav). User-friendly SEO plugin for Grav CMS

## Installation

Installing the Grav Seo plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install grav-seo

This will install the Grav Seo plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/grav-seo`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `grav-seo`. You can find these files on [GitHub](https://github.com/-12809352/grav-plugin-grav-seo) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/grav-seo
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/grav-seo/grav-seo.yaml` to `user/config/plugins/grav-seo.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Rank checker for a given keyword
- [ ] Keyword presence analysis
- [ ] Image alt checking
- [ ] Progress bar
- [ ] Dashboard for SEO data
- [ ] Rich Snippet visualisation
- [ ] Schema.org microdata generation
