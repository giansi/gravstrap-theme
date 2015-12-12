---
title: Layouts

navbar_configuration:
    submenu: true

content:
    items: @self.children
    order:
        by: name
        dir: asc

layout_elements:
    left_sidebar:
        column: 0
#        class: col-sm-12
    main_content:
        column: 8
        class: col-md-offset-2 col-sm-12
    right_sidebar:
        column: 0
#        class: col-sm-12
---

# Internal layouts
The internal template handles the website internal pages. This is a very versatile template because you can configure it in the page's header section, defining the columns number and their width.

Check out some usage examples of the `internal.html.twig` template:

* [The internal template in detail](the-internal-template-in-detail)
* [Left sidebar (default)](default-internal-template)
* [Right sidebar](right-internal-template)
* [Fullwidth](fullwidth-template)
