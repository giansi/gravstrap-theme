---
title: Bootstrap
metadata:
  description: Gravstrap plugin implements all Bootstrap components you can add to any page, using powerful shortcodes syntax.
slug: bootstrap-components-as-shortcodes-for-grav-cms

highlight:
    theme: ir-black
---


[g-jumbotron name="jumbotron1" fullwidth="true" image="bg_bootstrap.jpg" render=false]
# Bootstrap components as shortcodes

Gravstrap plugin implements all Bootstrap components you can add to any page, using powerful shortcodes syntax: watch them in action in this page.

[/g-jumbotron]

# Bootstrap components for Grav CMS
A comprehensive list of all the Bootstrap components, you can use for free as shortcodes in your website.


## Accordion

[g-accordion id=accordion1 name=accordion1]
[g-accordion-item id=accordion_item1 header_id=accordion_header1 title="Open me"]

Anim pariatur cliche **reprehenderit**, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

[/g-accordion-item]
[g-accordion-item id=accordion_item2 header_id=accordion_header2 title="Open me too"]

Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

[/g-accordion-item]
[/g-accordion]


#### Code definition

    [raw]
    [g-accordion id=accordion1 name=accordion1]
    [g-accordion-item id=accordion_item1 header_id=accordion_header1 title="Open me"]

    Anim pariatur cliche **reprehenderit**, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

    [/g-accordion-item]
    [g-accordion-item id=accordion_item2 header_id=accordion_header2 title="Open me too"]

    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

    [/g-accordion-item]
    [/g-accordion]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-accordion-shortcode)
___

## Alert

[g-alert name=alert1 type=warning]
# Oh snap! You got an error!

Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.

[Take this action](#) {.btn .btn-danger}
[Or do this](#) {.btn .btn-default}
[/g-alert]

#### Code definition

    [raw]
    [g-alert name=alert1 type=warning]
    # Oh snap! You got an error!

    Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.

    [Take this action](#) {.btn .btn-danger}
    [Or do this](#) {.btn .btn-default}
    [/g-alert]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-alert-shortcode)
___

## Carousel

[g-carousel id="carousel1" name=carousel1]

[g-carousel-item image="image1.jpg"]
**Duis mollis**, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/g-carousel-item]

[g-carousel-item image="image2.jpg"]
Cras mattis consectetur purus sit amet fermentum.
[/g-carousel-item]

[g-carousel-item image="image3.jpg"]
Cras mattis consectetur purus sit amet fermentum.
[/g-carousel-item]
[/g-carousel]

#### Code definition

    [raw]
    [g-carousel id="carousel1" name=carousel1]

    [g-carousel-item image="image1.jpg"]
    **Duis mollis**, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
    [/g-carousel-item]

    [g-carousel-item image="image2.jpg"]
    Cras mattis consectetur purus sit amet fermentum.
    [/g-carousel-item]

    [g-carousel-item image="image3.jpg"]
    Cras mattis consectetur purus sit amet fermentum.
    [/g-carousel-item]
    [/g-carousel]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-carousel-shortcode)
___


## Collapse

[g-collapse id="collapse1" name=collapse1 button_label="Collapse" attributes="aria-expanded:false,aria-controls:collapse"]
[g-well name=well2]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/g-well]
[/g-collapse]

#### Code definition

    [raw]    
    [g-collapse id="collapse1" name=collapse1 button_label="Collapse" attributes="aria-expanded:false,aria-controls:collapse"]
    [g-well name=well2]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
    [/g-well]
    [/g-collapse]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-collapse-shortcode)
___

## Dropdown

[g-dropdown name=dropdown1 label="Dropdown"]
    [g-dropdown-item icon_type="fontawesome"]
        [g-link url="http://example.com" menu="Products" icon="cog"][/g-link]
        [g-link url="http://example.com" menu="Contacts" icon="gavel"][/g-link]
    [/g-dropdown-item]
[/g-dropdown]

#### Code definition

    [raw]
    [g-dropdown name=dropdown1 label="Dropdown"]
        [g-dropdown-item icon_type="fontawesome" ]
            [g-link url="http://example.com" menu="Products" icon="cog"][/g-link]
            [g-link url="http://example.com" menu="Contacts" icon="gavel"][/g-link]
        [/g-dropdown-item]
    [/g-dropdown]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-dropdown-shortcode)

___

## Jumbotron

[g-jumbotron name="jumbotron1" image="image1.jpg"]
# Gravstrap theme

Gravstrap Theme helps you to start a new Grav CMS site with Bootstrap support and several ready to use modules. It is also perfect to start a new Bootstrap custom theme, to create your unique design.

[/g-jumbotron]

#### Code definition

    [raw]
    [g-jumbotron name="jumbotron1" image="image1.jpg"]
    # Gravstrap theme

    Gravstrap Theme helps you to start a new Grav CMS site with Bootstrap support and several ready to use modules. It is also perfect to start a new Bootstrap custom theme, to create your unique design.

    [/g-jumbotron]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-jumboron-shortcode)
___


## List group

[g-listgroup name=listgroup1]

[g-listgroup-item badge=12 active=true attributes="class:foo,rel:bar"]
Cras mattis consectetur purus sit amet fermentum.
[/g-listgroup-item]

[g-listgroup-item badge=15]
Cras mattis consectetur purus sit amet fermentum.
[/g-listgroup-item]

[g-listgroup-item disabled=true]
Cras mattis consectetur purus sit amet fermentum.
[/g-listgroup-item]

[g-listgroup-item badge=2]
Cras mattis consectetur purus sit amet fermentum.
[/g-listgroup-item]
[/g-listgroup]

#### Code definition

    [raw]
    [g-listgroup name=listgroup1]

    [g-listgroup-item badge=12 active=true]
    Cras mattis consectetur purus sit amet fermentum.
    [/g-listgroup-item]

    [g-listgroup-item badge=15]
    Cras mattis consectetur purus sit amet fermentum.
    [/g-listgroup-item]

    [g-listgroup-item disabled=true]
    Cras mattis consectetur purus sit amet fermentum.
    [/g-listgroup-item]

    [g-listgroup-item badge=2]
    Cras mattis consectetur purus sit amet fermentum.
    [/g-listgroup-item]
    [/g-listgroup]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-listgroup-shortcode)

___


## Modal component

[g-button button_type="primary" button_label="Launch demo modal" button_attributes="data-toggle:modal, data-target:#modal"][/g-button]

>>> Please note that here the button is just used to launch the modal.

[g-modal id="modal" name="modal" title="Awesome"]
Cras **mattis** consectetur purus sit amet fermentum.

[g-modal-buttons]
[g-button button_type="primary" button_label="Click Me" remove=true][/g-button]
[g-button button_label="Close Me" button_attributes="data-dismiss:modal"][/g-button]
[/g-modal-buttons]

[/g-modal]

#### Code definition

    [raw]
    [g-modal id="modal" name="modal" title="Awesome"]
    Cras **mattis** consectetur purus sit amet fermentum.

    [g-modal-buttons]
    [g-button button_type="primary" button_label="Click Me" remove=true][/g-button]
    [g-button button_label="Close Me" button_attributes="data-dismiss:modal"][/g-button]
    [/g-modal-buttons]

    [/g-modal]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-modal-shortcode)

___


## Navbar component

[g-navbar id="navbar3" name="navbar3" centering=none brand_text="Brand"]
    [g-navbar-menu name=menu00 alignment="center" submenu="internal,components"][/g-navbar-menu]    
    [g-navbar-menu name=menu01 icon_type="fontawesome" alignment="right" attributes="class: my-class,rel:my-rel"]
        [g-link url="https://facebook.com/gravstrap" icon_type="fontawesome" icon="facebook"][/g-link]
        [g-link url="https://twitter.com/gravstrap" icon="twitter"][/g-link]
        [g-link url="https://github.com/giansi/gravstrap" icon="github"][/g-link]
    [/g-navbar-menu]
[/g-navbar]

#### Code definition

    [raw]
    [g-navbar id="navbar3" name="navbar3" centering=none brand_text="Gravstrap theme"]
        [g-navbar-menu name=menu00 alignment="center" submenu="internal,components"][/g-navbar-menu]    
        [g-navbar-menu name=menu01 icon_type="fontawesome" alignment="right" attributes="class: my-class,rel:my-rel"]
            [g-link url="https://facebook.com/gravstrap" icon_type="fontawesome" icon="facebook"][/g-link]
            [g-link url="https://twitter.com/gravstrap" icon="twitter"][/g-link]
            [g-link url="https://github.com/giansi/gravstrap" icon="github"][/g-link]
        [/g-navbar-menu]
    [/g-navbar]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-navbar-shortcode)

___


## Page header

[g-pageheader title="Title" subtitle="Subtitle"][/g-pageheader]

#### Code definition

    [raw]
    [g-pageheader title="Title" subtitle="Subtitle"][/g-pageheader]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-pageheader-shortcode)

___

## Panel

[g-panel heading_title="Title"]
Anim pariatur cliche **reprehenderit**, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
[/g-panel]

#### Code definition

    [raw]
    [g-panel heading_title="Title"]
    Anim pariatur cliche **reprehenderit**, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
    [/g-panel]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-panel-shortcode)

___

## Progressbar

[g-progressbar label="Php" type="success" value="80" min="0" max="100"][/g-progressbar]

#### Code definition

    [raw]
    [g-progressbar label="Php" type="success" value="80" min="0" max="100"][/g-progressbar]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-progressbar-shortcode)

___

## Splitbutton

[g-splitbutton name=splitbutton1 label="Splitbutton" type=primary]
    [g-splitbutton-item icon_type="fontawesome" ]
        [g-link url="http://example.com" menu="Twitter" icon="twitter"][/g-link]
        [g-link url="http://example.com" menu="Facebook" icon="facebook"][/g-link]
    [/g-splitbutton-item]
[/g-splitbutton]

#### Code definition

    [raw]
    [g-splitbutton name=splitbutton1 label="Splitbutton" type=primary]
        [g-splitbutton-item icon_type="fontawesome" ]
            [g-link url="http://example.com" menu="Twitter" icon="twitter"][/g-link]
            [g-link url="http://example.com" menu="Facebook" icon="facebook"][/g-link]
        [/g-splitbutton-item]
    [/g-splitbutton]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-splitbutton-shortcode)

___

## Tab

[g-tab name=tab1 attributes="class:myclass,rel:myrel"]

[g-tab-item name="tab_item1" attributes="class:myclass,rel:myrel"]
**Cras mattis** consectetur purus sit amet fermentum.
[/g-tab-item]

[g-tab-item name="tab_item2"]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/g-tab-item]

[/g-tab]

#### Code definition

    [raw]
    [g-tab name=tab1 attributes="class:myclass,rel:myrel"]

    [g-tab-item name="tab_item1" attributes="class:myclass,rel:myrel"]
    **Cras mattis** consectetur purus sit amet fermentum.
    [/g-tab-item]

    [g-tab-item name="tab_item2"]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
    [/g-tab-item]

    [/g-tab]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-tabs-shortcode)

___


# Thumbnail

Linked thumbnail:

[g-thumbnail name=thumbnail1]
[g-thumbnail-item image="image1.jpg" url="http://diblas.net"][/g-thumbnail-item]
[g-thumbnail-item image="image2.jpg" url="http://diblas.net"][/g-thumbnail-item]
[g-thumbnail-item image="image3.jpg" url="http://diblas.net"][/g-thumbnail-item]
[/g-thumbnail]

    [raw]
    [g-thumbnail name=thumbnail1]
    [g-thumbnail-item image="image1.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [g-thumbnail-item image="image2.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [g-thumbnail-item image="image3.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [/g-thumbnail]
    [/raw]

Thumbnails with contents:

[g-thumbnail name=thumbnail2]
[g-thumbnail-item image="image1.jpg" class="col-md-6"]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

[Take this action](#) {.btn .btn-primary}
[/g-thumbnail-item]

[g-thumbnail-item image="image2.jpg" class="col-md-6"]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

[Take this action](#) {.btn .btn-danger}
[/g-thumbnail-item]

[/g-thumbnail]

    [raw]
    [g-thumbnail name=thumbnail2]
    [g-thumbnail-item image="image1.jpg" class="col-md-6"]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

    [Take this action](#) {.btn .btn-primary}
    [/g-thumbnail-item]

    [g-thumbnail-item image="image2.jpg" class="col-md-6"]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

    [Take this action](#) {.btn .btn-danger}
    [/g-thumbnail-item]

    [/g-thumbnail]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-thumbnails-shortcode)

## Well

[g-well name=well1]
Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/g-well]

#### Code definition

    [raw]
    [g-well name=well1]
    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
    [/g-well]
    [/raw]

[Read the component documentation](http://diblas.net/plugins/use-bootstrap-components-as-shortcodes-in-grav-cms/gravstrap-well-shortcode)
