---
title: Basic
metadata:
  description: Gravstrap plugin implements some basic components, like links, icons and buttons you can use on their own or to build complex components like social menus.
slug: basic-shortcodes-for-grav-cms

highlight:
    theme: ir_black
---


[gravstrap-jumbotron name="jumbotron1" fullwidth="true" image="bg.jpg" render=false]
# Basic components

Gravstrap plugin implements some basic components, like links, icons and buttons you can use on their own or to build complex components like social menus.

[/gravstrap-jumbotron]

# Basic components for Grav CMS
A comprehensive list of all the basic components, you can use for free as shortcodes in your website.


## Button

[gravstrap-button button_type="primary" button_label="Primary"][/gravstrap-button]
[gravstrap-button button_type="success" button_label="Success"][/gravstrap-button]
[gravstrap-button button_type="info" button_label="Info"][/gravstrap-button]
[gravstrap-button button_type="warning" button_label="Warning"][/gravstrap-button]
[gravstrap-button button_type="danger" button_label="Danger"][/gravstrap-button]
[gravstrap-button button_type="link" button_label="Link"][/gravstrap-button]

#### Code definition

    [raw]
    [gravstrap-button button_type="primary" button_label="Primary"][/gravstrap-button]
    [gravstrap-button button_type="success" button_label="Success"][/gravstrap-button]
    [gravstrap-button button_type="info" button_label="Info"][/gravstrap-button]
    [gravstrap-button button_type="warning" button_label="Warning"][/gravstrap-button]
    [gravstrap-button button_type="danger" button_label="Danger"][/gravstrap-button]
    [gravstrap-button button_type="link" button_label="Link"][/gravstrap-button]
    [/raw]

___

## Icon

By default **Icon shortcode** renders a Glyphicon icon:

[gravstrap-icon icon=envelope][/gravstrap-icon]

#### Code definition

    [raw]
    [gravstrap-icon icon=envelope][/gravstrap-icon]
    [/raw]

You can use **Fontawesome** just adding the `icon_type="fontawesome"` property.

[gravstrap-icon icon=twitter icon_type="fontawesome"][/gravstrap-icon]
[gravstrap-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-2x"][/gravstrap-icon]
[gravstrap-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-3x"][/gravstrap-icon]
[gravstrap-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-4x"][/gravstrap-icon]

#### Code definition

    [raw]
    [gravstrap-icon icon=twitter icon_type="fontawesome"][/gravstrap-icon]
    [gravstrap-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-2x"][/gravstrap-icon]
    [gravstrap-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-3x"][/gravstrap-icon]
    [gravstrap-icon icon=twitter icon_type="fontawesome" icon_attributes="class:fa-4x"][/gravstrap-icon]
    [/raw]


[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-icon-shortcode)

___


## Stacked icons

[gravstrap-icon-stacked icon=twitter][/gravstrap-icon-stacked]
[gravstrap-icon-stacked icon=twitter large_icon=true][/gravstrap-icon-stacked]
<br />
[gravstrap-icon-stacked icon=twitter icon_container="square-o"][/gravstrap-icon-stacked]
[gravstrap-icon-stacked icon=twitter icon_container="square-o" large_icon=true][/gravstrap-icon-stacked]

#### Code definition

    [raw]
    [gravstrap-icon-stacked icon=twitter][/gravstrap-icon-stacked]
    [gravstrap-icon-stacked icon=twitter large_icon=true][/gravstrap-icon-stacked]
    [gravstrap-icon-stacked icon=twitter icon_container="square-o"][/gravstrap-icon-stacked]
    [gravstrap-icon-stacked icon=twitter icon_container="square-o" large_icon=true][/gravstrap-icon-stacked]
    [/raw]

___

## Link

[gravstrap-link url="http://diblas.net" menu="Simple link"][/gravstrap-link]
[gravstrap-link url="http://diblas.net" menu="Glyphicon link" icon=envelope][/gravstrap-link]
[gravstrap-link url="http://diblas.net" menu="Fontawesome link" icon_type="fontawesome" icon=twitter][/gravstrap-link]
[gravstrap-link url="http://diblas.net" menu="Fontawesome stacked icon link" icon_type="fontawesome" icon=twitter stacked=true][/gravstrap-link]
[gravstrap-link url="http://diblas.net" menu="Fontawesome stacked icon link" icon_type="fontawesome" icon=twitter icon_container="square-o" stacked=true][/gravstrap-link]

#### Code definition

    [raw]
    [gravstrap-link url="http://diblas.net" menu="Simple link"][/gravstrap-link]
    [gravstrap-link url="http://diblas.net" menu="Glyphicon link" icon=envelope][/gravstrap-link]
    [gravstrap-link url="http://diblas.net" menu="Fontawesome link" icon_type="fontawesome" icon=twitter][/gravstrap-link]
    [gravstrap-link url="http://diblas.net" menu="Fontawesome stacked icon link" icon_type="fontawesome" icon=twitter stacked=true][/gravstrap-link][gravstrap-link url="http://diblas.net" menu="Fontawesome stacked icon link" icon_type="fontawesome" icon=twitter icon_container="square-o" stacked=true][/gravstrap-link]
    [/raw]