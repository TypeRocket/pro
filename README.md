# TypeRocket Pro

TypeRocket Pro is a highly integrated WordPress framework designed for the modern developer. TypeRocket Pro brings into one place the advanced features of ACF, Laravel, Custom Post Type UI, and more. 

Enjoy a fluent syntax, refined UI, and powerfully fast APIs... [TypeRocket Pro](http://typerocket.com).

## Modern Features

Build applications in less time with less maintenance.

- Advanced custom post types, taxonomies, and admin pages.
- Custom meta boxes, forms, fieldsets, repeater fields and 20+ other input fields.
- Conditional fields and contexts.
- Integrate custom fields with external APIs.
- MVC, custom routing, and middleware.
- DI and Service Container.
- Galaxy CLI.
- Integrated WYSIWYG Redactor editor.
- Composer based extension publishing.
- Fully integrated WordPress ORM with advanced features like eager loading and object caching.
- Database migrations.
- WordPress plugins repository bypass API for custom automatic updates for your themes and plugins.
- Gutenberg support.
- Configurable extensions for theme options, SEO, Custom Post Type UI, lazy image resizing, removal of comments, and more.
- Flexible templating for Twig or Laravel Blade integrations.
- Advanced policy, capability, and role APIs.
- The list goes on...

### Advanced Custom Post Types

Fully customize your custom post types with less code and no need for WordPress action and filter hooks.   

```php
tr_post_type('Person')
    ->setIcon('users')
    ->forceDisableGutenberg()
    ->setTitlePlaceholder( 'Enter full name here' )
    ->setArchivePostsPerPage(-1)
    ->setTitleForm( function() {
        $form = tr_form();
        echo $form->image('Photo');
        echo $form->text('Company');
        echo $form->editor('About Person');
    })
    ->addColumn('company');
```

### Repeater Fields

Add repeaters to your WordPress admin or front-end.  

```php
$form->repeater('Speakers')->setFields([
    $form->image('Photo'),
    $form->row(
        $form->text('Given Name'),
        $form->text('Last Name')
    )
]);
```

### Conditional Fields

Show fields or contexts only **when** a field's conditions are true.  

```php
echo $form->image('Photo');
echo $form->text('Alt Text')->when('photo');

echo $form->Toggle('Has Name');
echo $form->feildset('Full Name', 'Your identity information.',
    $form->text('Given Name'),
    $form->text('Last Name')
)->when('has_name');
```

### WordPress Integrated Advanced ORM

Craft your models and dramatically improve your site's performance using eager loading and integrated with the WordPress object cache.

```php
(new Post)->with('meta')->published()->whereMeta('featured', '=', '1')->get();
```

Define relationships between models using familiar Laravel ORM eloquence.

```php
class Post extends WPPost
{
    // ...

    public function categories()
    {
        return $this->belongsToTaxonomy(Category::class, 'category');
    }

    public function tags()
    {
        return $this->belongsToTaxonomy(Tag::class, 'post_tag');
    }

}
```

### MVC

Stop hacking the WordPress template and rewrite system. Create your application using MVC with custom routing.

```php
tr_route()->put()->match('/profile/([^\/]+)')->do('update@Member');
tr_route()->get()->match('/profile/([^\/]+)')->do('profile@Member');
```

Use authentication policies with your controllers and models, use views, flash notification messages to the admin, get classes from the service container, and more.

```php
class MemberController extends Controller
{
    public function profile( $id ) {
        return tr_view('profile.show', compact('id'));
    }

    public function update( $id, Member $member, AuthUser $user, Request $request ) {
        
        $member = $member->findOrDie($id);

        if(!$member->can('update', $user)) {
            tr_abort(401);
        }

        $member->save($request->getFields());

        tr_response()->flashNext('Profile updated!');

        return tr_redirect()->back();
    }
}
```

Or, quickly create a JSON API by merely returning a model or collection as your response.

```php
tr_route()->get()->match('posts')->do(function() {
    return (new Post)->with('meta')->published()->get();
});
```

### Templating

Dry up your templates and use views. Use views in admin and front-end.

```php
// your-theme/index.php
$button_class = tr_post_field('button_class');

$classes = class_names('button',  [
    'button-primary' => $button_class == 'primary',
    'button-error' => $button_class == 'error',
]); 

echo tr_view('index', compact('classes'));
```

```php
// Admin page
tr_page('tools', 'exporter', 'Exporter')->setView(tr_view('tools.exporter'));
```

### More Features

Find more features at [http://typerocket.com/pro](http://typerocket.com/pro).

## License

TypeRocket Pro is open-sourced software licenced under the [GNU General Public License 3.0](https://www.gnu.org/licenses/gpl-3.0.en.html).