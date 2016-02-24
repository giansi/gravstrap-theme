---
title: Bootstrap
metadata:
  description: Gravstrap plugin implements all Bootstrap components you can add to any page, using powerful shortcodes syntax.
slug: bootstrap-components-as-shortcodes-for-grav-cms

simple_form:
        token: "xxxxx"
        template_file: default
        redirect_to: /thank-you-for-my-page

googlemaps:
    map:
        center: 41.90278, 12.49637
        zoom: 12
        #type: TERRAIN
        markers:
            - location: 41.90278, 12.49637
              title: Gravstrap Theme
              zIndex: 1
              timeout: 1000
              info: <strong>Meet Us</strong>.<br/>We are there!

highlight:
    theme: ir_black
---


[gravstrap-jumbotron name="jumbotron1" fullwidth="true" image="bg.jpg" render=false]
# Bootstrap components as shortcodes

Gravstrap plugin implements all Bootstrap components you can add to any page, using powerful shortcodes syntax: watch them in action in this page.

[/gravstrap-jumbotron]

# Bootstrap components for Grav CMS
A comprehensive list of all the Bootstrap components, you can use for free as shortcodes in your website.


## Accordion

[gravstrap-accordion id=accordion1 name=accordion1]
[gravstrap-accordion-item id=accordion_item1 header_id=accordion_header1 title="Open me"]

Anim pariatur cliche **reprehenderit**, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

[/gravstrap-accordion-item]
[gravstrap-accordion-item id=accordion_item2 header_id=accordion_header2 title="Open me too"]

Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

[/gravstrap-accordion-item]
[/gravstrap-accordion]


#### Code definition

    [raw]
    [gravstrap-accordion id=accordion1 name=accordion1]
    [gravstrap-accordion-item id=accordion_item1 header_id=accordion_header1 title="Open me"]

    Anim pariatur cliche **reprehenderit**, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

    [/gravstrap-accordion-item]
    [gravstrap-accordion-item id=accordion_item2 header_id=accordion_header2 title="Open me too"]

    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

    [/gravstrap-accordion-item]
    [/gravstrap-accordion]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-accordion-shortcode)
___

## Alert

[gravstrap-alert name=alert1 type=warning]
# Oh snap! You got an error!

Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.

[Take this action](#) {.btn .btn-danger}
[Or do this](#) {.btn .btn-default}
[/gravstrap-alert]

#### Code definition

    [raw]
    [gravstrap-alert name=alert1 type=warning]
    # Oh snap! You got an error!

    Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.

    [Take this action](#) {.btn .btn-danger}
    [Or do this](#) {.btn .btn-default}
    [/gravstrap-alert]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-alert-shortcode)
___

## Carousel

[gravstrap-carousel id="carousel1" name=carousel1]

[gravstrap-carousel-item image="image1.jpg"]
**Duis mollis**, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/gravstrap-carousel-item]

[gravstrap-carousel-item image="image2.jpg"]
Cras mattis consectetur purus sit amet fermentum.
[/gravstrap-carousel-item]

[gravstrap-carousel-item image="image3.jpg"]
Cras mattis consectetur purus sit amet fermentum.
[/gravstrap-carousel-item]
[/gravstrap-carousel]

#### Code definition

    [raw]
    [gravstrap-carousel id="carousel1" name=carousel1]

    [gravstrap-carousel-item image="image1.jpg"]
    **Duis mollis**, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
    [/gravstrap-carousel-item]

    [gravstrap-carousel-item image="image2.jpg"]
    Cras mattis consectetur purus sit amet fermentum.
    [/gravstrap-carousel-item]

    [gravstrap-carousel-item image="image3.jpg"]
    Cras mattis consectetur purus sit amet fermentum.
    [/gravstrap-carousel-item]
    [/gravstrap-carousel]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-carousel-shortcode)
___


## Collapse

[gravstrap-collapse id="collapse1" name=collapse1 button_label="Collapse" attributes="aria-expanded:false,aria-controls:collapse"]
[gravstrap-well name=well2]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/gravstrap-well]
[/gravstrap-collapse]

#### Code definition

    [raw]    
    [gravstrap-collapse id="collapse1" name=collapse1 button_label="Collapse" attributes="aria-expanded:false,aria-controls:collapse"]
    [gravstrap-well name=well2]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
    [/gravstrap-well]
    [/gravstrap-collapse]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-collapse-shortcode)
___

## Dropdown

[gravstrap-dropdown name=dropdown1 label="Dropdown"]
    [gravstrap-dropdown-item icon_type="fontawesome"]
        [gravstrap-link url="http://example.com" menu="Products" icon="cog"][/gravstrap-link]
        [gravstrap-link url="http://example.com" menu="Contacts" icon="gavel"][/gravstrap-link]
    [/gravstrap-dropdown-item]
[/gravstrap-dropdown]

#### Code definition

    [raw]
    [gravstrap-dropdown name=dropdown1 label="Dropdown"]
        [gravstrap-dropdown-item icon_type="fontawesome" ]
            [gravstrap-link url="http://example.com" menu="Products" icon="cog"][/gravstrap-link]
            [gravstrap-link url="http://example.com" menu="Contacts" icon="gavel"][/gravstrap-link]
        [/gravstrap-dropdown-item]
    [/gravstrap-dropdown]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-dropdown-shortcode)

___

## Jumbotron

[gravstrap-jumbotron name="jumbotron1" image="image1.jpg"]
# Gravstrap theme

Gravstrap Theme helps you to start a new Grav CMS site with Bootstrap support and several ready to use modules. It is also perfect to start a new Bootstrap custom theme, to create your unique design.

[/gravstrap-jumbotron]

#### Code definition

    [raw]
    [gravstrap-jumbotron name="jumbotron1" image="image1.jpg"]
    # Gravstrap theme

    Gravstrap Theme helps you to start a new Grav CMS site with Bootstrap support and several ready to use modules. It is also perfect to start a new Bootstrap custom theme, to create your unique design.

    [/gravstrap-jumbotron]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-jumboron-shortcode)
___


## List group

[gravstrap-listgroup name=listgroup1]

[gravstrap-listgroup-item badge=12 active=true attributes="class:foo,rel:bar"]
Cras mattis consectetur purus sit amet fermentum.
[/gravstrap-listgroup-item]

[gravstrap-listgroup-item badge=15]
Cras mattis consectetur purus sit amet fermentum.
[/gravstrap-listgroup-item]

[gravstrap-listgroup-item disabled=true]
Cras mattis consectetur purus sit amet fermentum.
[/gravstrap-listgroup-item]

[gravstrap-listgroup-item badge=2]
Cras mattis consectetur purus sit amet fermentum.
[/gravstrap-listgroup-item]
[/gravstrap-listgroup]

#### Code definition

    [raw]
    [gravstrap-listgroup name=listgroup1]

    [gravstrap-listgroup-item badge=12 active=true]
    Cras mattis consectetur purus sit amet fermentum.
    [/gravstrap-listgroup-item]

    [gravstrap-listgroup-item badge=15]
    Cras mattis consectetur purus sit amet fermentum.
    [/gravstrap-listgroup-item]

    [gravstrap-listgroup-item disabled=true]
    Cras mattis consectetur purus sit amet fermentum.
    [/gravstrap-listgroup-item]

    [gravstrap-listgroup-item badge=2]
    Cras mattis consectetur purus sit amet fermentum.
    [/gravstrap-listgroup-item]
    [/gravstrap-listgroup]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-listgroup-shortcode)

___


## Modal component

[gravstrap-button button_type="primary" button_label="Launch demo modal" button_attributes="data-toggle:modal, data-target:#modal"][/gravstrap-button]

>>> Please note that here the button is just used to launch the modal.

[gravstrap-modal id="modal" name="modal" title="Awesome"]
Cras **mattis** consectetur purus sit amet fermentum.

[gravstrap-modal-buttons]
[gravstrap-button button_type="primary" button_label="Click Me" remove=true][/gravstrap-button]
[gravstrap-button button_label="Close Me" button_attributes="data-dismiss:modal"][/gravstrap-button]
[/gravstrap-modal-buttons]

[/gravstrap-modal]

#### Code definition

    [raw]
    [[gravstrap-modal id="modal" name="modal" title="Awesome"]
    Cras **mattis** consectetur purus sit amet fermentum.

    [gravstrap-modal-buttons]
    [gravstrap-button button_type="primary" button_label="Click Me" remove=true][/gravstrap-button]
    [gravstrap-button button_label="Close Me" button_attributes="data-dismiss:modal"][/gravstrap-button]
    [/gravstrap-modal-buttons]

    [/gravstrap-modal]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-modal-shortcode)

___


## Navbar component

[gravstrap-navbar id="navbar3" name="navbar3" centering=none brand_text="Brand"]
    [gravstrap-navbar-menu name=menu00 alignment="center" submenu="internal,components"][/gravstrap-navbar-menu]    
    [gravstrap-navbar-menu name=menu01 icon_type="fontawesome" alignment="right" attributes="class: my-class,rel:my-rel"]
        [gravstrap-link url="https://facebook.com/gravstrap" icon_type="fontawesome" icon="facebook"][/gravstrap-link]
        [gravstrap-link url="https://twitter.com/gravstrap" icon="twitter"][/gravstrap-link]
        [gravstrap-link url="https://github.com/giansi/gravstrap" icon="github"][/gravstrap-link]
    [/gravstrap-navbar-menu]
[/gravstrap-navbar]

#### Code definition

    [raw]
    [gravstrap-navbar id="navbar3" name="navbar3" centering=none brand_text="Gravstrap theme"]
        [gravstrap-navbar-menu name=menu00 alignment="center" submenu="internal,components"][/gravstrap-navbar-menu]    
        [gravstrap-navbar-menu name=menu01 icon_type="fontawesome" alignment="right" attributes="class: my-class,rel:my-rel"]
            [gravstrap-link url="https://facebook.com/gravstrap" icon_type="fontawesome" icon="facebook"][/gravstrap-link]
            [gravstrap-link url="https://twitter.com/gravstrap" icon="twitter"][/gravstrap-link]
            [gravstrap-link url="https://github.com/giansi/gravstrap" icon="github"][/gravstrap-link]
        [/gravstrap-navbar-menu]
    [/gravstrap-navbar]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-navbar-shortcode)

___


## Page header

[gravstrap-pageheader title="Title" subtitle="Subtitle"][/gravstrap-pageheader]

#### Code definition

    [raw]
    [gravstrap-pageheader title="Title" subtitle="Subtitle"][/gravstrap-pageheader]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-pageheader-shortcode)

___

## Panel

[gravstrap-panel heading_title="Title"]
Anim pariatur cliche **reprehenderit**, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
[/gravstrap-panel]

#### Code definition

    [raw]
    [gravstrap-panel heading_title="Title"]
    Anim pariatur cliche **reprehenderit**, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
    [/gravstrap-panel]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-panel-shortcode)

___

## Progressbar

[gravstrap-progressbar label="Php" type="success" value="80" min="0" max="100"][/gravstrap-progressbar]

#### Code definition

    [raw]
    [gravstrap-progressbar label="Php" type="success" value="80" min="0" max="100"][/gravstrap-progressbar]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-progressbar-shortcode)

___

## Splitbutton

[gravstrap-splitbutton name=splitbutton1 label="Splitbutton" type=primary]
    [gravstrap-splitbutton-item icon_type="fontawesome" ]
        [gravstrap-link url="http://example.com" menu="Twitter" icon="twitter"][/gravstrap-link]
        [gravstrap-link url="http://example.com" menu="Facebook" icon="facebook"][/gravstrap-link]
    [/gravstrap-splitbutton-item]
[/gravstrap-splitbutton]

#### Code definition

    [raw]
    [gravstrap-splitbutton name=splitbutton1 label="Splitbutton" type=primary]
        [gravstrap-splitbutton-item icon_type="fontawesome" ]
            [gravstrap-link url="http://example.com" menu="Twitter" icon="twitter"][/gravstrap-link]
            [gravstrap-link url="http://example.com" menu="Facebook" icon="facebook"][/gravstrap-link]
        [/gravstrap-splitbutton-item]
    [/gravstrap-splitbutton]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-splitbutton-shortcode)

___

## Tab

[gravstrap-tab name=tab1 attributes="class:myclass,rel:myrel"]

[gravstrap-tab-item name="tab_item1" attributes="class:myclass,rel:myrel"]
**Cras mattis** consectetur purus sit amet fermentum.
[/gravstrap-tab-item]

[gravstrap-tab-item name="tab_item2"]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/gravstrap-tab-item]

[/gravstrap-tab]

#### Code definition

    [raw]
    [gravstrap-tab name=tab1 attributes="class:myclass,rel:myrel"]

    [gravstrap-tab-item name="tab_item1" attributes="class:myclass,rel:myrel"]
    **Cras mattis** consectetur purus sit amet fermentum.
    [/gravstrap-tab-item]

    [gravstrap-tab-item name="tab_item2"]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
    [/gravstrap-tab-item]

    [/gravstrap-tab]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-tabs-shortcode)

___


# Thumbnail

Linked thumbnail:

[gravstrap-thumbnail name=thumbnail1]
[gravstrap-thumbnail-item image="image1.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[gravstrap-thumbnail-item image="image2.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[gravstrap-thumbnail-item image="image3.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[/gravstrap-thumbnail]

    [raw]
    [gravstrap-thumbnail name=thumbnail1]
    [gravstrap-thumbnail-item image="image1.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [gravstrap-thumbnail-item image="image2.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [gravstrap-thumbnail-item image="image3.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [/gravstrap-thumbnail]
    [/raw]

Thumbnails with contents:

[gravstrap-thumbnail name=thumbnail2]
[gravstrap-thumbnail-item image="image1.jpg" class="col-md-6"]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 

Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

[Take this action](#) {.btn .btn-primary}
[/gravstrap-thumbnail-item]

[gravstrap-thumbnail-item image="image2.jpg" class="col-md-6"]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 

Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

[Take this action](#) {.btn .btn-danger}
[/gravstrap-thumbnail-item]

[/gravstrap-thumbnail]

    [raw]
    [gravstrap-thumbnail name=thumbnail2]
    [gravstrap-thumbnail-item image="image1.jpg" class="col-md-6"]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 

    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

    [Take this action](#) {.btn .btn-primary}
    [/gravstrap-thumbnail-item]

    [gravstrap-thumbnail-item image="image2.jpg" class="col-md-6"]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 

    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

    [Take this action](#) {.btn .btn-danger}
    [/gravstrap-thumbnail-item]

    [/gravstrap-thumbnail]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-thumbnails-shortcode)

## Well

[gravstrap-well name=well1]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/gravstrap-well]

#### Code definition

    [raw]
    [gravstrap-well name=well1]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
    [/gravstrap-well]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-well-shortcode)