---
title: Miscellaneous components
metadata:
  description: A set of miscellaneous components.
slug: miscellaneous-components-as-shortcodes-for-grav-cms

highlight:
    theme: ir-black
---


[g-jumbotron name="jumbotron1" fullwidth="true" image="bg_misc.jpg" render=false]
# Miscellaneous components

A set of useful, not classificable, components

[/g-jumbotron]

# Miscellaneous components for Grav CMS
A comprehensive list of several miscellaneous components, you can use for free as shortcodes in your website.


## Map

[g-map id=map zoom=12 center="41.90278,12.49637"]
[g-map-marker location="41.90278, 12.49637" title="Gravstrap theme"]
**Meet Us**
We are there!
[/g-map-marker]
[/g-map]

#### Code definition

    [raw]
    [g-map id=map zoom=12 center="41.90278,12.49637"]
    [g-map-marker location="41.90278, 12.49637" title="Gravstrap theme"]
    **Meet Us**
    We are there!
    [/g-map-marker]
    [/g-map]
    [/raw]


## Simple form

[g-simple-form token="xxxxx" redirect_to="/thank-you-for-my-page" render=true][/g-simple-form]

#### Code definition

    [raw]
    [g-simple-form token="xxxxx" redirect_to="/thank-you-for-my-page" render=true][/g-simple-form]
    [/raw]

## Images collage

[g-images-collage columns="4" border="3" width="800" attributes="title:Image title,class:img-responsive"][/g-images-collage]

#### Code definition

    [raw]
    [g-images-collage columns="4" border="3" width="800" attributes="title:Image title,class:img-responsive"][/g-images-collage]
    [/raw]
