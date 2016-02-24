---
title: Modules
metadata:
  description: Gravstrap plugin implements several modules you can use as shortcodes to simplify the web site building.
slug: modules-shortcodes-for-grav-cms

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
    
    contactmap:
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
# Modules shortcodes

Gravstrap plugin implements several modules you can use as shortcodes to simplify the web site building: watch them in action down in this page.

[/gravstrap-jumbotron]



# Modules components for Grav CMS
A comprehensive list of all the modules you can use for free as shortcodes in your website.


## Clients module

[gravstrap-clients name=clients attributes="class:clients module"]

## Show out the clients who trust your business
Use the `Clients module` to show your customers, the clients who already trust your business

___

[gravstrap-clients-item image="apple.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
[gravstrap-clients-item image="canon.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
[gravstrap-clients-item image="forbes.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
[gravstrap-clients-item image="hp.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
[gravstrap-clients-item image="intel.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
[gravstrap-clients-item image="samsung.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
[gravstrap-clients-item image="siemens.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
[gravstrap-clients-item image="vaio.svg" attributes="class:col-md-3"][/gravstrap-clients-item]

[/gravstrap-clients]

#### Code definition

    [raw]
    [gravstrap-clients name=clients attributes="class:clients module"]

    ## Show out the clients who trust your business
    Use the `Clients module` to show your customers, the clients who already trust your business

    ___

    [gravstrap-clients-item image="apple.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
    [gravstrap-clients-item image="canon.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
    [gravstrap-clients-item image="forbes.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
    [gravstrap-clients-item image="hp.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
    [gravstrap-clients-item image="intel.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
    [gravstrap-clients-item image="samsung.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
    [gravstrap-clients-item image="siemens.svg" attributes="class:col-md-3"][/gravstrap-clients-item]
    [gravstrap-clients-item image="vaio.svg" attributes="class:col-md-3"][/gravstrap-clients-item]

    [/gravstrap-clients]
    [/raw]

___

## Contacts map module

[gravstrap-contacts-map name=_contact_map attributes="class:where-we-are module" info_attributes="class:col-md-4" map_attributes="class:col-md-8"]

## Show your customers your position and how they can contact you
Use the `Contact map` module to tell your customers position and how they can get in touch with you.

___

[gravstrap-section name="map"]
[GOOGLEMAPS:contactmap]
[/gravstrap-section]

[gravstrap-section name="info"]
#####OFFICE

9 - 3815 Thatcher Avenue  
Saskatoon, Saskatchewan  
S7R 1A3

#####CONTACT INFORMATION

**Primary Phone:** 1 (555) 555 - 6666  
**Alternate Phone:** 1 (555) 555 - 7777  
**Fax:** 1 (555) 555 - 8888


#####OFFICE HOURS

Monday - Friday 8 am - 5 pm  
Saturday - Sunday Closed  
[/gravstrap-section]
[/gravstrap-contacts-map]

#### Code definition

    [raw]
    [gravstrap-contacts-map name=_contact_map attributes="class:where-we-are module" info_attributes="class:col-md-4" map_attributes="class:col-md-8"]

    ## Show your customers your position and how they can contact you
    Use the `Contact map` module to tell your customers position and how they can get in touch with you.

    ___

    [gravstrap-section name="map"]
    {GOOGLEMAPS:contactmap}
    [/gravstrap-section]

    [gravstrap-section name="info"]
    #####OFFICE

    9 - 3815 Thatcher Avenue  
    Saskatoon, Saskatchewan  
    S7R 1A3

    #####CONTACT INFORMATION

    **Primary Phone:** 1 (555) 555 - 6666  
    **Alternate Phone:** 1 (555) 555 - 7777  
    **Fax:** 1 (555) 555 - 8888


    #####OFFICE HOURS

    Monday - Friday 8 am - 5 pm  
    Saturday - Sunday Closed  
    [/gravstrap-section]
    [/gravstrap-contacts-map]
    [/raw]

>>> Please note that `GOOGLEMAPS` definition must be surrounded by **[ ]** instead of **{ }**: that was only a rendering trick.

___

## Contacts module

[gravstrap-contacts name=contacts attributes="class:module contacts" info_attributes="class:col-md-4" form_attributes="class:col-md-8"]

## Let your customers contact you
Use the Contact module to let your customers contact you

___

[gravstrap-section name="form"]
##### Get in touch
Need some information? Ask us a question filling the form below

[gravstrap-simple-form token="xxxxx" redirect_to="/thank-you-for-my-page" render=true][/gravstrap-simple-form]
[/gravstrap-section]

[gravstrap-section name="info"]
#####OFFICE

9 - 3815 Thatcher Avenue  
Saskatoon, Saskatchewan  
S7R 1A3

#####CONTACT INFORMATION

**Primary Phone:** 1 (555) 555 - 6666  
**Alternate Phone:** 1 (555) 555 - 7777  
**Fax:** 1 (555) 555 - 8888


#####OFFICE HOURS

Monday - Friday 8 am - 5 pm  
Saturday - Sunday Closed  
[/gravstrap-section]
[/gravstrap-contacts]


#### Code definition

    [raw]
    [gravstrap-contacts name=contacts attributes="class:module contacts" info_attributes="class:col-md-4" form_attributes="class:col-md-8"]

    ## Let your customers contact you
    Use the Contact module to let your customers contact you

    ___

    [gravstrap-section name="form"]
    ##### Get in touch
    Need some information? Ask us a question filling the form below

    [gravstrap-simple-form token="xxxxx" redirect_to="/thank-you-for-my-page" render=true][/gravstrap-simple-form]
    [/gravstrap-section]

    [gravstrap-section name="info"]
    #####OFFICE

    9 - 3815 Thatcher Avenue  
    Saskatoon, Saskatchewan  
    S7R 1A3

    #####CONTACT INFORMATION

    **Primary Phone:** 1 (555) 555 - 6666  
    **Alternate Phone:** 1 (555) 555 - 7777  
    **Fax:** 1 (555) 555 - 8888


    #####OFFICE HOURS

    Monday - Friday 8 am - 5 pm  
    Saturday - Sunday Closed  
    [/gravstrap-section]
    [/gravstrap-contacts]
    [/raw]

___

## Portfolio module

[gravstrap-portfolio name=_portfolio attributes="class:portfolio module"]

## Showcase your work
Use the `Portfolio module` to spread your works to the world

___

[gravstrap-thumbnail]
[gravstrap-thumbnail-item image="coffee.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[gravstrap-thumbnail-item image="farmerboy.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[gravstrap-thumbnail-item image="girl.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[gravstrap-thumbnail-item image="judah.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[gravstrap-thumbnail-item image="origami.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[gravstrap-thumbnail-item image="retrocam.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
[/gravstrap-thumbnail]

[/gravstrap-portfolio]

#### Code definition

    [raw]
    [gravstrap-portfolio name=_portfolio attributes="class:portfolio module"]

    ## Showcase your work
    Use the `Portfolio module` to spread your works to the world

    ___

    [gravstrap-thumbnail]
    [gravstrap-thumbnail-item image="coffee.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [gravstrap-thumbnail-item image="farmerboy.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [gravstrap-thumbnail-item image="girl.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [gravstrap-thumbnail-item image="judah.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [gravstrap-thumbnail-item image="origami.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [gravstrap-thumbnail-item image="retrocam.jpg" url="http://diblas.net"][/gravstrap-thumbnail-item]
    [/gravstrap-thumbnail]

    [/gravstrap-portfolio]
    [/raw]


## Team module

[gravstrap-team name=team attributes="class:team module"]

## Introduce your awesome team
Use the `Team module` to introduce your awesome team.

___

[gravstrap-team-item image="jane.jpg" attributes="class:col-md-4"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<div class="item-social">
[gravstrap-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/gravstrap-link]
[gravstrap-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/gravstrap-link]
[gravstrap-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/gravstrap-link]
</div>

[/gravstrap-team-item]

[gravstrap-team-item image="mark.jpg" attributes="class:col-md-4"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<div class="item-social">
[gravstrap-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/gravstrap-link]
[gravstrap-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/gravstrap-link]
[gravstrap-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/gravstrap-link]
</div>

[/gravstrap-team-item]

[gravstrap-team-item image="julia.jpg" attributes="class:col-md-4"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<div class="item-social">
[gravstrap-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/gravstrap-link]
[gravstrap-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/gravstrap-link]
[gravstrap-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/gravstrap-link]
</div>

[/gravstrap-team-item]
[/gravstrap-team]

#### Code definition

    [raw]
    [gravstrap-team name=team attributes="class:team module"]

    ## Introduce your awesome team
    Use the `Team module` to introduce your awesome team.

    ___

    [gravstrap-team-item image="jane.jpg" attributes="class:col-md-4"]
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    <div class="item-social">
    [gravstrap-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/gravstrap-link]
    [gravstrap-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/gravstrap-link]
    [gravstrap-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/gravstrap-link]
    </div>

    [/gravstrap-team-item]

    [gravstrap-team-item image="mark.jpg" attributes="class:col-md-4"]
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    <div class="item-social">
    [gravstrap-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/gravstrap-link]
    [gravstrap-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/gravstrap-link]
    [gravstrap-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/gravstrap-link]
    </div>

    [/gravstrap-team-item]

    [gravstrap-team-item image="julia.jpg" attributes="class:col-md-4"]
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    <div class="item-social">
    [gravstrap-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/gravstrap-link]
    [gravstrap-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/gravstrap-link]
    [gravstrap-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/gravstrap-link]
    </div>

    [/gravstrap-team-item]
    [/gravstrap-team]
    [/raw]

___

## What we do

[gravstrap-what-we-do name="what_we_do" attributes="class:what-we-do module" column_attributes="class:col-md-12"]

## Explain your business
Use the `What we do module` to explain your customers the services you offer.
___

[gravstrap-what-we-do-item attributes="class:col-md-4"]

<div class="item-icon">
[gravstrap-icon icon="bullhorn fa-5x" icon_type="fontawesome"][/gravstrap-icon]
</div>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[/gravstrap-what-we-do-item]

[gravstrap-what-we-do-item attributes="class:col-md-4"]
<div class="item-icon">
[gravstrap-icon icon="bolt fa-5x" icon_type="fontawesome"][/gravstrap-icon]
</div>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[/gravstrap-what-we-do-item]

[gravstrap-what-we-do-item attributes="class:col-md-4"]

<div class="item-icon">
[gravstrap-icon icon="heart fa-5x" icon_type="fontawesome"][/gravstrap-icon]
</div>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/gravstrap-what-we-do-item]

[/gravstrap-what-we-do]


#### Code definition

    [raw]
    [gravstrap-what-we-do name="what_we_do" attributes="class:what-we-do module" column_attributes="class:col-md-12"]

    ## Explain your business
    Use the `What we do module` to explain your customers the services you offer.
    ___

    [gravstrap-what-we-do-item attributes="class:col-md-4"]

    <div class="item-icon">
    [gravstrap-icon icon="bullhorn fa-5x" icon_type="fontawesome"][/gravstrap-icon]
    </div>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

    [/gravstrap-what-we-do-item]

    [gravstrap-what-we-do-item attributes="class:col-md-4"]
    <div class="item-icon">
    [gravstrap-icon icon="bolt fa-5x" icon_type="fontawesome"][/gravstrap-icon]
    </div>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

    [/gravstrap-what-we-do-item]

    [gravstrap-what-we-do-item attributes="class:col-md-4"]

    <div class="item-icon">
    [gravstrap-icon icon="heart fa-5x" icon_type="fontawesome"][/gravstrap-icon]
    </div>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    [/gravstrap-what-we-do-item]

    [/gravstrap-what-we-do]
    [/raw]


>>> Please note that icons must be surrounded by a small html code
___

## Where we are module

[gravstrap-where-we-are name=where-we-are attributes="class:module where-we-are"]

## Show your customers where you are
Use the `Where we are` module to tell your customers where you are

___

[GOOGLEMAPS:map]

[/gravstrap-where-we-are]

#### Code definition

    [raw]
    [gravstrap-where-we-are name=where-we-are attributes="class:module where-we-are"]

    ## Show your customers where you are
    Use the `Where we are` module to tell your customers where you are

    ___

    {GOOGLEMAPS:map}

    [/gravstrap-where-we-are]
    [/raw]

>>> Please note that `GOOGLEMAPS` definition must be surrounded by **[ ]** instead of **{ }**: that was only a rendering trick.


## Footer One module

[gravstrap-footer-one]
[gravstrap-section name="credits"]

This website is made with [Grav CMS](http://getgrav.org/) and it is powerd by [Gravstrap Theme](http://diblas.net/themes/gravstrap-theme-to-start-grav-cms-site-with-bootstrap-support/) and [Gravstrap Plugin](http://diblas.net/plugins/use-bootstrap-elements-in-the-grav-cms-way/)

[/gravstrap-section]

[gravstrap-section name="copyright"]Joe Bloggs[/gravstrap-section]

[/gravstrap-footer-one]

#### Code definition

    [raw][gravstrap-footer-one]
    [gravstrap-section name="credits"]

    This website is made with [Grav CMS](http://getgrav.org/) and it is powerd by [Gravstrap Theme](http://diblas.net/themes/gravstrap-theme-to-start-grav-cms-site-with-bootstrap-support/) and [Gravstrap Plugin](http://diblas.net/plugins/use-bootstrap-elements-in-the-grav-cms-way/)

    [/gravstrap-section]

    [gravstrap-section name="copyright"]Joe Bloggs[/gravstrap-section]

    [/gravstrap-footer-one]
    [/raw]



## Footer Two module

[gravstrap-footer-two]
[gravstrap-section name="credits"]

This website is made with [Grav CMS](http://getgrav.org/) and it is powerd by [Gravstrap Theme](http://diblas.net/themes/gravstrap-theme-to-start-grav-cms-site-with-bootstrap-support/) and [Gravstrap Plugin](http://diblas.net/plugins/use-bootstrap-elements-in-the-grav-cms-way/)

[/gravstrap-section]

[gravstrap-section name="copyright"]Joe Bloggs[/gravstrap-section]
    [gravstrap-section name="license"]MIT License[/gravstrap-section]

[/gravstrap-footer-two]

#### Code definition

    [raw][gravstrap-footer-two]
    [gravstrap-section name="credits"]

    This website is made with [Grav CMS](http://getgrav.org/) and it is powerd by [Gravstrap Theme](http://diblas.net/themes/gravstrap-theme-to-start-grav-cms-site-with-bootstrap-support/) and [Gravstrap Plugin](http://diblas.net/plugins/use-bootstrap-elements-in-the-grav-cms-way/)

    [/gravstrap-section]

    [gravstrap-section name="copyright"]Joe Bloggs[/gravstrap-section]
    [gravstrap-section name="license"]MIT License[/gravstrap-section]

    [/gravstrap-footer-two]
    [/raw]