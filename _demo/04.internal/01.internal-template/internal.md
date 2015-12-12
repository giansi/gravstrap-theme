---
title: The internal template
metadata:
  description: A very versatile template to handle internal pages.

slug: the-internal-template-in-detail

layout_elements:
    left_sidebar:
        column: 3
        class: col-sm-12
    main_content:
        column: 6
        class: col-sm-12
    right_sidebar:
        column: 3
        class: col-sm-12
---

# How to use the internal template
The internal template handles the website internal pages. This is a very versatile template because you can define the columns number and their width, in the page's header section, .

By default it comes as a two columns template, with a left sidebar and large content section. To add a third column, just configure the page's header section as follows:

    layout_elements:
        left_sidebar:
            column: 3
        main_content:
            column: 7
        right_sidebar:
            column: 2

Usually you would also define the classes for small devices. This can be easily accomplished, adding an `extra_classes` attribute to the column definition:

    layout_elements:
        left_sidebar:
            column: 3
            class: col-sm-12
        main_content:
            column: 7
            class: col-sm-12
        right_sidebar:
            column: 2
            class: col-sm-12

If you need a full page template, just configure the columns as follows:

    layout_elements:
        left_sidebar:
            column: 0
        main_content:
            column: 12
            class: col-sm-12
        right_sidebar:
            column: 0

You can add a main offset column as follows:

If you need a full page template, just configure the columns as follows:

    layout_elements:
        left_sidebar:
            column: 0
        main_content:
            column: 8
            class: col-md-offset-2 col-sm-12
        right_sidebar:
            column: 0