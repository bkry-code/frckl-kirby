# frckl-kirby — a modified kirby plainkit

This is a simple basic starting point to get a kirby page up and running.
Basically this is a lot like the [kirby plainkit](https://github.com/getkirby/plainkit)
but with some additions and defaults. This package uses kirby and the panel
as submodules for easy updating.

## Installation

Clone this repo as your public folder, enter the directory and run the following
command to install the needed submodules:

```
git submodule init
git submodule update
cd kirby
git submodule init
git submodule update
```

After having installed all submodules you have to create a configuration:
rename the file in `site/config/config.sample.php` to `config.php`, add
your license and start coding!

## Updating kirby

With submodules, updating kirby is as easy as this:

```
git submodule foreach --recursive git checkout master
git submodule foreach --recursive git pull
```

See [http://getkirby.com/blog/working-with-git](http://getkirby.com/blog/working-with-git).

## Notes

Have a look at the file .gitignore. Some files are ignored by default, such
as the `config.php` (to never accidentally publish your license key) and all
contents from the accounts, cache and thumbs folders. Change this to your
liking or deploy those files manually, if needed.

I recommend to add the folder `content` to .gitignore as well, if you use the
panel or let customers loose to edit the content.

## License

[Same as kirby's](license.md). Please support this project and [get your license now](http://getkirby.com/buy)! 

## Changelog

v1.0.2 — Fix snippets includes + old-browsers snippet
v1.0.1 — Installation instructions  
v1.0.0 — Initial commit
