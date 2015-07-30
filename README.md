# Twig utilities for concrete5

This is a concrete5 package that adds some concrete5 CLI commands for handling the twig templates.

This also integrates with the [twig templates](https://github.com/mainio/c5pkg_twig_templates) composer package by extracting the translations also from those.

## Requirements

This package requires that you have the [twig templates](https://github.com/mainio/c5pkg_twig_templates) composer package installed
and associated with your concrete5 installation. It can be e.g. included within one of your concrete5 packages.


## Installation

1. Clone this repository into your concrete5 installations "packages" folder.
2. Rename the folder to `twig_utilities`.
3. Go to your installations Dashboard > Extend concrete5 section
4. Install the package visible in the list 

## Usage

```
cd your/project/folder/concrete/bin
./concrete5 twig:clear_cache your_package_handle
```

## License

Licensed under the MIT license. See LICENSE for more information.

Copyright (c) 2015 Mainio Tech Ltd.