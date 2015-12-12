---
title: Home
metadata:
  description: Gravstrap Theme helps you to start a new Grav CMS site with Bootstrap support and several ready to use modules. It is also perfect to extend to start a new Bootstrap custom theme, to fit your needs.
slug: welcome-to-gravstrap-theme

gravstrap:
    jumbotron:
        jumbotron1:
            fullwidth: true
            from_file: jumbotron.markdown
            section: content
            image:
                name: bg.jpg

content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _what_we_do
            - _portfolio
            - _clients
            - _team
            - _where_we_are
            - _contacts
---
