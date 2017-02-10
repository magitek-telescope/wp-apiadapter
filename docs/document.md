# WP APIAdapter

WP APIAdapter is Generic Web API request plugin.  
This plugin contributes to the realization of your desired Web API and WordPress.

\* This plugin will be for engineers who have knowledge of WordPress and other development.

## Installation

for WP CLI...

```
$ wp plugin install https://github.com/potato4d/wp-apiadapter/archive/master.zip --force
$ wp plugin activate "API Adapter"
```

or official plugin directory(coming soon...)

## Example

![Image](http://storage.potato4d.me/wp/apiadapter/docs/ss001.png)

Slack Integration(Will posted new article).

## Usage

First, You access "API Adapter" page in WordPress admin menu.
Then, there will be an empty setting screen there.

Click "Add more hook" button.
Then, API Adapter will show detail hook settings.

For the name, URL, header, body, enter the values as their meaning.
For the target, select the hook on WordPress that you want to actually operate.
For example, if you are posting the article, select "publish_post".

For details, please check the WordPress official document(Codex).

https://codex.wordpress.org/Plugin_API/Action_Reference.

If you enter the save button, This plugin will keep moving hooks from that moment.

## Using Custom Template Engine

This plugin has original custom template engine.
It is for dynamically acquiring POST title, body text, category name, etc.

The basic usage is to use a method such as `{{<name>.<property>}}` to set the target name and the value to be acquired as one set.

For example, You will get the post title, That's it.

```
The post title is {{post.post_title}}!!!
```

All the names of these values are the same as those of WordPress's get_post and get_category.

## Development Extend Plugin

Coming soon...
