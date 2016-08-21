---
title: Basic
metadata:
  description: Gravstrap plugin implements some basic components, like links, icons and buttons you can use on their own or to build complex components like social menus.
slug: basic-shortcodes-for-grav-cms

highlight:
    theme: ir-black
---


[g-jumbotron name="jumbotron1" fullwidth="true" image="bg_basic.jpg" render=false]
# Basic components

Gravstrap plugin implements some basic components, like links, icons and buttons you can use on their own or to build complex components like social menus.

[/g-jumbotron]

# Basic components for Grav CMS
A comprehensive list of all the basic components, you can use for free as shortcodes in your website.


## Button

[g-button button_type="primary" button_label="Primary"][/g-button]
[g-button button_type="success" button_label="Success"][/g-button]
[g-button button_type="info" button_label="Info"][/g-button]
[g-button button_type="warning" button_label="Warning"][/g-button]
[g-button button button_type="danger" button_label="Danger"][/g-button]
[g-button button_type="link" button_label="Link"][/g-button]

#### Code definition

    [raw]
    [g-button button_type="primary" button_label="Primary"][/g-button]
    [g-button button_type="success" button_label="Success"][/g-button]
    [g-button button_type="info" button_label="Info"][/g-button]
    [g-button button_type="warning" button_label="Warning"][/g-button]
    [g-button button_url="http://diblas.net" button_type="danger" button_label="Danger"][/g-button]
    [g-button button_type="link" button_label="Link"][/g-button]
    [/raw]

## Linked button

[g-button button_url="http://diblas.net" button_type="danger" button_label="Click me"][/g-button]

#### Code definition

    [raw]
    [g-button button_url="http://diblas.net" button_type="info" button_label="Click me"][/g-button]
    [/raw]
___

## Icon

By default **Icon shortcode** renders a Glyphicon icon:

[g-icon icon=envelope][/g-icon]

#### Code definition

    [raw]
    [g-icon icon=envelope][/g-icon]
    [/raw]

You can use **Fontawesome** just adding the `icon_type="fontawesome"` property.

[g-icon icon=twitter icon_type="fontawesome"][/g-icon]
[g-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-2x"][/g-icon]
[g-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-3x"][/g-icon]
[g-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-4x"][/g-icon]

#### Code definition

    [raw]
    [g-icon icon=twitter icon_type="fontawesome"][/g-icon]
    [g-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-2x"][/g-icon]
    [g-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-3x"][/g-icon]
    [g-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-4x"][/g-icon]
    [/raw]


[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-icon-shortcode)

___


## Stacked icons

[g-icon-stacked icon=twitter][/g-icon-stacked]
[g-icon-stacked icon=twitter large_icon=true][/g-icon-stacked]
<br />
[g-icon-stacked icon=twitter icon_container="square-o"][/g-icon-stacked]
[g-icon-stacked icon=twitter icon_container="square-o" large_icon=true][/g-icon-stacked]

#### Code definition

    [raw]
    [g-icon-stacked icon=twitter][/g-icon-stacked]
    [g-icon-stacked icon=twitter large_icon=true][/g-icon-stacked]
    [g-icon-stacked icon=twitter icon_container="square-o"][/g-icon-stacked]
    [g-icon-stacked icon=twitter icon_container="square-o" large_icon=true][/g-icon-stacked]
    [/raw]

___

## Link

[g-link url="http://diblas.net" menu="Simple link"][/g-link]
[g-link url="http://diblas.net" menu="Glyphicon link" icon=envelope][/g-link]
[g-link url="http://diblas.net" menu="Fontawesome link" icon_type="fontawesome" icon=twitter][/g-link]
[g-link url="http://diblas.net" menu="Fontawesome stacked icon link" icon_type="fontawesome" icon=twitter stacked=true][/g-link]
[g-link url="http://diblas.net" menu="Fontawesome stacked icon link" icon_type="fontawesome" icon=twitter icon_container="square-o" stacked=true][/g-link]

#### Code definition

    [raw]
    [g-link url="http://diblas.net" menu="Simple link"][/g-link]
    [g-link url="http://diblas.net" menu="Glyphicon link" icon=envelope][/g-link]
    [g-link url="http://diblas.net" menu="Fontawesome link" icon_type="fontawesome" icon=twitter][/g-link]
    [g-link url="http://diblas.net" menu="Fontawesome stacked icon link" icon_type="fontawesome" icon=twitter stacked=true][/g-link][g-link url="http://diblas.net" menu="Fontawesome stacked icon link" icon_type="fontawesome" icon=twitter icon_container="square-o" stacked=true][/g-link]
    [/raw]

___

## List

A list that can be styled. Here's some examples:

#### Unordered list

[g-list attributes="class:my-class"]
[g-list-item attributes="class:li-class"]Item 1[/g-list-item]
[g-list-item]Item 2[/g-list-item]
[g-list-item]Item 3[/g-list-item]
[/g-list]

#### Code definition

    [raw]
    [g-list attributes="class:my-class"]
    [g-list-item attributes="class:li-class"]Item 1[/g-list-item]
    [g-list-item]Item 2[/g-list-item]
    [g-list-item]Item 3[/g-list-item]
    [/g-list]
    [/raw]


#### Ordered list

[g-list attributes="class:my-class"  tag="ol"]
[g-list-item attributes="class:li-class"]Item 1[/g-list-item]
[g-list-item]Item 2[/g-list-item]
[g-list-item]Item 3[/g-list-item]
[/g-list]

#### Code definition

    [raw]
    [g-list attributes="class:my-class"  tag="ol"]
    [g-list-item attributes="class:li-class"]Item 1[/g-list-item]
    [g-list-item]Item 2[/g-list-item]
    [g-list-item]Item 3[/g-list-item]
    [/g-list]
    [/raw]

#### List of gravstrap links

[g-list attributes="class:my-class"]
    [g-list-item]
        [g-link url="https://twitter.com/giansi72" icon="twitter" icon_type="fontawesome" attributes="class:puto"][/g-link]
    [/g-list-item]
    [g-list-item attributes="class:li-class"]
        [g-link url="https://www.facebook.com/diblas.net" icon="facebook" icon_type="fontawesome"][/g-link]
    [/g-list-item]
    [g-list-item]
        [g-link url="https://github.com/giansi" icon="github" icon_type="fontawesome"][/g-link]
    [/g-list-item]
    [g-list-item]
        [g-link url="http://www.stumbleupon.com/stumbler/Giansimon" icon="stumbleupon" icon_type="fontawesome"][/g-link]
    [/g-list-item]
    [g-list-item]
        [g-link url="http://feeds.feedburner.com/diblas" icon="rss" icon_type="fontawesome"][/g-link]
    [/g-list-item]
[/g-list]

#### Code definition

    [raw]
    [g-list attributes="class:my-class"]
        [g-list-item]
            [g-link url="https://twitter.com/giansi72" icon="twitter" icon_type="fontawesome" attributes="class:puto"][/g-link]
        [/g-list-item]
        [g-list-item attributes="class:li-class"]
            [g-link url="https://www.facebook.com/diblas.net" icon="facebook" icon_type="fontawesome"][/g-link]
        [/g-list-item]
        [g-list-item]
            [g-link url="https://github.com/giansi" icon="github" icon_type="fontawesome"][/g-link]
        [/g-list-item]
        [g-list-item]
            [g-link url="http://www.stumbleupon.com/stumbler/Giansimon" icon="stumbleupon" icon_type="fontawesome"][/g-link]
        [/g-list-item]
        [g-list-item]
            [g-link url="http://feeds.feedburner.com/diblas" icon="rss" icon_type="fontawesome"][/g-link]
        [/g-list-item]
    [/g-list]
    [/raw]
