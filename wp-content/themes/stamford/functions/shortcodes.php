<?php
/**
* Class and Function List:
* Function list:
* - globalname()
* - globalphone()
* - globalmobile()
* - globalfax()
* - globalemail()
* - globaladdress()
* - globalhours()
* - globalvat()
* - globalcompanyno()
* - globaltwitter()
* - globalfacebook()
* - globalgoogleplus()
* - globallinkedin()
* Classes list:
*/
function globalname() 
{
    ob_start();
    if (get_field('global_name', 'options')) 
    {
        $string = the_field('global_name', 'options');
        $string = ob_get_clean();
        return '<span class="global-name">' . $string . '</span>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
name
</a></span>';
        }
    }
}
add_shortcode('name', 'globalname');

function globalphone() 
{
    ob_start();
    if (get_field('global_phone', 'options')) 
    {
        $string = the_field('global_phone', 'options');
        $string = ob_get_clean();
        return '<span class="global-phone">' . $string . '</span>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
phone
</a></span>';
        }
    }
}
add_shortcode('phone', 'globalphone');

function globalmobile() 
{
    ob_start();
    if (get_field('global_mobile', 'options')) 
    {
        $string = the_field('global_mobile', 'options');
        $string = ob_get_clean();
        return '<span class="global-mobile">' . $string . '</span>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
mobile
</a></span>';
        }
    }
}
add_shortcode('mobile', 'globalmobile');

function globalfax() 
{
    ob_start();
    if (get_field('global_fax', 'options')) 
    {
        $string = the_field('global_fax', 'options');
        $string = ob_get_clean();
        return '<span class="global-fax">' . $string . '</span>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
fax
</a></span>';
        }
    }
}
add_shortcode('fax', 'globalfax');

function globalemail() 
{
    ob_start();
    if (get_field('global_email', 'options')) 
    {
        $string = antispambot(the_field('global_email', 'options'));
        $string = ob_get_clean();
        return '<a class="global-email" href="mailto:' . $string . '">' . $string . '</a>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
email
</a></span>';
        }
    }
}
add_shortcode('email', 'globalemail');

function globaladdress() 
{
    ob_start();
    if (get_field('global_address', 'options')) 
    {
        $string = the_field('global_address', 'options');
        $string = ob_get_clean();
        return '<span class="global-address">' . $string . '</span>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
address
</a></span>';
        }
    }
}
add_shortcode('address', 'globaladdress');

function globalhours() 
{
    ob_start();
    if (get_field('global_hours', 'options')) 
    {
        $string = the_field('global_hours', 'options');
        $string = ob_get_clean();
        return '<span class="global-hours">' . $string . '</span>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
hours
</a></span>';
        }
    }
}
add_shortcode('hours', 'globalhours');

function globalvat() 
{
    ob_start();
    if (get_field('global_vat_number', 'options')) 
    {
        $string = the_field('global_vat_number', 'options');
        $string = ob_get_clean();
        return '<span class="global-vat">' . $string . '</span>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
vat number
</a></span>';
        }
    }
}
add_shortcode('vat_no', 'globalvat');

function globalcompanyno() 
{
    ob_start();
    if (get_field('global_company_number', 'options')) 
    {
        $string = the_field('global_company_number', 'options');
        $string = ob_get_clean();
        return '<span class="global-company-no">' . $string . '</span>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
company number
</a></span>';
        }
    }
}
add_shortcode('company_no', 'globalcompanyno');

function globaltwitter() 
{
    ob_start();
    if (get_field('global_twitter', 'options')) 
    {
        $string = the_field('global_twitter', 'options');
        $string = ob_get_clean();
        return '<a class="global-twitter" target="_blank" rel="noopener" title="Twitter" href="' . $string . '">Twitter</a>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
twitter
</a></span>';
        }
    }
}
add_shortcode('twitter', 'globaltwitter');

function globalfacebook() 
{
    ob_start();
    if (get_field('global_facebook', 'options')) 
    {
        $string = the_field('global_facebook', 'options');
        $string = ob_get_clean();
        return '<a class="global-facebook" target="_blank" rel="noopener" title="Facebook" href="' . $string . '">Facebook</a>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
facebook
</a></span>';
        }
    }
}
add_shortcode('facebook', 'globalfacebook');

function globalgoogleplus() 
{
    ob_start();
    if (get_field('global_googleplus', 'options')) 
    {
        $string = the_field('global_googleplus', 'options');
        $string = ob_get_clean();
        return '<a class="global-googleplus" target="_blank" rel="noopener" title="Google+" href="' . $string . '">Google+</a>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
google+
</a></span>';
        }
    }
}
add_shortcode('google+', 'globalgoogleplus');

function globallinkedin() 
{
    ob_start();
    if (get_field('global_linkedin', 'options')) 
    {
        $string = the_field('global_linkedin', 'options');
        $string = ob_get_clean();
        return '<a class="global-linkedin" target="_blank" rel="noopener" title="LinkedIn" href="' . $string . '">LinkedIn</a>';
    } else
    {
        if (current_user_can('edit_posts')) 
        {
            return '<span class="bg-danger">
<a href="http://local.vanilla.co.uk/wp-admin/admin.php?page=acf-options-site-details">
<i class="fa fa-pencil-square-o"></i>
linkedin
</a></span>';
        }
    }
}
add_shortcode('linkedin', 'globallinkedin');
