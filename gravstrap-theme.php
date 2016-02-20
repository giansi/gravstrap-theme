<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class GravstrapTheme extends Theme
{
    
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0],
        ];
    }
    
    public function onThemeInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }
    
    public function onTwigSiteVariables()
    {      
        $accordion = array(
            'id' => 'accordion1',
            'name' => 'accordion1',            
            'items' => array(
                array(
                    'id' => 'accordion_item1',
                    'header_id' => 'accordion_item1',
                    'title' => 'An awesome title',
                    'content' => 'Anim pariatur cliche reprehenderit enim eiusmod high life accusamus terry richardson ad squid.',
                ),
                array(
                    'id' => 'accordion_item2',
                    'header_id' => 'accordion_item2',
                    'title' => 'Another awesome title',
                    'content' => '3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.',
                ),
            ),
        );
        $this->grav['twig']->twig_vars['accordion'] = $accordion;
        
        $alert = array(
            'name' => 'alert1',  
            'type' => 'warning',            
            'attributes' => 'class:my-class,rel:my-rel',
            'content' => 'Anim pariatur cliche reprehenderit enim eiusmod high life accusamus terry richardson ad squid.',
        );
        $this->grav['twig']->twig_vars['alert'] = $alert;
        
        $carousel = array(
            'id' => 'carousel1',
            'name' => 'carousel1',
            'previous_label' => 'Prev',
            'next_label' => 'Next',            
            'items' => array(
                array(
                    'image' => 'image1.jpg',
                    'caption' => 'First image caption',
                ),
                array(
                    'image' => 'image2.jpg',
                    'caption' => 'Second image caption',
                ),
                array(
                    'image' => 'image3.jpg',
                    'caption' => 'Third image caption',
                ),
            ),
        );
        $this->grav['twig']->twig_vars['carousel'] = $carousel;
        
        $jumbotron = array(
            'name' => 'jumbotron1',
            'image' => 'image1.jpg',
            'fullwidth' => true,            
            'attributes' => 'class:my-class,rel:my-rel',
            'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.',
        );
        $this->grav['twig']->twig_vars['jumbotron'] = $jumbotron;
        
        $listGroup = array(
            'name' => 'listgroup1',           
            'items' => array(
                array(
                    'badge' => '12',
                    'active' => true,        
                    'attributes' => 'class:my-class,rel:my-rel',
                    'content' => 'Cras mattis consectetur purus sit amet fermentum.',
                ),
                array(
                    'badge' => '15',
                    'content' => 'Cras mattis consectetur purus sit amet fermentum.',
                ),
                array(
                    'disabled' => true,
                    'content' => 'Cras mattis consectetur purus sit amet fermentum.',
                ),
                array(
                    'badge' => '12',
                    'type' => 'success',
                    'content' => 'Cras mattis consectetur purus sit amet fermentum.',
                ),
            ),
        );
        $this->grav['twig']->twig_vars['list_group'] = $listGroup;
        
        $pageHeader = array(
            'name' => 'pageheader1',
            'title' => 'Title',
            'subtitle' => 'Subtitle',            
            'attributes' => 'class:my-class,rel:my-rel',
        );
        $this->grav['twig']->twig_vars['page_header'] = $pageHeader;
        
        $panel = array(
            'name' => 'panel1',
            'heading_title' => 'Title',
            //'footer_title' => Footer title,            
            'type' => 'danger',
            'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.',
        );
        $this->grav['twig']->twig_vars['panel'] = $panel;
        
        $progressbar = array(
            'name' => 'progressbar1',
            'label' => 'PHP',
            'type' => 'success',
            //'striped' => true,
            //'animated' => true,
            'value' => 80,
            'min' => 0,
            'max' => 100,
            'attributes' => 'class:my-class,rel:my-rel',
        );
        $this->grav['twig']->twig_vars['progressbar'] = $progressbar;
        
        $tab = array(
            'name' => 'tab1',           
            'items' => array(
                array(
                    'name' => 'tab_item1',
                    'attributes' => 'class:my-class,rel:my-rel',
                    'content' => 'Cras mattis consectetur purus sit amet fermentum.',
                ),
                array(
                    'name' => 'tab_item2',
                    'content' => 'Cras mattis consectetur purus sit amet fermentum.',
                ),
            ),
        );
        $this->grav['twig']->twig_vars['tab'] = $tab;
                
        $thumbnail = array(
            'name' => 'thumbnail1',           
            'items' => array(
                array(
                    'image' => 'image1.jpg',
                    'url' => 'http://diblas.net',
                    //'content' => 'Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.',
                ),
                array(
                    'image' => 'image2.jpg',
                    'url' => 'http://diblas.net',
                    //'content' => 'Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.',
                ),
                array(
                    'image' => 'image3.jpg',
                    'url' => 'http://diblas.net',
                    //'content' => 'Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.',
                ),
            ),
        );
        $this->grav['twig']->twig_vars['thumbnail'] = $thumbnail;
        
        $well = array(
            'name' => 'pageheader1',
            'size' => 'large',            
            'attributes' => 'class:my-class,rel:my-rel',
            'content' => 'Cras mattis consectetur purus sit amet fermentum.',
        );
        $this->grav['twig']->twig_vars['well'] = $well;
    }
}