Job out of the [Udemy UX course](https://www.udemy.com/ux-web-design-master-course-strategy-design-development/)
# Wordpress on Heroku [![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/2oppin/udemy_ux_blog)


![WP](https://s.w.org/style/images/wporg-logo.svg?3)

This is the sample of plain and straight option for installing Wordpress on Heroku platform.

It use 2 buildpacks:
1. heroku/php 
2. [2oppin/heroku-wp-buildpack](https://github.com/2oppin/heroku-wp-buildpack)

<b>config/public</b> folder of this project contains all that will overwrite deafult WP installation.

So you can put there your custom theme, custom plugins sets.

After your app will be launched all state will be stored in the ClearDB addon (MySQL), so after you switch to your theme, simple git commit / git push will do the magic.

username:simplepa22word