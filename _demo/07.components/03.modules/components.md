---
title: Modules
metadata:
  description: Gravstrap plugin implements several modules you can use as shortcodes to simplify the web site building.
slug: modules-shortcodes-for-grav-cms

highlight:
    theme: ir-black
---

[g-jumbotron name="jumbotron1" fullwidth="true" image="bg_modules.jpg" render=false]
# Modules shortcodes

Gravstrap plugin implements several modules you can use as shortcodes to simplify the web site building: watch them in action down in this page.

[/g-jumbotron]



# Modules components for Grav CMS
A comprehensive list of all the modules you can use for free as shortcodes in your website.


## Clients module

[g-clients name=clients attributes="class:clients module"]

## Show out the clients who trust your business
Use the `Clients module` to show your customers, the clients who already trust your business

___

[g-clients-item image="apple.svg" attributes="class:col-md-3"][/g-clients-item]
[g-clients-item image="canon.svg" attributes="class:col-md-3"][/g-clients-item]
[g-clients-item image="forbes.svg" attributes="class:col-md-3"][/g-clients-item]
[g-clients-item image="hp.svg" attributes="class:col-md-3"][/g-clients-item]
[g-clients-item image="intel.svg" attributes="class:col-md-3"][/g-clients-item]
[g-clients-item image="samsung.svg" attributes="class:col-md-3"][/g-clients-item]
[g-clients-item image="siemens.svg" attributes="class:col-md-3"][/g-clients-item]
[g-clients-item image="vaio.svg" attributes="class:col-md-3"][/g-clients-item]

[/g-clients]

#### Code definition

    [raw]
    [g-clients name=clients attributes="class:clients module"]

    ## Show out the clients who trust your business
    Use the `Clients module` to show your customers, the clients who already trust your business

    ___

    [g-clients-item image="apple.svg" attributes="class:col-md-3"][/g-clients-item]
    [g-clients-item image="canon.svg" attributes="class:col-md-3"][/g-clients-item]
    [g-clients-item image="forbes.svg" attributes="class:col-md-3"][/g-clients-item]
    [g-clients-item image="hp.svg" attributes="class:col-md-3"][/g-clients-item]
    [g-clients-item image="intel.svg" attributes="class:col-md-3"][/g-clients-item]
    [g-clients-item image="samsung.svg" attributes="class:col-md-3"][/g-clients-item]
    [g-clients-item image="siemens.svg" attributes="class:col-md-3"][/g-clients-item]
    [g-clients-item image="vaio.svg" attributes="class:col-md-3"][/g-clients-item]

    [/g-clients]
    [/raw]

___

## Contacts map module

[g-contacts-map name=_contact_map attributes="class:where-we-are module" info_attributes="class:col-md-4" map_attributes="class:col-md-8"]

## Show your customers your position and how they can contact you
Use the `Contact map` module to tell your customers position and how they can get in touch with you.

___

[g-section name="map"]
[g-map id=contactmap zoom=12 center="41.90278,12.49637"]
[g-map-marker location="41.90278, 12.49637" title="Gravstrap theme"]
**Meet Us**
We are there!
[/g-map-marker]
[/g-map]
[/g-section]

[g-section name="info"]
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
[/g-section]
[/g-contacts-map]

#### Code definition

    [raw]
    [g-contacts-map name=_contact_map attributes="class:where-we-are module" info_attributes="class:col-md-4" map_attributes="class:col-md-8"]

    ## Show your customers your position and how they can contact you
    Use the `Contact map` module to tell your customers position and how they can get in touch with you.

    ___

    [g-section name="map"]
    [g-map id=contactmap zoom=12 center="41.90278,12.49637"]
    [g-map-marker location="41.90278, 12.49637" title="Gravstrap theme"]
    **Meet Us**
    We are there!
    [/g-map-marker]
    [/g-map]
    [/g-section]

    [g-section name="info"]
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
    [/g-section]
    [/g-contacts-map]
    [/raw]

___

## Contacts module

[g-contacts name=contacts attributes="class:module contacts" info_attributes="class:col-md-4" form_attributes="class:col-md-8"]

## Let your customers contact you
Use the Contact module to let your customers contact you

___

[g-section name="form"]
##### Get in touch
Need some information? Ask us a question filling the form below

[g-simple-form token="xxxxx" redirect_to="/thank-you-for-my-page" render=true][/g-simple-form]
[/g-section]

[g-section name="info"]
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
[/g-section]
[/g-contacts]


#### Code definition

    [raw]
    [g-contacts name=contacts attributes="class:module contacts" info_attributes="class:col-md-4" form_attributes="class:col-md-8"]

    ## Let your customers contact you
    Use the Contact module to let your customers contact you

    ___

    [g-section name="form"]
    ##### Get in touch
    Need some information? Ask us a question filling the form below

    [g-simple-form token="xxxxx" redirect_to="/thank-you-for-my-page" render=true][/g-simple-form]
    [/g-section]

    [g-section name="info"]
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
    [/g-section]
    [/g-contacts]
    [/raw]

___

## Portfolio module

[g-portfolio name=_portfolio attributes="class:portfolio module"]

## Showcase your work
Use the `Portfolio module` to spread your works to the world

___

[g-thumbnail]
[g-thumbnail-item image="coffee.jpg" url="http://diblas.net"][/g-thumbnail-item]
[g-thumbnail-item image="farmerboy.jpg" url="http://diblas.net"][/g-thumbnail-item]
[g-thumbnail-item image="girl.jpg" url="http://diblas.net"][/g-thumbnail-item]
[g-thumbnail-item image="judah.jpg" url="http://diblas.net"][/g-thumbnail-item]
[g-thumbnail-item image="origami.jpg" url="http://diblas.net"][/g-thumbnail-item]
[g-thumbnail-item image="retrocam.jpg" url="http://diblas.net"][/g-thumbnail-item]
[/g-thumbnail]

[/g-portfolio]

#### Code definition

    [raw]
    [g-portfolio name=_portfolio attributes="class:portfolio module"]

    ## Showcase your work
    Use the `Portfolio module` to spread your works to the world

    ___

    [g-thumbnail]
    [g-thumbnail-item image="coffee.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [g-thumbnail-item image="farmerboy.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [g-thumbnail-item image="girl.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [g-thumbnail-item image="judah.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [g-thumbnail-item image="origami.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [g-thumbnail-item image="retrocam.jpg" url="http://diblas.net"][/g-thumbnail-item]
    [/g-thumbnail]

    [/g-portfolio]
    [/raw]


## Team module

[g-team name=team attributes="class:team module"]

## Introduce your awesome team
Use the `Team module` to introduce your awesome team.

___

[g-team-item image="jane.jpg" attributes="class:col-md-4"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<div class="item-social">
[g-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/g-link]
[g-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/g-link]
[g-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/g-link]
</div>

[/g-team-item]

[g-team-item image="mark.jpg" attributes="class:col-md-4"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<div class="item-social">
[g-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/g-link]
[g-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/g-link]
[g-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/g-link]
</div>

[/g-team-item]

[g-team-item image="julia.jpg" attributes="class:col-md-4"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<div class="item-social">
[g-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/g-link]
[g-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/g-link]
[g-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/g-link]
</div>

[/g-team-item]
[/g-team]

#### Code definition

    [raw]
    [g-team name=team attributes="class:team module"]

    ## Introduce your awesome team
    Use the `Team module` to introduce your awesome team.

    ___

    [g-team-item image="jane.jpg" attributes="class:col-md-4"]
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    <div class="item-social">
    [g-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/g-link]
    [g-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/g-link]
    [g-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/g-link]
    </div>

    [/g-team-item]

    [g-team-item image="mark.jpg" attributes="class:col-md-4"]
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    <div class="item-social">
    [g-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/g-link]
    [g-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/g-link]
    [g-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/g-link]
    </div>

    [/g-team-item]

    [g-team-item image="julia.jpg" attributes="class:col-md-4"]
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    <div class="item-social">
    [g-link url="#" icon="twitter" icon_type="fontawesome" stacked=true][/g-link]
    [g-link url="#" icon="facebook" icon_type="fontawesome" stacked=true][/g-link]
    [g-link url="#" icon="linkedin" icon_type="fontawesome" stacked=true][/g-link]
    </div>

    [/g-team-item]
    [/g-team]
    [/raw]

___

## What we do

[g-what-we-do name="what_we_do" attributes="class:what-we-do module" column_attributes="class:col-md-12"]

## Explain your business
Use the `What we do module` to explain your customers the services you offer.
___

[g-what-we-do-item attributes="class:col-md-4"]

<div class="item-icon">
[g-icon icon="bullhorn fa-5x" icon_type="fontawesome"][/g-icon]
</div>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[/g-what-we-do-item]

[g-what-we-do-item attributes="class:col-md-4"]
<div class="item-icon">
[g-icon icon="bolt fa-5x" icon_type="fontawesome"][/g-icon]
</div>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[/g-what-we-do-item]

[g-what-we-do-item attributes="class:col-md-4"]

<div class="item-icon">
[g-icon icon="heart fa-5x" icon_type="fontawesome"][/g-icon]
</div>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
[/g-what-we-do-item]

[/g-what-we-do]


#### Code definition

    [raw]
    [g-what-we-do name="what_we_do" attributes="class:what-we-do module" column_attributes="class:col-md-12"]

    ## Explain your business
    Use the `What we do module` to explain your customers the services you offer.
    ___

    [g-what-we-do-item attributes="class:col-md-4"]

    <div class="item-icon">
    [g-icon icon="bullhorn fa-5x" icon_type="fontawesome"][/g-icon]
    </div>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

    [/g-what-we-do-item]

    [g-what-we-do-item attributes="class:col-md-4"]
    <div class="item-icon">
    [g-icon icon="bolt fa-5x" icon_type="fontawesome"][/g-icon]
    </div>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

    [/g-what-we-do-item]

    [g-what-we-do-item attributes="class:col-md-4"]

    <div class="item-icon">
    [g-icon icon="heart fa-5x" icon_type="fontawesome"][/g-icon]
    </div>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    [/g-what-we-do-item]

    [/g-what-we-do]
    [/raw]


>>> Please note that icons must be surrounded by a small html code
___

## Where we are module

[g-where-we-are name=where-we-are attributes="class:module where-we-are"]

## Show your customers where you are
Use the `Where we are` module to tell your customers where you are

___

[g-map id=map zoom=12 center="41.90278,12.49637"]
[g-map-marker location="41.90278, 12.49637" title="Gravstrap theme"]
**Meet Us**
We are there!
[/g-map-marker]
[/g-map]

[/g-where-we-are]

#### Code definition

    [raw]
    [g-where-we-are name=where-we-are attributes="class:module where-we-are"]

    ## Show your customers where you are
    Use the `Where we are` module to tell your customers where you are

    ___

    [g-map id=map zoom=12 center="41.90278,12.49637"]
    [g-map-marker location="41.90278, 12.49637" title="Gravstrap theme"]
    **Meet Us**
    We are there!
    [/g-map-marker]
    [/g-map]

    [/g-where-we-are]
    [/raw]

## Footer One module

[g-footer-one]
[g-section name="credits"]

This website is made with [Grav CMS](http://getgrav.org/) and it is powerd by [Gravstrap Theme](http://diblas.net/themes/gravstrap-theme-to-start-grav-cms-site-with-bootstrap-support/) and [Gravstrap Plugin](http://diblas.net/plugins/use-bootstrap-elements-in-the-grav-cms-way/)

[/g-section]

[g-section name="copyright"]Joe Bloggs[/g-section]

[/g-footer-one]

#### Code definition

    [raw][g-footer-one]
    [g-section name="credits"]

    This website is made with [Grav CMS](http://getgrav.org/) and it is powerd by [Gravstrap Theme](http://diblas.net/themes/gravstrap-theme-to-start-grav-cms-site-with-bootstrap-support/) and [Gravstrap Plugin](http://diblas.net/plugins/use-bootstrap-elements-in-the-grav-cms-way/)

    [/g-section]

    [g-section name="copyright"]Joe Bloggs[/g-section]

    [/g-footer-one]
    [/raw]



## Footer Two module

[g-footer-two]
[g-section name="credits"]

This website is made with [Grav CMS](http://getgrav.org/) and it is powerd by [Gravstrap Theme](http://diblas.net/themes/gravstrap-theme-to-start-grav-cms-site-with-bootstrap-support/) and [Gravstrap Plugin](http://diblas.net/plugins/use-bootstrap-elements-in-the-grav-cms-way/)

[/g-section]

[g-section name="copyright"]Joe Bloggs[/g-section]
    [g-section name="license"]MIT License[/g-section]

[/g-footer-two]

#### Code definition

    [raw][g-footer-two]
    [g-section name="credits"]

    This website is made with [Grav CMS](http://getgrav.org/) and it is powerd by [Gravstrap Theme](http://diblas.net/themes/gravstrap-theme-to-start-grav-cms-site-with-bootstrap-support/) and [Gravstrap Plugin](http://diblas.net/plugins/use-bootstrap-elements-in-the-grav-cms-way/)

    [/g-section]

    [g-section name="copyright"]Joe Bloggs[/g-section]
    [g-section name="license"]MIT License[/g-section]

    [/g-footer-two]
    [/raw]
